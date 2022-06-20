<?php
$host = 'localhost';
$db = "vente";
$user = "root";
$password = "";
// $charset = "utf8";
// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES => false,
// ];
try{
    //connection
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    echo "connexion etablie";
} catch (PDOException $e) {
    print "Error! :" .$e->getMessage()."<br>";
    die();
} //query 
$requestQuery = "Select * from client";
$result = $pdo->query($requestQuery); //execute query
echo "<pre>";
//var_dump($result)//this gives u the first result of the table
while($row = $result->fetch()){ //retreive results
//var_dump($row);
 echo 'id :'.$row['id'].'<br>';
 echo 'name :'.$row[1].'<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    
    <form action="managementform.php" method="post" enctype="multipart/form-data">
    <h2>Reservation form</h2>
    <span>*</span>denotes mandatory
    <br>
        <div>
        Full name<span>*</span>:<br>
        <input type="text" name="fullname" placeholder="FirstName LastName">
        </div>
        
        <div>
        Email address<span>*</span>:<br>
        <input type="text" name="email">
        </div>
        
        <div>
        Select Tour Package<span>*</span>:<br>
        <select name="package">
            <option value="goa">Goa</option>
            <option value="mexico">Mexico</option>
            <option value="bali">Bali</option>
            <option value="maldives">Maldives</option>
        </select>
        </div>
    
        <div>
        Arrival date<span>*</span>:<br>
        <input type="date" name="arrDate">
        </div>
        <div>
        Departure date<span>*</span>:<br>
        <input type="date" name="depDate">
        </div>
        <div>
        Number of persons<span>*</span>:<br>
        <input type="number" name="numPpl">
        </div>
        <div>
        ID scan:<input type="file" name="idscan"><br>
        </div>
        <div>
        What would you want to avail?<span>*</span>:<br>
        <p>Boarding</p><input type="checkbox" name="avail[]" value="Boarding">
        <p>Fooding</p><input type="checkbox" name="avail[]" value="Fooding">
        <p>Sight seeing</p><input type="checkbox" name="avail[]" value="Sight seeing">
        </div>

        <div>
        Discount Coupon code:<br>
        <input type="text" name="coupon">
        </div>

        <div>
        Terms of conditions<span>*</span>:<br>
        <p>I agree</p><input type="radio" name="terms">
        <p>I disagree</p><input type="radio" name="terms">
        </div>

        <button type="submit">Complete reservation</button>
    </form>
</body>
</html>