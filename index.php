<?php

$produk = [

    [
        "nama" => "Keyboard Mechanical RGB",
        "kategori" => "Keyboard",
        "harga" => 450000,
        "stok" => 12,
        "gambar" => "https://images.unsplash.com/photo-1587829741301-dc798b83add3"
    ],

    [
        "nama" => "Mouse Gaming Wireless",
        "kategori" => "Mouse",
        "harga" => 275000,
        "stok" => 8,
        "gambar" => "https://images.unsplash.com/photo-1527814050087-3793815479db"
    ],

    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 350000,
        "stok" => 5,
        "gambar" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e"
    ],

    [
        "nama" => "Webcam Full HD",
        "kategori" => "Kamera",
        "harga" => 425000,
        "stok" => 0,
        "gambar" => "https://images.unsplash.com/photo-1587826080692-f439cd0b70da"
    ],

    [
        "nama" => "USB Hub 4 Port",
        "kategori" => "Aksesoris",
        "harga" => 125000,
        "stok" => 15,
        "gambar" => "https://images.unsplash.com/photo-1625842268584-8f3296236761"
    ],

    [
        "nama" => "Laptop Stand Aluminium",
        "kategori" => "Aksesoris",
        "harga" => 220000,
        "stok" => 0,
        "gambar" => "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf"
    ]

];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Katalog Produk</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="navbar">
        <div class="container navbar-content">

            <div class="logo">
                Cia<span>Store</span>
            </div>

            <nav>
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
                <a href="#about">About</a>
            </nav>

        </div>
    </header>


    <section class="hero" id="home">
        <div class="container hero-content">

            <div>
                <p class="hero-label">SELAMAT DATANG DI</p>

                <h1>
                    Cia Store
                </h1>

                <p class="hero-description">
                    Temukan berbagai perangkat dan aksesoris teknologi
                    untuk kebutuhan sehari-hari.
                </p>

                <a href="#produk" class="hero-button">
                    Lihat Produk
                </a>
            </div>

        </div>
    </section>


    <section class="product-info" id="produk">

        <div class="container">

            <div class="section-heading">
                <div>
                    <p class="section-label">KOLEKSI KAMI</p>
                    <h2>Katalog Produk</h2>
                </div>

                <div class="product-count">
                    <strong><?= $jumlahProduk ?></strong>
                    <span>Produk</span>
                </div>
            </div>

            <div class="product-grid">

                <?php foreach ($produk as $item): ?>

                    <div class="product-card">

                        <div class="product-image">
                            <img 
                                src="<?= $item["gambar"] ?>" 
                                alt="<?= htmlspecialchars($item["nama"]) ?>"
                            >
                        </div>

                        <div class="product-content">

                            <p class="category">
                                <?= htmlspecialchars($item["kategori"]) ?>
                            </p>

                            <h3>
                                <?= htmlspecialchars($item["nama"]) ?>
                            </h3>

                            <p class="price">
                                Rp <?= number_format($item["harga"], 0, ',', '.') ?>
                            </p>

                            <div class="product-footer">

                                <div class="stock">

                                    <?php if ($item["stok"] > 0): ?>
                                        <small>
                                            Stok: <?= $item["stok"] ?>
                                        </small>

                                        <span class="status available">
                                            Tersedia
                                        </span>

                                    <?php else: ?>
                                        
                                        <small>
                                            Stok: 0
                                        </small>

                                        <span class="status empty">
                                            Stok Habis
                                        </span>

                                    <?php endif; ?>

                                </div>


                                <?php if ($item["stok"] > 0): ?>

                                    <button class="buy-button">
                                        Beli Sekarang
                                    </button>

                                <?php else: ?>

                                    <button class="buy-button disabled" disabled>
                                        Stok Habis
                                    </button>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>
</body>
</html>