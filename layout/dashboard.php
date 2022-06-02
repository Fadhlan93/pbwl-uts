<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Tiket Pesawat">
    <meta name="author" content="Fadhlan">
    <meta name="keywords" content="Aplikasi, Tiket, Pesawat">
    <title> Aplikasi Tiket Pesawat </title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <header>
            <img src="<?php echo ASSET; ?>img/tiket pesawat.jpg" alt="[IMG]">
        </header>

        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=penumpang_tampil">Penumpang</a>
                </li>
                <li>
                    <a href="index.php?page=pesawat_tampil">Pesawat</a>
                </li>
                <li>
                    <a href="index.php?page=reservasi_tampil">Reservasi</a>
                </li>
                <li>
                    <a href="index.php?page=tiket_tampil">Tiket</a>
                </li>
                <li>
                    <a href="index.php?page=transaksi_tampil">Transaksi</a>
                </li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <section>
            <?php
                 if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                    include $_GET['page'];
                 } else {
                     include "main_dashboard.php";
                 }
            ?>
        </section>

        <footer>
            Copyright &copy; 2022
        </footer>

    </main>