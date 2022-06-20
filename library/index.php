<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Welcome page</title>
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
  <form action="traitement.php" method="post">
  <span class="form-control bg-secondary p-2 text-dark bg-opacity-25">Add New Book</span>
    <div class="mb-3">
      <label for="InputTitle" class="form-label">Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label for="InputAuthor" class="form-label">Author</label>
      <input type="text" class="form-control" name="author">
    </div>
    <div class="mb-3">
      <label for="InputDescription" class="form-label">Description</label>
      <textarea class="form-control" name="descr"></textarea>
      
    </div>
    <div class="mb-3 ">
      <label class="form-check-label" for="Check1">Date de Publication</label>
      <input type="date" class="form-control" name="pubDate">
    </div> 
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
    

</div>
</body>
</html>