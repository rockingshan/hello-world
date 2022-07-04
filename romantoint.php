<?php
  function romanToInt($s) {
        $intVal =0;
        $lengthString = strlen($s);
        for($i=0;$i<=$lengthString;$i++){
            if(substr($s,$i,2) == 'IV'){
               $intVal += 4;
			   $i++;
            }elseif(substr($s,$i,2) == 'IX'){
                $intVal += 9;
				$i++;
            }elseif(substr($s,$i,2) == 'XL'){
                $intVal += 40;
				$i++;
            }elseif(substr($s,$i,2) == 'XC'){
                $intVal += 90;
				$i++;
            }elseif(substr($s,$i,2) == 'CD'){
                $intVal += 400;
				$i++;
            }elseif(substr($s,$i,2) == 'CM'){
                $intVal += 900;
				$i++;
            }else{
                $intVal += romanEval(substr($s,$i,1));
            }    
        }
        return $intVal;
    }    
    
    function romanEval($rom){
        switch($rom){
            case "I":
                return 1;
                break;
            case "V":
                return 5;
                break;
            case "X":
                return 10;
                break;
            case "L":
                return 50;
                break;
            case "C":
                return 100;
                break;
            case "D":
                return 500;
                break;
            case "M":
                return 1000;
                break;
        }
    }
	
	
echo romanToInt('DLXIV');
	
?>
