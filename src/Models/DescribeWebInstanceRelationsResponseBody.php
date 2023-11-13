<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations;
use AlibabaCloud\Tea\Model;

class DescribeWebInstanceRelationsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0222382B-5FE5-4FF7-BC9B-97EE31D58818
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the instances to which a website service is added.
     *
     * @var webInstanceRelations[]
     */
    public $webInstanceRelations;
    protected $_name = [
        'requestId'            => 'RequestId',
        'webInstanceRelations' => 'WebInstanceRelations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webInstanceRelations) {
            $res['WebInstanceRelations'] = [];
            if (null !== $this->webInstanceRelations && \is_array($this->webInstanceRelations)) {
                $n = 0;
                foreach ($this->webInstanceRelations as $item) {
                    $res['WebInstanceRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebInstanceRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebInstanceRelations'])) {
            if (!empty($map['WebInstanceRelations'])) {
                $model->webInstanceRelations = [];
                $n                           = 0;
                foreach ($map['WebInstanceRelations'] as $item) {
                    $model->webInstanceRelations[$n++] = null !== $item ? webInstanceRelations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
