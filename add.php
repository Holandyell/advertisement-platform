<?php
include 'config.php';

$categories = (new CategoryRepository())->getCategoryList();
$locations = (new LocationRepository())->getLocationList();

include 'Template/html_start.php';
?>

<form class="mt-4" method="POST" action="/submit.php">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Enter the title">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category">
            <?php foreach ($categories as $row) { ?>
                <option value="<?=$row['id']?>"><?=$row['title']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <select class="form-control" id="location" name="location">
            <?php foreach ($locations as $row) { ?>
                <option value="<?=$row['id']?>"><?=$row['title']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="Enter the price">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="thumbnail">Thumbnail</label>
        <input type="text" class="form-control" id="thumbnail" name="thumbnail" autocomplete="off" placeholder="Enter the thumbnail url">
    </div>
    <a type="submit" href="/example/submit.php" class="btn btn-primary mt-2">Create</a>
    <a href="/" class="btn btn-secondary mt-2">Cancel</a>
</form>

<?php include 'Template/html_end.php'; ?>
