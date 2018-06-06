<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
    <?= $this->Html->css(['../dist/css/style.css', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css']) ?>
    <title>Unify</title>
</head>
<body class="<?= $class ?>">
    <?= $this->fetch('content') ?>
</body>
</html>
