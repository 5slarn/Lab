<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="date" id="">
        <input type="text" name="dabao">
        <button type="submit">Enter</button>
    </form>
</body>
</html>

<?php if(!empty($_POST)): ?>
    <?php var_dump($_POST) ?>
<?php endif; ?>