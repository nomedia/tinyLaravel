<?php
/* xiaoyou.chen created on 8/27/20 */
namespace  app\controllers;
use app\core\Request;

class AuthController extends \app\core\Controller{

    public  function  login(){

        $this->setLayout("auth");

        return $this->render('login');
    }
    public  function register(Request  $request){

        if($request->isPost()){

            return "post";

        }
        $this->setLayout("auth");

        return $this->render("register");
    }

}