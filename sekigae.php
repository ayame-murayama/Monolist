<!DOCTYPE html>
<html lang= "ja">
    <head>
        <meta charset="UTF-8">
        <title>席替えfor Kara-age</title>
        <link rel="stylesheet" href="sekigae.css">
    </head>
    <body>
      <div class="main">
          <img src="tutorial/title.png" name="head">
        <h3><span class="moji1">🌷Please input your name!🌷</span></h3>
        <form action="index.php"  method="POST">
            <span class="label">
            <label>member1: <input type="text" name="aa"></label>
            <label>member</label>2: <input type="text" name="bb"></label><br>
            <label>member3: <input type="text" name="cc"></label>
            <label>member4: <input type="text" name="dd"></label><br>
            <label>member5: <input type="text" name="ee"></label><br>
            <input id="submit" type="submit" value="Let's change sheet">
            </span>
        </form>
        <?php
        $a=$_POST['aa'];
        $b=$_POST['bb'];
        $c=$_POST['cc'];
        $d=$_POST['dd'];
        $e=$_POST['ee'];
        $f=[$a,$b,$c,$d,$e];
        shuffle($f);
        ?>
        <br>
        <h3><span class="moji2">🌼New Seating is Here!🌼</span></span></h3>
        <table border=1>
            <tbody>
                <tr>
                    <td id="td1"><?php print ("$f[0]");?></td>
                    <td id="td2"><?php print ("$f[1]");?></td>
                    <td id="td3"></td>
                </tr>
                <tr>
                    <td id="td4"><?php print ("$f[2]");?></td>
                    <td id="td5"><?php print ("$f[3]");?></td>
                    <td id="td6"><?php print ("$f[4]");?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </body>
</html>


