<?php
	 if($_POST["val"]){
	  	mysql_connect("localhost","root","e");
		mysql_select_db("js");//连接数据库
		mysql_query("set names 'UTF8'");
		$u=$_POST["val"];
//		$p=md5($_POST["pass"]);
		$re=mysql_query("insert into cont ('val') values ('$u')" );
		if(mysql_num_rows($re)>0){  //返回查读记录的个数
			 echo $u;
		}
		else{
			 echo 0;
		}
	 }
?>