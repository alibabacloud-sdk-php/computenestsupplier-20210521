<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceShrinkRequest\serviceInfo;

use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @description The name of the software.
     *
     * @example MySQL
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the software.
     *
     * @example 5.7
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'Name',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
