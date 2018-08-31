<?php
// if ($_POST->isMethod('post')){    
            // return response()->json(['response' => 'This is post method']); 
        // }
        // return response()->json(['response' => 'This is get method']);
		
		
		//trim off excess whitespace off the whole
		$text = trim($_POST["date_input"]);
		
		//explode all separate lines into an array
		$textAr = explode("\n", $text);

		//trim all lines contained in the array.
		$textAr = array_filter($textAr, 'trim');
		
		$res="";
		//loop through the lines
		foreach($textAr as $line){
			
			switch ($_POST['convert_type']) {
				case "1": //11/02/2018 เป็น 11/02/2561
					$str_ex=explode("/",$line);
					$day=str_pad($str_ex[0],2,"0",STR_PAD_LEFT);
					$res.= trim($day."/".$str_ex[1]."/".(intval($str_ex[2])+543))."\n";
					break;
				case "2": //11 กันยายน 2524 เป็น 11/09/2524
					$str_ex=explode(" ",$line);
					$month="";
					switch ($str_ex[1]){
						case "มกราคม":
							$month="01";
							break;
						case "กุมภาพันธ์":
							$month="02";
							break;
						case "มีนาคม":
							$month="03";
							break;
						case "เมษายน":
							$month="04";
							break;
						case "พฤษภาคม":
							$month="05";
							break;
						case "มิถุนายน":
							$month="06";
							break;
						case "กรกฎาคม":
							$month="07";
							break;
						case "สิงหาคม":
							$month="08";
							break;
						case "กันยายน":
							$month="09";
							break;
						case "ตุลาคม":
							$month="10";
							break;
						case "พฤศจิกายน":
							$month="11";
							break;
						case "ธันวาคม":
							$month="12";
							break;
						default:
							$month="00";
					}
					$day=str_pad($str_ex[0],2,"0",STR_PAD_LEFT);
					$res.= trim($day."/".$month."/".$str_ex[2])."\n";
					break;
				case "3": //11 ก.ย. 2550 เป็น 11/09/2550
					$str_ex=explode(" ",$line);
					$month="";
					switch ($str_ex[1]){
						case "ม.ค.":
							$month="01";
							break;
						case "ก.พ.":
							$month="02";
							break;
						case "มี.ค.":
							$month="03";
							break;
						case "เม.ย.":
							$month="04";
							break;
						case "พ.ค.":
							$month="05";
							break;
						case "มิ.ย.":
							$month="06";
							break;
						case "ก.ค.":
							$month="07";
							break;
						case "ส.ค.":
							$month="08";
							break;
						case "ก.ย.":
							$month="09";
							break;
						case "ต.ค.":
							$month="10";
							break;
						case "พ.ย.":
							$month="11";
							break;
						case "ธ.ค.":
							$month="12";
							break;
						default:
							$month="00";
					}
					$day=str_pad($str_ex[0],2,"0",STR_PAD_LEFT);
					$res.= trim($day."/".$month."/".$str_ex[2])."\n";
					break;
				default:
					$icon="";
					$area="";
			}
		}
	//echo $ber."\t".$icon."\t".$area."\tCorporation\t".$ber."\n";
	echo $res;
?>