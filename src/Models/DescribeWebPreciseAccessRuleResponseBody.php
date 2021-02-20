<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList;
use AlibabaCloud\Tea\Model;

class DescribeWebPreciseAccessRuleResponseBody extends Model
{
    /**
     * @var preciseAccessConfigList[]
     */
    public $preciseAccessConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'preciseAccessConfigList' => 'PreciseAccessConfigList',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preciseAccessConfigList) {
            $res['PreciseAccessConfigList'] = [];
            if (null !== $this->preciseAccessConfigList && \is_array($this->preciseAccessConfigList)) {
                $n = 0;
                foreach ($this->preciseAccessConfigList as $item) {
                    $res['PreciseAccessConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeWebPreciseAccessRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreciseAccessConfigList'])) {
            if (!empty($map['PreciseAccessConfigList'])) {
                $model->preciseAccessConfigList = [];
                $n                              = 0;
                foreach ($map['PreciseAccessConfigList'] as $item) {
                    $model->preciseAccessConfigList[$n++] = null !== $item ? preciseAccessConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
