$(function() {
	//提示
	$(".tip-btn-tip").on('click', function() {
		//从这里 开始
		$(".tip-tip-box").fadeIn();
		$(".tip-tip-box-nei").animate({
			opacity: "1"
		}, function() {
			$(".tip-tip-box-nei").animate({
				opacity: "1"
			}, 1500, function() {
				$(".tip-tip-box-nei").animate({
					opacity: "0"
				}, 1000)
				$(".tip-success-bg").hide()
			})
		})
		//到这里 结束
	})
	//关闭弹出框
	$(".closes").on('click', function() {
		$('.eject').animate({
			top: "-100%",
		}, function() {
			$('.eject').hide();
		})
		$('.bg100').fadeOut();
	})
	
	//错误提示
	function errors() {
		//从这里 开始
		$(".tip-errors-bg").fadeIn();
		$(".tip-errors-bg .tip-tip-box-nei").animate({
			opacity: "1"
		}, function() {
			$(".tip-errors-bg .tip-tip-box-nei").animate({
				opacity: "1"
			}, 2000, function() {
				$(".tip-errors-bg .tip-tip-box-nei").animate({
					opacity: "0"
				}, 1000)
				$(".tip-errors-bg").hide()
			})
		})
		//到这里 结束	
	}
	//正确提示

	function success() {
		//从这里 开始
		$(".tip-success-bg").fadeIn();
		$(".tip-success-bg .tip-tip-box-nei").animate({
			opacity: "1"
		}, function() {
			$(".tip-success-bg .tip-tip-box-nei").animate({
				opacity: "1"
			}, 2000, function() {
				$(".tip-success-bg .tip-tip-box-nei").animate({
					opacity: "0"
				}, 1000)
				$(".tip-success-bg").hide()
			})
		})
		//到这里 结束	
	}
	//登录校验
	var str = /^1\d{10}$/; //手机号格式
	$(".login-btn").on('click',function() {
		var tel = $(".check-tel").val();
		var pwd = $(".check-pwd").val();
		if (!str.test(tel)) {
			errors();
			$(".errors").text("请输入正确的手机号");
			return false;
		}
		if (pwd == "" || pwd.length < 6) {
			errors();
			$(".errors").text("您的密码不正确");
			return false;
		} else {
			success();
			// $(".success").text("恭喜您登录成功!");
			// location.href = "active.php"
			$('#form1').submit();
		}
	})
	//表单选中 check
	$(".input-check").on('click',function() {
		//alert("fsd")
		$(this).toggleClass("checked");
	})
	$(".one").on('click',function() {
		//alert("fsd")
		$(".two").toggle();
	})
	//定单校验
	$(".order-btn").on('click',function() {
		var txm = $(".order-txm").val();
		var sj = $(".order-sj").val();
		var sjname = $(".order-sj-name").val();
		var user = $(".order-user").val();
		var phone = $(".order-phone").val();
		var username = $(".order-user-name").val();
		var address = $(".order-address").val();
		var ht = $(".order-ht").val();
		var dj = $(".order-dj").val();
		var qz = $(".order-qz").val();
		var xj = $(".order-xj").val();
		if (txm == "") {
			errors();
			$(".errors").text("请输入条形码编号!");
			return false;
		}
		if (sj == "") {
			errors();
			$(".errors").text("请输入商家编号!");
			return false;
		}
		if (sjname == "") {
			errors();
			$(".errors").text("请输入商家名称!");
			return false;
		}
		if (user == "") {
			errors();
			$(".errors").text("请输入用户编号!");
			return false;
		}
		if (user == "") {
			errors();
			$(".errors").text("请输入用户编号!");
			return false;
		}
		if (!str.test(phone)) {
			errors();
			$(".errors").text("请输入正确的手机号");
			return false;
		}
		if (username == "") {
			errors();
			$(".errors").text("请输入用户姓名!");
			return false;
		}
		if (address == "") {
			errors();
			$(".errors").text("请输入用户地址!");
			return false;
		}
		
		if (ht == "") {
			errors();
			$(".errors").text("请输入合同总价!");
			return false;
		}
		if (dj == "") {
			errors();
			$(".errors").text("请输入定金!");
			return false;
		}
		if (qz == "") {
			errors();
			$(".errors").text("请输入金额!");
			return false;
		}
		if (xj == "") {
			errors();
			$(".errors").text("请输入县级!");
			return false;
		}
		else {
			success();
			$(".success").text("恭喜您录入成功!");
		}
	})
})
