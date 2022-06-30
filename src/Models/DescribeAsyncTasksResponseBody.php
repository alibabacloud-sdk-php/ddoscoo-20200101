<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAsyncTasksResponseBody\asyncTasks;
use AlibabaCloud\Tea\Model;

class DescribeAsyncTasksResponseBody extends Model
{
    /**
     * @var asyncTasks[]
     */
    public $asyncTasks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'asyncTasks' => 'AsyncTasks',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTasks) {
            $res['AsyncTasks'] = [];
            if (null !== $this->asyncTasks && \is_array($this->asyncTasks)) {
                $n = 0;
                foreach ($this->asyncTasks as $item) {
                    $res['AsyncTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAsyncTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTasks'])) {
            if (!empty($map['AsyncTasks'])) {
                $model->asyncTasks = [];
                $n                 = 0;
                foreach ($map['AsyncTasks'] as $item) {
                    $model->asyncTasks[$n++] = null !== $item ? asyncTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
