<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules\gmCert;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules\proxyTypes;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules\realServers;
use AlibabaCloud\Tea\Model;

class webRules extends Model
{
    /**
     * @var string[]
     */
    public $blackList;

    /**
     * @example true
     *
     * @var bool
     */
    public $ccEnabled;

    /**
     * @example false
     *
     * @var bool
     */
    public $ccRuleEnabled;

    /**
     * @example default
     *
     * @var string
     */
    public $ccTemplate;

    /**
     * @example testcert
     *
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @example kzmk7b8tt351****.aliyunddos1014****
     *
     * @var string
     */
    public $cname;

    /**
     * @var string[]
     */
    public $customCiphers;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var gmCert
     */
    public $gmCert;

    /**
     * @example true
     *
     * @var bool
     */
    public $http2Enable;

    /**
     * @example true
     *
     * @var bool
     */
    public $http2HttpsEnable;

    /**
     * @example true
     *
     * @var bool
     */
    public $https2HttpEnable;

    /**
     * @example false
     *
     * @var bool
     */
    public $ocspEnabled;

    /**
     * @example ip_hash
     *
     * @var string
     */
    public $policyMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $proxyEnabled;

    /**
     * @var proxyTypes[]
     */
    public $proxyTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $punishReason;

    /**
     * @example true
     *
     * @var bool
     */
    public $punishStatus;

    /**
     * @var realServers[]
     */
    public $realServers;

    /**
     * @example false
     *
     * @var bool
     */
    public $ssl13Enabled;

    /**
     * @example default
     *
     * @var string
     */
    public $sslCiphers;

    /**
     * @example tls1.1
     *
     * @var string
     */
    public $sslProtocols;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'        => 'BlackList',
        'ccEnabled'        => 'CcEnabled',
        'ccRuleEnabled'    => 'CcRuleEnabled',
        'ccTemplate'       => 'CcTemplate',
        'certName'         => 'CertName',
        'certRegion'       => 'CertRegion',
        'cname'            => 'Cname',
        'customCiphers'    => 'CustomCiphers',
        'domain'           => 'Domain',
        'gmCert'           => 'GmCert',
        'http2Enable'      => 'Http2Enable',
        'http2HttpsEnable' => 'Http2HttpsEnable',
        'https2HttpEnable' => 'Https2HttpEnable',
        'ocspEnabled'      => 'OcspEnabled',
        'policyMode'       => 'PolicyMode',
        'proxyEnabled'     => 'ProxyEnabled',
        'proxyTypes'       => 'ProxyTypes',
        'punishReason'     => 'PunishReason',
        'punishStatus'     => 'PunishStatus',
        'realServers'      => 'RealServers',
        'ssl13Enabled'     => 'Ssl13Enabled',
        'sslCiphers'       => 'SslCiphers',
        'sslProtocols'     => 'SslProtocols',
        'whiteList'        => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->ccEnabled) {
            $res['CcEnabled'] = $this->ccEnabled;
        }
        if (null !== $this->ccRuleEnabled) {
            $res['CcRuleEnabled'] = $this->ccRuleEnabled;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->gmCert) {
            $res['GmCert'] = null !== $this->gmCert ? $this->gmCert->toMap() : null;
        }
        if (null !== $this->http2Enable) {
            $res['Http2Enable'] = $this->http2Enable;
        }
        if (null !== $this->http2HttpsEnable) {
            $res['Http2HttpsEnable'] = $this->http2HttpsEnable;
        }
        if (null !== $this->https2HttpEnable) {
            $res['Https2HttpEnable'] = $this->https2HttpEnable;
        }
        if (null !== $this->ocspEnabled) {
            $res['OcspEnabled'] = $this->ocspEnabled;
        }
        if (null !== $this->policyMode) {
            $res['PolicyMode'] = $this->policyMode;
        }
        if (null !== $this->proxyEnabled) {
            $res['ProxyEnabled'] = $this->proxyEnabled;
        }
        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = [];
            if (null !== $this->proxyTypes && \is_array($this->proxyTypes)) {
                $n = 0;
                foreach ($this->proxyTypes as $item) {
                    $res['ProxyTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->punishReason) {
            $res['PunishReason'] = $this->punishReason;
        }
        if (null !== $this->punishStatus) {
            $res['PunishStatus'] = $this->punishStatus;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = [];
            if (null !== $this->realServers && \is_array($this->realServers)) {
                $n = 0;
                foreach ($this->realServers as $item) {
                    $res['RealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ssl13Enabled) {
            $res['Ssl13Enabled'] = $this->ssl13Enabled;
        }
        if (null !== $this->sslCiphers) {
            $res['SslCiphers'] = $this->sslCiphers;
        }
        if (null !== $this->sslProtocols) {
            $res['SslProtocols'] = $this->sslProtocols;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }
        if (isset($map['CcEnabled'])) {
            $model->ccEnabled = $map['CcEnabled'];
        }
        if (isset($map['CcRuleEnabled'])) {
            $model->ccRuleEnabled = $map['CcRuleEnabled'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['GmCert'])) {
            $model->gmCert = gmCert::fromMap($map['GmCert']);
        }
        if (isset($map['Http2Enable'])) {
            $model->http2Enable = $map['Http2Enable'];
        }
        if (isset($map['Http2HttpsEnable'])) {
            $model->http2HttpsEnable = $map['Http2HttpsEnable'];
        }
        if (isset($map['Https2HttpEnable'])) {
            $model->https2HttpEnable = $map['Https2HttpEnable'];
        }
        if (isset($map['OcspEnabled'])) {
            $model->ocspEnabled = $map['OcspEnabled'];
        }
        if (isset($map['PolicyMode'])) {
            $model->policyMode = $map['PolicyMode'];
        }
        if (isset($map['ProxyEnabled'])) {
            $model->proxyEnabled = $map['ProxyEnabled'];
        }
        if (isset($map['ProxyTypes'])) {
            if (!empty($map['ProxyTypes'])) {
                $model->proxyTypes = [];
                $n                 = 0;
                foreach ($map['ProxyTypes'] as $item) {
                    $model->proxyTypes[$n++] = null !== $item ? proxyTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PunishReason'])) {
            $model->punishReason = $map['PunishReason'];
        }
        if (isset($map['PunishStatus'])) {
            $model->punishStatus = $map['PunishStatus'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n                  = 0;
                foreach ($map['RealServers'] as $item) {
                    $model->realServers[$n++] = null !== $item ? realServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ssl13Enabled'])) {
            $model->ssl13Enabled = $map['Ssl13Enabled'];
        }
        if (isset($map['SslCiphers'])) {
            $model->sslCiphers = $map['SslCiphers'];
        }
        if (isset($map['SslProtocols'])) {
            $model->sslProtocols = $map['SslProtocols'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
