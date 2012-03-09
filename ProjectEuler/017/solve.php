<?php

function n2w_hunderds($number) 
{ 

    $test=$number*1; 
    if (empty($test))return; 
    $lasts=array('one','two','three','four','five','six','seven','eight','nine'); 
    $teens=array('eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen'); 
    $teen=array('ten','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety'); 

    /* written by bas@startpunt.cc */ 
     
    $string=''; 
    $j=strlen($number); 
    $done=false; 
    for($i=0; $i<strlen($number); $i++) 
    { 
         

        if($j==2)  
        { 
        if(strlen($number)>2) 
        { 
        if($number[0]!=0)$string.= ' hundred ';  
        if($number % 100 != 0)$string.= 'and '; 
        } 
        if ($number[$i]==1) 
        { 
            if($number[$i+1]==0) $string.=$teen[$number[$i]-1]; 
            else  
            { 
            $string.=$teens[$number[$i+1]-1]; 
            $done=true; 
            } 
        } 
        else 
        { 
            if(!empty($teen[$number[$i]-1]))$string.=$teen[$number[$i]-1].' '; 
        } 
    } 

        elseif($number[$i]!=0 && !$done) $string.=$lasts[$number[$i]-1]; 

        $j--; 
    } 

return $string; 
}     

function n2w($number,$uk=0) 
{ 
    if(!is_string($number))$number.=""; 
    if(!$uk)$many=array('', ' thousand ',' million ',' billion ',' trillion '); 
    else $many=array('', ' thousand ',' million ',' milliard ',' billion '); 
    $string=''; 
    if(strlen($number)%3!=0) 
    { 
    $string.=n2w_hunderds(substr($number,0, strlen($number)%3 )); 
    $string.=$many[floor(strlen($number)/3)]; 
         
    } 
    for($i=0; $i<floor(strlen($number)/3); $i++) 
    { 
         
        $string.=n2w_hunderds(substr($number,strlen($number)%3+($i*3),3)); 
        if($number[strlen($number)%3+($i*3)]!=0)$string.=$many[floor(strlen($number)/3)-1-$i]; 

    }     

    return $string; 
} 

$len = 0;
for($i = 1; $i <= 1000; $i++) {
	$len += strlen(str_replace(' ','',n2w($i)));
}

echo $len;