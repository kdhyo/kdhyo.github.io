<?php
   header('Content-Type: text/html; charset=EUC-KR');
	 $con = mysqli_connect("localhost", "sma1l", "hyo7845120!", "sma1l") or die("MySQL ���� ����!!");
   $sql ="SELECT * FROM moinTable WHERE userID='".$_GET['userID']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['userID']." ���̵��� ȸ���� ����!!!"."<br>";
		   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "������ �˻� ����!!!"."<br>";
	   echo "���� ���� :".mysqli_error($con);
	   echo "<br> <a href='main.html'> <--�ʱ� ȭ��</a> ";
	   exit();
   }   
   $row = mysqli_fetch_array($ret);
   $userID = $row['userID'];
   $userName = $row["userName"];
   
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> ȸ�� ���� </h1>
<FORM METHOD="post"  ACTION="delete_result.php">
	���̵� : <INPUT TYPE ="text" NAME="userID" VALUE=<?php echo $userID ?> READONLY> <br>
�̸� : <INPUT TYPE ="text" NAME="userName" VALUE=<?php echo $userName ?> READONLY> <br> 
	<BR><BR>
	�� ȸ���� �����ϰڽ��ϱ�?	
	<INPUT TYPE="submit"  VALUE="ȸ�� ����">
</FORM>

</BODY>
</HTML>