<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
  try {
    $db = new PDO('mysql:dbname=mydb;host=localhost;port=3306;charset=utf8', 'root', 'root');
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    // 以下の記述をして投稿してきた内容を保存する際に安全を確保して保存する必要がある。
    $statement->execute(array($_POST['memo']));
  } catch(PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
  }
?>
</pre>
</main>
</body>    
</html>