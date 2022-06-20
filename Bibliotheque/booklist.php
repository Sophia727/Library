<?php

require_once 'database.php';

$requete = "SELECT * FROM books";
$execute= $pdo->query($requete);

// $result = $execute->fetch();

// delete code line
if(isset($_GET['id'])){
    $requete = "DELETE FROM books WHERE id_book=$_GET[id]";
    $result = $pdo->query($requete);
    if($result){
        header ('location:booklist.php');
    }
}
// search
 if(isset($_POST['search'])){
   $search = $_POST['search'];
   $req = "SELECT * FROM books WHERE Title LIKE '%".$search."%'";
   echo $req;
   $execute = $pdo->query($req);
   //echo $req;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Book List</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-dark bg-dark">
      <a class="navbar-brand" href="http://localhost/fs8/Bibliotheque/booklist.php">Library</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/fs8/Bibliotheque/index.php">Add Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/fs8/Bibliotheque/booklist.php">Books</a>
        </li>
      </ul>
    </nav>

    <!-- search bar -->
      <form method="post">
      
        <div class="row" style="margin-top:10px;">
          <div class="input-group">
        
          <div class="form-outline col-md-11">
            <input type="search" name="search" placeholder="Search" class="form-control"> 
          </div>

          <div class="col-md-1">
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
    
          </div>
        </div>
        </form>
  <!-- booklist -->
        <span class="form-control bg-secondary p-2 text-dark bg-opacity-25" style="font-size:larger;">Book List</span>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Description</th>
              <th scope="col">Publication Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php while($result = $execute->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
              
              <td><?=$result['id_book']?></td>
              <td><?= $result['Title']?></td>
              <td><?= $result['Author']?></td>
              <td><?= $result['Description']?></td>
              <td><?= $result['Publication_date']?></td>
              <td>
                <a href="update.php?id=<?=$result['id_book']?>"><button class="icon" style="background-color:darkblue; color:white; border-radius:5px; border:none;"><i class="fa-solid fa-pen-to-square"></i></button></a>
                <a href="booklist.php?id=<?=$result['id_book'] ?>"><button class="icon" style="background-color: red ; color:white; border-radius:5px; border:none; "><i class="fa-solid fa-trash-can"></i></button></a>
              </td>
              
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>


    
      <script src="https://kit.fontawesome.com/5c45cf9def.js" crossorigin="anonymous"></script>

  </body>
</html>