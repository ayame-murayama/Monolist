<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>今日の占い</title>
        <link rel="stylesheet" href="test_class.css">
    </head>
    <body>
    	<h1>今日の運試し!</h1>
        <form action="test_class.php" method="post">
        あなたの今の気分に一番近いものを選んでみてください!<br>
        　　<img src="tutorial/inu1.jpg">
            <input type="radio" name="kibun" value="1" checked>1
            <img src="tutorial/inu2.jpg">
            <input type="radio" name="kibun" value="2" checked>2
            <img src="tutorial/inu3.jpg">
            <input type="radio" name="kibun" value="3" checked>3
            <img src="tutorial/inu4.jpg">
            <input type="radio" name="kibun" value="4" checked>4<br>
            <input type="submit">
            <input type="reset">
        </form>
        
        <p>気になる結果は...?</p>
        <?php 
          $select=$_POST['kibun'];
          switch($select){
          	case "1":
          		$kekka="awesome!";
          		break;
          	case "2":
          		$kekka="good";
          		break;
          	case "3":
          		$kekka="so so";
          		break;
          	case "4":
          		$kekka="bad";
          		break;
          }
          print("${select}のわんちゃんを選んだあなたの今日の運勢は${kekka}です");
        ?>
    </body>
</html>