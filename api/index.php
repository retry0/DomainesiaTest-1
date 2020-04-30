<?php 
header('Content-Type: application/json');

include 'config/route.php';
include 'Controller/TodoController.php';


$todo = new TodoController();

Route::add('/',function(){
    echo 'Welcome :-)';
});

Route::add('/todos',function() use ($todo){
    $todo->index();
});

Route::add('/store',function() use ($todo){
    $todo->store();
},'post');


Route::add('/edit/([0-9]*)',function($id) use ($todo) {
    $todo->edit($id);
},'put');

Route::add('/delete/([0-9]*)',function($id) use ($todo){
    $todo->delete($id);
},'delete');


Route::run("/");
