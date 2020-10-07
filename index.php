<?php
use frontend\models\Avatar ;
use yii\helpers\Html ;
use yii\helpers\Url ;
?>

<?php
    foreach($avatar as $avatarModel) { ?>
        <strong> Image: </strong> <?= Html::img(Url::to('@web/uploads/'.$avatarModel->image)) ?>
<?php } ?>