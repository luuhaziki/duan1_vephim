<?php
    function load_all_binhluan() {
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
                    phim ON comments.ma_phim = phim.ma_phim
                INNER JOIN
                    nguoidung ON comments.ma_nguoi_dung = nguoidung.ma_nguoi_dung
                WHERE 1 ORDER BY ma_binh_luan DESC";
        return pdo_query($sql);
    }

    function delete_binhluan($comment_id) {
        $sql = "DELETE FROM comments WHERE ma_binh_luan = $comment_id";
        pdo_execute($sql);
    }
?>