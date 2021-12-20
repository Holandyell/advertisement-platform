<?php

include 'App/config.php';

if (!empty($_POST)) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];

    $repository = (new AdvertisementRepository());
    $repository->createAdvertisement($title, $category, $location, $price, $description, $thumbnail);
}

header('Location: /example');
exit ();