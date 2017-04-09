<?php
namespace Course\Widget;
use Think\Controller;
class CommentWidget extends Controller{
    public function item($data){
        layout(false);
        $this->assign('data',$data);
        return $this->fetch("Widget::item");
    }
    
}