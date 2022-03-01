<?php 

  	    $jsonObj= array();	
  	    
        $file = file_get_contents('/home/ftapps.xyz/public_html/infoUpdateAllApp', true);
        
        $pieces = explode("@",  $file);


        $file = file_get_contents('/home/ftapps.xyz/public_html/socialmedia', true);
        
        $social = explode("@",  $file);

     
        $row['Pl']="com.player.patrikolskfks";
        $row['inout']="true";
        $row['upd']= "no"; 
        $row['updInStOrSer']=$pieces[1];
        $row['link']=$pieces[2];
        $row['One']="35455f41-c67f-4d51-9e8c-bea99ac19538";
        $row['time']="";
        $row['fillm']="";


        $row['Face']=$social[0];
        $row['FaceLite']=$social[1];
        $row['Insta']=$social[2];
        $row['InstaLite']=$social[3];
        $row['Wts']=$social[4];

        $row['AllData']='{"limitProject":{"ads_activated":1,"clicks":1,"ban_hours":12,"delay_seconds":120,"ads":[{"type":"interstitial","admob_id":"","name":"interstitial_1"}]},"status":true}
';

        $row['paack']='com.zhiliaoapp.musically---100@@com.zhiliaoapp.musically.go---100@@com.snapchat.android---100@@com.facebook.orca---100@@com.facebook.mlite---100@@org.telegram.messenger---100@@com.dts.freefireth---100@@com.tencent.ig---100@@com.tencent.iglite---100@@com.facebook.katana---'.$social[0].'@@com.facebook.mlite---'.$social[1].'@@com.instagram.android---'.$social[2].'@@com.instagram.lite---'.$social[3].'@@com.whatsapp---'.$social[4];
		
		$row['paack2']='';

            
        
        
      
      
      array_push($jsonObj,$row);
      $set['App'] = $jsonObj;
	  header( 'Content-Type: application/json; charset=utf-8' );
	  $iv = 'fedcba9876543210'; 
	  $key = 'Acti_Key_Now'; 
	  $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    
		
	    echo $val;

    
