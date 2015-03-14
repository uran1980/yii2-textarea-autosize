# Yii2 Textarea Autosize

This component based on [A small, stand-alone script to automatically adjust textarea height](http://www.jacklmoore.com/autosize/).


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-textarea-autosize "dev-master"
```

or add

```
"uran1980/yii2-textarea-autosize": "dev-master"
```

to the require section of your ```composer.json```


## Usage

add as dependensy in you ```AssetBundle.php``` for example:

```php

namespace frontend\assets;

class YourAppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        'uran1980\yii\assets\TextareaAutosizeAsset',
        ...
    ];
}
```


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
