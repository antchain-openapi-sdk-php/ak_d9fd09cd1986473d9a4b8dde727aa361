<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361;

use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\BindDemoCenterAbilityRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\BindDemoCenterAbilityResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\BindDemoMoreAbilityTestabcRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\BindDemoMoreAbilityTestabcResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\CheckInternationalDemoZolozHealthRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\CheckInternationalDemoZolozHealthResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\CreateAntcloudGatewayxFileUploadRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\CreateAntcloudGatewayxFileUploadResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\EchoDemoGatewayCheckRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\EchoDemoGatewayCheckResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\GetInternationalDemoAaaBbbRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\GetInternationalDemoAaaBbbResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\MatchInternationalDemoZolozFacecompareRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\MatchInternationalDemoZolozFacecompareResponse;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\QueryInternationalDemoAaaBbbRequest;
use AntChain\Ak_d9fd09cd1986473d9a4b8dde727aa361\Models\QueryInternationalDemoAaaBbbResponse;
use AntChain\Util\UtilClient;
use Exception;

class Client
{
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_securityToken;

    protected $_maxIdleTimeMillis;

    protected $_keepAliveDurationMillis;

    protected $_maxRequests;

    protected $_maxRequestsPerHost;

    /**
     * Init client with Config.
     *
     * @param config config contains the necessary information to create a client
     * @param mixed $config
     */
    public function __construct($config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'code'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        $this->_accessKeyId             = $config->accessKeyId;
        $this->_accessKeySecret         = $config->accessKeySecret;
        $this->_securityToken           = $config->securityToken;
        $this->_endpoint                = $config->endpoint;
        $this->_protocol                = $config->protocol;
        $this->_userAgent               = $config->userAgent;
        $this->_readTimeout             = Utils::defaultNumber($config->readTimeout, 20000);
        $this->_connectTimeout          = Utils::defaultNumber($config->connectTimeout, 20000);
        $this->_httpProxy               = $config->httpProxy;
        $this->_httpsProxy              = $config->httpsProxy;
        $this->_noProxy                 = $config->noProxy;
        $this->_socks5Proxy             = $config->socks5Proxy;
        $this->_socks5NetWork           = $config->socks5NetWork;
        $this->_maxIdleConns            = Utils::defaultNumber($config->maxIdleConns, 60000);
        $this->_maxIdleTimeMillis       = Utils::defaultNumber($config->maxIdleTimeMillis, 5);
        $this->_keepAliveDurationMillis = Utils::defaultNumber($config->keepAliveDurationMillis, 5000);
        $this->_maxRequests             = Utils::defaultNumber($config->maxRequests, 100);
        $this->_maxRequestsPerHost      = Utils::defaultNumber($config->maxRequestsPerHost, 100);
    }

