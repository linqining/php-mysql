<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	<link href="css/indexstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>

<section class="aui-flexView">
	<header class="aui-navBar aui-navBar-fixed">
		<a href="javascript:;" class="aui-navBar-item">
			<i class="icon"></i>
		</a>
		<div class="aui-center">
			<span class="aui-center-title">办公</span>
		</div>
		<a href="javascript:;" class="aui-navBar-item">
			<i class="icon icon-set"></i>
		</a>
	</header>
	<section class="aui-scrollView">
		<div class="aui-flex">
			<div class="aui-flex-box">
				<div class="aui-head-text">
					<h2>同学,你好！</h2>
					<h3><?php
                        echo date("Y/m/d");
                     ?></h3>
					<p><?php $weekarray=array("日","一","二","三","四","五","六");
                        echo "星期".$weekarray[date("w")]; ?></p>
				</div>
				<img src="images/banner.png" alt="">
			</div>
		</div>
		<div class="aui-flex aui-flex-top">
			<div class="aui-flex-box">
				<h1>我的应用</h1>
			</div>
		</div>
		<div class="aui-palace aui-palace-one">
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-001.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>成绩查询</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-002.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>笔记</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-003.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>网盘</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-004.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>日程</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-005.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>外勤</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-006.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>待办</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-007.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>汇报</h2>
				</div>
			</a>
			<a href="#" class="aui-palace-grid">
				<div class="aui-palace-grid-icon">
					<img src="images/nav-008.png" alt="">
				</div>
				<div class="aui-palace-grid-text">
					<h2>公告</h2>
				</div>
			</a>
		</div>
		<div class="divHeight"></div>
		<div class="aui-flex">
			<div class="aui-flex-box">
				<h5>北京时代索引科技信息技术有限公司</h5>
			</div>
			<div class="aui-arrow">
				<span>切换</span>
			</div>
		</div>
		<div class="aui-info">
			<a href="javascript:;" class="aui-flex b-line">
				<div class="aui-six-img">
					<img src="images/fl-001.png" alt="">
				</div>
				<div class="aui-flex-box">
					<h4>OA 办公门户</h4>
				</div>
				<div class="aui-arrow"></div>
			</a>
			<a href="javascript:;" class="aui-flex b-line">
				<div class="aui-six-img">
					<img src="images/fl-002.png" alt="">
				</div>
				<div class="aui-flex-box">
					<h4>CRM 销售门户</h4>
				</div>
				<div class="aui-arrow"></div>
			</a>
		</div>

	</section>
	<footer class="aui-footer aui-footer-fixed">
		<a href="javascript:;" class="aui-tabBar-item ">
            <span class="aui-tabBar-item-icon">
                <i class="icon icon-loan"></i>
            </span>
			<span class="aui-tabBar-item-text">消息</span>
		</a>
		<a href="javascript:;" class="aui-tabBar-item ">
            <span class="aui-tabBar-item-icon">
                <i class="icon icon-credit"></i>
            </span>
			<span class="aui-tabBar-item-text">联系人</span>
		</a>
		<a href="javascript:;" class="aui-tabBar-item aui-tabBar-item-active">
            <span class="aui-tabBar-item-icon">
                <i class="icon icon-ions"></i>
            </span>
			<span class="aui-tabBar-item-text">办公</span>
		</a>
		<a href="javascript:;" class="aui-tabBar-item ">
            <span class="aui-tabBar-item-icon">
                <i class="icon icon-car"></i>
            </span>
			<span class="aui-tabBar-item-text">我的</span>
		</a>
	</footer>
</section>
</body>
</html>
