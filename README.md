transip-api-bundle
==================

A Symfony2 bundle for the TransIP API


Installation
============

Run the following command
```sh
composer require dopee/transip-api-bundle
```

Register bundle in AppKernel
```php
#app/AppKernel.php
$bundles = array(
  ...
  new Dopee\TransipApiBundle\TransipApiBundle()
);
```

Configuration
=============
```yaml
#app/config/config.yml
transip_api:
    login       : "%transip_login%"
    private_key : "%transip_privatekey%"
    read_only   : "%transip_readonly%"
```

```yaml
#parameters.yml
parameters:
     transip_login:      yourusername
     transip_privatekey: "yourkey"
     transip_readonly:   true
```

Info: privatekey is a multiline key from transip, just remove the breaks to create a one-liner
