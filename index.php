<?php

require_once 'router.php';


route('/',function(){
return "Hello Home page";
});

route('/about',function(){
    return ;
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);

?>