<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackAnalysisMaxQpsResponseBody extends Model
{
    /**
     * @description The peak queries per second (QPS) of DDoS attacks. Units: QPS.
     *
     * @example 41652
     *
     * @var int
     */
    public $qps;

    /**
     * @description The ID of the request.
     *
     * @example 8DFB602D-1AAC-46C4-90F2-C84086E7A6E4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qps'       => 'Qps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackAnalysisMaxQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
