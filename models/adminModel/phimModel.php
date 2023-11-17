<?php
    function insert__phim($tenphim,$image,$date,$theloai,$daodien,$thoigian) { 
        $sql = "INSERT INTO phim (`ten_phim`,`image_phim`,`ngay_phat_hanh`,`the_loai`,`dao_dien`,`thoi_luong_phut`)
        VALUES (?,?,?,?,?,?)";
        pdo_execute($sql);
    }
?>