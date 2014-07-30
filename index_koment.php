<?php
// include __DIR__ . "/vendor/autoload.php";


include __DIR__ . "/src/Http/Request.php";  //подключение папки

use Phpcourses\Http\Request; // создание псевдонима имени
$request = new Request(); //создание обьекта класса

if ($request->getRoute() == "list") { //комент1// если при обращении переменной метод гет возвращает значение list
    todoList($request);                 //то выполняется функция function todoList($request)
}

if ($request->getRoute() == "delete") {  //комент2//если при обращении переменной метод гет возвращает значение delete
    todoDelete();                        ////то выполняется функция function todoDelete()
}

if ($request->getRoute() == "add") {   //комент3//если при обращении переменной метод гет возвращает значение add
    todoAdd();                         ////то выполняется функция function todoAdd()
}

function todoList($request)   //определение функции 
{
    $pageTitle = "ToDo List";   //переменной прмсваивается значение кoторое запрашивается файлом list.php
    // echo $request->getParam("age");
    // echo "<br/>";
    // echo $request->getParam("name");
    // echo "<br/>";
    // echo $request->getParam("fname", "...");
    
    include __DIR__."/app/views/list.php";  //
}

function todoDelete()  //определение функции
{
    if ( !isset($_GET['id']) ) {   //если не установлен id 
        echo "Id not found";       //вывести Id not found
        return;   
    }
    echo $_GET['id'];     //
    echo "<br />Delete page";  //
}

// http://localhost:12345/?r=add
function todoAdd()    //
{
    // get from $_POST
    $title;
    $data;
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Add</h1>
</body>
</html>

<?php
}

function todoShow()
{

}


function todoResolve()
{

}


// $filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
// if (php_sapi_name() === 'cli-server' && is_file($filename)) {
//     return false;
// }

// $app = require __DIR__.'/src/app.php';
// $app->run();
