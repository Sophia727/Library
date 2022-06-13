<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard creation with php</title>
</head>
<body>
    <h2>chess board coming here : </h2>
    <!-- Write a PHP script using nested for loop 
    that creates a chess board as shown below.
    Use table width="270px" and take 
    30px as cell height and width. 


8 cells per row and per column-->

    <table width=270px border=2px>
        <tbody>
            <?php for($row =1; $row <= 8; $row++):?>
            <tr>
                <?php for($cln =1; $cln <=8; $cln++): ?>
                <?php if($cln % 2 == 0): ?>
                <td style="background-color:black; height:30px; width:30px"> </td>;
                <?php else: ?>
                <td style="background-color:white; height:30px; width:30px"> </td>;
            <?php endif ?>
            <?php endfor ?>
            
            </tr>
            <?php endfor ?>
        <!-- </tbody> -->
    </table>
</body>
<!-- ($row % 2 == 0){ -->
</html>
