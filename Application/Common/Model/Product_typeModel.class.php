<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class Product_typeModel extends Model {
    private $_db;

    public function __construct() {   //构造函数
        $this->_db = M('product_type');
    }

    /**
     * 功能：获取所有的产品类别
     * @return mixed
     */
    public function get_all_product_type() {     //获取前台菜单 type=0
        return $this->_db->order('create_time desc')->select();
    }
}