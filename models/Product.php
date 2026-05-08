<?php

declare(strict_types=1);

class Product
{
    public int $id;
    public string $name;
    public string $category;
    public string $image;
    public int $originalPrice;
    public float $rating;
    public int $sold;
    public int $discountPrice;
    private int $discountPercentage;

    public function __construct(
        int $id,
        string $name,
        string $category,
        string $image,
        int $originalPrice,
        float $rating,
        int $sold,
        int $discountPercentage = 99
    ) {
        $this->id = (int) $id;
        $this->name = (string) $name;
        $this->category = (string) strtolower($category);
        $this->image = (string) $image;
        $this->originalPrice = (int) $originalPrice;
        $this->rating = (float) $rating;
        $this->sold = (int) $sold;
        $this->discountPercentage = (int) $discountPercentage;
        $this->discountPrice = (int) round($this->originalPrice * (100 - $this->discountPercentage) / 100);
    }

    public function getDiscountPercentage(): int
    {
        return $this->discountPercentage;
    }

    public function getDiscountPrice(): int
    {
        return $this->discountPrice;
    }

    public function formatPrice($price = 0): string
    {
        $price = (int) $price;
        if ($price < 0) {
            $price = 0;
        }
        return 'Rp' . number_format($price, 0, ',', '.');
    }

    public function matchesCategory(string $category): bool
    {
        return $category === 'semua' || $this->category === $category;
    }

    public function matchesSearch(string $query): bool
    {
        return $query === '' || stripos($this->name, $query) !== false;
    }
}
