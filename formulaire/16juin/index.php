<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>formulaire</title>
</head>
<body>
    <form action="traitement.php" method="post">
    
    <div>
    First name<span>*</span>:<br>
    <input type="text" name="firstname" >
    </div>
        
    <div>
    Last name<span>*</span>:<br>
    <input type="text"  name="lastname">
    </div>

    <div>
    Email address<span>*</span>:<br>
    <input type="text"  name="email">
    </div>

    <div>
        <input type="submit" value="Send">
    </div>
    </form>
</body>
</html>