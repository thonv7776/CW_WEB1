<?php
include 'includes/DatabaseConnection.php';
try {
    if (isset($_POST['title'])) {
        
        $sql = 'UPDATE questions SET title = :title, content = :content WHERE question_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        header('location: questions.php');
    } else {
    
        $sql = 'SELECT * FROM questions WHERE question_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $question = $stmt->fetch();
        $title = 'Edit question';

        ob_start();
        include 'templates/editquestion.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Error editing question: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>