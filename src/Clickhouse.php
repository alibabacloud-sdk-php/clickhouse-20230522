<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateEndpointRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateEndpointResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteEndpointRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteEndpointResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\KillProcessRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\KillProcessResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifySecurityIPListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifySecurityIPListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StartDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StartDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StopDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StopDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Clickhouse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'clickhouse.aliyuncs.com',
            'ap-southeast-1'              => 'clickhouse.aliyuncs.com',
            'cn-beijing'                  => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-1'        => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'clickhouse.aliyuncs.com',
            'cn-beijing-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'clickhouse.aliyuncs.com',
            'cn-edge-1'                   => 'clickhouse.aliyuncs.com',
            'cn-fujian'                   => 'clickhouse.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou'                 => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-finance'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'clickhouse.aliyuncs.com',
            'cn-hongkong'                 => 'clickhouse.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'clickhouse.aliyuncs.com',
            'cn-north-2-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-qingdao'                  => 'clickhouse.aliyuncs.com',
            'cn-qingdao-nebula'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai'                 => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'clickhouse.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shanghai-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen'                 => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'clickhouse.aliyuncs.com',
            'cn-wuhan'                    => 'clickhouse.aliyuncs.com',
            'cn-yushanfang'               => 'clickhouse.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'clickhouse.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'clickhouse.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'clickhouse.aliyuncs.com',
            'eu-west-1-oxs'               => 'clickhouse.aliyuncs.com',
            'me-east-1'                   => 'clickhouse.aliyuncs.com',
            'rus-west-1-pop'              => 'clickhouse.aliyuncs.com',
            'us-east-1'                   => 'clickhouse.aliyuncs.com',
            'us-west-1'                   => 'clickhouse.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('clickhouse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 创建账号
     *  *
     * @param CreateAccountRequest $tmpReq  CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAccountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dmlAuthSetting)) {
            $request->dmlAuthSettingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dmlAuthSetting, 'DmlAuthSetting', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dmlAuthSettingShrink)) {
            $query['DmlAuthSetting'] = $request->dmlAuthSettingShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建账号
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 创建数据库
     *  *
     * @param CreateDBRequest $request CreateDBRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResponse CreateDBResponse
     */
    public function createDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDB',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据库
     *  *
     * @param CreateDBRequest $request CreateDBRequest
     *
     * @return CreateDBResponse CreateDBResponse
     */
    public function createDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBWithOptions($request, $runtime);
    }

    /**
     * @summary 创建企业版Clickhouse实例
     *  *
     * @param CreateDBInstanceRequest $tmpReq  CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->multiZone)) {
            $request->multiZoneShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->multiZone, 'MultiZone', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->multiZoneShrink)) {
            $query['MultiZone'] = $request->multiZoneShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scaleMax)) {
            $query['ScaleMax'] = $request->scaleMax;
        }
        if (!Utils::isUnset($request->scaleMin)) {
            $query['ScaleMin'] = $request->scaleMin;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建企业版Clickhouse实例
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建链接地址
     *  *
     * @param CreateEndpointRequest $request CreateEndpointRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEndpointResponse CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionPrefix)) {
            $query['ConnectionPrefix'] = $request->connectionPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBInstanceNetType)) {
            $query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpoint',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建链接地址
     *  *
     * @param CreateEndpointRequest $request CreateEndpointRequest
     *
     * @return CreateEndpointResponse CreateEndpointResponse
     */
    public function createEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary 删除账号
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除账号
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据库
     *  *
     * @param DeleteDBRequest $request DeleteDBRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBResponse DeleteDBResponse
     */
    public function deleteDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDB',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据库
     *  *
     * @param DeleteDBRequest $request DeleteDBRequest
     *
     * @return DeleteDBResponse DeleteDBResponse
     */
    public function deleteDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBWithOptions($request, $runtime);
    }

    /**
     * @summary 释放实例
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放实例
     *  *
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除链接地址
     *  *
     * @param DeleteEndpointRequest $request DeleteEndpointRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEndpointResponse DeleteEndpointResponse
     */
    public function deleteEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpoint',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除链接地址
     *  *
     * @param DeleteEndpointRequest $request DeleteEndpointRequest
     *
     * @return DeleteEndpointResponse DeleteEndpointResponse
     */
    public function deleteEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary 查询账号的授权信息
     *  *
     * @param DescribeAccountAuthorityRequest $request DescribeAccountAuthorityRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountAuthorityResponse DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountAuthority',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询账号的授权信息
     *  *
     * @param DescribeAccountAuthorityRequest $request DescribeAccountAuthorityRequest
     *
     * @return DescribeAccountAuthorityResponse DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAuthorityWithOptions($request, $runtime);
    }

    /**
     * @summary 查询账号列表
     *  *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccounts',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询账号列表
     *  *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例详情
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例详情
     *  *
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DB或者Table数据结构
     *  *
     * @param DescribeDBInstanceDataSourcesRequest $request DescribeDBInstanceDataSourcesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceDataSourcesResponse DescribeDBInstanceDataSourcesResponse
     */
    public function describeDBInstanceDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceDataSources',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询DB或者Table数据结构
     *  *
     * @param DescribeDBInstanceDataSourcesRequest $request DescribeDBInstanceDataSourcesRequest
     *
     * @return DescribeDBInstanceDataSourcesResponse DescribeDBInstanceDataSourcesResponse
     */
    public function describeDBInstanceDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例列表
     *  *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->DBInstanceStatus)) {
            $query['DBInstanceStatus'] = $request->DBInstanceStatus;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例列表
     *  *
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例访问地址
     *  *
     * @param DescribeEndpointsRequest $request DescribeEndpointsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEndpointsResponse DescribeEndpointsResponse
     */
    public function describeEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpoints',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例访问地址
     *  *
     * @param DescribeEndpointsRequest $request DescribeEndpointsRequest
     *
     * @return DescribeEndpointsResponse DescribeEndpointsResponse
     */
    public function describeEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看正在运行的查询
     *  *
     * @param DescribeProcessListRequest $request DescribeProcessListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessListResponse DescribeProcessListResponse
     */
    public function describeProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->initialQueryId)) {
            $query['InitialQueryId'] = $request->initialQueryId;
        }
        if (!Utils::isUnset($request->initialUser)) {
            $query['InitialUser'] = $request->initialUser;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->queryOrder)) {
            $query['QueryOrder'] = $request->queryOrder;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProcessList',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看正在运行的查询
     *  *
     * @param DescribeProcessListRequest $request DescribeProcessListRequest
     *
     * @return DescribeProcessListResponse DescribeProcessListResponse
     */
    public function describeProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询白名单
     *  *
     * @param DescribeSecurityIPListRequest $request DescribeSecurityIPListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityIPListResponse DescribeSecurityIPListResponse
     */
    public function describeSecurityIPListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIPList',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询白名单
     *  *
     * @param DescribeSecurityIPListRequest $request DescribeSecurityIPListRequest
     *
     * @return DescribeSecurityIPListResponse DescribeSecurityIPListResponse
     */
    public function describeSecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPListWithOptions($request, $runtime);
    }

    /**
     * @summary 查看慢日志明细
     *  *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看慢日志明细
     *  *
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 慢查询趋势
     *  *
     * @param DescribeSlowLogTrendRequest $request DescribeSlowLogTrendRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogTrendResponse DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogTrend',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 慢查询趋势
     *  *
     * @param DescribeSlowLogTrendRequest $request DescribeSlowLogTrendRequest
     *
     * @return DescribeSlowLogTrendResponse DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogTrendWithOptions($request, $runtime);
    }

    /**
     * @summary 终止正在进行的任务
     *  *
     * @param KillProcessRequest $request KillProcessRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return KillProcessResponse KillProcessResponse
     */
    public function killProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->initialQueryId)) {
            $query['InitialQueryId'] = $request->initialQueryId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillProcess',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止正在进行的任务
     *  *
     * @param KillProcessRequest $request KillProcessRequest
     *
     * @return KillProcessResponse KillProcessResponse
     */
    public function killProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessWithOptions($request, $runtime);
    }

    /**
     * @summary 修改账号的授权信息
     *  *
     * @param ModifyAccountAuthorityRequest $tmpReq  ModifyAccountAuthorityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountAuthorityResponse ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthorityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAccountAuthorityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dmlAuthSetting)) {
            $request->dmlAuthSettingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dmlAuthSetting, 'DmlAuthSetting', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dmlAuthSettingShrink)) {
            $query['DmlAuthSetting'] = $request->dmlAuthSettingShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountAuthority',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改账号的授权信息
     *  *
     * @param ModifyAccountAuthorityRequest $request ModifyAccountAuthorityRequest
     *
     * @return ModifyAccountAuthorityResponse ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountAuthorityWithOptions($request, $runtime);
    }

    /**
     * @summary 修改账号备注
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改账号备注
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例的配置属性，包括名称、运维时间等
     *  *
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeType)) {
            $query['AttributeType'] = $request->attributeType;
        }
        if (!Utils::isUnset($request->attributeValue)) {
            $query['AttributeValue'] = $request->attributeValue;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceAttribute',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例的配置属性，包括名称、运维时间等
     *  *
     * @param ModifyDBInstanceAttributeRequest $request ModifyDBInstanceAttributeRequest
     *
     * @return ModifyDBInstanceAttributeResponse ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例弹性配置
     *  *
     * @param ModifyDBInstanceClassRequest $request ModifyDBInstanceClassRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceClassResponse ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceClass',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例弹性配置
     *  *
     * @param ModifyDBInstanceClassRequest $request ModifyDBInstanceClassRequest
     *
     * @return ModifyDBInstanceClassResponse ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @summary 修改链接地址
     *  *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改链接地址
     *  *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @summary 变更白名单
     *  *
     * @param ModifySecurityIPListRequest $request ModifySecurityIPListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIPListResponse ModifySecurityIPListResponse
     */
    public function modifySecurityIPListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIPList',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变更白名单
     *  *
     * @param ModifySecurityIPListRequest $request ModifySecurityIPListRequest
     *
     * @return ModifySecurityIPListResponse ModifySecurityIPListResponse
     */
    public function modifySecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPListWithOptions($request, $runtime);
    }

    /**
     * @summary 重置账号密码
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置账号密码
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 重启实例
     *  *
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启实例
     *  *
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 启动实例
     *  *
     * @param StartDBInstanceRequest $request StartDBInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDBInstanceResponse StartDBInstanceResponse
     */
    public function startDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动实例
     *  *
     * @param StartDBInstanceRequest $request StartDBInstanceRequest
     *
     * @return StartDBInstanceResponse StartDBInstanceResponse
     */
    public function startDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停实例
     *  *
     * @param StopDBInstanceRequest $request StopDBInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDBInstanceResponse StopDBInstanceResponse
     */
    public function stopDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDBInstance',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停实例
     *  *
     * @param StopDBInstanceRequest $request StopDBInstanceRequest
     *
     * @return StopDBInstanceResponse StopDBInstanceResponse
     */
    public function stopDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 升级实例内核小版本
     *  *
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        if (!Utils::isUnset($request->targetMinorVersion)) {
            $query['TargetMinorVersion'] = $request->targetMinorVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMinorVersion',
            'version'     => '2023-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 升级实例内核小版本
     *  *
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMinorVersionWithOptions($request, $runtime);
    }
}
