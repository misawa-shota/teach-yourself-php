<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $rank = '南';
    $result = match($rank) {
      '甲' => '大変良いです。',
      '乙' => '良いです。',
      '丙' => 'もう少し頑張りましょう。',
      default => '???'
    };
    print $result;
  ?>
</body>
</html>