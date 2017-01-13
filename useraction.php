<?php
//配置文件常量声明
const HOST='localhost';
const USER='root';
const PASS='';
const DBNAME='gd01';
session_start();
switch($_GET['a'])
        {
		   case 'login'://登录操作
		   $name=$_POST['username'];//接收传过来的信息
		   $pwd=$_POST['pwd'];
		  
		  //1.导入配置文件
		  require("config.php");
		  //2.连接数据库并判断
		  $link=mysql_connect(HOST,USER,PASS);
		  if(!$link){
			  die("数据库连接失败！");
		  }
		  //3.选择数据库并设置字符集
		  mysql_select_db(DBNAME);
		  mysql_set_charset('utf8');
		  //4.定义sql语句并执行
		  $sql="select * from users where name={$name}";
		  $result=mysql_query($sql);
		  if(mysql_num_rows($result)>0){
			$user=mysql_fetch_assoc($result);
			if($user['pwd']==$pwd){
				//将登录信息存到session里
				$_SESSION['adminuser']=$user;
			header("Location:index.php");
			}
			else{
			header("Location:login.php");
			}
			}else{
			header("Location:login.php");
			}
			break;
			
			case 'logout'://注销
			unset($_SESSION['adminuer']);//移除登录信息（释放）
			header('Location:login.php');
			break;
	    }
?>