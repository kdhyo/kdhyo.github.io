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
   $birthYear = $row["birthYear"];
   $addr = $row["addr"];
   $mobile1 = $row["mobile1"];
   $mobile2 = $row["mobile2"];
   $height = $row["height"];   
   $mDate = $row["mDate"];      
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> ȸ�� ���� ���� </h1>
<FORM METHOD="post"  ACTION="update_result.php">
	���̵� : <INPUT TYPE ="text" NAME="userID" VALUE=<?php echo $userID ?> READONLY> <br>
	�̸� : <INPUT TYPE ="text" NAME="userName" VALUE=<?php echo $userName ?>> <br> 
	������� : <INPUT TYPE ="text" NAME="birthYear" VALUE=<?php echo $birthYear ?>> <br>
	���� : <INPUT TYPE ="text" NAME="addr" VALUE=<?php echo $addr ?>> <br>
	�޴��� ���� : <INPUT TYPE ="text" NAME="mobile1" VALUE=<?php echo $mobile1 ?>> <br>
	�޴��� ��ȭ��ȣ : <INPUT TYPE ="text" NAME="mobile2" VALUE=<?php echo $mobile2 ?>> <br>
	���� : <INPUT TYPE ="text" NAME="height" VALUE=<?php echo $height ?>> <br>
	ȸ�������� : <INPUT TYPE ="text" NAME="mDate" VALUE=<?php echo $mDate ?> READONLY><br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="���� ����">
</FORM>

</BODY>
</HTML>