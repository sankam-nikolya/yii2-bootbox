<?php
namespace sankam\bootbox;

use Yii;
use yii\web\AssetBundle;

class BootboxOverrideAsset extends BootboxAsset
{

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $script = '
            yii.confirm = function(message, ok, cancel) {
                bootbox.confirm(message, function(result) {
                    if (result) { !ok || ok(); } else { !cancel || cancel(); }
                });
            }
        ';

        $view->registerJs(preg_replace('/(\t+|\n|\s{2,})/', '', $script));

        if (Yii::$app->language !== null && strlen(Yii::$app->language) >= 2) {
            $view->registerJs('bootbox.setDefaults({locale: "' . substr(Yii::$app->language, 0, 2) . '"});');
        }
    }
}
