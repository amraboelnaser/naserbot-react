<?
$host = "otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "reebt6jowokrf8if";
$password = "i84dkuh6b3waqtcc";
$dbname = "mysql";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Không Thể Kết Nối Tới CSDL: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>
