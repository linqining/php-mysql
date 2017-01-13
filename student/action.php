  <?php
	  //配置文件常量声明
	  const HOST='localhost';
      const USER='root';
      const PASS='';
      const DBNAME='gd01';
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
	  switch($_GET['a'])
	  {
			  case'insert'://添加操作
			  //接收add.php传过来的数据
			  $name=$_POST['name'];
			  $jidian=$_POST['jidian'];
			  $sex=$_POST['sex'];
			  $classid=$_POST['classid'];
			  //定义sql语句
			  $sql="insert into student values(null,'{$name}',{$jidian},'{$sex}','{$classid}')";
			  mysql_query($sql);
			  if(mysql_insert_id($link)>0)
			  {
				  echo "success";
			  }
			  else
			  {
				  echo "low";
			  }
			  break;
		  
		  
			  case 'del'://删除操作
			  //接收参数id传来的值
			  $id=$_GET['id'];
			  //定义sql语句并执行
			  $sql="delete from student where id={$id}";
			  mysql_query($sql);
			  //判断
			  if(mysql_affected_rows($link)>0)
			  {
				  echo "success";
			  }
			  else{
				  echo "low";
			  }
			  break;
		  
			  case 'update'://修改操作
			  $id= $_POST['id'];
			  $name=$_POST['name'];
			  $jidian=$_POST['jidian'];
			  $sex=$_POST['sex'];
			  $classid=$_POST['classid'];
			  //定义sql语句进行修改
			  $sql="update student set name='{$name}',jidian={$jidian},sex='{$sex}',classid='{$classid}' where id={$id}";
			  mysql_query($sql);
			  if(mysql_affected_rows($link)>0)
			  {
				  echo "success";
			  }
			  else
			  {
				  echo "low";
			  }
			  break;
	  }
	  //关闭数据库
	  mysql_close($link);
   ?>