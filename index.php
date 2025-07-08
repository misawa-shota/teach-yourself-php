<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $score = 90;
    switch ($score) {
      case $score >= 90:
        print '優';
        break;
      
      case $score >= 70:
        print '良';
        break;
      
      case $score >= 50:
        print '可';
        break;

      case 50 > $score:
        print '不可';
        break;
    };
  ?>
</body>
</html>