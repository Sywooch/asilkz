<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 21.07.15
 * Time: 11:18
 */

namespace app\modules\cms\controllers;


use app\modules\cms\models\Article;
use yii\web\Controller;
use yii\web\HttpException;

class ArticleController extends Controller{

    public function actionList($type)
    {
        $q = \Yii::$app->request->get('q');
        $item = new Article();
        $typeId = Article::getTypeIdByAlias($type);
        if(!$typeId)
        {
            throw new HttpException(404,'Категория статей не найдена');
        }
        $item->type = $typeId;
        $article = Article::find()->type($type);
        if($q)
        {
         $article->andWhere(['like','title',$q]);
        }
        $items = $article->all();
        return $this->render('list',['items'=>$items,'item'=>$item, 'q' => $q,'type'=>$type]);
    }

    public function actionView($type,$alias)
    {
        $item = Article::find()->type($type)->alias($alias)->one();
        if(!$item)
        {
            throw new HttpException(404,'Статья не найдена');
        }
        return $this->render('view',['item'=>$item,'type'=>$type]);
    }

}