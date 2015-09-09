<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 21.07.15
 * Time: 16:38
 */

namespace app\modules\cms\controllers;


use app\modules\cms\models\Image;
use app\modules\cms\models\Reviews;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

class ReviewsController extends Controller{

    public function actionIndex()
    {
        $items = Reviews::find()->visible()->orderBy('id')->all();
        return $this->render('index',['items'=>$items]);
    }

    public function actionCreate()
    {
        $model = new Reviews();
        $model->scenario = 'site.create';

        if($model->load($_POST))
        {
            $model->file = UploadedFile::getInstance($model, 'file');

            if (\Yii::$app->request->isAjax) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }

            if($model->validate())
            {
                $model->save();

                if ($model->file) {
                    $image = new Image();
                    $image->model = $model::className();
                    $image->primaryKey = $model->id;
                    $filename = md5($model::className() . $model->id . $model->file->name) . '.' . $model->file->extension;
                    $image->src = $filename;
                    $model->file->saveAs(\Yii::getAlias(Image::FILE_DIROOT) . $filename);
                    $image->save(false);
                }
            }
        }

        return $this->redirect(\Yii::$app->request->referrer);
    }
}