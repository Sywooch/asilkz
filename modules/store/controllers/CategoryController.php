<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 28.07.15
 * Time: 12:26
 */

namespace app\modules\store\controllers;


use app\modules\store\models\Category;
use app\modules\store\models\Product;
use yii\web\Controller;
use yii\web\HttpException;

class CategoryController extends Controller{

    public function actionView($alias)
    {
        /** @var $category Category */
        $category = Category::find()->where(['alias'=>$alias])->one();

        if(!$category)
        {
            throw new HttpException(404,'Категория товара не найдена');
        }

        $q = \Yii::$app->request->get('q');
        if(!empty($q))
        {
            $products = Product::find()->where(['categoryId'=>$category->id])->visible()->andWhere(['like','title',$q])->all();
        }
        else
        {
            $products = $category->products;
        }

        return $this->render('view',['category'=>$category,'products'=>$products,'q'=>$q]);
    }



}