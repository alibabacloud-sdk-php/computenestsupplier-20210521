<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GetServiceProvisionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceVersion;
    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'parametersShrink' => 'Parameters',
        'regionId'         => 'RegionId',
        'serviceId'        => 'ServiceId',
        'serviceVersion'   => 'ServiceVersion',
        'templateName'     => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
