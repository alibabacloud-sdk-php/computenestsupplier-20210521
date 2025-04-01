<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class ListArtifactRisksRequest extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $artifactVersion;
    protected $_name = [
        'artifactId' => 'ArtifactId',
        'artifactVersion' => 'ArtifactVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['ArtifactId'] = $this->artifactId;
        }

        if (null !== $this->artifactVersion) {
            $res['ArtifactVersion'] = $this->artifactVersion;
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
        if (isset($map['ArtifactId'])) {
            $model->artifactId = $map['ArtifactId'];
        }

        if (isset($map['ArtifactVersion'])) {
            $model->artifactVersion = $map['ArtifactVersion'];
        }

        return $model;
    }
}
