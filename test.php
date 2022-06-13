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
        <?php if ((($column == 1 || $column == 5) && $row != 0) || (($row == 0 || $row == 3) && ($column > 1 && $column < 5))): ?>
            <?= "*" ?>
        <?php else: ?>
            <?= " " ?>
        
        <?php endif ?>
        <?php endfor ?> 
        <?php endfor ?> 

    </div>
</body>
</html>