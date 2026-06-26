<?php foreach($questions as $question): ?>
    <blockquote>
        <h3><?=htmlspecialchars($question['title'], ENT_QUOTES, 'UTF-8')?></h3>
        <p><?=htmlspecialchars($question['content'], ENT_QUOTES, 'UTF-8')?></p>

        <small>
            (by <a href="mailto:<?=htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8');?>">
            <?=htmlspecialchars($question['username'], ENT_QUOTES, 'UTF-8');?></a>) 
            | Module: <?=htmlspecialchars($question['module_name'], ENT_QUOTES, 'UTF-8');?>
        </small>
        <br><br>

        <?php if (!empty($question['image'])): ?>
            <img height="100px" src="images/<?=htmlspecialchars($question['image'], ENT_QUOTES, 'UTF-8'); ?>" /><br><br>
        <?php endif; ?>

        <a href="editquestion.php?id=<?=$question['question_id']?>">Edit</a><br><br>

        <form action="deletequestion.php" method="post">
            <input type="hidden" name="id" value="<?=$question['question_id']?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach;?>