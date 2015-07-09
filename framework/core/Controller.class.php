<?php
/*
 * 基础控制器
 *
 * 定义控制器公共方法
 */
class Controller{
    //定义跳转方法
    public function jump($url,$message,$wait=3){
        if($wait == 0){
            header("Location:$url");
        } else {
            include CUR_VIEW_PATH . "message.html";
        }
        //要强制退出
        exit();
    }

    //辅助函数载入方法,如input_helper.php文件
    public function helper($helper){

        require HELPER_PATH . "{$helper}_helper.php";
    }
    //类库载入方法,如Page.class.php
    public function library($lib){
        require LIB_PATH . "{$lib}.class.php";
    }
}
