<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 27.08.15
 * Time: 11:42
 */

namespace app\modules\cms\components;


use alexBond\thumbler\Thumbler;
use yii\base\Behavior;

class CmsBehavior extends Behavior{

    private $imageThumb = 'http://placehold.it/';

    public function imageSrc($size,$method = Thumbler::METHOD_NOT_BOXED)
    {
        if(!method_exists($this->owner,'getImage'))
            return $this->imageThumb.$size;

        $image = $this->owner->image;
        return $image ? $image->resize($size,$method) : $this->imageThumb.$size;
    }

}