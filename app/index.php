<?php
define("SPBPETERCITYTRIP_78", true);
defined("SPBPETERCITYTRIP_78") or die("Доступ закрыт!");
include_once 'settings.php';
include_once("Mysql/Mysql.php");
include_once("Mysql/Exception.php");
include_once("Mysql/Statement.php");
use \Mysql\Mysql as Mysql;
use \Mysql\Exception as Exception;
use \Mysql\Statement as Statement;

session_start();

// Init db
$db = Mysql::create(HOST, USER, PASS)
	->setDatabaseName(DB)
	->setCharset('utf8');

// Парсинг строки запроса
if (!$_SESSION['LANGUAGE_INT']) {
	$_SESSION['LANG_LINK'] = '';
	$_SESSION['LANGUAGE_INT'] = 'en';
}
if ($_SERVER['REQUEST_URI'] == '/') {
	$Page   = 'index';
	$Module = 'index';
} else {
	$URL_Path  = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	$URL_Parts = explode('/',trim($URL_Path,'/'));
	$Page      = array_shift($URL_Parts);
	if (in_array($Page, ['sp', 'ru'])) {
		$_SESSION['LANGUAGE_INT'] = $Page;
		$_SESSION['LANG_LINK'] = '/'.$Page;
		$Page      = array_shift($URL_Parts);
		$Module    = array_shift($URL_Parts);
		if (empty($Page)) {
			$Page   = 'index';
			$Module = 'index'; 
		}else if (!empty($Module)) {
			$Param = array();
			for ($i = 0; $i < count($URL_Parts); $i++) {
				$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
			}
		};
	}else{
		if ($Page == 'en') {
			exit(header('Location: /'.implode('/', $URL_Parts)));
		}
		$_SESSION['LANGUAGE_INT'] = 'en';
		$_SESSION['LANG_LINK'] = '';
		$Module    = array_shift($URL_Parts);
		if (!empty($Module)) {
			$Param = array();
			for ($i = 0; $i < count($URL_Parts); $i++) {
				$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
			}
		};
	};
};

// Обработка запроса страницы
if      ($Page == 'index')    						include 'pages/index.php';     // Главная
else if ($Page == 'not-found') 						include 'pages/not-found.php';
else {
	exit(header('Location: /not-found'));
}

// ФУНКЦИИ
// Отправка сообщения
function MessageSend($p1, $p2, $p3 = ''){
	if ($p1 == 1)      {$p1 = 'Ошибка'; $msg_class = "error-msg";}
	else if ($p1 == 2) {$p1 = 'Подсказка'; $msg_class = "hint-msg";}
	else if ($p1 == 3) {$p1 = 'Информация'; $msg_class = "info-msg";}
	$_SESSION['message']   = '<div class="MessageBlock '.$msg_class.'"><p><b>'.$p1.'</b>: '.$p2.'</p></div>';
	if ($p3) $_SERVER['HTTP_REFERER'] = $p3;
	exit(header('Location: '.$_SERVER['HTTP_REFERER']));
};

// Получение сообщения
function MessageShow(){
	if ($_SESSION['message']) $Message = $_SESSION['message'];
	echo $Message;
	$_SESSION['message'] = array();
};

// Уровень доступа
function UAccess($p1) {
	if ($_SESSION['USER_STATUS'] < $p1) MessageSend(1, 'У вас нет прав доступа для просмотра данной страницы сайта');
}

// Рандомная строка
function RandomString($p1) {
	$Char = '0123456789abcdefghijklmnopqrstuvwxyz';
	for ($i = 0; $i < $p1; $i ++) $String .=$Char[rand(0, strlen($Char)-1)];
	return $String;
}

// Скрытие символов email
function HideEmail($p1) {
	$Explode = explode ('@', $p1);
	return $Explode[0];
}

// Антиинъекция
function FormChars ($p1){
	return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES, "utf-8"), false);
}

// Пагинатор
function PageSelector($p1, $p2, $p3, $p4 = 12) {
	/*
	$p1 - URL (Например: /news/page/);
	$p2 - Текущая страница (из Param['page']);
	$p3 - Количество новостей из запроса;
	$p4 - Количество новостей на странице;
	*/
	$Page = ceil($p3/$p4); //число страниц
	if ($Page > 1) {
		//Нужен ли пагинатор?
		echo '<div class="paginator text-center">';
		for ($i = ($p2 - 3); $i < ($Page + 1); $i ++) {
			if ($i > 0 and $i <= ($p2 + 3)){
				if ($p2 == $i) $Switch = 'SwitchItemCur';
				else 					 $Switch = 'SwitchItem';
				echo '<a class="'.$Switch.'" href="'.$p1.$i.'">'.$i.'</a>';
			} 
		};
		echo '</div>';
	}
}

// Меню
function HeaderTop($p1 = 1, $p2 = 1){
	$query = $db -> query('SELECT `menu_key`, `munu_text` FROM `menu` WHERE `menu_lang` = "?s"', $_SESSION['LANGUAGE_INT']);
	return 'Menu here';
}

function translit($s) {
	$s = (string) $s; // преобразуем в строковое значение
	$s = strip_tags($s); // убираем HTML-теги
	$s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
	$s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
	$s = trim($s); // убираем пробелы в начале и конце строки
	$s = function_exists('mb_strtolower') ? mb_strtolower($s, 'UTF-8') : strtolower($s, 'UTF-8'); // переводим строку в нижний регистр (иногда надо задать локаль)
	$s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
	$s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
	$s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
	return $s; // возвращаем результат
}

?>