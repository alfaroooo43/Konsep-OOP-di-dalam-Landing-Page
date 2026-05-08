<?php

declare(strict_types=1);

require_once __DIR__ . '/../config/config.php';

class ProductController
{
    private array $products;

    private array $categories = [
        'semua' => 'Semua',
        'elektronik' => 'Elektronik',
        'skincare' => 'Skincare',
        'fashion' => 'Fashion',
    ];

    public function __construct()
    {
        $this->products = require_once BASE_PATH . '/data/products.php';
    }

    public function index(): void
    {
        $activeCategory = $this->getActiveCategory($this->requestValue('category', 'semua'));
        $searchQuery = $this->getSearchQuery($this->requestValue('search'));
        $toast = trim($this->requestValue('toast'));
        $categories = $this->categories;
        $filteredProducts = $this->filterProducts($activeCategory, $searchQuery);

        require_once BASE_PATH . '/views/home.php';
    }

    private function requestValue(string $key, string $default = ''): string
    {
        $value = $_GET[$key] ?? $default;

        return is_scalar($value) ? (string) $value : $default;
    }

    private function getActiveCategory(string $category): string
    {
        return array_key_exists($category, $this->categories) ? $category : 'semua';
    }

    private function getSearchQuery(string $query): string
    {
        return trim($query);
    }

    private function filterProducts(string $category, string $query): array
    {
        return array_values(array_filter(
            $this->products,
            fn (Product $product): bool => $product->matchesCategory($category)
                && $product->matchesSearch($query)
        ));
    }
}
