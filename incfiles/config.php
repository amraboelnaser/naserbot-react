<?
$host = "ec2-54-225-118-55.compute-1.amazonaws.com";
$username = "witqrqrzgltbee";
$password = "5d467f5e9cfa555d38631a05312b14798cfc20ef9e98534f2a211a11c103120d";
$dbname = "d4qs8mvv19ldia";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Không Thể Kết Nối Tới CSDL: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>
