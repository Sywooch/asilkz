<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 08.09.15
 * Time: 12:14
 */

namespace app\modules\cms\widgets;


use yii\base\Widget;

class Reviews extends Widget{

    public function run()
    {
        $model = new \app\modules\cms\models\Reviews();
        return $this->render('reviews',['model'=>$model]);
    }

}