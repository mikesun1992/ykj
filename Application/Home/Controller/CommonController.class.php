<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
    	parent::__construct();
    	$this->nav();
    	$this->link();
    	$this->news();


    }

    public function nav(){
    	$cate=D("cate");
    	$cateres=$cate->order("sort desc")->select();
    	$this->assign("cateres",$cateres);

    }

    //友情链接
    public function link(){
    	$link=D("link");
    	$linkres=$link->order("sort desc")->select();
    	$this->assign("linkres",$linkres);
    }
 
    //最新发布
 	public function news(){
 		$artres=D("article")->order("time desc")->limit(3)->select();
 		$this->assign("artres",$artres);

 	}




}