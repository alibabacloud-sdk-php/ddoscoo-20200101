<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag that you want to query.
     *
     * >
     *
     *   You must specify at least one of the **ResourceIds.N** and **Tags.N.Key** parameters.
     *
     *   You can call the [DescribeTagKeys](https://help.aliyun.com/document_detail/159785.html) operation to query all tag keys.
     *
     * @example testkey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that you want to query.
     *
     * @example testvalue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
