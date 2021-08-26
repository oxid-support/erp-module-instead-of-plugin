<?php declare(strict_types=1);


namespace OxidSupport\ErpPluginModule\Gateway;

class Example extends Example_parent
{
    public function ExampleModuleAsPlugin($parameters)
    {
        var_dump($parameters);
        exit;
    }
}
