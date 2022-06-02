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
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>
            </ul>
        </nav>

        <section>
            <?php
                 if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                 } else {
                     include "main_index.php";
                 }
            ?>
        </section>

        <footer>
            Copyright &copy; 2022
        </footer>

    </main>