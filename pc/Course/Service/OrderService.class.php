<?php
namespace Course\Service;
use Think\Model;
class OrderService extends Model{
    /**
     * 获取某个用户的订单
     */
    public function getOrderListByUserIdService($id){
        $order_logic = D("Order","Logic");
        $data = $order_logic->getOrderListByUserIdLogic($id);
        return $data;
    }
}