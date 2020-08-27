<?php
/* xiaoyou.chen created on 8/27/20 */
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller {

    public  function  home(){
        $params=["name"=>33];

        return $this->render("home",$params);

        return "show catonae";
    }

    public  function  contact(){

        return $this->render("contact");

    }

    public   function handleContact(Request $request){

      $body=$request->getBody();
      var_dump($body);
        return "handloig subii  22222data";

    }
}