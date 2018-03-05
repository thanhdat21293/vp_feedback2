<?php 
include 'connect.php';
$hoten = $_GET['hoten'];
$email = $_GET['email'];
$sendbc = $_GET['sendbc'];
$tansuat = $_GET['tansuat'];

if (isset ($_GET['sendkq'])) {
	$sendkq = $_GET['sendkq'];
} else {
	$sendkq = '';
}

if (isset ($_GET['ytuong'])) {
	$ytuong = $_GET['ytuong'];
} else {
	$ytuong = '';
}

$danhgia = $_GET['danhgia'];
$danhgiatext5 = $_GET['danhgiatext5'];
$chatluong = $_GET['chatluong'];
$congviec = $_GET['congviec'];


if($danhgia == 4 || $danhgia == 5){
	$danhgiatext5 = '';
}

$insert="INSERT INTO vp_feedback2 VALUES('','$hoten', '$email', '$sendbc', '$tansuat', '$sendkq', '$ytuong','$danhgia', '$danhgiatext5', '$chatluong', '$congviec')";
$query=mysql_query($insert);
if($query) {
	echo "Cảm ơn anh/chị đã dành thời gian cho chúng tôi.";
}else{ 
	echo "Lưu thất bại.";
}

?>