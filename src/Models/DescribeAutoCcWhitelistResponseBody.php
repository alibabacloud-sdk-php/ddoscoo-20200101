<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponseBody\autoCcWhitelist;
use AlibabaCloud\Tea\Model;

class DescribeAutoCcWhitelistResponseBody extends Model
{
    /**
     * @var autoCcWhitelist[]
     */
    public $autoCcWhitelist;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoCcWhitelist' => 'AutoCcWhitelist',
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCcWhitelist) {
            $res['AutoCcWhitelist'] = [];
            if (null !== $this->autoCcWhitelist && \is_array($this->autoCcWhitelist)) {
                $n = 0;
                foreach ($this->autoCcWhitelist as $item) {
                    $res['AutoCcWhitelist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoCcWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCcWhitelist'])) {
            if (!empty($map['AutoCcWhitelist'])) {
                $model->autoCcWhitelist = [];
                $n                      = 0;
                foreach ($map['AutoCcWhitelist'] as $item) {
                    $model->autoCcWhitelist[$n++] = null !== $item ? autoCcWhitelist::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
