<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $add = bcadd(0.1, 0.7, 1);
    $mul = bcmul($add, 10, 1);
    print floor($mul);
  ?>
</body>
</html>