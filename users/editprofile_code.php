<?php 
include("../connect/session.php");
$uname=$_SESSION['uname'];
$ecno=$_POST['ecno'];
$pans=$_POST['pans'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$phone=$_POST['phone'];
$occupation=$_POST['occupation'];
mysql_query ("update members set ECNo='$ecno', PanNo='$pans', Address='$address', Mobile='$mobile',Phone='$phone', Occupation='$occupation' where MemberID='$uname' ");
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd' >  <html xmlns='http://www.w3.org/1999/xhtml' >  <head>  <meta http-equiv='Content-Type'  content='text/html; charset=utf-8'  />  <title>Succes !!</title>  <link href='../css/user.css'  rel='stylesheet'  type='text/css' >  <script>  function update()  {  history.go(-1);  }  var refresh=setInterval('update()',3000);  </script>  </head>  <body>  <table width=' 100%'  height=' 100%'  border=' 0'  cellspacing=' 0'  cellpadding=' 0' >    <tr>      <td align=' center'  valign=' middle' ><div class='successmsg' > <div><strong>Operation Success </strong><br/>      Please wait for a while.....<br/>       You are being redirected! If not then click <a href=' javascript:update()'  style=' cursor:pointer;'  onclick=' update()' ><font face=' Verdana'  size=' 1'  color=' #3399FF' >here</font></a></div></div></td>    </tr>  </table>  </body>  </html>";
?>
