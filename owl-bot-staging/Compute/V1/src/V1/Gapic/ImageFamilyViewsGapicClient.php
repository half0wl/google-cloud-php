<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\GetImageFamilyViewRequest;
use Google\Cloud\Compute\V1\ImageFamilyView;

/**
 * Service Description: The ImageFamilyViews API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $imageFamilyViewsClient = new ImageFamilyViewsClient();
 * try {
 *     $family = 'family';
 *     $project = 'project';
 *     $zone = 'zone';
 *     $response = $imageFamilyViewsClient->get($family, $project, $zone);
 * } finally {
 *     $imageFamilyViewsClient->close();
 * }
 * ```
 */
class ImageFamilyViewsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.ImageFamilyViews';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'compute.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute.readonly',
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/image_family_views_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/image_family_views_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/image_family_views_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Implements GapicClientTrait::defaultTransport.
     */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /**
     * Implements GapicClientTrait::getSupportedTransports.
     */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Returns the latest image that is part of an image family, is not deprecated and is rolled out in the specified zone.
     *
     * Sample code:
     * ```
     * $imageFamilyViewsClient = new ImageFamilyViewsClient();
     * try {
     *     $family = 'family';
     *     $project = 'project';
     *     $zone = 'zone';
     *     $response = $imageFamilyViewsClient->get($family, $project, $zone);
     * } finally {
     *     $imageFamilyViewsClient->close();
     * }
     * ```
     *
     * @param string $family       Name of the image family to search for.
     * @param string $project      Project ID for this request.
     * @param string $zone         The name of the zone for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\ImageFamilyView
     *
     * @throws ApiException if the remote call fails
     */
    public function get($family, $project, $zone, array $optionalArgs = [])
    {
        $request = new GetImageFamilyViewRequest();
        $requestParamHeaders = [];
        $request->setFamily($family);
        $request->setProject($project);
        $request->setZone($zone);
        $requestParamHeaders['family'] = $family;
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['zone'] = $zone;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Get', ImageFamilyView::class, $optionalArgs, $request)->wait();
    }
}
