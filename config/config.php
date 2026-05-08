<?php

declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
