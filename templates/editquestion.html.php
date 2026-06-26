<form action="" method="post">
    <input type="hidden" name="id" value="<?=$question['question_id'];?>">
    
    <label for="title">Title:</label><br>
    <input type="text" name="title" value="<?=htmlspecialchars($question['title'], ENT_QUOTES, 'UTF-8');?>" required><br><br>
    
    <label for="content">Edit your question here:</label><br>
    <textarea name="content" rows="5" cols="40" required><?=htmlspecialchars($question['content'], ENT_QUOTES, 'UTF-8');?></textarea><br><br>
    
    <input type="submit" name="submit" value="Save">
</form>