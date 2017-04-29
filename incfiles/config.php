<?
$host = "otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "otmaa16c1i9nwrek.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$password = "so5gcf3jlrfrwfbq";
$dbname = "mysql";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Không Thể Kết Nối Tới CSDL: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>
