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
   $mDate = date("Y-m-j");
   
   $sql =" INSERT INTO moinTable VALUES('".$userID."','".$userName."',".$birthYear;
   $sql = $sql.",'".$addr."','".$mobile1."','".$mobile2."',".$height.",'".$mDate."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> �ű� ȸ�� �Է� ��� </h1>";
   if($ret) {
	   echo "�����Ͱ� ���������� �Էµ�.";
   }
   else {
	   echo "������ �Է� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
