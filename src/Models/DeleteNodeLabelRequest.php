<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeleteNodeLabelRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $labelKey;

    /**
     * @var string
     */
    public $labelValue;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'force'      => 'Force',
        'labelKey'   => 'LabelKey',
        'labelValue' => 'LabelValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->labelKey) {
            $res['LabelKey'] = $this->labelKey;
        }
        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNodeLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['LabelKey'])) {
            $model->labelKey = $map['LabelKey'];
        }
        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }

        return $model;
    }
}
