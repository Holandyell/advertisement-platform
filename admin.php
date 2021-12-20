<?php

include 'App/config.php';

$locationRepository = new LocationRepository();
$locations = $locationRepository->getLocationList();
var_dump($_GET);

if (isset($_GET['city'])) {
    $city = $_GET['city'];
    $locationRepository->insertLocation($city);
} else {
    $city = null;
}

include "Template/html_start.php";
?>
<div class="row">
    <div class="col-6">
        <h3>Cities</h3>
        <ul>
            <?php foreach ($locations as $row) { ?>
                <li><?php 
                
                    echo $row['title'];
                
                ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-6">
        <h3>Categories</h3>
    </div>
</div>

<form action="" method="get">
    <input type="text" class="form-control" id="add_cities" name="city" autocomplete="off" placeholder="Add The City Name">
    <button type="submit" class="btn btn-secondary mt-2">submit</button>
</form>

<?php include "Template/html_end.php";?>
