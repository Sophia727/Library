<?php 
require_once 'database.php';

// if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['descr']) || empty($_POST['pubDate'])){
//     echo 'Please enter book info';
// }
if(empty($_POST['title'])){
    echo "title empty";
} elseif(empty($_POST['author'])){
    echo "author empty";
} elseif(empty($_POST['descr'])){
    echo "descr empty";
}
else {
    if(strlen(trim($_POST['title'])) <= 1 || strlen(trim($_POST['author'])) <= 1){
        echo "Kindly enter correct data";
    } 
    else {
        //echo "Ok. Now let's publish books"; 
        $title = $_POST['title'];
        $author = $_POST['author'];
        $descr = $_POST['descr'];
        $pubDate = $_POST['pubDate'];

        $request = "INSERT INTO books (Title, Author, Description, Publication_date) VALUES ('$title', '$author', '$descr', '$pubDate')";
        $execute = $pdo->query($request);

        echo "inserted";  
 
        header('location:booklist.php');

    }
}

?>