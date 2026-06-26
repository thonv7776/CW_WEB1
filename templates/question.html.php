<?php foreach($jokes as $joke): ?>
    <blockquote>

        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?><br><br>

        (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8');?></a>)<br><br>

        <?php $display_date = date("D d M Y", strtotime($joke['jokedate']))?>
        <?=htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8')?><br><br>

        <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a><br><br>

        <img height="100px" src="images/<?=htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8'); ?>" /><br><br>

        (<?=htmlspecialchars($joke['category'], ENT_QUOTES, 'UTF-8');?> Category)


        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
    <?php endforeach;?>