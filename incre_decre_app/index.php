<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beginner app increment/ decrement</title>
</head>
<body>
    <h2>Calculations - Basics</h2>
    <form action="func.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            <label> select</label>
            <option value="inc">+</option>
            <option value="dec">-</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit">Calculate!</button>
    </form>
</body>
</html>