<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
       $cateid=I("id");
       $article = D("article");//实例化user对象
       $count=$article->where(array("cateid"=>I("id")))->count();//查询满足要求的总记录数
       $Page=new \Think\Page($count,4);
       $show = $Page->show();
       $list = $article->where(array("cateid"=>I("id")))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();

       $this ->assign("page",$show);
       $this ->assign("list",$list);
       $this->display();
       $this->current();
    }

    public function current(){
    	$current=I("id");
    	$this->assign("current",$current);
    }


}