<?php

declare(strict_types=1);

require_once __DIR__ . '/controllers/ProductController.php';

$controller = new ProductController();
$controller->index();
