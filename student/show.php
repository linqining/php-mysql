<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		     <form method="get" action="show.php">
			 <td width="40%" align="left" valign="middle">
             <span>管理员：</span>
			 <input type="text" name="name" value="" class="text-word">	
			 </td>
	         <td width="20%" align="left" valign="middle">
			 <span>性别：</span>
			 <select name="sex">
			 <option value="">-全部-</option>
			 <option value="m">男</option>
			 <option value="w">女</option>
			 </select>
	     </td>
		 <td width="20%" align="left" valign="middle">
		 <input name="" type="submit" value="查询" class="text-but">
		 </form>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.php" target="mainFrame" onFocus="this.blur()" class="add">新增学生</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">ID</th>
        <th align="center" valign="middle" class="borderright">姓名</th>
        <th align="center" valign="middle" class="borderright">绩点</th>
        <th align="center" valign="middle" class="borderright">性别</th>
        <th align="center" valign="middle" class="borderright">班级</th>
        <th align="center" valign="middle">操作</th>
      </tr>
	 <?php
	  //配置文件常量声明
	  const HOST='localhost';
      const USER='root';
      const PASS='';
      const DBNAME='gd01';
	  
	  //===============搜索================
	  //用来存放搜索条件
	  $wherelist=array();
	  //判断姓名是否需要搜索(模糊查询)
	  if(!empty($_GET['name']))
	  {
		  $wherelist[]="name like '%{$_GET['name']}%'";
	  }
	  if(!empty($_GET['sex']))
	  {
		  $wherelist[]="sex='{$_GET['sex']}'";
	  }
	  //判断姓名是否要进行搜索
	  if(count($wherelist)>0){
		  //拼装搜索条件
		  //implode代表把$wherelist条件用and拆分成字符串
		  //where前后有空格
		  $where=' where '.implode("and ",$wherelist);
	  }else{
		  $where="";
	  }
	  //===============搜索================
	  
	  //1.导入配置文件
	  require("../config.php");
	  //2.连接数据库并判断
	  $link=mysql_connect(HOST,USER,PASS);
	  if(!$link){
		  die("数据库连接失败！");
	  }
	  //3.选择数据库并设置字符集
	  mysql_select_db(DBNAME);
	  mysql_set_charset('utf8');
	  
	  //==============分页=================
	  //定义变量
	  $page=isset($_GET['p'])?$_GET['p']:1; //当前页数
	  $maxRows=0;    //总数据条数
	  $pageRows=5;   //每页数据条数
	  $maxPages=0;   //最大页数
      //获取总条数(查询student一共有几条数据)
      //A as B 给A起一个别名B
      $sql="select count(*) as num from student";
      $result=mysql_query($sql);
      $row=mysql_fetch_assoc($result);
      $maxRows=$row['num'];
      //echo $maxRows;
      //计算总页数
      $maxPages=ceil($maxRows/$pageRows);//ceil 进一取整
      if($page>$maxPages)//当前页面大于最大页时就等于最大页
	  {
	     $page=$maxPages;
	  }		 
	  if($page<1)//当前页数小于1就等于1
	  {
	     $page=1;
	  }
	  //拼装limit语句（limit m,n 代表从第m+1个数据开始取，一共取n个）
	  //(1,2,3,4,5,6,7,8,9)
	  // 0       4       8
	  $limit=" limit ".(($page-1)*$pageRows).",".$pageRows;
	  //==============分页=================
	  //4.定义sql语句并执行
	  $sql="select * from student".$where.$limit;
	  $result=mysql_query($sql);
	  //5.解析结果并遍历输出
	  while($row=mysql_fetch_assoc($result))//row一行一行解释,并进行循环输出
	  {
		    $sex=array('w'=>'女','m'=>'男');//关联数组
			echo"<tr onMouseOut=\"this.style.backgroundColor='#ffffff'\" onMouseOver=\"this.style.backgroundColor='#edf5ff'\">";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderright borderbottom\">{$row['id']}</td>";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderright borderbottom\">{$row['name']}</td>";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderright borderbottom\">{$row['jidian']}</td>";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderright borderbottom\">{$sex[$row['sex']]}</td>";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderright borderbottom\">{$row['classid']}</td>";
			echo"<td align=\"center\" valign=\"middle\" class=\"borderbottom\"><a href=\"edit.php?id={$row['id']}\" target=\"mainFrame\" onFocus=\"this.blur()\" class=\"add\">修改</a><span class=\"gray\">&nbsp;|&nbsp;</span><a href=\"action.php?a=del&id={$row['id']}\" target=\"mainFrame\" onFocus=\"this.blur()\" class=\"add\">删除</a></td>";
			echo"</tr>";  
	  }
	  //6.释放结果集并关闭数据库
	  mysql_free_result($result);
	  mysql_close($link);
	?>
    </table></td>
    </tr>
  <tr>
  <?php
    echo "<td align=\"left\" valign=\"top\" class=\"fenye\">{$maxRows} 条数据 {$page}/{$maxPages} 页&nbsp;&nbsp;";
	echo "<a href=\"show.php?p=1\" target=\"mainFrame\" onFocus=\"this.blur()\">首页</a>&nbsp;&nbsp;";
	echo "<a href=\"show.php?p=".($page-1)."\" target=\"mainFrame\" onFocus=\"this.blur()\">上一页</a>&nbsp;&nbsp;";
	echo "<a href=\"show.php?p=".($page+1)."\" target=\"mainFrame\" onFocus=\"this.blur()\">下一页</a>&nbsp;&nbsp;";
	echo "<a href=\"show.php?p={$maxPages}\" target=\"mainFrame\" onFocus=\"this.blur()\">尾页</a>";
	echo "</td>";
  ?>
  </tr>
</table>
</body>
</html>