<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesResponseBody\sourceProvinces;
use AlibabaCloud\Tea\Model;

class DescribeDomainViewSourceProvincesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of the details of the administrative region in China from which the requests are sent.
     *
     * @var sourceProvinces[]
     */
    public $sourceProvinces;
    protected $_name = [
        'requestId'       => 'RequestId',
        'sourceProvinces' => 'SourceProvinces',
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
        if (null !== $this->sourceProvinces) {
            $res['SourceProvinces'] = [];
            if (null !== $this->sourceProvinces && \is_array($this->sourceProvinces)) {
                $n = 0;
                foreach ($this->sourceProvinces as $item) {
                    $res['SourceProvinces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainViewSourceProvincesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceProvinces'])) {
            if (!empty($map['SourceProvinces'])) {
                $model->sourceProvinces = [];
                $n                      = 0;
                foreach ($map['SourceProvinces'] as $item) {
                    $model->sourceProvinces[$n++] = null !== $item ? sourceProvinces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
