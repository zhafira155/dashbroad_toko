<?php

if (isset($_GET['pages'])) {
    $page = $_GET['pages'];
} else {
    $page = "dashboard";
}

$halaman = [
    "dashboard"  => "pages/dashbroad.php",
    "produk"     => "pages/produk.php",
    "addproduct" => "pages/formaddproduct.php",
    "editproduct" => "pages/formeditproduct.php",
    "orders"     => "pages/orders.php",
    "customers"  => "pages/customers.php"
];

if (isset($halaman[$page])) {
    require $halaman[$page];
} else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}

?>
