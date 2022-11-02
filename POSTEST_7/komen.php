<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="komen.css">
    <title>Document</title>
</head>
<body>
<div class="contain">
    <table border="2">
        <tr>
            <td colspan="4" align="center" class="td1">KOMENTAR</td>
        </tr>
        <tr>
            
                <td>NAMA</td>
                    <!-- <?php
                        ob_start();
                        include('Rarea.php');
                        ob_end_clean();
                    ?>
                    <li>nama : <?php echo($un)?></li> 

                    <li>umur : <?php echo($ag)?></li> 
                    <li>riddle favorite :<?php echo($fav) ?></li>
                    <li>email :<?php echo($em) ?></li>
                </ul> -->
            <td>UMUR</td>
            <td>RIDLE FAVORITE</td>
            <td>EMAIL</td>
        </tr>
        <tr>
            <td><?php echo($un)?></td>
            <td><?php echo($ag)?></td>
            <td><?php echo($fav) ?></td>
            <td><?php echo($em) ?></td>
        </tr>
        <tr>
            <td colspan="4" class="td1">saran</td>
        </tr>
        <tr>
            <td colspan="4" ><i><?php echo($num) ?></i class="saran"></td>
        </tr>
    </table>
    <p><a href="index.html" >kembali</a></p>
</div>
</body>
</html>