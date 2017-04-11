<?php
namespace Course\Model;
use Think\Model\ViewModel;
class OrderModel extends ViewModel{
    protected $extWhere = "O.`display`=1 and O.`delete`=0 ";
    protected $sort= "add_time desc";
    const ORDER_TYPE =3;
    public $viewFields = array(
        'Order'=>array('_as'=>'O','id','user_id','type','rel_id','onum','add_time','pay_type',"pay_time","_type"=>"LEFT"),
        'Course' =>array('title','image_id','price','vip_price','lesson',"number",'_on'=>"O.rel_id = Course.id")
    );
    /**
     * 获取某个用户的订单
     */
    public function  getOrderListByUserId($id){
        $where = $this->extWhere;
        $where .=" and O.user_id = ".$id;
        $where .=" and O.type=".self::ORDER_TYPE;
        return $this->where($where)->order($this->sort)->select();
    }
}