<?php

use \yii\helpers\Url;
use \yii\helpers\Html;
?>

<h1>Helow semua</h1>
<a href="<?= Url::to(['about']) ?>">About Us</a>
<?= Html::a('Contact Us', ['site/contact']) ?>