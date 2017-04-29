<?
$host = "127.3.25.2";
$username = "adminMcBGudk";
$password = "Ixx_HRkGQxjv";
$dbname = "bot";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Không Thể Kết Nối Tới CSDL: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>