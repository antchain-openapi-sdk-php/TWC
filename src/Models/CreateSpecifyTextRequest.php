<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class CreateSpecifyTextRequest extends Model
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

    // 存证地点(如手机硬件ID，Wi-Fi地址，GPS位置，IP地址)
    /**
     * @var Location
     */
    public $location;

    // 存证内容
    /**
     * @var string
     */
    public $notaryContent;

    // 描述本条存证在存证事务中的阶段，用户可自行维护
    /**
     * @var string
     */
    public $phase;

    // 扩展属性
    /**
     * @var string
     */
    public $properties;

    // 存证事务id
    /**
     * @var string
     */
    public $transactionId;

    // 是否使用可信时间戳，默认为false
    /**
     * @var bool
     */
    public $tsr;

    // 文本存证类型，支持源文本/文本哈希
    /**
     * @var string
     */
    public $textNotaryType;

    // 哈希算法，目前仅支持 SHA256
    /**
     * @var string
     */
    public $hashAlgorithm;

    // 链账户名称
    /**
     * @var string
     */
    public $chainAccount;

    // 指定上链的节点ip，固定只能传一个，不传则按照链账号绑定ip随机上链
    /**
     * @var string
     */
    public $nodeIp;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'location'          => 'location',
        'notaryContent'     => 'notary_content',
        'phase'             => 'phase',
        'properties'        => 'properties',
        'transactionId'     => 'transaction_id',
        'tsr'               => 'tsr',
        'textNotaryType'    => 'text_notary_type',
        'hashAlgorithm'     => 'hash_algorithm',
        'chainAccount'      => 'chain_account',
        'nodeIp'            => 'node_ip',
    ];

    public function validate()
    {
        Model::validateRequired('notaryContent', $this->notaryContent, true);
        Model::validateRequired('phase', $this->phase, true);
        Model::validateRequired('transactionId', $this->transactionId, true);
        Model::validateRequired('chainAccount', $this->chainAccount, true);
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
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->notaryContent) {
            $res['notary_content'] = $this->notaryContent;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->transactionId) {
            $res['transaction_id'] = $this->transactionId;
        }
        if (null !== $this->tsr) {
            $res['tsr'] = $this->tsr;
        }
        if (null !== $this->textNotaryType) {
            $res['text_notary_type'] = $this->textNotaryType;
        }
        if (null !== $this->hashAlgorithm) {
            $res['hash_algorithm'] = $this->hashAlgorithm;
        }
        if (null !== $this->chainAccount) {
            $res['chain_account'] = $this->chainAccount;
        }
        if (null !== $this->nodeIp) {
            $res['node_ip'] = $this->nodeIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpecifyTextRequest
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
        if (isset($map['location'])) {
            $model->location = Location::fromMap($map['location']);
        }
        if (isset($map['notary_content'])) {
            $model->notaryContent = $map['notary_content'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['transaction_id'])) {
            $model->transactionId = $map['transaction_id'];
        }
        if (isset($map['tsr'])) {
            $model->tsr = $map['tsr'];
        }
        if (isset($map['text_notary_type'])) {
            $model->textNotaryType = $map['text_notary_type'];
        }
        if (isset($map['hash_algorithm'])) {
            $model->hashAlgorithm = $map['hash_algorithm'];
        }
        if (isset($map['chain_account'])) {
            $model->chainAccount = $map['chain_account'];
        }
        if (isset($map['node_ip'])) {
            $model->nodeIp = $map['node_ip'];
        }

        return $model;
    }
}