    /**
     * Encapsulate the request and invoke the network.
     *
     * @param string         $version
     * @param string         $action   api name
     * @param string         $protocol http or https
     * @param string         $method   e.g. GET
     * @param string         $pathname pathname of every api
     * @param mixed[]        $request  which contains request params
     * @param string[]       $headers
     * @param RuntimeOptions $runtime  which controls some details of call api, such as retry times
     *
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     *
     * @return array the response
     */
    public function doRequest($version, $action, $protocol, $method, $pathname, $request, $headers, $runtime)
    {
        $runtime->validate();
        $_runtime = [
            'timeouted'          => 'retry',
            'readTimeout'        => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout'     => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'          => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'         => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'            => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'       => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'maxIdleTimeMillis'  => $this->_maxIdleTimeMillis,
            'keepAliveDuration'  => $this->_keepAliveDurationMillis,
            'maxRequests'        => $this->_maxRequests,
            'maxRequestsPerHost' => $this->_maxRequestsPerHost,
            'retry'              => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
            // Demo类1
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry(@$_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = $pathname;
                $_request->query    = [
                    'method'           => $action,
                    'version'          => $version,
                    'sign_type'        => 'HmacSHA1',
                    'req_time'         => UtilClient::getTimestamp(),
                    'req_msg_id'       => UtilClient::getNonce(),
                    'access_key'       => $this->_accessKeyId,
                    'base_sdk_version' => 'TeaSDK-2.0',
                    'sdk_version'      => '1.0.4',
                    '_prod_code'       => 'ak_d9fd09cd1986473d9a4b8dde727aa361',
                    '_prod_channel'    => 'saas',
                ];
                if (!Utils::empty_($this->_securityToken)) {
                    $_request->query['security_token'] = $this->_securityToken;
                }
                $_request->headers = Tea::merge([
                    'host'       => Utils::defaultString($this->_endpoint, 'openapi.antchain.antgroup.com'),
                    'user-agent' => Utils::getUserAgent($this->_userAgent),
                ], $headers);
                $tmp                               = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body                    = Utils::toFormString($tmp);
                $_request->headers['content-type'] = 'application/x-www-form-urlencoded';
                $signedParam                       = Tea::merge($_request->query, RpcUtils::query($request));
                $_request->query['sign']           = UtilClient::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest                      = $_request;
                $_response                         = Tea::send($_request, $_runtime);
                $raw                               = Utils::readAsString($_response->body);
                $obj                               = Utils::parseJSON($raw);
                $res                               = Utils::assertAsMap($obj);
                $resp                              = Utils::assertAsMap(@$res['response']);
                if (UtilClient::hasError($raw, $this->_accessKeySecret)) {
                    throw new TeaError([
                        'message' => @$resp['result_msg'],
                        'data'    => $resp,
                        'code'    => @$resp['result_code'],
                    ]);
                }

                return $resp;
            } catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Description: Demo接口，返回当输入的值
     * Summary: 返回输入值
     *
     * @param EchoDemoGatewayCheckRequest $request
     *
     * @return EchoDemoGatewayCheckResponse
     */
    public function echoDemoGatewayCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->echoDemoGatewayCheckEx($request, $headers, $runtime);
    }

    /**
     * Description: Demo接口，返回当输入的值
     * Summary: 返回输入值
     *
     * @param EchoDemoGatewayCheckRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EchoDemoGatewayCheckResponse
     */
    public function echoDemoGatewayCheckEx($request, $headers, $runtime)
    {
        if (!Utils::isUnset($request->fileObject)) {
            $uploadReq = new CreateAntcloudGatewayxFileUploadRequest([
                'authToken' => $request->authToken,
                'apiCode'   => 'demo.gateway.check.echo',
                'fileName'  => $request->fileObjectName,
            ]);
            $uploadResp = $this->createAntcloudGatewayxFileUploadEx($uploadReq, $headers, $runtime);
            if (!UtilClient::isSuccess($uploadResp->resultCode, 'ok')) {
                return new EchoDemoGatewayCheckResponse([
                    'reqMsgId'   => $uploadResp->reqMsgId,
                    'resultCode' => $uploadResp->resultCode,
                    'resultMsg'  => $uploadResp->resultMsg,
                ]);
            }
            $uploadHeaders = UtilClient::parseUploadHeaders($uploadResp->uploadHeaders);
            UtilClient::putObject($request->fileObject, $uploadHeaders, $uploadResp->uploadUrl);
            $request->fileId = $uploadResp->fileId;
        }
        Utils::validateModel($request);

        return EchoDemoGatewayCheckResponse::fromMap($this->doRequest('1.0', 'demo.gateway.check.echo', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 测试能力中心九期API打标&能力绑定API使用
     * Summary: 能力中心九期测试.
     *
     * @param BindDemoCenterAbilityRequest $request
     *
     * @return BindDemoCenterAbilityResponse
     */
    public function bindDemoCenterAbility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindDemoCenterAbilityEx($request, $headers, $runtime);
    }

    /**
     * Description: 测试能力中心九期API打标&能力绑定API使用
     * Summary: 能力中心九期测试.
     *
     * @param BindDemoCenterAbilityRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BindDemoCenterAbilityResponse
     */
    public function bindDemoCenterAbilityEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return BindDemoCenterAbilityResponse::fromMap($this->doRequest('1.0', 'demo.center.ability.bind', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 测试API绑定多个标签时的情况
     * Summary: API绑定多个标签.
     *
     * @param BindDemoMoreAbilityTestabcRequest $request
     *
     * @return BindDemoMoreAbilityTestabcResponse
     */
    public function bindDemoMoreAbilityTestabc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindDemoMoreAbilityTestabcEx($request, $headers, $runtime);
    }

    /**
     * Description: 测试API绑定多个标签时的情况
     * Summary: API绑定多个标签.
     *
     * @param BindDemoMoreAbilityTestabcRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return BindDemoMoreAbilityTestabcResponse
     */
    public function bindDemoMoreAbilityTestabcEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return BindDemoMoreAbilityTestabcResponse::fromMap($this->doRequest('1.0', 'demo.more.ability.testabc.bind', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: test zoloz 方法 update again
     * Summary: test zoloz 方法.
     *
     * @param MatchInternationalDemoZolozFacecompareRequest $request
     *
     * @return MatchInternationalDemoZolozFacecompareResponse
     */
    public function matchInternationalDemoZolozFacecompare($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->matchInternationalDemoZolozFacecompareEx($request, $headers, $runtime);
    }

    /**
     * Description: test zoloz 方法 update again
     * Summary: test zoloz 方法.
     *
     * @param MatchInternationalDemoZolozFacecompareRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return MatchInternationalDemoZolozFacecompareResponse
     */
    public function matchInternationalDemoZolozFacecompareEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return MatchInternationalDemoZolozFacecompareResponse::fromMap($this->doRequest('1.0', 'international.demo.zoloz.facecompare.match', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: cj test 111
     * Summary: cj test.
     *
     * @param QueryInternationalDemoAaaBbbRequest $request
     *
     * @return QueryInternationalDemoAaaBbbResponse
     */
    public function queryInternationalDemoAaaBbb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryInternationalDemoAaaBbbEx($request, $headers, $runtime);
    }

    /**
     * Description: cj test 111
     * Summary: cj test.
     *
     * @param QueryInternationalDemoAaaBbbRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryInternationalDemoAaaBbbResponse
     */
    public function queryInternationalDemoAaaBbbEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryInternationalDemoAaaBbbResponse::fromMap($this->doRequest('1.0', 'international.demo.aaa.bbb.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 测试大安全接口
     * Summary: 测试大安全接口.
     *
     * @param CheckInternationalDemoZolozHealthRequest $request
     *
     * @return CheckInternationalDemoZolozHealthResponse
     */
    public function checkInternationalDemoZolozHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInternationalDemoZolozHealthEx($request, $headers, $runtime);
    }

    /**
     * Description: 测试大安全接口
     * Summary: 测试大安全接口.
     *
     * @param CheckInternationalDemoZolozHealthRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckInternationalDemoZolozHealthResponse
     */
    public function checkInternationalDemoZolozHealthEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CheckInternationalDemoZolozHealthResponse::fromMap($this->doRequest('1.0', 'international.demo.zoloz.health.check', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: demo get fr inter desc
     * Summary: demo get fr inter.
     *
     * @param GetInternationalDemoAaaBbbRequest $request
     *
     * @return GetInternationalDemoAaaBbbResponse
     */
    public function getInternationalDemoAaaBbb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInternationalDemoAaaBbbEx($request, $headers, $runtime);
    }

    /**
     * Description: demo get fr inter desc
     * Summary: demo get fr inter.
     *
     * @param GetInternationalDemoAaaBbbRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInternationalDemoAaaBbbResponse
     */
    public function getInternationalDemoAaaBbbEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetInternationalDemoAaaBbbResponse::fromMap($this->doRequest('1.0', 'international.demo.aaa.bbb.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 创建HTTP PUT提交的文件上传
     * Summary: 文件上传创建.
     *
     * @param CreateAntcloudGatewayxFileUploadRequest $request
     *
     * @return CreateAntcloudGatewayxFileUploadResponse
     */
    public function createAntcloudGatewayxFileUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAntcloudGatewayxFileUploadEx($request, $headers, $runtime);
    }

    /**
     * Description: 创建HTTP PUT提交的文件上传
     * Summary: 文件上传创建.
     *
     * @param CreateAntcloudGatewayxFileUploadRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateAntcloudGatewayxFileUploadResponse
     */
    public function createAntcloudGatewayxFileUploadEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAntcloudGatewayxFileUploadResponse::fromMap($this->doRequest('1.0', 'antcloud.gatewayx.file.upload.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }
}
