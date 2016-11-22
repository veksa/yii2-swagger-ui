<?
use veksa\swagger\yii2\SwaggerUiAsset;

/**
 * @var $content string
 */

SwaggerUiAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= Yii::$app->name ?></title>
    <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css"/>
    <? $this->head() ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="swagger-section">
<? $this->beginBody() ?>

<?= $content ?>

<? $this->endBody() ?>
</body>
</html>
<? $this->endPage() ?>
