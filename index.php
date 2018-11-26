<!--
  SID:1660192
  Full Name: Tran Minh Hieu
  Created Date:  23:27 19/11/2018
-->
<?php
if (isset($_REQUEST['page']))
{ 
if($_REQUEST['page'] !="")
if(file_exists("pages/".$_REQUEST['page'].".php"))
$page_content = file_get_contents("pages/".$_REQUEST['page'].".php");
else
if (file_exists($_REQUEST['page'].".php"))
$page_content = file_get_contents($_REQUEST['page'].".php");
else
echo "<center>Page:".$_REQUEST['page']." does not exist! Please check the url and try again!</center>"; 
}
else
$page_content = file_get_contents("pages/main.php");
$page_content = str_replace("!!HEADER!!", file_get_contents("design/header.php"),$page_content);
$page_content = str_replace("!!LEFT_COLUMN!!", file_get_contents("design/left_column.php"),$page_content);
$page_content = str_replace("!!RIGHT_COLUMN!!", file_get_contents("design/right_column.php"),$page_content);
$page_content = str_replace("!!FOOTER!!", file_get_contents("design/footer.php"),$page_content); 
$page_content = str_replace("!!COMMON_TAGS!!", file_get_contents("design/common_tags.php"),$page_content);

echo $page_content;
?>

