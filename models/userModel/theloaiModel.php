<?php
    function list_theloai() {
        $sql = "SELECT * FROM theloai WHERE 1 ORDER BY ma_theloai DESC";
        return pdo_query($sql);
    }
?>