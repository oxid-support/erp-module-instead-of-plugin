<?php declare(strict_types=1);


namespace OxidSupport\ErpPluginModule\Gateway;

class Example extends Example_parent
{
    public function OXERPGetMyErpType($parameters)
    {
        var_dump($parameters);exit;
        //$where = ''; //enter condition here
        //return $this->_export(\MyModule\MyErpInterface\Core\ErpType::class, $where);
    }
}
