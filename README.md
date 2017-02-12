# yii2-bootbox
```
https://github.com/makeusabrew/bootbox
```
composer.json
---------
```json
"require": {
    "sankam/yii2-bootbox": "*"
},
```

In View
---------
```php
use sankam\bootbox\BootboxAsset;
BootboxAsset::register($this);

//register with replace Yii.confirm
BootboxOverrideAsset::register($this);
//OR
BootboxAsset::registerWithOverride($this);
```
