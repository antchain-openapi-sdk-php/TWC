<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class QueryRefinanceOrderRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 资产包id
    /**
     * @var string
     */
    public $packageId;

    // 订单id
    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'packageId'         => 'package_id',
        'orderId'           => 'order_id',
    ];

    public function validate()
    {
        Model::validateRequired('packageId', $this->packageId, true);
        Model::validateRequired('orderId', $this->orderId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->packageId) {
            $res['package_id'] = $this->packageId;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRefinanceOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['package_id'])) {
            $model->packageId = $map['package_id'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}