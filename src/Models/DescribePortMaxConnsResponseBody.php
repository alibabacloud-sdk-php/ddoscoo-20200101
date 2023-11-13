<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsResponseBody\portMaxConns;
use AlibabaCloud\Tea\Model;

class DescribePortMaxConnsResponseBody extends Model
{
    /**
     * @description An array consisting of the details of the maximum number of connections that are established over a port of the instance.
     *
     * @var portMaxConns[]
     */
    public $portMaxConns;

    /**
     * @description The ID of the request.
     *
     * @example 08F79110-2AF5-4FA7-998E-7C5E75EACF9C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portMaxConns' => 'PortMaxConns',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portMaxConns) {
            $res['PortMaxConns'] = [];
            if (null !== $this->portMaxConns && \is_array($this->portMaxConns)) {
                $n = 0;
                foreach ($this->portMaxConns as $item) {
                    $res['PortMaxConns'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePortMaxConnsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortMaxConns'])) {
            if (!empty($map['PortMaxConns'])) {
                $model->portMaxConns = [];
                $n                   = 0;
                foreach ($map['PortMaxConns'] as $item) {
                    $model->portMaxConns[$n++] = null !== $item ? portMaxConns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
