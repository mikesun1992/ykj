<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$article = D("article");//实例化user对象
       $count=$article->count();//查询满足要求的总记录数
       $Page=new \Think\Page($count,4);
       $show = $Page->show();
       $list = $article->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();

       $this ->assign("page",$show);
       $this ->assign("list",$list);

       $this->display();
    }
}