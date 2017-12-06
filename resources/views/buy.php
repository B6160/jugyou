<html>
<head>
    <title>EC</title>
    <meta charset="uft-8">
</head>
<body class>
<form action="/buy" method="POST">
    <?=csrf_field()?>
    <input type="text" name="name" value="名前">
    <input type="text" name="email">
    <input type="text" name="tel">
    <input type="text" name="address">
</form>
<?php if($errors->first('name')):?>
    名前を入力してください。
<?php endif;?>
<?php if($errors->first('email')):?>
    Emailを入力してください。
<?php endif;?>


</body>
</html>