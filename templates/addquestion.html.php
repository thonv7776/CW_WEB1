<form action="" method="post" enctype="multipart/form-data">
    <label for="joketext">Type your joke here</label>
    <textarea name="joketext" rows="3" cols="40"></textarea>
    <input type="file" name="image">

    <select name="authors">
        <option value="">Select an author</option>
        <?php foreach ($authors as $author): ?>
            <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <select name="categories">
        <option value="">Select a category</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?=htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <input type="submit" name="submit" value="Add">
</form>