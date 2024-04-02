<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Result</title>
</head>

<body>

<p>Framingham心血管疾病風險預測</p>
<p>&nbsp;</p>
<?php
	function age_gender($age, $sex) {
	$age_score = 0;
	$age_m_score = [-1,0,1,2,3,4,5,6,7];
	$age_w_score = [-9,-4,0,3,6,7,8,8,8];
	if ($age <=34)				{  $age_index = 0; }
	if ($age >=35 && $age <=39)	{ $age_index = 1; }
	if ($age >=40 && $age <=44)	{ $age_index = 2; }
	if ($age >=45 && $age <=49)	{ $age_index = 3; }
	if ($age >=50 && $age <=54)	{ $age_index = 4; }
	if ($age >=55 && $age <=59)	{ $age_index = 5; }
	if ($age >=60 && $age <=64)	{ $age_index = 6; }
	if ($age >=65 && $age <=69)	{ $age_index = 7; }
	if ($age >=70)				{ $age_index = 8; }

	if ($sex == 1) { return $age_m_score[$age_index]; }
	else { return $age_w_score[$age_index]; }
	
	}
?>
<?php

 $sex = $_REQUEST['SexGroup']; 
 $age = $_REQUEST['age']; 
 $blood_press1 = $_REQUEST['blood_press1']; 
 $blood_press2 = $_REQUEST['blood_press2']; 
 
 if (isset($_REQUEST['high_blood'])) {
	 $high_blood = $_REQUEST['high_blood'];
	 $high_blood = "yes"; }
else
	{ $high_blood = "no"; }
	 
 $hdl = $_REQUEST['hdl'];
 $tdl = $_REQUEST['tdl'];
 
 
 echo '你的性別是 : ' . $sex . '<br>';
 echo '你的年齡是 : ' . $age . '<br>';
 echo '你的舒張壓是 : ' . $blood_press1 . '<br>';
 echo '你的收縮壓是 : ' . $blood_press2 . '<br>';
 
 echo '有無高血壓 : ' . $high_blood . '<br>';
 
 echo '你的高密度膽固醇是 : ' . $hdl . '<br>';
 echo '你的低密度膽固醇是 : ' . $tdl . '<br>';


 echo ' 你的age分數為 ' . age_gender((int)$age, (int)$sex) . '<br>';
 
?>

</body>

</html>
