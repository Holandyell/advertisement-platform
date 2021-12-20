<?php

define('_DB_HOST_', 'localhost');
define('_DB_PORT_', 3306);
define('_DB_NAME_', 'vajiko_db');
define('_DB_USER_', 'root');
define('_DB_PASS_', 'test');


define('_BASE_URL_', '/example');

include 'Repository/BaseRepository.php';
include 'Repository/CategoryRepository.php';
include 'Repository/LocationRepository.php';
include 'Repository/AdvertisementRepository.php';
include 'Repository/MarkRepository.php';