<?php
// Product List Array
$products = [
    [
        'name' => 'Wireless Mouse',
        'description' => 'Ergonomic Bluetooth mouse with long battery life.',
        'price' => 25.99,
        'available' => true
    ],
    [
        'name' => 'Mechanical Keyboard',
        'description' => 'RGB backlit keyboard with blue switches.',
        'price' => 79.00,
        'available' => false
    ],
    [
        'name' => 'Noise Cancelling Headphones',
        'description' => 'High-fidelity sound and deep noise cancellation.',
        'price' => 120.50,
        'available' => true
    ],
    [
        'name' => 'Portable SSD 1TB',
        'description' => 'Fast external SSD with USB-C connection.',
        'price' => 99.99,
        'available' => true
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }
        .product {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 6px solid #007acc;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .product h2 {
            margin-top: 0;
        }
        .price {
            color: #27ae60;
            font-weight: bold;
            font-size: 18px;
        }
        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            display: inline-block;
            margin-top: 10px;
        }
        .available {
            background-color: #d4edda;
            color: #155724;
        }
        .unavailable {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <h1>Product List</h1>

    <?php foreach ($products as $product): ?>
        <div class="product">
            <h2><?= $product['name'] ?></h2>
            <p><?= $product['description'] ?></p>
            <p class="price">$<?= number_format($product['price'], 2) ?></p>
            <span class="status <?= $product['available'] ? 'available' : 'unavailable' ?>">
                <?= $product['available'] ? 'In Stock' : 'Out of Stock' ?>
            </span>
        </div>
    <?php endforeach; ?>

</body>
</html>
