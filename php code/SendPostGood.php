<?php
 
 $good = (int)$_POST["good"];
 $idx = (int)$_POST["idx"];
 
 $con = mysqli_connect("localhost","root","","bbs")or die("Mysql���� ����!!");

 $sql = "UPDATE noticeboard SET good= '".$good."' WHERE idx=".$idx."";

 $ret = mysqli_query($con,$sql);

 if($ret)
 {
	echo "�����Ͱ� ���������� �Էµ�";
 }
 else
 {
	echo "������ �Է� ����";
 }
 

 mysqli_close($con);

?>