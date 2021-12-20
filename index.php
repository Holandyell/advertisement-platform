<?php
include 'App/config.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = null;
}

if (isset($_GET['category'])) {
    $categoryId = ($_GET['category']);
} else {
    $categoryId = null;
}

if (isset($_GET['location'])) {
    $locationId = $_GET['location'];
} else {
    $locationId = null;
}

if (isset($_GET['max_price'])) {
    $to = $_GET['max_price'];
} else {
    $to = null;
}

if (isset($_GET['min_price'])) {
    $from = $_GET['min_price'];
} else {
    $from = null;
}
if (isset($_GET['mark'])){
    $markId = $_GET['mark'];
} else {
    $markId = null;
}

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}
else {
    $title = null;
}

if (isset($_POST['category'])) {
    $category = $_POST['category'];
}
else {
    $category = null;
}

if(isset($_POST['location'])) {
    $location = $_POST['location'];
}
else {
    $location = null;
}

if(isset($_POST['price'])) {
    $price = $_POST['price'];
}
else {
    $price = null;
}
$ads = (new AdvertisementRepository())->getAdvertisementList($categoryId, $locationId, $search, $from, $to);
$categories = (new CategoryRepository())->getCategoryList();
$locations = (new LocationRepository())->getLocationList();
$mark = (new MarkRepository())->getMarkList($markId);
include 'Template/html_start.php';

?>
<div class="mt-4">
    <a class="btn btn-primary btn-sm" href="/example/add.php">Create</a>
</div>

<div class="row">
    <div class="col-9">
        <?php
        foreach ($ads as $row) {
            if ($row['thumbnail']) {
                $thumbnail = $row['thumbnail'];
            } else {
                $thumbnail = 'https://st4.depositphotos.com/14953852/24787/v/600/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg';
            }
            ?>
            <div class="row mt-4">
                <div class="col-3">
                    <img style="max-width: 180px;"
                        src="<?php echo $thumbnail; ?>">
                </div>
                <div class="col-9">
                    <h3><?=$row['title']?></h3>
                    <div>Location: <?=$row['location_title']?></div>
                    <div>Category: <?=$row['category_title']?></div>
                    <div>Price: <?=$row['price']?></div>
                    <p><?=$row['description']?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="col-3">
        <h3>Filters</h3>

        <form class="mt-4" method="GET" action="">
            <div class="form-group">
                <label  for="search">Search</label>
                <input type="text" style="margin-left: -100px;" class="form-control" id="search" name="search" autocomplete="off" placeholder="Search" value="<?=$search?>">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select style="margin-left: -100px;" class="form-control" id="category" name="category">
                    <option value=""></option>
                    <?php foreach ($categories as $row) { ?>
                        <option value="<?=$row['id']?>" <?php if ($categoryId == $row['id']) { echo 'selected'; } ?>><?=$row['title']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <select style="margin-left: -100px;" class="form-control" id="location" name="location">
                    <option value=""></option>
                    <?php foreach ($locations as $row) { ?>
                        <option value="<?=$row['id']?>" <?php if ($locationId == $row['id']) { echo 'selected'; } ?>><?=$row['title']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <div>
                    <label>Price</label>
                </div>
                <div class="row" style="padding: 0 15px;">
                    <input class="form-control col-6" style="margin-left: -70px;" id="min_price" name="min_price" placeholder="to" autocomplete="off" value="<?=$from?>" >
                    <input class="form-control col-6"  style="margin-left: -50px;"id="max_price" name="max_price" placeholder="From"  autocomplete="off" value="<?=$to?>">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label>Mark</label>
                </div>
                    <select style="margin-left: -100px;" class="form-control" id="mark" name="mark" >
                        <option value=""></option>
                        <?php foreach ($mark as $row) { ?>
                            <option value="<?=$row['id']?>" <?php if ($markId == $row['id']) { echo 'selected'; } ?>><?=$row['title']?></option>
                    <?php } ?>
                <div>
                    <select> 
                </div>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success mt-2">Apply</button>
            <a href="/example" class="btn btn-secondary mt-2">Clear</a>
            <a href="/example/admin.php" class="btn btn-secondary mt-2">Admin</a>
        </form>

    </div>
</div>

<?php
include 'Template/html_end.php';
