<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
 </head>
 <body>
    <!-- show the ditile of the tickets -->
 	<table>
        <tr border="1" style="width:100%">
            <td>
 	<?php
 		echo "{$_POST['username']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silverado";
 		echo "<br>";
 		echo "{$_POST['email']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inside Out";
 		echo "<br>";
 		echo "{$_POST['phonenumber']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['movieday']},&nbsp;{$_POST['movietime']}";
 		echo "<br>";
 		echo "<br>";
 		         if ($_POST['samovieseat']!="0")
                    echo
                    "{$_POST['samovieseat']}&nbsp;*&nbsp;Adult seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['saprice']}";

                if ($_POST['spmovieseat']!="0")
                    echo
                    "<br>
                    {$_POST['spmovieseat']}&nbsp;*&nbsp;Concession seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['spprice']}";

                if ($_POST['scmovieseat']!="0")
                    echo
                    "<br>
                    {$_POST['scmovieseat']}&nbsp;*&nbsp;Child seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['scprice']}";

                if ($_POST['famovieseat']!="0")
                    echo
                    "<br>
                    {$_POST['famovieseat']}&nbsp;*&nbsp;First Class Adult seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['faprice']}";

                if ($_POST['fcmovieseat']!="0")
                    echo
                    "<br>
                    {$_POST['fcmovieseat']}&nbsp;*&nbsp;First Class Child seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['fcprice']}";

                if ($_POST['b1movieseat']!="0")
                    echo
                    "<br>
                    {$_POST['b1movieseat']}&nbsp;*&nbsp;Beanbag seats (single person)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['b1price']}";

                if ($_POST['b2movieseat']!="0")
                    echo
                    "<br>
                    {$_POST['b2movieseat']}&nbsp;*&nbsp;Beanbag seats (Up to 2 people)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['b2price']}";

                if ($_POST['b3movieseat']!="0")
                    echo
                    "<br>
                    {$_POST['b3movieseat']}&nbsp;*&nbsp;Beanbag seats (Up to 3 children)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['b3price']}";
                ?>
            </td>
        </tr>
        <tr>
            <td>Silverado
                <br>
                Inside Out
                <?php echo "{$_POST['movieday']},&nbsp;{$_POST['movietime']}";?>
                <br>
                <br>
                <br>
                <br>
            </td>
        </tr>

    </table>
</body>
</html>

