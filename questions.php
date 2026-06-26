<?php
try {
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT q.question_id, q.title, q.content, q.image, u.username, u.email, m.module_name 
            FROM questions q
            INNER JOIN users u ON q.user_id = u.user_id
            INNER JOIN modules m ON q.module_id = m.module_id';

    $questions = $pdo->query($sql);
    $title = 'Questions List';

    ob_start();
    include 'templates/question.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>