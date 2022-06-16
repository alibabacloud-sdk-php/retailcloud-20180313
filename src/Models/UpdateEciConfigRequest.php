<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class UpdateEciConfigRequest extends Model
{
    /**
     * @description appEnvId
     *
     * @var int
     */
    public $appEnvId;

    /**
     * @description eipBandwidth
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description enableEciSchedulePolicy
     *
     * @var bool
     */
    public $enableEciSchedulePolicy;

    /**
     * @description mirrorCache
     *
     * @var bool
     */
    public $mirrorCache;

    /**
     * @description normalInstanceLimit
     *
     * @var int
     */
    public $normalInstanceLimit;

    /**
     * @description scheduleVirtualNode
     *
     * @var bool
     */
    public $scheduleVirtualNode;
    protected $_name = [
        'appEnvId'                => 'AppEnvId',
        'eipBandwidth'            => 'EipBandwidth',
        'enableEciSchedulePolicy' => 'EnableEciSchedulePolicy',
        'mirrorCache'             => 'MirrorCache',
        'normalInstanceLimit'     => 'NormalInstanceLimit',
        'scheduleVirtualNode'     => 'ScheduleVirtualNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnvId) {
            $res['AppEnvId'] = $this->appEnvId;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->enableEciSchedulePolicy) {
            $res['EnableEciSchedulePolicy'] = $this->enableEciSchedulePolicy;
        }
        if (null !== $this->mirrorCache) {
            $res['MirrorCache'] = $this->mirrorCache;
        }
        if (null !== $this->normalInstanceLimit) {
            $res['NormalInstanceLimit'] = $this->normalInstanceLimit;
        }
        if (null !== $this->scheduleVirtualNode) {
            $res['ScheduleVirtualNode'] = $this->scheduleVirtualNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEciConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEnvId'])) {
            $model->appEnvId = $map['AppEnvId'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EnableEciSchedulePolicy'])) {
            $model->enableEciSchedulePolicy = $map['EnableEciSchedulePolicy'];
        }
        if (isset($map['MirrorCache'])) {
            $model->mirrorCache = $map['MirrorCache'];
        }
        if (isset($map['NormalInstanceLimit'])) {
            $model->normalInstanceLimit = $map['NormalInstanceLimit'];
        }
        if (isset($map['ScheduleVirtualNode'])) {
            $model->scheduleVirtualNode = $map['ScheduleVirtualNode'];
        }

        return $model;
    }
}
