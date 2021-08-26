<?php declare(strict_types=1);


namespace OxidSupport\ErpPluginModule\Configuration;

class Example extends Example_parent
{
    public function getConfiguration()
    {
        $parentConfiguration = parent::getConfiguration();

        $configuration = [
            'ExampleModuleAsPlugin' => [
                'request' => [
                    'sSessionID' => ['minOccurs' => '1', 'type' => 's:string'],
                    'identifier' => ['minOccurs' => '1', 'type' => 's:string']
                ],
                'response' => [
                    'ExampleModuleAsPlugin' => ['type' => 'tns:OXERPType'],
                ]
            ],
        ];

        return $parentConfiguration + $configuration;
    }
}
