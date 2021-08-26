# erp-module-instead-of-plugin

# About
Example project for developing a module instead of ERP plugins.

### Benefits:
- Since the WSDL gets built dynamically, own methods can be registered and are listed in the WSDL with their specs. 
- Because of the listed specs of the own methods in the WSDL, the global plugin method doesn't need to be used anymore,  
  which means that the parameters of the plugins don't need to be documented somewhere else.
- Custom modules aren't affected during a shop update, the ERP directory, with its folder is. Custom plugins, stored in 
ERP module directory, are doomed to be overwritten.
  

# Requirements
- OXID eShop 6.3
- ERP module 3.1


# Installation
```shell
composer config repositories.oxid-support/erp-plugin-module vcs https://github.com/oxid-support/erp-module-instead-of-plugin.git
composer require oxid-support/erp-plugin-module
```
Activate the module _ERP Plugin as module example.

# Notes

Since the WSDL file is cached at multiple places, make sure the cache is deactivated during the development.

### PHP cache
One easy way to stop the PHP WSDL cache is to add this line to the bootstrap file:
`ini_set('soap.wsdl_cache_enabled', '0');`  
  
### Shop cache
THe WSDL file is freshly cached everytime the ERP module is newly activated. Remember: After making changes effecting
the WSDL file, reactivate the ERP module **or** delete the cached file in the directory `source/export/*.wsdl`.

# Example

Request
```xml
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:oxer="http://localhost/modules/erp/OXERPService">
   <soapenv:Header/>
   <soapenv:Body>
      <oxer:OxidSupportExampleModulePlugin>
         <oxer:sSessionID>$sessionId</oxer:sSessionID>
         <oxer:identifier>Value A</oxer:identifier>
      </oxer:OxidSupportExampleModulePlugin>
   </soapenv:Body>
</soapenv:Envelope>
```

Response
```
object(stdClass)#46 (2) {
  ["sSessionID"]=>
  string(32) "a7f484ac86c02ab206746e2a4e4211a8"
  ["identifier"]=>
  string(7) "Value A"
}
```