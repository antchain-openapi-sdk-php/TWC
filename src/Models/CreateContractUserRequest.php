<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TWC\Models;

use AlibabaCloud\Tea\Model;

class CreateContractUserRequest extends Model
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

    // 用户类型为机构时，填写机构信息
    /**
     * @var ContractOrganizationApplication
     */
    public $organization;

    // 用户类型为个人时，则为个人用户信息；用户类型为机构时，则为机构账号经办人信息
    /**
     * @var ContractAccountApplication
     */
    public $user;

    // 用户类型，个人（PERSON）或机构（ORGANIZATION）
    /**
     * @var string
     */
    public $userType;

    // 代理客户时，实际用户的租户ID
    /**
     * @var string
     */
    public $subTenantId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'organization'      => 'organization',
        'user'              => 'user',
        'userType'          => 'user_type',
        'subTenantId'       => 'sub_tenant_id',
    ];

    public function validate()
    {
        Model::validateRequired('user', $this->user, true);
        Model::validateRequired('userType', $this->userType, true);
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
        if (null !== $this->organization) {
            $res['organization'] = null !== $this->organization ? $this->organization->toMap() : null;
        }
        if (null !== $this->user) {
            $res['user'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }
        if (null !== $this->subTenantId) {
            $res['sub_tenant_id'] = $this->subTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContractUserRequest
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
        if (isset($map['organization'])) {
            $model->organization = ContractOrganizationApplication::fromMap($map['organization']);
        }
        if (isset($map['user'])) {
            $model->user = ContractAccountApplication::fromMap($map['user']);
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }
        if (isset($map['sub_tenant_id'])) {
            $model->subTenantId = $map['sub_tenant_id'];
        }

        return $model;
    }
}
