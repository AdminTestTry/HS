<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cate = D('Cate')->select();
        $this->display();
    }
}