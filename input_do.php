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
<h2>MEMO</h2>
<pre>
<?php
  require('dbconnect.php');
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    // 以下の記述をして投稿してきた内容を保存する際に安全を確保して保存する必要がある。
  $statement->execute(array($_POST['memo']));
  $statement->execute();
  echo 'メッセージが登録されました';
?>
</pre>
</main>
</body>    
</html>