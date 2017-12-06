<html>
<head>
    <title>EC</title>
    <meta charset="uft-8">
</head>
<body class>
<h1></h1>
<div>
<?= $item->name ?>
<?= $item->price ?> 円
<form action="/cart/<?= $item->id ?>" method="POST">
    <?= csrf_field() ?>
    <input type="submit" value="カートに追加する">
</form>
</div>
</body>
</html>

