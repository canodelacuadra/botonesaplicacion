
<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("freeze",$query);
if(isset($_POST['value']))
{
$value=$_POST['value'];
$id=$_POST['id'];
mysql_query("update choice set choice='$value' where id=$id");
echo "Has seleccionado:" .$value;
}
?>