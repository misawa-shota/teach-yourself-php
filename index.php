<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $data = 'リオとニンザブロウとナミとリンリン';

    print_r(explode('と', $data));
    print_r(explode('や', $data));
    print_r(explode('と', $data, 2));
    print_r(explode('と', $data, -2));

  ?>
</body>
</html>