<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing board game</title>
</head>
<body>
    <h3>lets draw an "A" </h3>
    <div align="left" border="1">
<!-- Expected Output:

  ***                                                       
 *   *                                                      
 *   *                                                      
 *****                                                      
 *   *                                              
 *   *                                                      
 *   *                                                      
 *   * 
quand ligne 1 et 4, et col!= 1et5  
quand ligne != 1,  et  col =1ou =5
 -->
        <?php for ($row=0; $row <=7; $row++): ?>
            <?php for ($col=0; $col <=5; $col++): ?>
        <?php if ((($row==1 || $row==4) && ($col !=1 && $col!=5)) && (($row !=1) && ($col ==1 || $col==5))): ?>
            <?= "*" ?>
            
        <?php else: ?>
            <?= " " ?>
            <?= "<br>"?>
        <?php endif ?>
        <?php endfor ?> 
        <?php endfor ?> 

    </div>
</body>
</html>