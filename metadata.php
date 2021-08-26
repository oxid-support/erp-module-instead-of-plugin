<?php declare(strict_types=1);

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';
/**
 * Module information
 */
$aModule = [
    'id'           => 'oxid-support_erp-plugin-module',
    'title'        => 'ERP Plugin as module example',
    'description'  => '',
    'thumbnail'    => '',
    'version'      => '1.0',
    'author'       => 'OXID Support',
    'extend'       => [
        'oxERPSoapGatewayConfiguration' => OxidSupport\ErpPluginModule\Configuration\Example::class,
        'oxERPSoapGateway'              => OxidSupport\ErpPluginModule\Gateway\Example::class,
    ],
];
