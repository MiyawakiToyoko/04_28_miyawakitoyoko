<?php
//削除ボタンを押したときの分岐
if(isset($_POST['delete'])==true)
{
	if(isset($_POST['selectid'])==false)
	{
		header('Location:warning.php'); //ラジオボタン未選択の場合
		exit();
	}
	$selectid=$_POST['selectid'];
	header('Location:delete.php?selectid='.$selectid);
	exit();
}

?>