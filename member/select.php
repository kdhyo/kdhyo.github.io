<?php
   header('Content-Type: text/html; charset=EUC-KR');
   $con = mysqli_connect("localhost", "sma1l", "hyo7845120!", "sma1l") or die("MySQL ���� ����!!");

   $sql ="SELECT * FROM moinTable";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "moinTable ������ �˻� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> ȸ�� �˻� ��� </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>���̵�</TH><TH>�̸�</TH><TH>�������</TH><TH>����</TH><TH>����</TH>";
   echo "<TH>��ȭ��ȣ</TH><TH>Ű</TH><TH>������</TH><TH>����</TH><TH>����</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['userID'], "</TD>";
	  echo "<TD>", $row['userName'], "</TD>";
	  echo "<TD>", $row['birthYear'], "</TD>";
	  echo "<TD>", $row['addr'], "</TD>";
	  echo "<TD>", $row['mobile1'], "</TD>";
	  echo "<TD>", $row['mobile2'], "</TD>";
	  echo "<TD>", $row['height'], "</TD>";
	  echo "<TD>", $row['mDate'], "</TD>";
	  echo "<TD>", "<a href='update.php?userID=", $row['userID'], "'>����</a></TD>";
	  echo "<TD>", "<a href='delete.php?userID=", $row['userID'], "'>����</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
?>
