<?php

namespace uran1980\yii\assets;

use Yii;
use yii\web\AssetBundle;

class TextareaAutosizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/autosize/dest';
    public $js = [
        'autosize.min.js',
    ];

    /**
     * Initializes the bundle.
     * If you override this method, make sure you call the parent implementation in the last.
     */
    public function init()
    {
        $js = <<<SCRIPT
!(function ($) {
    autosize($('textarea'));
})(window.jQuery);
SCRIPT;
        Yii::$app->view->registerJs($js, \yii\web\View::POS_READY);
    }
}