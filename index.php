<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-practice</title>
</head>
<body>
  <?php
    $books = [
      ['title' => '独習Python', 'price' => 3000],
      ['title' => '独習Java','price' => 2000],
      ['title' => '独習PHP', 'price' => 4000]
    ];

    $title = [];
    foreach ($books as $book) {
      ['title' => $title[]] = $book;
    }
    print_r($title);
  ?>
</body>
</html>