<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponseBody\serviceInstances;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponseBody\serviceInstances\service\serviceInfos;
use AlibabaCloud\Tea\Model;

class service extends Model
{
    /**
     * @description The storage configurations of the service. The format in which the deployment information of a service is stored varies based on the deployment type of the service. In this case, the deployment information is stored in the JSON string format.
     *
     * @var string
     */
    public $deployMetadata;

    /**
     * @description The deployment type of the service. Valid values:
     *
     *   ros: The service is deployed by using Resource Orchestration Service (ROS).
     *   terraform: The service is deployed by using Terraform.
     *   ack: The service is deployed by using Container Service for Kubernetes (ACK).
     *   spi: The service is deployed by calling a service provider interface (SPI).
     *   operation: The service is deployed by using a hosted O\\&M service.
     *
     * @example ros
     *
     * @var string
     */
    public $deployType;

    /**
     * @description Indicates whether the private connection feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enablePrivateVpcConnection;

    /**
     * @description The time when the service was published.
     *
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description The service ID.
     *
     * @example service-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The information about the service.
     *
     * @var serviceInfos[]
     */
    public $serviceInfos;

    /**
     * @description The type of the service. Valid values:
     *
     *   private: The service is a private service and is deployed within the account of a customer.
     *   managed: The service is a fully managed service and is deployed within the account of a service provider.
     *   operation: The service is a hosted O\\&M service.
     *   poc: The service is a trial service.
     *
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The name of the distribution source service provider.
     *
     * @example Company A
     *
     * @var string
     */
    public $sourceSupplierName;

    /**
     * @description The status of the service.
     *
     * @example Online
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The URL of the service provider.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $supplierUrl;

    /**
     * @description The service version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;

    /**
     * @description The custom version name defined by the service provider.
     *
     * @example 版本A
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'deployMetadata' => 'DeployMetadata',
        'deployType' => 'DeployType',
        'enablePrivateVpcConnection' => 'EnablePrivateVpcConnection',
        'publishTime' => 'PublishTime',
        'serviceId' => 'ServiceId',
        'serviceInfos' => 'ServiceInfos',
        'serviceType' => 'ServiceType',
        'sourceSupplierName' => 'SourceSupplierName',
        'status' => 'Status',
        'supplierName' => 'SupplierName',
        'supplierUrl' => 'SupplierUrl',
        'version' => 'Version',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployMetadata) {
            $res['DeployMetadata'] = $this->deployMetadata;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->enablePrivateVpcConnection) {
            $res['EnablePrivateVpcConnection'] = $this->enablePrivateVpcConnection;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInfos) {
            $res['ServiceInfos'] = [];
            if (null !== $this->serviceInfos && \is_array($this->serviceInfos)) {
                $n = 0;
                foreach ($this->serviceInfos as $item) {
                    $res['ServiceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->sourceSupplierName) {
            $res['SourceSupplierName'] = $this->sourceSupplierName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return service
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployMetadata'])) {
            $model->deployMetadata = $map['DeployMetadata'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['EnablePrivateVpcConnection'])) {
            $model->enablePrivateVpcConnection = $map['EnablePrivateVpcConnection'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n = 0;
                foreach ($map['ServiceInfos'] as $item) {
                    $model->serviceInfos[$n++] = null !== $item ? serviceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['SourceSupplierName'])) {
            $model->sourceSupplierName = $map['SourceSupplierName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
