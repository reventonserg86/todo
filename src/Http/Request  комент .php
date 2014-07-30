<?php
/**
* File Request.php
*
* @author Kovardin Artem <horechek@gmail.com>
* @link http://tvorzasp.com/
* @copyright tvorzasp
* @license wtfpl
*/
namespace Phpcourses\Http;
/**
* Class Request
*
* description
*
* @author Kovardin Artem <horechek@gmail.com>
* @version 1.0
* @package \Phpcourses\Http 
*/
class Request //   обьявление класса
{
    public $defaultRoute;   //  обьявление открытого члена класса

    public function __construct()    // происходит инициализация обьектов
    {
        if (!isset($_GET["r"])) {           // если не установлен метод $_GET
            $this->defaultRoute = "list";   //то обращаемся к элементу класса котому присвоена переменная list
        }                                   //в index.php к комент1
    }

    public function getRoute()              // публичный параметр
    {
        if (!isset($_GET["r"])) {           //если не установлен метод $_GET
            return $this->defaultRoute;     //то обращаемся к элементу класса 
        return $_GET["r"];                  //в index.php к комент2
    }

    public function getParam($name, $default="")    //
    {
        if (isset($_GET[$name])) {           //если переменной $name присвоно значение 
            return $_GET[$name];             // то возврващается знасение этой переменной
        }
        return $default;                     //в противном случае возвращается default
    }

    // add method getPost($name, $default)
}