<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class AddContractSignfieldRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 集群ID
    /**
     * @var string
     */
    public $productInstanceId;

    // 签署流程ID
    /**
     * @var string
     */
    public $flowId;

    // 签署区列表数据
    /**
     * @var ContractSignFieldApplication[]
     */
    public $signfields;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'flowId'            => 'flow_id',
        'signfields'        => 'signfields',
    ];

    public function validate()
    {
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('signfields', $this->signfields, true);
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
        if (null !== $this->flowId) {
            $res['flow_id'] = $this->flowId;
        }
        if (null !== $this->signfields) {
            $res['signfields'] = [];
            if (null !== $this->signfields && \is_array($this->signfields)) {
                $n = 0;
                foreach ($this->signfields as $item) {
                    $res['signfields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddContractSignfieldRequest
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
        if (isset($map['flow_id'])) {
            $model->flowId = $map['flow_id'];
        }
        if (isset($map['signfields'])) {
            if (!empty($map['signfields'])) {
                $model->signfields = [];
                $n                 = 0;
                foreach ($map['signfields'] as $item) {
                    $model->signfields[$n++] = null !== $item ? ContractSignFieldApplication::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
