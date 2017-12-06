<html>
<head>
    <title>EC</title>
    <meta charset="uft-8">
</head>
<body class>
<h1>ECサイト</h1>
<?php foreach($items as $item): ?>

<div>
    <?= $item->name ?>
    <?= $item->price ?> 円
     <img style="width: 300px; height: 200px;" src="<?= $item->img ?>">
    <a href="/detail/<?= $item->id ?>"> 詳細 </a>

</div>
<?php endforeach; ?>
</body>
</html>

