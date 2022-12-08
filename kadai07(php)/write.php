<?php

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $birthPlace = $_POST['birthPlace'];
    $gender = $_POST['gender'];
    $birthDay = $_POST['birthDay'];
    $language = $_POST['language'];

    $time = date('Y-m-d H:i:s');
    // ファイルに書き込み
    $file = fopen('data/data.txt', 'a');
    fwrite($file, $time . $name . $mail . $gender . $birthPlace . $birthDay. $language . "\n");
    fclose($file);
    //文字作成

?>


<html>

    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    
    <h1><?php echo htmlspecialchars(@$_POST['name'], ENT_QUOTES, 'UTF-8'); ?>さん。ようこそ！</h1>
    <h2>あなたが学んでいるのは<?php echo htmlspecialchars(@$_POST['language'], ENT_QUOTES, 'UTF-8'); ?>です。</h2>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>

<!-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>フォームサンプル１</title>
</head>
<body>
<p><?php echo htmlspecialchars(@$_POST['name'], ENT_QUOTES, 'UTF-8'); ?>さん。</p>
<p>あなたは、<?php echo (int)@$_POST['age']; ?> 歳です。</p>
</body>
</html> -->
