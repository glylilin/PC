<?php
namespace Course\Logic;
use Think\Model;
class OrderLogic extends Model{
    /**
     * 获取某个用户的订单
     */
    public function getOrderListByUserIdLogic($id){
      $order_model = D("Order");
      $data = $order_model->getOrderListByUserId($id);
      if($data){
          $attach_logic = D("Attach","Logic");
          foreach ($data as $k=>$v){
              $temp = $attach_logic->getCdmImagesByidLogic($v['image_id']);
              if($temp){
                  $data[$k]['path'] = $temp['path'];
                  $data[$k]['thumbpath'] = $temp['thumbpath'];
              }
        
          }
      }
      return $data;
    }
}