<?php
include ("blocks/bd.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='lessons'",$db);
$myrow = mysql_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d'];?>">
<meta name="keywords" content="<?php echo $myrow['meta_k'];?>">
<title><?php echo $myrow['title'];?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style>
</head>
<body>
<table width="690" border="0" align="center" class="main-border">
  <tbody>
  <!--подключаем шапку сайта-->
   <?php include("blocks/header.php"); ?>
    <tr>
      <td class="left"><table width="690" border="0">
          <tbody>
            <tr>
            <!--подключаем левый блок сайта сайта-->
              <?php include("blocks/lefttd.php");?>
              <td valign="top">
              <?php echo $myrow['text'];?>
              </td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <!--подключаем  нижний графический элемент сайта-->
    <?php include("blocks/footer.php");?>
  </tbody>
</table>

<p>&nbsp;</p>
</body>
</html>