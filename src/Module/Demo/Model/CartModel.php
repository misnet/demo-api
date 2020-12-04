<?php

namespace Kuga\Module\Demo\Model;

use Kuga\Core\Base\AbstractModel;

/**
 * Cart
 *
 * @package CartModel
 * @autogenerated by Phalcon Developer Tools
 * @date 2019-06-28, 06:06:57
 */
class CartModel extends AbstractModel
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     * 产品ID
     * @var integer
     */
    public $productId;

    /**
     * SKU ID
     * @var integer
     */
    public $skuId;

    /**
     * 购买数量
     * @var integer
     */
    public $qty;

    /**
     * 会员ID
     * @var integer
     */
    public $memberId;

    /**
     *
     * @var string
     */
    public $sessionId;

    /**
     * 产品所有者ID
     * @var integer
     */
    public $ownerId;

    /**
     * 创建时间
     * @var integer
     */
    public $createTime;

    /**
     *
     * @var integer
     */
    public $updateTime;

    /**
     * 加入购物车时产品的更新时间
     * @var integer
     */
    public $initUpdateTime;

    /**
     * 加入购物车时产品的销售价
     * @var double
     */
    public $initPrice;
    /**
     * 加入购物车时产品的名称
     * @var string
     */
    public $initTitle;
    /**
     * 产品SKU信息
     * @var
     */
    public $initSkuJson;
    /**
     * 产品SKU图URL
     * @var
     */

    public $initImgUrl;
    /**
     * @var 加入购物车时产品原价
     */
    public $initOriginPrice;


    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 't_cart';
    }
    public function beforeUpdate(){
        $this->updateTime = time();
        return true;
    }
    public function beforeCreate(){
        $this->createTime||$this->createTime = time();
        $this->updateTime||$this->updateTime = $this->createTime;
        return true;
    }
    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'product_id' => 'productId',
            'sku_id' => 'skuId',
            'qty' => 'qty',
            'member_id' => 'memberId',
            'session_id' => 'sessionId',
            'owner_id' => 'ownerId',
            'create_time' => 'createTime',
            'update_time' => 'updateTime',
            'init_update_time' => 'initUpdateTime',
            'init_price' => 'initPrice',
            'init_origin_price' => 'initOriginPrice',
            'init_title' => 'initTitle',
            'init_sku_json' => 'initSkuJson',
            'init_img_url' => 'initImgUrl'
        ];
    }

}
