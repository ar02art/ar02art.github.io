<?php 
$message = "
男方資料
你的姓名: $_POST[form2]
英文姓名: $_POST[form9]
公司名稱: $_POST[form3]
聯絡電話: $_POST[form4]
連絡手機: $_POST[form5]
電子信箱: $_POST[form6]
現有網址: $_POST[form8]
需求說明: $_POST[textfield2]
";
mb_internal_encoding("UTF-8");
mb_send_mail("robbieku@gmail.com,robbiekimo@yhaoo.com.tw", "AR02客戶信件", $message ,"From:send");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3; url=contact.html">
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	background-image: url(img/ar_bg.gif);
}
-->
</style>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p class="font0w">訊息已經送出，請稍候將自動返回</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
