<?php
function gw_send_sms($sms_to,$sms_msg)  
            {           

                        $user = "api username";
                        $pass = " api password";
                        $sms_from = "adminuitm";
                        $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
                        $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
                        $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
                        $url = "http://gateway.onewaysms.com.au:10001/".$query_string;       
                        $fd = @implode ('', file ($url));      
                        if ($fd)  
                        {                       
            if ($fd > 0) {
          Print("MT ID : " . $fd);
          $ok = "success";
            }        
            else {
          print("Please refer to API on Error : " . $fd);
          $ok = "fail";
            }
                        }           
                        else      
                        {                       
                                    // no contact with gateway                      
                                    $ok = "fail";       
                        }           
                        return $ok;  
            }  
?>