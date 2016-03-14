<?php 
include("blocks/bd.php");
$result = mysql_query("SELECT title,text FROM settings WHERE page='contacts' ",$db);
$myrow = mysql_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
              <td valign="baseline">
              <p><?php echo $myrow['text'];?></p>
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