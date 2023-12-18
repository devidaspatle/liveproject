<?php 
session_start();

if( isset($_POST['submit'])) {
//print_r($_POST);
  
		
		$subject = "Enquiry";
		$text="\r\n <br><strong>First Name : </strong>".$_POST['firstname']."\r\n ".
		"\r\n <br><strong>Last Name : </strong>".$_POST['lastname']."\r\n ".
		"\r\n <br><strong>Address : </strong>".$_POST['address']."\r\n ".
			"\r\n <br><strong>City :</strong>".$_POST['city']."\r\n ".
			"\r\n <br><strong>Phone No. :</strong>".$_POST['phoneno']."\r\n ".
			"\r\n <br><strong>Emial ID :</strong>".$_POST['email']."\r\n ".
			"\r\n <br><strong>Comments: :</strong>".$_POST['detail']."\r\n ";
			
			$msg = "<b>".$subject."</b><br>\r\n". $text;
		
			$to = "info@visalpaints.com,sandeep@vishalpaints.com"; //, 
			$headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
			
			$bound_text =  	"devidas";
			$bound = 	"--".$bound_text."\r\n";
			$bound_last = 	"--".$bound_text."--\r\n";
							 
			$headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
			// defining header for mail (MIME type, boundries)
			$headers .= "MIME-Version: 1.0\r\n"
				."Content-Type: multipart/mixed; boundary=\"$bound_text\"\r\n";
		#		."Location: thanks.html";
			$message="";
			$message .= $bound; //defining teh boundries
				 
			$message .="Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
				."Content-Transfer-Encoding: 7bit\r\n"
				.$msg
				."<br>\r\n"
				.$bound;
			$message .= 	"Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
				."Content-Transfer-Encoding: 7bit\r\n"
				.$bound_last; 
			//echo $message;
			
			//sending the mail
			//$issend=mail($to, $subject, $message, $headers);	
			if(mail($to, $subject, $message, $headers))
			{
			
				//$msg="Thank you for contacting Techtonics Inc.!<br>
//We shall revert to you soon";
			//}else{
				//$msg="There is some problem, Please Try Again Letter! ";
			//}	
	}
	

   //header("Location: thanks.php");	
   
	//else{ header("Location: contact.php");}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vishal Paints</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {font-size: 18}
.style2 {font-size: 18px}
-->
</style>
</head>

<body>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="999" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="150" style="background-color:#FFFFFF;"><table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','400','height','146','src','image/logo','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','image/logo' ); //end AC code
        </script>
                <noscript>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="400" height="146">
                  <param name="movie" value="image/logo.swf" />
                  <param name="quality" value="high" />
                  <embed src="image/logo.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="400" height="146"></embed>
                </object>
                </noscript></td>
            <td width="505" align="right" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="right" style="padding-top:120px;"><table width="210" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="70" align="center" class="top_menu"><a href="index.html">Home</a></td>
                        <td width="70" align="center" class="top_menu"><a href="product.html">Products</a></td>
                        <td width="70" align="center" class="top_menu"><a href="contact .html">Contact </a></td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="image/headre.jpg" width="938" height="14" /></td>
      </tr>
      <tr>
        <td align="right" style=" background-color:#FFFFFF; padding:0px 0px 0 0px"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','670','height','49','src','image/menu','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','image/menu' ); //end AC code
    </script>
            <noscript>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="670" height="49">
              <param name="movie" value="image/menu.swf" />
              <param name="quality" value="high" />
              <embed src="image/menu.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="670" height="49"></embed>
            </object>
            </noscript></td>
      </tr>
      <tr>
        <td valign="top" style="background-color:#FFFFFF;"><table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="image/header-left.jpg" width="466" height="280" /></td>
              <td valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','533','height','280','src','image/slide','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','image/slide' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="533" height="280">
                <param name="movie" value="image/slide.swf" />
                <param name="quality" value="high" />
                <embed src="image/slide.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="533" height="280"></embed>
              </object></noscript></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td style="background-color:#FFFFFF;"><table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td class="contain_td" style="background:url(image/contain_bg.jpg) repeat-x #FFFFFF;"><table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="500" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60"><img src="image/icon.jpg" width="49" height="28" /></td>
                        <td style="font-size:22px; color:#333333; font-weight:bold;">Thanks </td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25"></td>
                </tr>
                <tr>
                  <td><table width="100%" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="140" valign="top">&nbsp;</td>
                              <td valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td valign="top">      <p align="center" class="padding_bottom16 style2"><strong>Thank you for contacting Vishal Paints!</strong></p>
                                    <p align="center" class="padding_bottom16 style2" ><strong><br>
           We shall revert to you soon</strong></p>
           <p align="center" class="style1">&nbsp;</p></td>
                                </tr>

                              </table>                                </td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table>                </td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="80" style=" background-color:#333333;"><table width="1000" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="footer_menu"><a href="index.html">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="about.html">About Us</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <a href="team.html">Team</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="product.html">Products</a> &nbsp;| &nbsp;&nbsp;<a href="contact .html">Contact Us</a></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
        <tr>
          <td style="text-align:center; color:#999999; font-size:11px;">Copyright © Vishal Paints. All Rights Reserved. Site is powrered by <a href="http://www.silverhightech.com/" class="footer_menu">silverhightech.com</a></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
