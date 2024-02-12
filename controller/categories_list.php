<?php

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/categories.php';

$categories = getCategories(); // Calls to the model

require __DIR__ .'/../view/categories_list.php';