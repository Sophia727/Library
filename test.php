<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing board game</title>
</head>
<body>
    <h3>lets build a board</h3>
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
 -->
        <?php for ($row=0; $row <=7; $row++): ?>
            <?php for ($col=0; $col <=7; $col++): ?>
        <?php if ((($col == 1 || $col == 5) && $row != 0) || (($row == 0 || $row == 3) && ($col > 1 && $col < 5))): ?>
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