<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
 </head>
 <body>
 	<table>
 	<?php
 		echo "{$_POST['username']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silverado";
 		echo "<br>";
 		echo "{$_POST['email']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inside Out";
 		echo "<br>";
 		echo "{$_POST['phonenumber']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$_POST['movieday']},&nbsp;{$_POST['movietime']}"
 		echo "<br>";
 		echo "<br>";
 		if ($_POST['samovieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Adult seats</td>
                    <td>$12.00</td>
                    <td>{$_POST['samovieseat']}</td>
                    <td>{$_POST['samovieseatnum']}</td>
                    <td>{$_POST['saprice']}</td>
                    </tr>";

                if ($_POST['spmovieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Concession seats</td>
                    <td>$12.00</td>
                    <td>{$_POST['spmovieseat']}</td>
                    <td>{$_POST['spmovieseatnum']}</td>
                    <td>{$_POST['spprice']}</td>
                    </tr>";

                if ($_POST['scmovieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Child seats</td>
                    <td>$12.00</td>
                    <td>{$_POST['scmovieseat']}</td>
                    <td>{$_POST['scmovieseatnum']}</td>
                    <td>{$_POST['scprice']}</td>
                    </tr>";

                if ($_POST['famovieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>First Class Adult seats</td>
                    <td>$12.00</td>
                    <td>{$_POST['famovieseat']}</td>
                    <td>{$_POST['famovieseatnum']}</td>
                    <td>{$_POST['faprice']}</td>
                    </tr>";

                if ($_POST['fcmovieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>First Class Child seats</td>
                    <td>$12.00</td>
                    <td>{$_POST['fcmovieseat']}</td>
                    <td>{$_POST['fcmovieseatnum']}</td>
                    <td>{$_POST['fcprice']}</td>
                    </tr>";
                if ($_POST['b1movieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Beanbag seats (single person)</td>
                    <td>$12.00</td>
                    <td>{$_POST['b1movieseat']}</td>
                    <td>{$_POST['b1movieseatnum']}</td>
                    <td>{$_POST['b1price']}</td>
                    </tr>";

                if ($_POST['b2movieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Beanbag seats (Up to 2 people)</td>
                    <td>$12.00</td>
                    <td>{$_POST['b2movieseat']}</td>
                    <td>{$_POST['b2movieseatnum']}</td>
                    <td>{$_POST['b2price']}</td>
                    </tr>";

                if ($_POST['b3movieseat']!="0")
                    echo
                    "<tr class='table-background-second'>
                    <td>Beanbag seats (Up to 3 children)</td>
                    <td>$12.00</td>
                    <td>{$_POST['b3movieseat']}</td>
                    <td>{$_POST['b3movieseatnum']}</td>
                    <td>{$_POST['b3price']}</td>
                    </tr>";
                ?>
    </table>
</body>
</html>

