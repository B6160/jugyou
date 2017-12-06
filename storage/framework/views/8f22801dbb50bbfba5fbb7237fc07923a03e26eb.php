<html>
<head>
    <title>カート</title>
    <meta charset="uft-8">
</head>
<body class>
<h1>カート</h1>
<p> カートの中身 </p>
<?php foreach($items as $item): ?>
<div>
    <?= $item->name ?>
    <?= $item->price ?> 円
</div>
<?php endforeach; ?>
</body>
</html>