<?php 
// include_once "helper/request.php";
include "app/libs/Session.php";
array_map(fn($fn)=>include_once($fn),glob("helper/*.php"));

spl_autoload_register(function($cls){
    $path= "app/libs/$cls.php";
    if(file_exists($path))
        include_once $path;

});
$obj=new Autoload();
?>