<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppEnvDeployBaselineResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $packetComment;

    /**
     * @var int
     */
    public $packetId;

    /**
     * @var string
     */
    public $packetUrl;

    /**
     * @var int
     */
    public $schemaId;
    protected $_name = [
        'appId'         => 'AppId',
        'createTime'    => 'CreateTime',
        'envId'         => 'EnvId',
        'packetComment' => 'PacketComment',
        'packetId'      => 'PacketId',
        'packetUrl'     => 'PacketUrl',
        'schemaId'      => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->packetComment) {
            $res['PacketComment'] = $this->packetComment;
        }
        if (null !== $this->packetId) {
            $res['PacketId'] = $this->packetId;
        }
        if (null !== $this->packetUrl) {
            $res['PacketUrl'] = $this->packetUrl;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['PacketComment'])) {
            $model->packetComment = $map['PacketComment'];
        }
        if (isset($map['PacketId'])) {
            $model->packetId = $map['PacketId'];
        }
        if (isset($map['PacketUrl'])) {
            $model->packetUrl = $map['PacketUrl'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
