<?php
   header('Content-Type: text/html; charset=EUC-KR');
   $con = mysqli_connect("localhost", "sma1l", "hyo7845120!", "sma1l") or die("MySQL ���� ����!!");

   $userID = $_POST["userID"];
   $userName = $_POST["userName"];
   $birthYear = $_POST["birthYear"];
   $addr = $_POST["addr"];
   $mobile1 = $_POST["mobile1"];
   $mobile2 = $_POST["mobile2"];
   $height = $_POST["height"];   
   $mDate = $_POST["mDate"]; 
   
   $sql ="UPDATE moinTable SET userName='".$userName."', birthYear=".$birthYear;
   $sql = $sql.", addr='".$addr."', mobile1='".$mobile1."',mobile2='".$mobile2;
   $sql = $sql."', height=".$height.", mDate='".$mDate."' WHERE userID='".$userID."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> ȸ�� ���� ���� ��� </h1>";
   if($ret) {
	   echo "�����Ͱ� ���������� ������.";
   }
   else {
	   echo "������ ���� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
