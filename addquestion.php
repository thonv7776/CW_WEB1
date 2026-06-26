<?php
if (isset($_POST['title'])) {
    try {
        include 'includes/DatabaseConnection.php';
        $image = $_FILES['image']['name'] ?? null;
        if ($image) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);
        }

        $sql = 'INSERT INTO questions SET 
                title = :title,
                content = :content,
                image = :image,
                user_id = :user_id,
                module_id = :module_id';
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':image', $image);
        $stmt->bindValue(':user_id', $_POST['user_id']);
        $stmt->bindValue(':module_id', $_POST['module_id']);
        $stmt->execute();
        
        header('location: questions.php'); 
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include 'includes/DatabaseConnection.php';
    $title = 'Add a new question';
    $users = $pdo->query('SELECT * FROM users');
    $modules = $pdo->query('SELECT * FROM modules');
    
    ob_start();
    include 'templates/addquestion.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';
?>