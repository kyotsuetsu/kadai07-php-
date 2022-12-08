<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$birthPlace = $_POST['birthPlace'];
$gender = $_POST['gender'];
$birthDay = $_POST['birthDay'];
$language = $_POST['language'];



// 変数を用意
$time = date("Y-m-d H:i:s");

// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
$str = $time . ' / ' . $name . ' /' .  $mail . ' /' . $birthPlace .' /' . $gender . ' / ' .$birthDay. '/ ' .$language  ;

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);


//メアド判定
function is_mail($str) {
	if (preg_match('/^[a-z0-9._+^~-]+@[a-z0-9.-]+$/i', $str)) {
		return true;
	} else {
		return false;
	}
}

if (is_mail('xxx@xxx.com') === true) {
	// メールアドレスの場合
}

if (is_mail('xxx@xxx.com') === false) {
	// メールアドレスではない場合

    console.log("mail");
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Chitalk</title>
    <style>
        .form_wrapper{
            
            display:flex;
            flex-flow: column;
            justify-content:space-between;
        }

        h1{
            position: relative;
            padding: 0.6em;
            background: #e0edff;
        }

        h1:after {
            position: absolute;
            content: '';
            top: 100%;
            left: 30px;
            border: 15px solid transparent;
            border-top: 15px solid #e0edff;
            width: 0;
            height: 0;
        }



    </style>
</head>

<body>

        <h1>Chitalk</h1>

    <div class="form_wrapper">
        <h2>新規登録</h2>
        <form action="write.php" method="post">
        <ul>
        <li class="name">
            <label for="name">ニックネーム:<label>
            <input type="text" name="name">
        <li class="email">
            <label for="email">Email:</label>    
             <input type="text" name="mail">
        <li class="gender">
            <label for="gender">性別:</label> 
            <!-- <input type="text" name="gender"> -->
            <select name="gender">
                <option>男</option>
                <option>女</option>
                <option>無回答</option>
            </select>
        <li class="birthPlace">
            <label for="birthPlace">都道府県:</label> 
            <input type="text" name="birthPlace">
        <li class="birthDay">
            <label for="birthDay">誕生日:</label>    
            <input type="text" name="birthDay">
        <li class="language">
            <label for="language">中国語レベル:</label>      
            <!-- <input type="text" name="language"> -->
            <select name="language">
                <option>初級（HSK1~2級程度)</option>
                <option>中級（HSK3~4級程度)</option>
                <option>上級（HSK5~6級程度)</option>
            </select>

            <input type="submit" value="送信">
         </ul>
        </form>
    </div>
</body>

</html>


