<?php
namespace Course\Model;
use Think\Model;
class BaseModel extends Model{
    protected $extWhere = "display=1 and `delete`=0";
}