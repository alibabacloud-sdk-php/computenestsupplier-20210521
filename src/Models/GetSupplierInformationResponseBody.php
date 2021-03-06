<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetSupplierInformationResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @var string
     */
    public $supplierDesc;

    /**
     * @var string
     */
    public $operationIp;

    /**
     * @var bool
     */
    public $operationMfaPresent;
    protected $_name = [
        'requestId'           => 'RequestId',
        'supplierName'        => 'SupplierName',
        'supplierUrl'         => 'SupplierUrl',
        'supplierDesc'        => 'SupplierDesc',
        'operationIp'         => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }
        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }
        if (null !== $this->operationIp) {
            $res['OperationIp'] = $this->operationIp;
        }
        if (null !== $this->operationMfaPresent) {
            $res['OperationMfaPresent'] = $this->operationMfaPresent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupplierInformationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }
        if (isset($map['OperationIp'])) {
            $model->operationIp = $map['OperationIp'];
        }
        if (isset($map['OperationMfaPresent'])) {
            $model->operationMfaPresent = $map['OperationMfaPresent'];
        }

        return $model;
    }
}
