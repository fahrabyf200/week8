<?php
    if(isset($_COOKIE['user'])) {
        echo $_COOKIE['user']; // Cetak nilai cookie jika sudah ada
    } else {
        echo "Cookie 'user' belum diset.";
    }
?>