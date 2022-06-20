<?php

require_once 'database.php';
// affichage
if(isset($_GET['id'])){
    $request = "SELECT * FROM books WHERE id_book=$_GET[id]";
    $execute = $pdo->query($request);
    $books = $execute->fetch();
 }
  // update
if(isset($_POST['update'])){

    if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['descr']) || empty($_POST['pubDate'])){
      echo 'Please enter book info';
    } 
    else {
      if(strlen(trim($_POST['title'])) <= 1 || strlen(trim($_POST['author'])) <= 1){
          echo "Kindly enter correct data";
      }  
      else {
      
          $id = $_GET['id'];
          $title = $_POST['title'];
          $author = $_POST['author'];
          $descr = $_POST['descr'];
          $pubDate = $_POST['pubDate'];

          $request = "UPDATE books  SET Title= '$title', Author='$author', Description='$descr', Publication_date='$pubDate' WHERE id_book=$id";
          $execute = $pdo->query($request);

          //echo "updated";  
          if($execute){
          header('location:booklist.php');
          } else {
            echo 'erreur';
          }
      }
    }
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
    <title>update</title>
</head>
<body>
  <!-- nav -->
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

<!-- form -->
<div class="container">
  <form method="post">
  <span class="form-control bg-secondary p-2 text-dark bg-opacity-25">Add New Book</span>
    <div class="mb-3">
      <label for="InputTitle" class="form-label">Title</label>
      <input type="text" name="title" value="<?=$books['Title']?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="InputAuthor" class="form-label">Author</label>
      <input type="text" name="author" value="<?=$books['Author']?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="InputDescription" class="form-label">Description</label>
      <textarea class="form-control" name="descr"><?=$books['Description']?></textarea>
      
    </div>
    <div class="mb-3 ">
      <label class="form-check-label" for="Check1">Date de Publication</label>
      <input type="date" name="pubDate" class="form-control" value="<?=$books['Publication_date']?>">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
    

</div>
</body>
</html>