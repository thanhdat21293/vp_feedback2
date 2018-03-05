<!DOCTYPE html>
<html>
<head>
	<title>Ý kiến khách hàng</title> 
	<link href="css/style.css" rel="stylesheet"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/custom.js"></script>
<style>
body {
	    background: url(bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div class="container">
<div id="ykien">
	<div class="wating">
		<img src="spinner.gif">
	</div>
	<div class="logo">
	<img src="BICC1.png">
	</div>
	<br>
	<div class="card">
		<h3 class="title">Khảo sát nhu cầu về Báo cáo Incentive</h3>
		<h3 class="title wscamon">CẢM ƠN</h3>
		<form name="wsform" id="wsform">
			<!-- Intro -->
			<div class="form-check form-check-inline formbuoc1 formbuoc ok">
				<span>Gửi các anh/chị CBQL,</span>
				<span>&nbsp; &nbsp; Hàng tháng, báo cáo LKD được gửi cho CBBH thông qua CBQL của mình. 
				Sắp tới, BIC dự định sẽ gửi KQKD cho từng CBBH. 
				Theo đó, mỗi CBBH có thể tự theo dõi kết quả của mình và từ đó có thêm động lực hoàn thành chỉ tiêu. 
				Do vậy, bản khảo sát này nhằm thu thập nhu cầu của các CBQL và giúp BIC có định hướng rõ ràng hơn về ý tưởng này trong tương lai. 
				Mỗi ý kiến của anh/chị đóng góp rất nhiều cho sự phát triển này. 
				Mong các anh/chị dành ra 1-2 phút quý báu của mình để hoàn thành nhé!</span>
				<span>Chân thành cảm ơn anh/chị!</span>
			</div>

			<!-- Cau hoi 1 -->
			<div class="form-group row formbuoc2 formbuoc">
			  <label for="inputEmail2" class="col-sm-2 col-form-label">Họ Tên:</label>
			  <div class="col-sm-10">
				<input type="text" name="hoten" class="form-control" id="inputEmail2">
			  </div>
			</div>
			<div class="form-group row formbuoc2 formbuoc">
			  <label for="inputEmail3" class="col-sm-2 col-form-label">Email: </label>
				<div class="input-group col-sm-10">
					<input type="text" name="email" class="form-control" id="inputEmail3">
					<div class="input-group-addon">@vpbank.com.vn</div>
				</div>
			</div>
			
			<!-- Câu hỏi 2- Bước 3 -->
			<div class="cauhoi formbuoc3 formbuoc">1. Anh/chị có muốn BIC gửi báo cáo tới từng CBBH không?</div> <br class="formbuoc3 formbuoc">
			<div class="form-check form-check-inline formbuoc3 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="sendbc" id="inlineRadio1" value="1"> Có
			  </label>
			</div>
			<div class="form-check formbuoc3 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="sendbc" id="inlineRadio1" value="0"> Không
			  </label>
			</div>
			
			<!-- Câu hỏi 3- Bước 4 -->
			<div class="cauhoi formbuoc4 formbuoc">2. Anh/chị mong muốn kết quả được gửi dưới hình thức nào?</div> <br class="formbuoc4 formbuoc">
			<div class="form-check form-check-inline formbuoc4 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="sendkq" id="inlineRadio1" value="excel"> File excel (Có user và mật khẩu đăng nhập)
			  </label>
			</div>
			<div class="form-check formbuoc4 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="sendkq" id="inlineRadio1" value="web"> Truy cập qua web (Có kết quả của các tháng trong năm và chi tiết đến từng sản phẩm)
			  </label>
			</div>
			
			<!-- Câu hỏi 4- Bước 4_1 -->
			<div class="cauhoi formbuoc4_1 formbuoc">3. Anh/chị vui lòng cho ý kiến đánh giá về ý tưởng truy cập kết quả LKD qua web:</div> <br class="formbuoc4_1 formbuoc">
			<div class="form-check form-check-inline formbuoc4_1 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="ytuong" id="inlineRadio1" value="hay"> Đây là ý tưởng hay, phù hợp với CBBH
			  </label>
			</div>
			<div class="form-check formbuoc4_1 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="ytuong" id="inlineRadio1" value="ok"> Có cũng được
			  </label>
			</div>
			<div class="form-check formbuoc4_1 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="ytuong" id="inlineRadio1" value="khong"> Không cần thiết
			  </label>
			</div>
			
			<!-- Câu hỏi 4- Bước 4_2 -->
			<div class="cauhoi formbuoc4_2 formbuoc">4. Ngoài ra, anh/chị mong muốn báo cáo LKD được update theo tần suất nào?</div> <br class="formbuoc4_2 formbuoc">
			<div class="form-check form-check-inline formbuoc4_2 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="tansuat" id="inlineRadio1" value="4"> 04 lần/tháng
			  </label>
			</div>
			<div class="form-check formbuoc4_2 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="tansuat" id="inlineRadio1" value="2"> 02 lần/tháng
			  </label>
			</div>
			<div class="form-check formbuoc4_2 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="tansuat" id="inlineRadio1" value="1"> 01 lần/tháng
			  </label>
			</div>

			<!-- Câu hỏi 4- Bước 5 -->
			<div class="cauhoi formbuoc5 formbuoc">5. Anh/ chị đánh giá như thế nào về chất lượng dịch vụ của BIC?</div> <br class="formbuoc5 formbuoc">
			<div class="form-check form-check-inline formbuoc5 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="danhgia" onclick="funcbuoc5()" id="inlineRadio1" value="1"> Rất không hài lòng
			  </label>
			</div>
			<div class="form-check formbuoc5 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="danhgia" onclick="funcbuoc5()" id="inlineRadio1" value="2"> Không hài lòng
			  </label>
			</div>
			<div class="form-check formbuoc5 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="danhgia" onclick="funcbuoc5()" id="inlineRadio1" value="3"> Không có ý kiến
			  </label>
			</div>
			<div class="form-check formbuoc5 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="danhgia" onclick="funcbuoc5()" id="inlineRadio1" value="4"> Hài lòng
			  </label>
			</div>
			<div class="form-check formbuoc5 formbuoc">
			  <label class="form-check-label">
				<input class="form-check-input" type="radio" name="danhgia" onclick="funcbuoc5()" id="inlineRadio1" value="5"> Rất hài lòng
			  </label>
			</div>
			<div class="form-check formbuoc hienthino5">
				<div>
				Anh/chị vui lòng cung cấp thông tin chi tiết vì sao anh/chị chưa hài lòng về chất lượng dịch vụ của chúng tôi để BIC có phuong án cải thiện kịp thời.
				</div>
			  <label class="form-check-label">
				<textarea class="form-control" name="danhgiatext5" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </label>
			</div>
			
			<!-- Câu hỏi 5 - Bước 6 -->
			<div class="cauhoi formbuoc6 formbuoc">6. Anh/chị vui lòng cho xin ý kiến đóng góp để BIC cải thiện chất lượng, dịch vụ tốt hơn.</div> <br class="formbuoc6 formbuoc">
			<div class="form-check form-check-inline formbuoc6 formbuoc">
			  <label class="form-check-label wstextarea100" >
				<textarea class="form-control" name="chatluong" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </label>
			</div>
			
			<!-- Câu hỏi 6 - Bước 7 -->
			<div class="cauhoi formbuoc7 formbuoc">7. Anh/chị cảm thấy vướng mắc trong công việc hiện tại, hãy chia sẻ với BIC để những công cụ hỗ trợ và phân tích của chúng tôi sẽ góp phần cải tiến công việc của anh/chị?</div> <br class="formbuoc7 formbuoc">
			<div class="form-check form-check-inline formbuoc7 formbuoc">
			  <label class="form-check-label wstextarea100" >
				<textarea class="form-control" name="congviec" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </label>
			</div>
			
			<div class="cauhoi formbuoc8 formbuoc ketqua" style="text-align: center;"><span>Cảm ơn anh/chị đã dành thời gian cho chúng tôi.</span> <br><br>
			<a href="#" class="btn btn-outline-success next text-light bg-success floatnone" onclick="return trangchu()">Về trang chủ</a>
			</div>
		</form>
		<div class="wsbutton buoc1 buoc ok text-center">
			<a href="#" class="btn btn-outline-success next text-light bg-success" onclick="return start()">Bắt đầu</a>
		</div>
		<div class="wsbutton buoc2 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev2()">Previous</a>
			<div class="hientai">
			1/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm2()">Next</a>
		</div>
		<div class="wsbutton buoc3 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev3()">Previous</a>
			<div class="hientai">
			2/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm3()">Next</a>
		</div>
		<div class="wsbutton buoc4 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev4()">Previous</a>
			<div class="hientai">
			3/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm4()">Next</a>
		</div>
		<div class="wsbutton buoc4_1 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev4_1()">Previous</a>
			<div class="hientai">
			4/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm4_1()">Next</a>
		</div>
		<div class="wsbutton buoc4_2 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev4_2()">Previous</a>
			<div class="hientai">
			5/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm4_2()">Next</a>
		</div>
		<div class="wsbutton buoc5 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev5()">Previous</a>
			<div class="hientai">
			6/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm5()">Next</a>
		</div>
		<div class="wsbutton buoc6 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev6()">Previous</a>
			<div class="hientai">
			7/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm6()">Next</a>
		</div>
		<div class="wsbutton buoc7 buoc">
			<a href="#" class="btn btn-outline-success prev" onclick="return prev7()">Previous</a>
			<div class="hientai">
			8/8
			</div>
			<a href="#" class="btn btn-outline-success next" onclick="return validateForm7()">Submit</a>
		</div>
	</div>
</div>

<script>

function start() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc2, .formbuoc2').addClass('ok')
	
}

function validateForm2() {
    var wshoten = jQuery.trim(document.forms["wsform"]["hoten"].value);
    if (wshoten == "") {
        alert("Họ tên không được để trống!");
        return false;
    }
	
    var wsemail = jQuery.trim(document.forms["wsform"]["email"].value);
	var pattern = new RegExp(/[@~` !#$%\^&*+=\[\]\\';,/{}|\\":<>\?]/);
	if (wsemail == ""){
		alert("Email không được để trống!");
        return false;
	}else if(pattern.test(wsemail)) {
        alert("Email chứa ký tự đặc biệt!");
        return false;
    }
	jQuery('.buoc2, .formbuoc2').removeClass('ok')
	jQuery('.buoc3, .formbuoc3').addClass('ok')
	
}

function prev2() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc1, .formbuoc1').addClass('ok')
}


function prev3() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc2, .formbuoc2').addClass('ok')
}
function validateForm3() {
    var wstuansuat = jQuery('input[name="sendbc"]:checked').val();
	if(!wstuansuat) {
		alert("Anh/chị phải chọn ít nhất 1 ô!");
        return false;
	}
	if (wstuansuat == 1) {
		jQuery('.buoc, .formbuoc').removeClass('ok')
		jQuery('.buoc4, .formbuoc4').addClass('ok')
	} else {
		jQuery('.buoc, .formbuoc').removeClass('ok')
		jQuery('.buoc4_2, .formbuoc4_2').addClass('ok')
	}
    
	
}


function prev4() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc3, .formbuoc3').addClass('ok')
}
function validateForm4() {
    var wsbaocao = jQuery('input[name="sendkq"]:checked').val();
	if(!wsbaocao) {
		alert("Anh/chị phải chọn ít nhất 1 ô!");
        return false;
	}
    jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc4_1, .formbuoc4_1').addClass('ok')
	
}


function prev4_1() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc4, .formbuoc4').addClass('ok')
}
function validateForm4_1() {
    var ytuong = jQuery('input[name="ytuong"]:checked').val();
	if(!ytuong) {
		alert("Anh/chị phải chọn ít nhất 1 ô!");
        return false;
	}
  jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc4_2, .formbuoc4_2').addClass('ok')
	
}


function prev4_2() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc4_1, .formbuoc4_1').addClass('ok')
}
function validateForm4_2() {
    var tansuat = jQuery('input[name="tansuat"]:checked').val();
	if(!tansuat) {
		alert("Anh/chị phải chọn ít nhất 1 ô!");
        return false;
	}
  jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc5, .formbuoc5').addClass('ok')
	
}



function funcbuoc5() {
	var wsdanhgia = jQuery('input[name="danhgia"]:checked').val();
	if(wsdanhgia == 1 || wsdanhgia == 2 || wsdanhgia == 3) {
		jQuery('.hienthino5').addClass('ok');
		return false;
	}else{
		jQuery('.hienthino5').removeClass('ok');
		return false;
	}
}
function prev5() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc4, .formbuoc4').addClass('ok')
}
function validateForm5() {
    var wsdanhgia = jQuery('input[name="danhgia"]:checked').val();
    var wsdanhgiatext = jQuery.trim(jQuery('textarea[name="danhgiatext5"]').val());
	if(!wsdanhgia) {
		alert("Anh/chị phải chọn ít nhất 1 ô!");
        return false;
	}else if(wsdanhgia == 1 || wsdanhgia == 2 || wsdanhgia == 3) {
		if(wsdanhgiatext == '') {
			alert("Anh/chị chưa nhập thông tin chi tiết.");
			return false;
		}
	}else{ }
    jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc6, .formbuoc6').addClass('ok')
	
}

function prev6() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc5, .formbuoc5').addClass('ok')
}
function validateForm6() {
    var wschatluong = jQuery.trim(jQuery('textarea[name="chatluong"]').val());
	if(wschatluong == '') {
		alert("Anh/chị chưa nhập ý kiến đóng góp.");
		return false;
	}
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc7, .formbuoc7').addClass('ok')
	
}

function prev7() {
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc6, .formbuoc6').addClass('ok')
}
function validateForm7() {
    var wscongviec = jQuery.trim(jQuery('textarea[name="congviec"]').val());
	if(wscongviec == '') {
		alert("Anh/chị chưa nhập ý kiến.");
		return false;
	}
	jQuery('.buoc, .formbuoc').removeClass('ok')
	jQuery('.buoc8, .formbuoc8').addClass('ok')
	var tansuat = '';
	jQuery('input[name="tansuat"]').each(function(item) {
		if(jQuery(this).is(':checked')) {
			tansuat += jQuery(this).val() + ',';
		}
	});
	//console.log(jQuery('#wsform').serialize())
	
	jQuery('.wating').show();
	jQuery.ajax({
		url: 'insert.php',
        type: 'get',
		data: jQuery('#wsform').serialize(),
		success: function (result) { // Thành công
			jQuery('.ketqua span').text(result);
			jQuery('.buoc, .formbuoc').removeClass('ok')
			jQuery('.buoc8, .formbuoc8').addClass('ok')
			jQuery('h3.title').hide()
			jQuery('h3.wscamon').show()
		},
		complete: function(){ //Bất kể thành công hay không đều chạy
			jQuery('.wating').hide();
		},
	})
	
	
}

function trangchu () {
	location.reload()
}
</script>            
</body>
</html>