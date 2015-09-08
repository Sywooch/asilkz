<?php
/**
 * @var $this \yii\web\View
 */
?>
<?php $this->beginPage()?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $this->title ?></title>
        <link rel="stylesheet" href="<?=$this->theme->getUrl('css/print.css')?>"/>
        <?=$this->head()?>
    </head>
    <body>
        <?php $this->beginBody()?>
        <div class="print-area">
            <?= $content ?>
        </div>
        <?php $this->endBody()?>
        <script>
            window.print();
        </script>
    </body>
</html>
<?php $this->endPage()?>