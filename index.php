<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $str = 'にわにはにわにわとりがいる';

    print mb_strpos($str, 'にわ').'<br/>';
    print mb_strpos($str, 'にわ', 2).'<br/>';
    print mb_strpos($str, 'にわ', -10).'<br/>';
    print mb_strpos($str, 'かに').'<br/>';
    print mb_strrpos($str, 'にわ').'<br/>';
    print mb_strrpos($str, 'にわ', -8).'<br/>';

  ?>
</body>
</html>