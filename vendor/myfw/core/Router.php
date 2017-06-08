<?php	
namespace myfw\core;

/**
* 
*/
class Router
{
	public function start()
	{
		//parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); парсит урл, второй параметр выводит урл до знаков ? или #.
		//urlencode() декодирует урл, например знак %, если в строке запись %45 - вернет 45. Знак + преобразует в пробел.
		$route = urlencode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		
		$routing = [
			"/" 	  => ['controller' => "Main", 'action' => "index"],
			"article" => ['controller' => "Main", 'action' => "article"],
		];
		if(isset($routing[$route])) {
			$controller = 'app\\controllers\\' . $routing[$route]['controller'] . 'Controller'; // "\\" два слеша, т.к. мы вторым обратным слешом экранируем первый.
		} else {
			echo 'Takogo puti net!'
		}
	}

	
}