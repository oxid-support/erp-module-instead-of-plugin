<?php declare(strict_types=1);


namespace OxidSupport\ErpPluginModule\Configuration;

class Example extends Example_parent
{
    public function getConfiguration()
    {
    	$parentConfiguration = parent::getConfiguration();
    
    	$configuration = [
	    'OXERPGetMyErpType' => [
	        'request' => [
	            'sSessionID' => ['minOccurs' => '1', 'type' => 's:string'],
	            'identifier' => ['minOccurs' => '1', 'type' => 's:string']
	        ],
	        'response' => [
	            'OXERPGetMyErpTypeResult' => ['type' => 'tns:OXERPType'],
	        ]
	    ],
        ];

        return $parentConfiguration + $configuration;
    }
}
