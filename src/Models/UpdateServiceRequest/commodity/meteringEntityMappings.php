<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Tea\Model;

class meteringEntityMappings extends Model
{
    /**
     * @description 计量项ID
     *
     * @var string[]
     */
    public $entityIds;

    /**
     * @description 套餐名称
     *
     * @example This parameter is not publicly accessible.
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description 模板名称
     *
     * @example The service ID.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'entityIds'         => 'EntityIds',
        'specificationName' => 'SpecificationName',
        'templateName'      => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityIds) {
            $res['EntityIds'] = $this->entityIds;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meteringEntityMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityIds'])) {
            if (!empty($map['EntityIds'])) {
                $model->entityIds = $map['EntityIds'];
            }
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
