<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class RegisterLeasePetrecognitionResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 用于追踪业务调用流程
    /**
     * @var string
     */
    public $traceId;

    // 注册结果：_0_注册不成功，_1_注册成功
    /**
     * @var string
     */
    public $isRegisterSuccess;

    // 注册成功宠物档案ID
    /**
     * @var string
     */
    public $petId;
    protected $_name = [
        'reqMsgId'          => 'req_msg_id',
        'resultCode'        => 'result_code',
        'resultMsg'         => 'result_msg',
        'traceId'           => 'trace_id',
        'isRegisterSuccess' => 'is_register_success',
        'petId'             => 'pet_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->traceId) {
            $res['trace_id'] = $this->traceId;
        }
        if (null !== $this->isRegisterSuccess) {
            $res['is_register_success'] = $this->isRegisterSuccess;
        }
        if (null !== $this->petId) {
            $res['pet_id'] = $this->petId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterLeasePetrecognitionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['trace_id'])) {
            $model->traceId = $map['trace_id'];
        }
        if (isset($map['is_register_success'])) {
            $model->isRegisterSuccess = $map['is_register_success'];
        }
        if (isset($map['pet_id'])) {
            $model->petId = $map['pet_id'];
        }

        return $model;
    }
}
