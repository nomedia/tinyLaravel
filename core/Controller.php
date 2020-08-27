<?php
/* xiaoyou.chen created on 8/27/20 */

namespace app\core;
class  Controller{
    public  string $layout="main";

    public  function  setLayout($layout){

$this->layout=$layout;

    }

    public function render($view,$params=[]){

        return \app\core\Application::$app->router->renderView($view,$params);
    }
}