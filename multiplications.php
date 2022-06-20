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
    <table align="left" border="1" cellpadding="3" cellspacing="0">
        <tbody>
        <?php for ($i=1; $i <=6; $i++): ?>
           
            <tr >  
            <?php for ($j=1; $j <=5 ; $j++): ?>
            <td> 
            <?php echo $i .'*'. $j .'= '.$i*$j ?>
            </td>

            <?php endfor ?>
            </tr>
        <?php endfor ?> 
        </tbody>
    </table>
</body>
</html>