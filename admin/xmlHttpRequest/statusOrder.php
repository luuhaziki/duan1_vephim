<?php
include '../../models/PDO_admin.php';

$action=$_GET['action']??'toggleShipping';
$id = $_GET['order_id']??1;
$value=getDataBy('orders',[
    'order_id'=>$id
]);
if($value){
    switch ($action){
        case 'togglePayment':{
            if ($value['payment_status'] == 'pending') {
                updateData('orders', [
                    'payment_status'=>'completed'
                ], 'order_id='.$id);
            }
            if ($value['payment_status'] == 'completed') {
                updateData('orders', [
                    'payment_status'=>'pending'
                ], 'order_id='.$id);
            }
            $value=getDataBy('orders',[
                'order_id'=>$id
            ]);
            echo $value['payment_status'];
            break;
        }
        case 'toggleShipping':{
            if ($value['shipping_status'] == 'pending') {
                updateData('orders', [
                    'shipping_status'=>'completed'
                ], 'order_id='.$id);
            }
            if ($value['shipping_status'] == 'completed') {
                updateData('orders', [
                    'shipping_status'=>'pending'
                ], 'order_id='.$id);
            }
            $value=getDataBy('orders',[
                'order_id'=>$id
            ]);
            echo $value['shipping_status'];
            break;
        }
    }
}

?>