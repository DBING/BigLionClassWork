<?php
 header("content-type:text/html;charset=utf-8");
$imgname=$_POST['name'];



include("MySql.class.php");
include("Upload.class.php");

$db = new MySql();
$up=new Upload();
$file=$up->doUp($_FILES);
if($file){
	$sql="insert into tupian values(NULL,'$imgname','$file')";
	$res=$db->insert($sql);
	if($res){

		echo '成功';

	}else{

	echo '失败了';

	}

}else{
	echo $up->getError();
}




