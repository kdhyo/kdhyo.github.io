<?php
   header('Content-Type: text/html; charset=EUC-KR');
   $con = mysqli_connect("localhost", "sma1l", "hyo7845120!", "sma1l") or die("MySQL ���� ����!!");
   
   $userID = $_POST["userID"];
     
   $sql ="DELETE FROM moinTable WHERE userID='".$userID."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> ȸ�� ���� ��� </h1>";
   if($ret) {
	   echo $userID." ȸ���� ���������� ������..";
   }
   else {
	   echo "������ ���� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
