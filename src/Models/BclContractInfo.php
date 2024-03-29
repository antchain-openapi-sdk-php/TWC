<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class BclContractInfo extends Model
{
    // 签署状态
    // 1.合同待签署：SIGNING
    // 2.代扣待签署：PROXY_SIGNING
    // 3.合同拒签：REJECT
    // 4.代扣拒签：PROXY_REJECT
    // 5.合同签署失败：SIGN_FAIL
    // 6.签署完成：FINISH
    /**
     * @example SIGNING
     *
     * @var string
     */
    public $signStatus;

    // 签署完成的合同文件
    // 如果使用合同服务，只有签署完成才可获取
    /**
     * @example
     *
     * @var BclFileInfo[]
     */
    public $signedFiles;

    // 签署链接，使用租赁宝代扣并且发起订单后才可以查询获取
    /**
     * @example https://xxxx
     *
     * @var string
     */
    public $signUrl;

    // 签署场景
    /**
     * @example 签署场景
     *
     * @var string
     */
    public $businessScene;

    // 合同创建失败原因
    /**
     * @example 合同创建失败原因
     *
     * @var string
     */
    public $flowErrMsg;

    // 签署区列表
    /**
     * @example
     *
     * @var BclContractSignFieldInfo[]
     */
    public $signFieldInfos;

    // 签署长链接，使用租赁宝代扣并且发起订单后才可以查询获取
    /**
     * @example http://www.xxx.com
     *
     * @var string
     */
    public $destUrl;

    // 签署模式：
    // 模板签署:TEMPLATE_SIGN,使用同模板流程创建合同信息；
    // 原文签署:ORIGINAL_SIGN，使用原来的流程创建合同信息
    /**
     * @example TEMPLATE_SIGN
     *
     * @var string
     */
    public $signMode;
    protected $_name = [
        'signStatus'     => 'sign_status',
        'signedFiles'    => 'signed_files',
        'signUrl'        => 'sign_url',
        'businessScene'  => 'business_scene',
        'flowErrMsg'     => 'flow_err_msg',
        'signFieldInfos' => 'sign_field_infos',
        'destUrl'        => 'dest_url',
        'signMode'       => 'sign_mode',
    ];

    public function validate()
    {
        Model::validateRequired('signStatus', $this->signStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signStatus) {
            $res['sign_status'] = $this->signStatus;
        }
        if (null !== $this->signedFiles) {
            $res['signed_files'] = [];
            if (null !== $this->signedFiles && \is_array($this->signedFiles)) {
                $n = 0;
                foreach ($this->signedFiles as $item) {
                    $res['signed_files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->signUrl) {
            $res['sign_url'] = $this->signUrl;
        }
        if (null !== $this->businessScene) {
            $res['business_scene'] = $this->businessScene;
        }
        if (null !== $this->flowErrMsg) {
            $res['flow_err_msg'] = $this->flowErrMsg;
        }
        if (null !== $this->signFieldInfos) {
            $res['sign_field_infos'] = [];
            if (null !== $this->signFieldInfos && \is_array($this->signFieldInfos)) {
                $n = 0;
                foreach ($this->signFieldInfos as $item) {
                    $res['sign_field_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->destUrl) {
            $res['dest_url'] = $this->destUrl;
        }
        if (null !== $this->signMode) {
            $res['sign_mode'] = $this->signMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BclContractInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sign_status'])) {
            $model->signStatus = $map['sign_status'];
        }
        if (isset($map['signed_files'])) {
            if (!empty($map['signed_files'])) {
                $model->signedFiles = [];
                $n                  = 0;
                foreach ($map['signed_files'] as $item) {
                    $model->signedFiles[$n++] = null !== $item ? BclFileInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sign_url'])) {
            $model->signUrl = $map['sign_url'];
        }
        if (isset($map['business_scene'])) {
            $model->businessScene = $map['business_scene'];
        }
        if (isset($map['flow_err_msg'])) {
            $model->flowErrMsg = $map['flow_err_msg'];
        }
        if (isset($map['sign_field_infos'])) {
            if (!empty($map['sign_field_infos'])) {
                $model->signFieldInfos = [];
                $n                     = 0;
                foreach ($map['sign_field_infos'] as $item) {
                    $model->signFieldInfos[$n++] = null !== $item ? BclContractSignFieldInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dest_url'])) {
            $model->destUrl = $map['dest_url'];
        }
        if (isset($map['sign_mode'])) {
            $model->signMode = $map['sign_mode'];
        }

        return $model;
    }
}
