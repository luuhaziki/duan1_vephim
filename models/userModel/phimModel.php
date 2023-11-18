<?php
    function list_phim() {
        $sql = "SELECT * FROM phim WHERE 1 ORDER BY ma_phim DESC";
        return pdo_query($sql); 
    }
?>