<?php

require_once __DIR__ . '/../models/Product.php';

$products = [
    new Product(
        1,
        'Asus ROG Strix G16',
        'elektronik',
        'assets/images/Asus ROG Strix G16.png',
        28999000,
        4.9,
        3270
    ),
    new Product(
        2,
        'iPhone 17 Pro Max 1TB',
        'elektronik',
        'assets/images/Iphone 17 Promax 1 TB.png',
        35499000,
        4.9,
        3810
    ),
    new Product(
        3,
        'Dior Prestige Skincare Set',
        'skincare',
        'assets/images/Dior Skincare sepaket.png',
        10710000,
        4.8,
        945
    ),
    new Product(
        4,
        'The History of Whoo Hwanyu Series',
        'skincare',
        'assets/images/The History of Whoo Hwanyu Series.png',
        8500000,
        4.9,
        712
    ),
    new Product(
        5,
        'H.Couture Beauty Diamond Mascara & Lipstick',
        'skincare',
        'assets/images/Maskara & Lipstik Berlian (H.Couture Beauty).png',
        14500000,
        4.7,
        528
    ),
    new Product(
        6,
        'Adidas Sepatu Limited Edition',
        'fashion',
        'assets/images/Adidas Spatu Limitied Edition.png',
        4500000,
        4.8,
        1680
    ),
    new Product(
        7,
        'Hermes Paris Premium Bag',
        'fashion',
        'assets/images/Hermes Paris Tas.png',
        335000000,
        5.0,
        126
    ),
    new Product(
        8,
        'Nike WMNS Sportswear Cardigan University Red HV2495-657 Japan Size',
        'fashion',
        'assets/images/Nike WMNS Sportswear Cardigan University Red HV2495-657 Japan size.png',
        1550000,
        4.7,
        884
    ),
    new Product(
        9,
        'Emas Antam Certicard 100 Gram',
        'fashion',
        'assets/images/EMAS ANTAM CERTICARD 100 GRAM.png',
        273212000,
        5.0,
        391
    ),
];

return $products;
