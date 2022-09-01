<?php
    $fname=(isset($_POST['fname']))?$_POST['fname']:'';
     $emaddress=(isset($_POST['email']))?$_POST['email']:'';
     $subject=(isset($_POST['subject']))?$_POST['subject']:'';
    $message=(isset($_POST['message']))?$_POST['message']:'';
 
    $to="rohit.prasad@plaxonic.com";   
 
$body="<table cellspacing=1 bgcolor=#89242C cellpadding=2 align=center border=0>"."\n".

                "<tr>
                    <td width=100% bordercolor=#FFFF99 bgColor=#89242C colspan=3>
                        <p align=center><font size=3 color=#FFFFFF face=Arial><b>Enquiry From Cloud Recruiting</b></font>
                    </td>
                </tr>"."\n".
                
           "<tr>"."\n".
                    "<td bordercolor=#FFFF99 bgColor=#FFFFFF><b><font size=2 face=Arial> Name </font></b></td><td width=1 bgColor=#FFFFFF>:</td>"."\n".
                    "<td bgcolor=#FFFFFF>". $fname. "</td>"."\n".

                "</tr>"."\n".
                
                  "<tr>"."\n".
                    "<td bordercolor=#FFFF99 bgColor=#FFFFFF><b><font size=2 face=Arial> Email Address</font></b></td><td width=1 bgColor=#FFFFFF>:</td>"."\n".
                    "<td bgcolor=#FFFFFF>". $emaddress. "</td>"."\n".

                "</tr>"."\n".
                
                 "<tr>"."\n".
                    "<td bordercolor=#FFFF99 bgColor=#FFFFFF><b><font size=2 face=Arial> Subject</font></b></td><td width=1 bgColor=#FFFFFF>:</td>"."\n".
                    "<td bgcolor=#FFFFFF>". $subject. "</td>"."\n".

                "</tr>"."\n".
                
                
                 "<tr>"."\n".
                    "<td bordercolor=#FFFF99 bgColor=#FFFFFF><b><font size=2 face=Arial> Message </font></b></td><td width=1 bgColor=#FFFFFF>:</td>"."\n".
                    "<td bgcolor=#FFFFFF>". $message. "</td>"."\n".

                "</tr>"."\n".
               
              
                "</table>";

$subject = "Enqury For Cloud Recruiting";
  $headers = "From: Cloud Recruiting <info@cloudrecruiting.com>\r\n";  
  $headers .= "Organization: Cloud Recruiting\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  //$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $headers .= "X-Priority: Normal\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

  $returnpath = "<info@cloudrecruiting.com>";
$additional = "-f$returnpath";


   $t= mail($to, $subject, $body, $headers,$additional);
   if($t){echo 'check';}
   else{
       echo 'not sent';
       
   }
   

?>