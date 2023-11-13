<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeStsGrantStatusResponseBody;

use AlibabaCloud\Tea\Model;

class stsGrant extends Model
{
    /**
     * @description The authorization status. Valid values:
     *
     *   **0**: Anti-DDoS Pro or Anti-DDoS Premium is not authorized to access other cloud services.
     *   **1**: Anti-DDoS Pro or Anti-DDoS Premium is authorized to access other cloud services.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stsGrant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
