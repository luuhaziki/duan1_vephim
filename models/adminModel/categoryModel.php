<?php
    // Select Danh sách thể loại
    function listDanhmuc() {
        $sql = "SELECT * FROM theloai WHERE 1 ORDER BY ma_theloai ASC";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm thể loại
    function addCategory($name) {
        $sql = "INSERT INTO theloai (`ten_theloai`) VALUES ('$name')";
        pdo_execute($sql);
    }



    // Edit thể loại
    function editCategory($id) {
        $sql = "SELECT * FROM theloai WHERE ma_theloai = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }


    // Delete thể loại
    function deleteCategory($id) {
        $sql = "DELETE FROM theloai WHERE ma_theloai = '$id'";
        pdo_execute($sql);
    }

    
    // Update thể loại
    function updateCategory($id,$name) {
        $sql = "UPDATE theloai SET ten_theloai = '".$name."' WHERE ma_theloai = '".$id."'";
        pdo_execute($sql);
    }
?>