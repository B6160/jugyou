<html>
<head>
    <title>EC</title>
    <meta charset="uft-8">
</head>
<body class>
<h1>カート</h1>
<p> カートの中身 </p>
<?php foreach($cartItems as $item): ?>
    <div>
        <?= $item->name ?>
        <?= $item->price ?> 円
    </div>



<?php endforeach; ?>
<a href="/cart/delete"><button>空にする</button></a>

    <a href="/"> TOPへ </a>

<a href="/buy"><button>購入画面へ</button></a>

</body>
</html>