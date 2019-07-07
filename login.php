<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>成绩管理系统</title>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/response.css" rel="stylesheet"/>
</head>
<body class="login-reg-bg">
<div class="content">
	<div class="header">
		<div class="header-nei">
			<h2 class="header-title">成绩管理系统</h2>
		</div>
	</div>
	<!--head/-->
	<div class="head-height">&nbsp;</div>
	<!--登录校验在 style.js文件里面-->
	<div class="login-reg">
        <form id="form1" runat="server" action="useraction.php?a=login" method="post">
            <div class="log-reg-list">
                <label><i class="iconfont">&#xe60a;</i></label>
                <input type="text" class="log-reg-text check-tel" placeholder="手机号" value="13796533665" />
                <em></em>
            </div>
            <div class="log-reg-list">
                <label style="font-size:2.2rem; line-height:40px;"><i class="iconfont">&#xe60f;</i></label>
                <input type="password" class="log-reg-text check-pwd" placeholder="密码" value="123456" />
            </div>
            <div class="log-reg-sub">
                <a href="javascript:;" class="log-reg-btn login-btn">登录</a>
            </div>
        </form>
	</div>
	<!--login-reg/-->
</div>
<!--content/-->
<div class="bg100"></div>
<!--错误提示-->
<div class="tip-errors-bg">
	<div class="tip-tip-box-nei">
		<strong><i class="iconfont">&#xe614;</i><em class="errors">错误提示</em></strong>
	</div>
	<!--tip-tip-box/-->
</div>
<!--tip-success-bg/-->
<!--正确提示-->
<div class="tip-success-bg">
	<div class="tip-tip-box-nei">
		<strong><i class="iconfont" style="color:#0F0;">&#xe611;</i><em class="success">正确提示</em></strong>
	</div>
	<!--tip-tip-box/-->
</div>
<!--tip-success-bg/-->
<script src="js/jquery.min.js"></script>
<script src="js/style.js"></script>
</body>
</html>