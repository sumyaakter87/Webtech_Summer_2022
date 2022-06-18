<?PHP
$isPost=false;
$username="";

$isPost=false;
$password="";

$isPost=false;
$Department="";

$ispost=false;
$date="";



//check whether the button is clicked or not
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
	
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	
	$isPost=true;
	if($_POST["dept"]!="")
		$dept=$_POST["dept"];
	
	$isPost=true;
	if($_POST["date"]!="")
		$date=$_POST["date"];
	

	
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>";

?>
<br><br>
password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
echo "<span style='color:red;'><small>Required</small></span>";

?>
<br><br>
gender:<input type="radio" name="gender" value="male">Male
gender:<input type="radio" name="gender" value="female">Female
gender:<input type="radio" name="gender" value="others">Others


<br><br>

<input type="checkbox" name="skills[]"value="c#">c#
<input type="checkbox" name="skills[]"value="c++">c++
<input type="checkbox" name="skills[]"value="java">java
<br><br>

Department:<select name="dept">

<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="ENGLISH">ENGLISH</option> </select>

<?php
if($isPost==true && $Department=="")
echo "<span style='color:red;'><small>Required</small></span>";

?>
<br><br>

date:<input type="date" id="date " name="date">
<?php
if($isPost==true && $date=="")
echo "<span style='color:red;'><small>Required</small></span>";

?>



<br><br>






<input type="submit" name="btnClick" value="Click">






</form>