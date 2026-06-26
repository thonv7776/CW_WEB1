<form action="" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label><br>
    <input type="text" name="title" required><br><br>




    <label for="content">Type your question:</label><br>
    <textarea name="content" rows="5" cols="40" required></textarea><br><br>




    <label for="image">Upload Images:</label><br>
    <input type="file" name="image"><br><br>




    <label for="user_id">Select User:</label><br>
    <select name="user_id" required>
        <option value="">Select a user</option>
        <?php foreach ($users as $user): ?>
            <option value="<?=htmlspecialchars($user['user_id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>



    
    <label for="module_id">Select Module:</label><br>
    <select name="module_id" required>
        <option value="">Select a module</option>
        <?php foreach ($modules as $module): ?>
            <option value="<?=htmlspecialchars($module['module_id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($module['module_name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" name="submit" value="Add">
</form>