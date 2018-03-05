<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>User đã đăng ký</title>
	<link href="css/style.css" rel="stylesheet"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/custom.js"></script>
<style>

</style>
</head>
<body style="line-height:normal;">
<?php 
$sql="SELECT * FROM vp_feedback2 ORDER BY id DESC";
$query=mysql_query($sql);
?>
<br><br>
<div class="container" style="text-align:left;">
<!-- <a href="excel.php" class="btn btn-primary">Export to Excel</a> -->
</div>
<br>
<div class="container">
<table class="table table-bordered">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Họ tên</th>
      <th>Email</th>
      <th>1. Anh/chị có muốn BIC gửi báo cáo tới từng CBBH không?</th>
      <th>2. Anh/chị mong muốn kết quả được gửi dưới hình thức nào?</th>
      <th>3. Anh/chị vui lòng cho ý kiến đánh giá về ý tưởng truy cập kết quả LKD qua web:</th>
      <th>4. Ngoài ra, anh/chị mong muốn báo cáo LKD được update theo tần suất nào?</th>
      <th>5. Anh/ chị đánh giá như thế nào về chất lượng dịch vụ của BIC?</th>
      <th>Nội dung đánh giá</th>
      <th>6. Anh/chị vui lòng cho xin ý kiến đóng góp để BIC cải thiện chất lượng, dịch vụ tốt hơn.</th>
      <th>7. Anh/chị cảm thấy vướng mắc trong công việc hiện tại, hãy chia sẻ với BIC để những công cụ hỗ trợ và phân tích của chúng tôi sẽ góp phần cải tiến công việc của anh/chị?</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	$count = 0;
	while($row = mysql_fetch_object($query)) {
		$count++;
	?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $row->hoten; ?></td>
      <td width="150"><?php echo $row->email; ?>@vpbank.com.vn</td>
      <td>
	  <?php 
		if($row->sendbc == '0') {
			echo "Không";
		}else{
			echo "Có";
		}
	  ?>
	  </td>
      <td>
				<?php
				if($row->sendkq == 'web') {
					echo "Truy cập qua web";
				}else if($row->sendkq == 'excel'){
					echo "File excel";
				}
				?>
			</td>
      <td>
	  <?php 
		if($row->ytuong == 'hay') {
			echo "Đây là ý tưởng hay, phù hợp với CBBH";
		} else if($row->ytuong == 'ok'){
			echo "Có cũng được";
		} else if($row->ytuong == 'khong'){
			echo "Không cần thiết";
		}
	  ?>
	  </td>
			<td><?php 
			if($row->tansuat == '4') {
				echo "04 lần/tháng";
			} else if($row->tansuat == '2'){
				echo "02 lần/tháng";
			} else if($row->tansuat == '1'){
				echo "01 lần/tháng";
			}
			?></td>
      <td>
	  <?php 
		if($row->danhgia_chon == 1) {
			echo "Rất không hài lòng";
		}else if($row->danhgia_chon == 2) {
			echo "Không hài lòng";
		}else if($row->danhgia_chon == 3) {
			echo "Không có ý kiến";
		}else if($row->danhgia_chon == 4) {
			echo "Hài lòng";
		}else {
			echo "Rất hài lòng";
		}
	  ?>
	  </td>
      <td><?php echo $row->danhgia_text; ?></td>
      <td><?php echo $row->chatluong; ?></td>
      <td><?php echo $row->congviec; ?></td>
    </tr>
	<?php 
	}
	?>
  </tbody>
</table>
</div>
</body>
</html>