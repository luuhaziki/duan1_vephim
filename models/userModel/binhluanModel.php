<?php
    function insert_binhluan($ma_nguoi_dung,$ma_phim,$content) {
        $sql = "INSERT INTO comments (`ma_nguoi_dung`,`ma_phim`,`content`)
                VALUES 
                ('$ma_nguoi_dung','$ma_phim','$content');
        ";
        pdo_execute($sql);
    }

    function loadall__comment__Byid($idproduct) {
        $sql = "SELECT
                    comments.ma_binh_luan,
                    comments.ma_nguoi_dung,
                    comments.ma_phim,
                    comments.content,
                    comments.create_at,
                    nguoidung.ma_nguoi_dung,
                    nguoidung.ten_dang_nhap
                FROM
                    comments
                INNER JOIN
                    nguoidung ON comments.ma_nguoi_dung = nguoidung.ma_nguoi_dung
                INNER JOIN
                    phim ON comments.ma_phim = phim.ma_phim
                WHERE
                    phim.ma_phim = $idproduct
        ";
        return pdo_query($sql);
    }
?>