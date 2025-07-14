<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) { continue; }
      $sum += $i;
    }
    print $sum;
  ?>
</body>
</html>