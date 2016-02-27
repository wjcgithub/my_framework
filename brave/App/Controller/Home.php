<?php
namespace App\Controller;
use Brave\Controller;
use Brave\Factory;

class Home extends Controller{
    function index(){
        $model = Factory::getModel('User');
        $userid = $model->create(array('name'=>'lisi', 'mobile'=>'1234xxx'));

        $this->assign('userid', $userid);
        $this->display();
        return array('userid'=>$userid, 'name'=>'lisi');

    }

    function index2(){
        echo 'index2';
    }
}