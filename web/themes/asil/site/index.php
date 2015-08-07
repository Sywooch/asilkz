<?php
/* @var $this yii\web\View */
/* @var $accessToken yii\authclient\OAuthToken */
use yii\helpers\Url;
$theme = $this->theme;
?>

<div class="row">
    <div class="col-md-12">
        <h4>Поиск людей:</h4>
        <div class="well">
            
        </div>
    </div>
</div>

<div class="row">
    
    <div class="col-md-4">
        <?=$this->render('@app/modules/reviews/views/profile/_user.php')?>
    </div>
    
    <div class="col-md-4">
        <?=$this->render('@app/modules/reviews/views/profile/_user.php')?>
    </div>
    
    <div class="col-md-4">
        <?=$this->render('@app/modules/reviews/views/profile/_user.php')?>
    </div>
    

</div>