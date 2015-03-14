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
    // FIX: @see http://www.jacklmoore.com/autosize/#faq-hidden
    $('body').delegate('textarea', 'focus', function () {
        autosize($(this));
    });
})(window.jQuery);
SCRIPT;
        Yii::$app->view->registerJs($js, \yii\web\View::POS_READY);
    }
}