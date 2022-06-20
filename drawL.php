<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw L with php</title>
</head>
<body>

<!--  *   
expected outcome: 

 *                                                          
 *                                                          
 *                                                          
 *                                                          
 *                                                          
 *****  

-->
    <h2>let's draw L with php</h2>
    
    <?php for($row=0;$row<=7;$row++): ?>
        <?php for($col=0;$col<=5;$col++): ?>
            <?php if($row !=0 && $col==1): ?>
                <?= "* <br>" ?>
            <?php elseif($row==7 && $col!=0): ?>
                <?= "*" ?>
            <?php else: ?>
                <?= " " ?>
            <?php endif ?>
            <?php endfor ?>
            <?php endfor ?>

        </body>
</html>