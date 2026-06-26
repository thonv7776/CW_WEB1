<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';

        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

        $sql = 'INSERT INTO joke SET 
        joketext = :joketext,
        jokedate = CURDATE(),
        image = :image,
        authorid = :authorid,
        categoryid = :categoryid';
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':image', $image);
        $stmt->bindValue(':authorid', $_POST['authors']);
        $stmt->bindValue(':categoryid', $_POST['categories']);
        $stmt->execute();
        header('location: jokes.php');
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include 'includes/DatabaseConnection.php';
    $title = 'Add a new joke';
    $sql_a = 'SELECT * FROM author';
    $authors = $pdo->query($sql_a);
    $sql_c = 'SELECT * FROM category';
    $categories = $pdo->query($sql_c);
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';
?>