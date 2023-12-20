<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GrantDbToAccountResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @example 79a8ab31-32ce-4d27-a006-339a5eae3b6e
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'errMsg'    => 'ErrMsg',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantDbToAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
