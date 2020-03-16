<?php
$host = "localhost";
$user = "root";
$pass = "CDPdisplay";
$db = "contact";


$con = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$agency = $_POST['agency'];
$state = $_POST['state'];
if (isset($_POST['law']))
{
	$law = $_POST['law'];
}else {
	$law=NULL;
}
if (isset($_POST['fire']))
{
	$fire = $_POST['fire'];
}else {
	$fire=NULL;
}
if (isset($_POST['hc']))
{
	$hc = $_POST['hc'];
}else {
	$hc=NULL;
}
if (isset($_POST['ems']))
{
	$ems = $_POST['ems'];
}else {
	$ems=NULL;
}
if (isset($_POST['em']))
{
	$em = $_POST['em'];
}else {
	$em=NULL;
}
if (isset($_POST['ph']))
{
	$ph = $_POST['ph'];
}else {
	$ph=NULL;
}
if (isset($_POST['ga']))
{
	$ga = $_POST['ga'];
}else {
	$ga=NULL;
}
if (isset($_POST['hm']))
{
	$hm = $_POST['hm'];
}else {
	$hm=NULL;
}
if (isset($_POST['psc']))
{
	$psc = $_POST['psc'];
}else {
	$psc=NULL;
}
if (isset($_POST['ss']))
{
	$ss = $_POST['ss'];
}else {
	$ss=NULL;
}
if (isset($_POST['edu']))
{
	$edu = $_POST['edu'];
}else {
	$edu=NULL;
}
if (isset($_POST['it']))
{
	$it = $_POST['it'];
}else {
	$it=NULL;
}
if (isset($_POST['ccv']))
{
	$ccv = $_POST['ccv'];
}else {
	$ccv=NULL;
}
if (isset($_POST['trans']))
{
	$trans = $_POST['trans'];
}else {
	$trans=NULL;
}
if (isset($_POST['sr']))
{
	$sr = $_POST['sr'];
}else {
	$sr=NULL;
}
if (isset($_POST['ag']))
{
	$ag = $_POST['ag'];
}else {
	$ag=NULL;
}
if (isset($_POST['pw']))
{
	$pw = $_POST['pw'];
}else {
	$pw=NULL;
}
if (isset($_POST['other']))
{
	$other = $_POST['other'];
}else {
	$other=NULL;
}
if (isset($_POST['tm']))
{
	$tm = $_POST['tm'];
}else {
	$tm=NULL;
}
if (isset($_POST['sc']))
{
	$sc = $_POST['sc'];
}else {
	$sc=NULL;
}
//$discipline = implode( '; ' , $_POST['discipline'] );

$sql = "INSERT INTO contacts (firstname, lastname, email, state, LAW, FIRE, HC, EMS, EM, PH, GA, HM, PSC, SS, EDU, IT, CCV, TRANS, SR, AG, PW, OTHER, Agency, TrainingManager, SupervisorCommand) VALUES ('$firstname','$lastname','$email','$state','$law','$fire','$hc','$ems','$em','$ph','$ga','$hm','$psc','$ss','$edu','$it','$ccv','$trans','$sr','$ag','$pw','$other','$agency','$tm','$sc')";

if(mysqli_query($con, $sql)){
    echo "<h1>Thank you. We will contact you as soon as possible.</h1>";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($con);
}
mysqli_close($con);

echo "<meta http-equiv=\"refresh\" content=\"1;url=..\index.html\"/>"

?>

