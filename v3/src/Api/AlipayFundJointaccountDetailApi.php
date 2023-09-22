<?php
/**
 * AlipayFundJointaccountDetailApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-08-31
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Api;

use Alipay\OpenAPISDK\Util\AlipayConfigUtil;
use Alipay\OpenAPISDK\Util\AlipayLogger;
use Alipay\OpenAPISDK\Util\Model\CustomizedParams;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Configuration;
use Alipay\OpenAPISDK\HeaderSelector;
use Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayFundJointaccountDetailApi Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AlipayFundJointaccountDetailApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var AlipayConfigUtil
     */
    protected $alipayConfigUtil;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0,
        AlipayConfigUtil $alipayConfigUtil = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->alipayConfigUtil = $alipayConfigUtil ?: new AlipayConfigUtil();
    }

    /**
     * @return AlipayConfigUtil
     */
    public function getAlipayConfigUtil(): AlipayConfigUtil
    {
        return $this->alipayConfigUtil;
    }

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function setAlipayConfigUtil(AlipayConfigUtil $alipayConfigUtil): void
    {
        $this->alipayConfigUtil = $alipayConfigUtil;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation query
     *
     * 共享资金-查询账户详情
     *
     * @param  string $productCode 销售产品码 (optional)
     * @param  string $bizScene 业务场景码 (optional)
     * @param  string $accountId 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $agreementNo 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $outBizNo 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 (optional)
     * @param  string $channel 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse
     */
    public function query($productCode = null, $bizScene = null, $accountId = null, $agreementNo = null, $outBizNo = null, $channel = null, CustomizedParams $customizedParams = null)
    {
        list($response) = $this->queryWithHttpInfo($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel, $customizedParams);
        return $response;
    }

    /**
     * Operation queryWithHttpInfo
     *
     * 共享资金-查询账户详情
     *
     * @param  string $productCode 销售产品码 (optional)
     * @param  string $bizScene 业务场景码 (optional)
     * @param  string $accountId 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $agreementNo 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $outBizNo 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 (optional)
     * @param  string $channel 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel|\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function queryWithHttpInfo($productCode = null, $bizScene = null, $accountId = null, $agreementNo = null, $outBizNo = null, $channel = null, CustomizedParams $customizedParams = null)
    {
        $request = $this->queryRequest($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel, $customizedParams);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                                
                default:
                    if ('\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), true);
                        if ('\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        //ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                                
                default:
                    //$data = ObjectSerializer::deserialize(
                    //    $e->getResponseBody(),
                    //    '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryDefaultResponse',
                    //    $e->getResponseHeaders()
                    //);
                    //$e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation queryAsync
     *
     * 共享资金-查询账户详情
     *
     * @param  string $productCode 销售产品码 (optional)
     * @param  string $bizScene 业务场景码 (optional)
     * @param  string $accountId 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $agreementNo 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $outBizNo 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 (optional)
     * @param  string $channel 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAsync($productCode = null, $bizScene = null, $accountId = null, $agreementNo = null, $outBizNo = null, $channel = null, CustomizedParams $customizedParams = null)
    {
        return $this->queryAsyncWithHttpInfo($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel, $customizedParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation queryAsyncWithHttpInfo
     *
     * 共享资金-查询账户详情
     *
     * @param  string $productCode 销售产品码 (optional)
     * @param  string $bizScene 业务场景码 (optional)
     * @param  string $accountId 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $agreementNo 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $outBizNo 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 (optional)
     * @param  string $channel 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function queryAsyncWithHttpInfo($productCode = null, $bizScene = null, $accountId = null, $agreementNo = null, $outBizNo = null, $channel = null, CustomizedParams $customizedParams = null)
    {
        $returnType = '\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel';
        $request = $this->queryRequest($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel, $customizedParams);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$response->getBody(), $response->getHeaders(), true);
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'query'
     *
     * @param  string $productCode 销售产品码 (optional)
     * @param  string $bizScene 业务场景码 (optional)
     * @param  string $accountId 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $agreementNo 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 (optional)
     * @param  string $outBizNo 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 (optional)
     * @param  string $channel 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function queryRequest($productCode = null, $bizScene = null, $accountId = null, $agreementNo = null, $outBizNo = null, $channel = null, CustomizedParams $customizedParams = null)
    {

        $resourcePath = '/v3/alipay/fund/jointaccount/detail/query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $productCode,
            'product_code', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $bizScene,
            'biz_scene', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $accountId,
            'account_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $agreementNo,
            'agreement_no', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $outBizNo,
            'out_biz_no', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel,
            'channel', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }


        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        if ($customizedParams != null) {
            //额外query参数
            if (is_array($customizedParams->getQueryParams()) && count($customizedParams->getQueryParams()) >= 0) {
                foreach ($customizedParams->getQueryParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
                }
            }

            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $headerParams["alipay-app-auth-token"] = $customizedParams->getAppAuthToken();
            }

            //额外非全局header参数
            if (is_array($customizedParams->getHeaderParams()) && count($customizedParams->getHeaderParams()) >= 0) {
                foreach ($customizedParams->getHeaderParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
                }
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign('GET', $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, 'GET', $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            'GET',
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
