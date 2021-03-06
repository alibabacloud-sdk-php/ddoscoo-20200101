<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;
use AlibabaCloud\Tea\Model;

class DescribeWebRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var webRules[]
     */
    public $webRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'webRules'   => 'WebRules',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->webRules) {
            $res['WebRules'] = [];
            if (null !== $this->webRules && \is_array($this->webRules)) {
                $n = 0;
                foreach ($this->webRules as $item) {
                    $res['WebRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WebRules'])) {
            if (!empty($map['WebRules'])) {
                $model->webRules = [];
                $n               = 0;
                foreach ($map['WebRules'] as $item) {
                    $model->webRules[$n++] = null !== $item ? webRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
