<?php
//�����ļ���������
const HOST='localhost';
const USER='root';
const PASS='';
const DBNAME='gd01';
session_start();
switch($_GET['a'])
        {
		   case 'login'://��¼����
		   $name=$_POST['username'];//���մ���������Ϣ
		   $pwd=$_POST['pwd'];
		  
		  //1.���������ļ�
		  require("config.php");
		  //2.�������ݿⲢ�ж�
		  $link=mysql_connect(HOST,USER,PASS);
		  if(!$link){
			  die("���ݿ�����ʧ�ܣ�");
		  }
		  //3.ѡ�����ݿⲢ�����ַ���
		  mysql_select_db(DBNAME);
		  mysql_set_charset('utf8');
		  //4.����sql��䲢ִ��
		  $sql="select * from users where name={$name}";
		  $result=mysql_query($sql);
		  if(mysql_num_rows($result)>0){
			$user=mysql_fetch_assoc($result);
			if($user['pwd']==$pwd){
				//����¼��Ϣ�浽session��
				$_SESSION['adminuser']=$user;
			header("Location:index3.php");
			}
			else{
			header("Location:login2.php");
			}
			}else{
			header("Location:login2.php");
			}
			break;
			
			case 'logout'://ע��
			unset($_SESSION['adminuer']);//�Ƴ���¼��Ϣ���ͷţ�
			header('Location:login2.php');
			break;
	    }
?>