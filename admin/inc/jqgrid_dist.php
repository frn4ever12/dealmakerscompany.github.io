﻿
<?php          
	if (!function_exists('json_encode'))   
	{   
	require_once 'JSON.php';   
	function json_encode($R6157E037F7BEFDE0C4AA5FE57C53D296)   
		{    
			global $RD1E8304B4C9A69B93907A71DE55AD040;
   			if (!isset($RD1E8304B4C9A69B93907A71DE55AD040)) 
			{     $RD1E8304B4C9A69B93907A71DE55AD040 = new Services_JSON();
			}
			    return 
				$RD1E8304B4C9A69B93907A71DE55AD040->encode($R6157E037F7BEFDE0C4AA5FE57C53D296);
			}     
			function json_decode($R6157E037F7BEFDE0C4AA5FE57C53D296)   
			{    
				global $RD1E8304B4C9A69B93907A71DE55AD040;    
			if (!isset($RD1E8304B4C9A69B93907A71DE55AD040)) 
				{     
					$RD1E8304B4C9A69B93907A71DE55AD040 = new Services_JSON();
	    			}    
				return 
					$RD1E8304B4C9A69B93907A71DE55AD040->decode($R6157E037F7BEFDE0C4AA5FE57C53D296);
   				}  
			}    
			function pr($R2322221D09E72D62CE8923BF936F088E, $R9A939A96AF70270E0C80DB6638153F15=0)  
			{   
				echo "<pre>";   
				print_r($R2322221D09E72D62CE8923BF936F088E);   
				echo "</pre>";      
			if ($R9A939A96AF70270E0C80DB6638153F15)    die;
			}      
			function json_encode_jsfunc($R6C6F2FFA347EF13815DB0C336428E5A1=array(),
 			$R3BA3B20BC86EEC57141D30BC47A3351D=array(), 
			$RC17C78D32ED310A7940CA69ED40E6B4A=0)  
			{   
				foreach($R6C6F2FFA347EF13815DB0C336428E5A1 as $RF413F06AEBBCEF5E1C8B1019DEE6FE6B=>$R7D0596C36891967F3BB9D994B4A97C19)   
			{    
				if (is_array($R7D0596C36891967F3BB9D994B4A97C19))    
				{     $R034AE2AB94F99CC81B389A1822DA3353 = json_encode_jsfunc($R7D0596C36891967F3BB9D994B4A97C19, $R3BA3B20BC86EEC57141D30BC47A3351D, 1);
     				$R6C6F2FFA347EF13815DB0C336428E5A1[$RF413F06AEBBCEF5E1C8B1019DEE6FE6B]=$R034AE2AB94F99CC81B389A1822DA3353[0];
				$R3BA3B20BC86EEC57141D30BC47A3351D=$R034AE2AB94F99CC81B389A1822DA3353[1];
			    	}
				    else    
				{    
					if (substr($R7D0596C36891967F3BB9D994B4A97C19,0,8)=='function')     
					{      $RD8DD6018A7F1DFABFE85A162E50580B6="#".uniqid()."#";
					      $R3BA3B20BC86EEC57141D30BC47A3351D[$RD8DD6018A7F1DFABFE85A162E50580B6]=$R7D0596C36891967F3BB9D994B4A97C19;
			      			$R6C6F2FFA347EF13815DB0C336428E5A1[$RF413F06AEBBCEF5E1C8B1019DEE6FE6B]=$RD8DD6018A7F1DFABFE85A162E50580B6;
					}    
				}   
			}     
			if ($RC17C78D32ED310A7940CA69ED40E6B4A==1)   
				{    
					return 
					array(	$R6C6F2FFA347EF13815DB0C336428E5A1,
						$R3BA3B20BC86EEC57141D30BC47A3351D);
				}     
			else   
				{    
						$RCD5024C887FC94A32DA0E0B9AE05A6C4 = json_encode($R6C6F2FFA347EF13815DB0C336428E5A1);
					    foreach($R3BA3B20BC86EEC57141D30BC47A3351D as $RF413F06AEBBCEF5E1C8B1019DEE6FE6B=>$R7D0596C36891967F3BB9D994B4A97C19)
			    	{     
					$RCD5024C887FC94A32DA0E0B9AE05A6C4 = str_replace('"'.$RF413F06AEBBCEF5E1C8B1019DEE6FE6B.'"', $R7D0596C36891967F3BB9D994B4A97C19, $RCD5024C887FC94A32DA0E0B9AE05A6C4);
				}      
					return 
					$RCD5024C887FC94A32DA0E0B9AE05A6C4;
					}
				}
			class jqgrid  
				{     
					var $RBAF021A7FD7734AE78ECDD24D3CFD580 = array();        
					var $R740001C2C9698048AB56FEF7FA69CCB2;        
					var $R90E8291866BD6CB7ED5089CE7E833D11;        
					var $RF222733EC095D089B5A1E3AD401E79CD;        
					var $R000B935637CEA64CC7810FB0077F5FF1;        
					var $R0B4F1A0E1C92849500842E2BD49E8357;         
			function jqgrid($R000B935637CEA64CC7810FB0077F5FF1 = null)   
			{    
				if (!is_array($_SESSION))
					session_start();      
					$R4DAC0956899B25A94B0A95BBA371CF80["datatype"] = "json";    
					$R4DAC0956899B25A94B0A95BBA371CF80["rowNum"] = 20;    
					$R4DAC0956899B25A94B0A95BBA371CF80["width"] = 900;    
					$R4DAC0956899B25A94B0A95BBA371CF80["height"] = 240;    
					$R4DAC0956899B25A94B0A95BBA371CF80["rowList"] = array(10,20,30);    
					$R4DAC0956899B25A94B0A95BBA371CF80["viewrecords"] = true;    
					$R4DAC0956899B25A94B0A95BBA371CF80["scrollrows"] = true;    
					$R4DAC0956899B25A94B0A95BBA371CF80["url"] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];           
					$R3CB9CDAED257453CFA56B9EF81B44C57 = (strstr($R4DAC0956899B25A94B0A95BBA371CF80["url"], "?")) ? "&":"?";    
				if ($_REQUEST["rowid"] && $_REQUEST["subgrid"])     
					$R4DAC0956899B25A94B0A95BBA371CF80["url"] .= $R3CB9CDAED257453CFA56B9EF81B44C57."rowid=".$_REQUEST["rowid"]."&subgrid=".$_REQUEST["subgrid"];      
					$R4DAC0956899B25A94B0A95BBA371CF80["editurl"] = $R4DAC0956899B25A94B0A95BBA371CF80["url"];    
					$R4DAC0956899B25A94B0A95BBA371CF80["cellurl"] = $R4DAC0956899B25A94B0A95BBA371CF80["url"];           
					$R4DAC0956899B25A94B0A95BBA371CF80["scroll"] = 0;    $R4DAC0956899B25A94B0A95BBA371CF80["sortable"] = true;           
					$R4DAC0956899B25A94B0A95BBA371CF80["export"]["paper"] = "a4";    
					$R4DAC0956899B25A94B0A95BBA371CF80["export"]["orientation"] = "landscape";        
					$this->options = $R4DAC0956899B25A94B0A95BBA371CF80;    
					$this->con = $R000B935637CEA64CC7810FB0077F5FF1;        
					$this->actions["showhidecolumns"] = false;    
					$this->actions["export"] = false;   
			}        
			private function strip($R7D0596C36891967F3BB9D994B4A97C19)   
			{    
				if(get_magic_quotes_gpc() != 0)    
				{     
					if(is_array($R7D0596C36891967F3BB9D994B4A97C19))        
						if ( array_is_associative($R7D0596C36891967F3BB9D994B4A97C19) )      
						{       
							foreach( $R7D0596C36891967F3BB9D994B4A97C19 as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RA3D52E52A48936CDE0F5356BB08652F2)        
								$R0C07CA587B7BAAD6E37E765539CFFFEE[$RA09FE38AF36F6839F4A75051DC7CEA25] = stripslashes($RA3D52E52A48936CDE0F5356BB08652F2);       
								$R7D0596C36891967F3BB9D994B4A97C19 = $R0C07CA587B7BAAD6E37E765539CFFFEE;       
						}          
						else         
						for($RA7B9A383688A89B5498FC84118153069 = 0; $RA7B9A383688A89B5498FC84118153069 < sizeof($R7D0596C36891967F3BB9D994B4A97C19); $RA7B9A383688A89B5498FC84118153069++)
						        $R7D0596C36891967F3BB9D994B4A97C19[$RA7B9A383688A89B5498FC84118153069] = stripslashes($R7D0596C36891967F3BB9D994B4A97C19[$RA7B9A383688A89B5498FC84118153069]);     
						else    
							$R7D0596C36891967F3BB9D994B4A97C19 = stripslashes($R7D0596C36891967F3BB9D994B4A97C19);    
				}    
				return $R7D0596C36891967F3BB9D994B4A97C19;   
			}          
			private function construct_where($R3CB9CDAED257453CFA56B9EF81B44C57)   
			{    
				$RC5A86660D9E12798C70024E976B94D6D = "";       	
				$RFBA39D6C7512C24F4EF3A432058A744E = array(         'eq'=>" = ",         'ne'=>" <> ",         'lt'=>" < ",         'le'=>" <= ",         'gt'=>" > ",         'ge'=>" >= ",         'bw'=>" LIKE ",         'bn'=>" NOT LIKE ",         'in'=>" IN ",         'ni'=>" NOT IN ",         'ew'=>" LIKE ",         'en'=>" NOT LIKE ",         'cn'=>" LIKE " ,         'nc'=>" NOT LIKE " );    
				if ($R3CB9CDAED257453CFA56B9EF81B44C57) 
					{     
						$RBFE9A218892D1D34044B86A2067C9E2B = json_decode($R3CB9CDAED257453CFA56B9EF81B44C57,true);     
							if(is_array($RBFE9A218892D1D34044B86A2067C9E2B))     
							{      
								$RCDF353F8CABEA108C4804C17FC6A8D93 = $RBFE9A218892D1D34044B86A2067C9E2B['groupOp'];      
								$RBA561C702770CA295AF7B64FD136F264 = $RBFE9A218892D1D34044B86A2067C9E2B['rules'];      
								$RA16D2280393CE6A2A5428A4A8D09E354 =0;      
							foreach($RBA561C702770CA295AF7B64FD136F264 as $RF413F06AEBBCEF5E1C8B1019DEE6FE6B=>$R244F38266C59587D696AEC08A771B803)       
								{       
									$R4454E360FFF252043E577C8411615F0E = str_replace("::",".",$R244F38266C59587D696AEC08A771B803['field']);       $R07C0DD69A9C2B0D1C815296F57795AE8 = $R244F38266C59587D696AEC08A771B803['op'];       $RA3D52E52A48936CDE0F5356BB08652F2 = $R244F38266C59587D696AEC08A771B803['data'];       
								if(isset($RA3D52E52A48936CDE0F5356BB08652F2) && isset($R07C0DD69A9C2B0D1C815296F57795AE8))       
									{        
										$RA16D2280393CE6A2A5428A4A8D09E354++;               
										$RA3D52E52A48936CDE0F5356BB08652F2 = $this->to_sql($R4454E360FFF252043E577C8411615F0E,$R07C0DD69A9C2B0D1C815296F57795AE8,$RA3D52E52A48936CDE0F5356BB08652F2);             
									if ($RA16D2280393CE6A2A5428A4A8D09E354 == 1) 
										$RC5A86660D9E12798C70024E976B94D6D = " AND ";        
									else 
										$RC5A86660D9E12798C70024E976B94D6D .= " " .$RCDF353F8CABEA108C4804C17FC6A8D93." ";        
									switch ($R07C0DD69A9C2B0D1C815296F57795AE8) 
										{                 
											case 'in' :         
											case 'ni' :          $RC5A86660D9E12798C70024E976B94D6D .= $R4454E360FFF252043E577C8411615F0E.$RFBA39D6C7512C24F4EF3A432058A744E[$R07C0DD69A9C2B0D1C815296F57795AE8]." (".$RA3D52E52A48936CDE0F5356BB08652F2.")";          
									break;         
									default:          $RC5A86660D9E12798C70024E976B94D6D .= $R4454E360FFF252043E577C8411615F0E.$RFBA39D6C7512C24F4EF3A432058A744E[$R07C0DD69A9C2B0D1C815296F57795AE8].$RA3D52E52A48936CDE0F5356BB08652F2;        
										}       
									}      
								}     
							}    
					}    
					return $RC5A86660D9E12798C70024E976B94D6D;       
			}         
			private function to_sql($R4454E360FFF252043E577C8411615F0E, $R5B841EAE1D0974CFA6B54D111D0A47E5, $R244F38266C59587D696AEC08A771B803)    
			{       
				if($R5B841EAE1D0974CFA6B54D111D0A47E5=='bw' || $R5B841EAE1D0974CFA6B54D111D0A47E5=='bn') 
					return "'" . addslashes($R244F38266C59587D696AEC08A771B803) . "%'";    
					else if ($R5B841EAE1D0974CFA6B54D111D0A47E5=='ew' || $R5B841EAE1D0974CFA6B54D111D0A47E5=='en') 
					return "'%" . addcslashes($R244F38266C59587D696AEC08A771B803) . "'";    
					else if ($R5B841EAE1D0974CFA6B54D111D0A47E5=='cn' || $R5B841EAE1D0974CFA6B54D111D0A47E5=='nc') 
					return "'%" . addslashes($R244F38266C59587D696AEC08A771B803) . "%'";    
					else return "'" . addslashes($R244F38266C59587D696AEC08A771B803) . "'";   
			}         
			function set_events($R2322221D09E72D62CE8923BF936F088E)   
			{    
				$this->events = $R2322221D09E72D62CE8923BF936F088E;   
			}         
			function set_actions($R2322221D09E72D62CE8923BF936F088E)   
			{    
				if (empty($R2322221D09E72D62CE8923BF936F088E))     
					$R2322221D09E72D62CE8923BF936F088E = array();           
					if (empty($this->actions))     
						$this->actions = array();         	
						$this->actions = array_merge($this->actions,$R2322221D09E72D62CE8923BF936F088E);   
			}         
			function set_options($RBAF021A7FD7734AE78ECDD24D3CFD580)   
			{    
				if (empty($R2322221D09E72D62CE8923BF936F088E))     
					$R2322221D09E72D62CE8923BF936F088E = array();      
					if (empty($this->options))     
						$this->options = array();      
						$this->options = array_merge($this->options,$RBAF021A7FD7734AE78ECDD24D3CFD580);   
			}         
			function set_columns($R246159316604D58DB8DE9F848709E772 = null)   
			{    
				if (!$this->table && !$this->select_command) 
					die("Please specify tablename or select command");           
				if (!$this->select_command && $this->table)     
					$this->select_command = "SELECT * FROM ".$this->table;         
				if (stristr($this->select_command,"WHERE") === false)    
					{         
						if (($R2A039ED8FDBF4CEAA9E79CDC3AECD1A2 = stripos($this->select_command,"GROUP BY")) !== false)     
						{      
							$RBE4C4D037E939226F65812885A53DAD9 = substr($this->select_command,0,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
							$R19B21277FE0A89473E38CE571FDAFE89 = substr($this->select_command,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
							$this->select_command = $RBE4C4D037E939226F65812885A53DAD9." WHERE 1=1 ".$R19B21277FE0A89473E38CE571FDAFE89;     
						}     
						else      
							$this->select_command .= " WHERE 1=1";    
					}         
				$this->select_command = preg_replace("/(\r|\n)/"," ",$this->select_command);    
				$this->select_command = preg_replace("/[ ]+/"," ",$this->select_command);           
				$R130D64A4AD653C91E0FD80DE8FEADC3A = $this->select_command . " LIMIT 0";           
				$R679E9B9234E2062F809DBD3325D37FB6 = mysql_query($R130D64A4AD653C91E0FD80DE8FEADC3A) 
					or 
				die("Couldn't execute query. ".mysql_error());    
				$R610E039357299CF494E6DCBE9A8A7C54 = mysql_num_fields($R679E9B9234E2062F809DBD3325D37FB6);    
					for ($RA16D2280393CE6A2A5428A4A8D09E354=0; $RA16D2280393CE6A2A5428A4A8D09E354 < $R610E039357299CF494E6DCBE9A8A7C54; $RA16D2280393CE6A2A5428A4A8D09E354++)    
						{      
							$R6B6E98CDE8B33087A33E4D3A497BD86B[] = mysql_field_name($R679E9B9234E2062F809DBD3325D37FB6, 
							$RA16D2280393CE6A2A5428A4A8D09E354);    
						}         
					if (!$R246159316604D58DB8DE9F848709E772)    
						{     	
							foreach($R6B6E98CDE8B33087A33E4D3A497BD86B as $R3E33E017CD76B9B7E6C7364FB91E2E90)     
							{      
								$RDC72801A64A9084B77642D2A5707C5BD["title"] = ucwords(str_replace("_"," ",$R3E33E017CD76B9B7E6C7364FB91E2E90));      
								$RDC72801A64A9084B77642D2A5707C5BD["name"] = $R3E33E017CD76B9B7E6C7364FB91E2E90;      
								$RDC72801A64A9084B77642D2A5707C5BD["index"] = $R3E33E017CD76B9B7E6C7364FB91E2E90;      
								$RDC72801A64A9084B77642D2A5707C5BD["editable"] = true;      
								$RDC72801A64A9084B77642D2A5707C5BD["editoptions"] = array("size"=>20);      
								$R9F479EA10948755579FD42D37B0D88BE[] = $RDC72801A64A9084B77642D2A5707C5BD;     
							}    
						}        
					if (!$R246159316604D58DB8DE9F848709E772)     
						$R246159316604D58DB8DE9F848709E772 = $R9F479EA10948755579FD42D37B0D88BE;            
					for($RA16D2280393CE6A2A5428A4A8D09E354=0;$RA16D2280393CE6A2A5428A4A8D09E354<count($R246159316604D58DB8DE9F848709E772);$RA16D2280393CE6A2A5428A4A8D09E354++)    
						{     
							$R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["name"] = str_replace(".","::",$R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["name"]);     
							$R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["index"] = $R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["name"];          
						if ($R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["formatter"] == "date" && empty($R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["formatoptions"]))      
							$R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'Y-m-d');          
						if ($R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["formatter"] == "date")      
							$R246159316604D58DB8DE9F848709E772[$RA16D2280393CE6A2A5428A4A8D09E354]["editoptions"]["dataInit"] = "function(o){link_dtpicker(o);}";    
						}            
						$this->options["colModel"] = $R246159316604D58DB8DE9F848709E772;    
					foreach($R246159316604D58DB8DE9F848709E772 as $R3E33E017CD76B9B7E6C7364FB91E2E90)    
						{     
							$this->options["colNames"][] = $R3E33E017CD76B9B7E6C7364FB91E2E90["title"];      
						}   
			}         
			function render($R4BC8E01FD735B288AE2C70A47401309E)   
			{    
				if ($_REQUEST["subgrid"])     
					$R4BC8E01FD735B288AE2C70A47401309E .= "_".$_REQUEST["subgrid"];            
				if (!$this->options["colNames"])     
					$this->set_columns();        
				if ($R07C0DD69A9C2B0D1C815296F57795AE8 = $_POST['oper'])    
				{     
					$R7318A606A3118D468DAE7078098FBA7B = $_POST;     
					$R3584859062EA9ECFB39B93BFCEF8E869 = $R7318A606A3118D468DAE7078098FBA7B['id'];     
					$R2753F3199DFA4EABAA38569B441BB9BB = $this->options["colModel"][0]["index"];              
						switch($R07C0DD69A9C2B0D1C815296F57795AE8)     
							{      
								case "add":       unset($R7318A606A3118D468DAE7078098FBA7B['id']);       
								unset($R7318A606A3118D468DAE7078098FBA7B['oper']);              
								$R44249C36FC2615B032F3832EF30CB9C2 = array();       
								$RA94EF3EDEBBECC120DD9EC4D9CB90BD1 = array();       
							foreach($R7318A606A3118D468DAE7078098FBA7B as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RA3D52E52A48936CDE0F5356BB08652F2)       
								{               
								if (strstr($RA09FE38AF36F6839F4A75051DC7CEA25,"::") !== false)         
									list($RCC5C6E696C11A4FDF170ECE8BA9FDC6F,$RA09FE38AF36F6839F4A75051DC7CEA25) = explode("::",$RA09FE38AF36F6839F4A75051DC7CEA25);        
										$RA09FE38AF36F6839F4A75051DC7CEA25 = addslashes($RA09FE38AF36F6839F4A75051DC7CEA25);        
										$RA3D52E52A48936CDE0F5356BB08652F2 = addslashes($RA3D52E52A48936CDE0F5356BB08652F2);        
										$R44249C36FC2615B032F3832EF30CB9C2[] = "$RA09FE38AF36F6839F4A75051DC7CEA25='$RA3D52E52A48936CDE0F5356BB08652F2'";        
										$RA94EF3EDEBBECC120DD9EC4D9CB90BD1[$RA09FE38AF36F6839F4A75051DC7CEA25] = $RA3D52E52A48936CDE0F5356BB08652F2;       
								}              
										$R44249C36FC2615B032F3832EF30CB9C2 = "SET ".implode(",",$R44249C36FC2615B032F3832EF30CB9C2);               
								if (!empty($this->events["on_insert"]))       
									{        
										$R94F2A42E16297B91A9F03B5E4B01132B = $this->events["on_insert"][0];        
										$R602BAA072843820A45861C75C510C77E = $this->events["on_insert"][1];        
										$R8676B010EDB4835BFD8EAE388F5D769F = $this->events["on_insert"][2];                
								if ($R602BAA072843820A45861C75C510C77E)         
									call_user_method($R94F2A42E16297B91A9F03B5E4B01132B,$R602BAA072843820A45861C75C510C77E,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869, "params" => $RA94EF3EDEBBECC120DD9EC4D9CB90BD1));        
								else         
									call_user_func($R94F2A42E16297B91A9F03B5E4B01132B,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869, "params" => $RA94EF3EDEBBECC120DD9EC4D9CB90BD1));                
								if (!$R8676B010EDB4835BFD8EAE388F5D769F)         
									break;       
							}              
							$R130D64A4AD653C91E0FD80DE8FEADC3A = "INSERT INTO {$this->table} $R44249C36FC2615B032F3832EF30CB9C2";       
							mysql_query($R130D64A4AD653C91E0FD80DE8FEADC3A) or die("Couldn't execute query. ".mysql_error());;       
								break;             
							case "edit":             
							unset($R7318A606A3118D468DAE7078098FBA7B['id']);       
							unset($R7318A606A3118D468DAE7078098FBA7B['oper']);              
								$R44249C36FC2615B032F3832EF30CB9C2 = array();       
								$RA94EF3EDEBBECC120DD9EC4D9CB90BD1 = array();       
									foreach($R7318A606A3118D468DAE7078098FBA7B as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RA3D52E52A48936CDE0F5356BB08652F2)       
									{               
									if (strstr($RA09FE38AF36F6839F4A75051DC7CEA25,"::") !== false)         
										list($RCC5C6E696C11A4FDF170ECE8BA9FDC6F,$RA09FE38AF36F6839F4A75051DC7CEA25) = explode("::",$RA09FE38AF36F6839F4A75051DC7CEA25);                 
										$RA09FE38AF36F6839F4A75051DC7CEA25 = addslashes($RA09FE38AF36F6839F4A75051DC7CEA25);        
										$RA3D52E52A48936CDE0F5356BB08652F2 = addslashes($RA3D52E52A48936CDE0F5356BB08652F2);        
										$R44249C36FC2615B032F3832EF30CB9C2[] = "$RA09FE38AF36F6839F4A75051DC7CEA25='$RA3D52E52A48936CDE0F5356BB08652F2'";        
										$RA94EF3EDEBBECC120DD9EC4D9CB90BD1[$RA09FE38AF36F6839F4A75051DC7CEA25] = $RA3D52E52A48936CDE0F5356BB08652F2;       
									}              
										$R44249C36FC2615B032F3832EF30CB9C2 = "SET ".implode(",",$R44249C36FC2615B032F3832EF30CB9C2);              
									if (strstr($R2753F3199DFA4EABAA38569B441BB9BB,"::") !== false)       
									{        
										$R2753F3199DFA4EABAA38569B441BB9BB = explode("::",$R2753F3199DFA4EABAA38569B441BB9BB);        
										$R2753F3199DFA4EABAA38569B441BB9BB = $R2753F3199DFA4EABAA38569B441BB9BB[1];       
									}               
									if (!empty($this->events["on_update"]))       
									{        
										$R94F2A42E16297B91A9F03B5E4B01132B = $this->events["on_update"][0];        
										$R602BAA072843820A45861C75C510C77E = $this->events["on_update"][1];        
										$R8676B010EDB4835BFD8EAE388F5D769F = $this->events["on_update"][2];                
											if ($R602BAA072843820A45861C75C510C77E)         
												call_user_method($R94F2A42E16297B91A9F03B5E4B01132B,$R602BAA072843820A45861C75C510C77E,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869, "params" => $RA94EF3EDEBBECC120DD9EC4D9CB90BD1));        
											else         
												call_user_func($R94F2A42E16297B91A9F03B5E4B01132B,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869, "params" => $RA94EF3EDEBBECC120DD9EC4D9CB90BD1));                
											if (!$R8676B010EDB4835BFD8EAE388F5D769F)         
										break;       
									}              
									$R130D64A4AD653C91E0FD80DE8FEADC3A = "UPDATE {$this->table} $R44249C36FC2615B032F3832EF30CB9C2 WHERE $R2753F3199DFA4EABAA38569B441BB9BB = $R3584859062EA9ECFB39B93BFCEF8E869";             
									mysql_query($R130D64A4AD653C91E0FD80DE8FEADC3A) or die("Couldn't execute query. ".mysql_error());;      
								break;               
									case "del":                    
									if (strstr($R2753F3199DFA4EABAA38569B441BB9BB,"::") !== false)       
										{        
											$R2753F3199DFA4EABAA38569B441BB9BB = explode("::",$R2753F3199DFA4EABAA38569B441BB9BB);        
											$R2753F3199DFA4EABAA38569B441BB9BB = $R2753F3199DFA4EABAA38569B441BB9BB[1];       
										}                    
									if (!empty($this->events["on_delete"]))       
										{       
											$R94F2A42E16297B91A9F03B5E4B01132B = $this->events["on_delete"][0];        
											$R602BAA072843820A45861C75C510C77E = $this->events["on_delete"][1];
										        $R8676B010EDB4835BFD8EAE388F5D769F = $this->events["on_delete"][2];        
												if ($R602BAA072843820A45861C75C510C77E)         
													call_user_method($R94F2A42E16297B91A9F03B5E4B01132B,$R602BAA072843820A45861C75C510C77E,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869));        
													else         
													call_user_func($R94F2A42E16297B91A9F03B5E4B01132B,array($R2753F3199DFA4EABAA38569B441BB9BB => $R3584859062EA9ECFB39B93BFCEF8E869));                
														if (!$R8676B010EDB4835BFD8EAE388F5D769F)         
													break;       
										}              
										$R130D64A4AD653C91E0FD80DE8FEADC3A = "DELETE FROM {$this->table} WHERE $R2753F3199DFA4EABAA38569B441BB9BB IN ($R3584859062EA9ECFB39B93BFCEF8E869)";       
									mysql_query($R130D64A4AD653C91E0FD80DE8FEADC3A) or die("Couldn't execute query. ".mysql_error());;      
								break;     
								}          
							die;    
						}           
					$R1DE5EB826FD16191A583C874762A090C = "";    
					$RB2591AD347B389A9C8CBAE0812E33504 = $this->strip($_REQUEST['_search']);    
				if($RB2591AD347B389A9C8CBAE0812E33504=='true')     
					{     
						$R4AED8984E5B2FD9141093D19A7D35A9E = $this->strip($_REQUEST['searchField']);          
						$R246159316604D58DB8DE9F848709E772 = array();     foreach($this->options["colModel"] as $RDC72801A64A9084B77642D2A5707C5BD)      
						$R246159316604D58DB8DE9F848709E772[] = $RDC72801A64A9084B77642D2A5707C5BD["index"];           
							if (!$R4AED8984E5B2FD9141093D19A7D35A9E)     
								{      
									$RABB3D330BA391544BA91CB840322048A = $this->strip($_REQUEST['filters']);      
									$R1DE5EB826FD16191A583C874762A090C = $this->construct_where($RABB3D330BA391544BA91CB840322048A);     
								}         
								else     
								{      
							if(in_array($R4AED8984E5B2FD9141093D19A7D35A9E,$R246159316604D58DB8DE9F848709E772))       
								{        
									$RDF70A84BA2309C68417BE460189BE4AB = $this->strip($_REQUEST['searchString']);       
									$REAA219F0FBD8E8A3DA05387318316513 = $this->strip($_REQUEST['searchOper']);             
									$R1DE5EB826FD16191A583C874762A090C .= " AND ".$R4AED8984E5B2FD9141093D19A7D35A9E;       
								switch ($REAA219F0FBD8E8A3DA05387318316513) 
									{             
									case "eq":         
									
										if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
										{          
											$R1DE5EB826FD16191A583C874762A090C .= " = ".$RDF70A84BA2309C68417BE460189BE4AB;         
										} 
										else 
										{          
											$R1DE5EB826FD16191A583C874762A090C .= " = '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
										}         
									break;        
										case "ne":         
											if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " <> ".$RDF70A84BA2309C68417BE460189BE4AB;         
												} 
												else 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " <> '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
												}         
												break;        
												case "lt":         
											if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " < ".$RDF70A84BA2309C68417BE460189BE4AB;         
												} 
												else 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " < '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
												}         
												break;        
											case "le":         
											if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " <= ".$RDF70A84BA2309C68417BE460189BE4AB;         
												} 
												else 
												{          
													$R1DE5EB826FD16191A583C874762A090C .= " <= '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
												}         
												break;        
												case "gt":         
													if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
														{          
															$R1DE5EB826FD16191A583C874762A090C .= " > ".$RDF70A84BA2309C68417BE460189BE4AB;         
														} 
														else 
														{          
															$R1DE5EB826FD16191A583C874762A090C .= " > '".$RDF70A84BA2309C68417BE460189BE4AB."'";         }         
														break;
													        case "ge":         
															if(is_numeric($RDF70A84BA2309C68417BE460189BE4AB)) 
															{          
																$R1DE5EB826FD16191A583C874762A090C .= " >= ".$RDF70A84BA2309C68417BE460189BE4AB;         
															} 
															else 
															{          
																$R1DE5EB826FD16191A583C874762A090C .= " >= '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
															}         
															break;        
																case "ew":         
																$R1DE5EB826FD16191A583C874762A090C .= " LIKE '%".$RDF70A84BA2309C68417BE460189BE4AB."'";         
															break;        
																case "en":         
																$R1DE5EB826FD16191A583C874762A090C .= " NOT LIKE '%".$RDF70A84BA2309C68417BE460189BE4AB."'";         
															break;        
																case "cn":         
																$R1DE5EB826FD16191A583C874762A090C .= " LIKE '%".$RDF70A84BA2309C68417BE460189BE4AB."%'";         
															break;        
																case "nc":         
																$R1DE5EB826FD16191A583C874762A090C .= " NOT LIKE '%".$RDF70A84BA2309C68417BE460189BE4AB."%'";         
															break;        
																case "in":         
																$R1DE5EB826FD16191A583C874762A090C .= " IN (".$RDF70A84BA2309C68417BE460189BE4AB.")";         
															break;        
																case "ni":         
																$R1DE5EB826FD16191A583C874762A090C .= " NOT IN (".$RDF70A84BA2309C68417BE460189BE4AB.")";         


															break;        
																case "bw":        
															default:         
																$RDF70A84BA2309C68417BE460189BE4AB .= "%";         
																$R1DE5EB826FD16191A583C874762A090C .= " LIKE '".$RDF70A84BA2309C68417BE460189BE4AB."'";         
															break;       
															}      
														}     
													}         
													$_SESSION["jqgrid_filter"] = $R1DE5EB826FD16191A583C874762A090C;    
												}    
												elseif($RB2591AD347B389A9C8CBAE0812E33504=='false')     
												{     
													$_SESSION["jqgrid_filter"] = '';    
												}           
													if ($_GET['page'])    
													{     
														$R71A6FD054F6EBC38E69167AB39449848 = $_GET['page'];     
														$RFED47D15719EF82BD3F83B580230DA5B = $_GET['rows'];     
														$R23D3D9B8DFA4E4368DA39400B9C86AE0 = $_GET['sidx'];     
														$RD8DCC7F148C8D95B199B9E279DACA58B = $_GET['sord'];          
													if(!$R23D3D9B8DFA4E4368DA39400B9C86AE0) 
														$R23D3D9B8DFA4E4368DA39400B9C86AE0 = 1;     
													if(!$RFED47D15719EF82BD3F83B580230DA5B) 
														$RFED47D15719EF82BD3F83B580230DA5B = 20;       
														$R23D3D9B8DFA4E4368DA39400B9C86AE0 = str_replace("::",".",$R23D3D9B8DFA4E4368DA39400B9C86AE0);              
													if ($this->actions["export"] !== false && $_GET["export"])     
													{      
														$R2322221D09E72D62CE8923BF936F088E = array();             
														$R8215FC713714746F7372553678F08C50 = "";      
													if ($this->options["export"]["range"] == "filtered")       
														$R8215FC713714746F7372553678F08C50 = $_SESSION["jqgrid_filter"];            
													if (($R2A039ED8FDBF4CEAA9E79CDC3AECD1A2 = stripos($this->select_command,"GROUP BY")) !== false)      
													{       
														$RBE4C4D037E939226F65812885A53DAD9 = substr($this->select_command,0,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);       
														$R19B21277FE0A89473E38CE571FDAFE89 = substr($this->select_command,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);       
														$R3DBA9CA9C983EE1579A11D1F9DCCB80B = $RBE4C4D037E939226F65812885A53DAD9.$R8215FC713714746F7372553678F08C50.$R19B21277FE0A89473E38CE571FDAFE89." ORDER BY $R23D3D9B8DFA4E4368DA39400B9C86AE0 $RD8DCC7F148C8D95B199B9E279DACA58B";      
													}      
													else       
														$R3DBA9CA9C983EE1579A11D1F9DCCB80B = $this->select_command.$R8215FC713714746F7372553678F08C50." ORDER BY $R23D3D9B8DFA4E4368DA39400B9C86AE0 $RD8DCC7F148C8D95B199B9E279DACA58B";        
														$R679E9B9234E2062F809DBD3325D37FB6 = mysql_query( $R3DBA9CA9C983EE1579A11D1F9DCCB80B ) or die("Couldn't execute query. ".mysql_error());                
														$R8C133456E7D7948044667AE76D7692B3 = array();      if ($this->options["colModel"])      
													{       
													foreach ($this->options["colModel"] as $R3E33E017CD76B9B7E6C7364FB91E2E90)        
														if ($R3E33E017CD76B9B7E6C7364FB91E2E90["export"] === false)         
															$R8C133456E7D7948044667AE76D7692B3[] = $R3E33E017CD76B9B7E6C7364FB91E2E90["name"];      
													}            
													foreach ($this->options["colModel"] as $R3E33E017CD76B9B7E6C7364FB91E2E90)       
														$R972A1D6D7FBAA83B27C6006E2C7CBC3F[$R3E33E017CD76B9B7E6C7364FB91E2E90["name"]] = $R3E33E017CD76B9B7E6C7364FB91E2E90["title"];      
														$R2322221D09E72D62CE8923BF936F088E[] = $R972A1D6D7FBAA83B27C6006E2C7CBC3F;            
													while($R4EEB713E57BBAAF1217CF39632604473 = mysql_fetch_array($R679E9B9234E2062F809DBD3325D37FB6,MYSQL_ASSOC))      
													{       
														$R2322221D09E72D62CE8923BF936F088E[] = $R4EEB713E57BBAAF1217CF39632604473;      
													}            
													if (!empty($R8C133456E7D7948044667AE76D7692B3))      
													{       
														$R4E614DB68169D1467244C51FD0753885 = array();       
													foreach($R2322221D09E72D62CE8923BF936F088E as $RDB051EBB8314CF943CDF8C76FFABA176)       
														{        
															foreach($RDB051EBB8314CF943CDF8C76FFABA176 as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RA16D2280393CE6A2A5428A4A8D09E354)        
															{               
																if (in_array($RA09FE38AF36F6839F4A75051DC7CEA25, $R8C133456E7D7948044667AE76D7692B3))         
																{          
																	unset($RDB051EBB8314CF943CDF8C76FFABA176[$RA09FE38AF36F6839F4A75051DC7CEA25]);         
																}        
															}        
															$R4E614DB68169D1467244C51FD0753885[] = $RDB051EBB8314CF943CDF8C76FFABA176;       
														}        
														$R2322221D09E72D62CE8923BF936F088E = $R4E614DB68169D1467244C51FD0753885;      
													}            
													if (!$this->options["export"]["filename"])       
														$this->options["export"]["filename"] = $R4BC8E01FD735B288AE2C70A47401309E;             
													if (!$this->options["export"]["sheetname"])       
														$this->options["export"]["sheetname"] = ucwords($R4BC8E01FD735B288AE2C70A47401309E). " Sheet";             
													if ($this->options["export"]["format"] == "pdf")      
													{                    
															require_once("dompdf/dompdf_config.inc.php");       
															$R9906335164C88242D6E7C68FD92565AF = "";       
															$R9906335164C88242D6E7C68FD92565AF .= "<style>td{font-size:11px; font-family:Courier}</style>";       
															$R9906335164C88242D6E7C68FD92565AF .= "<h1 style='border-bottom:1px solid black'>".$this->options["export"]["heading"]."</h1>";       
															$R9906335164C88242D6E7C68FD92565AF .= "<table border='0' cellpadding='2' cellspacing='2'>";              
															$RA16D2280393CE6A2A5428A4A8D09E354 = 0;       
														foreach($R2322221D09E72D62CE8923BF936F088E as $RA3D52E52A48936CDE0F5356BB08652F2)       
														{        
															$R89A35F576DFC447C286E56295D970E74 = ($RA16D2280393CE6A2A5428A4A8D09E354++ % 2) ? "bgcolor='#efefef'" : "";        
															$R9906335164C88242D6E7C68FD92565AF .= "<tr>";        
															foreach($RA3D52E52A48936CDE0F5356BB08652F2 as $R20FD65E9C7406034FADC682F06732868)         
															$R9906335164C88242D6E7C68FD92565AF .= "<td $R89A35F576DFC447C286E56295D970E74>$R20FD65E9C7406034FADC682F06732868</td>";        
															$R9906335164C88242D6E7C68FD92565AF .= "</tr>";       
														}       
													$R9906335164C88242D6E7C68FD92565AF .= "<table>";              
													$R0A0EAFAD473E2E19876D6FAEAAF556F7 = ini_set("memory_limit", "16M");       
													$R28EF232B792BA24222CE81FCE3864BE2 = new DOMPDF();       
													$R28EF232B792BA24222CE81FCE3864BE2->load_html($R9906335164C88242D6E7C68FD92565AF);       
													$R28EF232B792BA24222CE81FCE3864BE2->set_paper($this->options["export"]["paper"], $this->options["export"]["orientation"]);       
													$R28EF232B792BA24222CE81FCE3864BE2->render();       
													$R28EF232B792BA24222CE81FCE3864BE2->stream($this->options["export"]["filename"].".pdf");          
													}      
														else      
													{       
														include("php-excel.class.php");       
														$RAB137FAC01BDA319F8CA51B777DD3B53 = new Excel_XML('UTF-8', true, $this->options["export"]["sheetname"]);       
														$RAB137FAC01BDA319F8CA51B777DD3B53->addArray($R2322221D09E72D62CE8923BF936F088E);       
														$RAB137FAC01BDA319F8CA51B777DD3B53->generateXML($this->options["export"]["filename"]);      
													}      
													die;     
												}              
												if (($R2A039ED8FDBF4CEAA9E79CDC3AECD1A2 = stripos($this->select_command,"GROUP BY")) !== false)     
												{      
													$RAB5ED0112EFC44137E2EF7E93D62EE50 = preg_replace("/SELECT (.*) FROM/i","SELECT 1 as c FROM",$this->select_command);      
													$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2 = stripos($RAB5ED0112EFC44137E2EF7E93D62EE50,"GROUP BY");      
													$R0C9B969C7F0E60CDF57B781D8DF77BE2 = substr($RAB5ED0112EFC44137E2EF7E93D62EE50,0,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
													$RA2D6A66E917FA575C744BDE7F91D9FBD = substr($RAB5ED0112EFC44137E2EF7E93D62EE50,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
													$RAB5ED0112EFC44137E2EF7E93D62EE50 = "SELECT count(*) as c FROM ($R0C9B969C7F0E60CDF57B781D8DF77BE2 $R1DE5EB826FD16191A583C874762A090C $R39B03A32FEFD285ED4E488938C8E4A8A) as o";     
												}     
												else     
												{      
													$RAB5ED0112EFC44137E2EF7E93D62EE50 = $this->select_command.$R1DE5EB826FD16191A583C874762A090C;      
													$RAB5ED0112EFC44137E2EF7E93D62EE50 = "SELECT count(*) as c FROM (".$RAB5ED0112EFC44137E2EF7E93D62EE50.") as table_count";     
												}              
													$R679E9B9234E2062F809DBD3325D37FB6 = mysql_query($RAB5ED0112EFC44137E2EF7E93D62EE50) or die("Couldn't execute query. ".mysql_error());;     
													$R4EEB713E57BBAAF1217CF39632604473 = mysql_fetch_array($R679E9B9234E2062F809DBD3325D37FB6,MYSQL_ASSOC);     
													$RA1D44C0654A40984A103C270FFB9BF33 = $R4EEB713E57BBAAF1217CF39632604473['c'];       
												if( $RA1D44C0654A40984A103C270FFB9BF33 > 0 ) 
												{      
													$R742E28A3470962E8B08929B92FED9841 = ceil($RA1D44C0654A40984A103C270FFB9BF33/$RFED47D15719EF82BD3F83B580230DA5B);     
												} 
												else 
												{      
													$R742E28A3470962E8B08929B92FED9841 = 0;     
												}       
												if ($R71A6FD054F6EBC38E69167AB39449848 > $R742E28A3470962E8B08929B92FED9841) 
													$R71A6FD054F6EBC38E69167AB39449848=$R742E28A3470962E8B08929B92FED9841;     
													$RBE4C4D037E939226F65812885A53DAD9 = $RFED47D15719EF82BD3F83B580230DA5B*$R71A6FD054F6EBC38E69167AB39449848 - $RFED47D15719EF82BD3F83B580230DA5B;     
												if ($RBE4C4D037E939226F65812885A53DAD9<0) 
													$RBE4C4D037E939226F65812885A53DAD9 = 0;        
													$R674635BCB9D7D69791FDBB3B5D56DF5D->page = $R71A6FD054F6EBC38E69167AB39449848;     
													$R674635BCB9D7D69791FDBB3B5D56DF5D->total = $R742E28A3470962E8B08929B92FED9841;     
													$R674635BCB9D7D69791FDBB3B5D56DF5D->records = $RA1D44C0654A40984A103C270FFB9BF33;       
												if (($R2A039ED8FDBF4CEAA9E79CDC3AECD1A2 = stripos($this->select_command,"GROUP BY")) !== false)     
												{      
													$R0C9B969C7F0E60CDF57B781D8DF77BE2 = substr($this->select_command,0,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
													$R39B03A32FEFD285ED4E488938C8E4A8A = substr($this->select_command,$R2A039ED8FDBF4CEAA9E79CDC3AECD1A2);      
													$R3DBA9CA9C983EE1579A11D1F9DCCB80B = "$R0C9B969C7F0E60CDF57B781D8DF77BE2 $R1DE5EB826FD16191A583C874762A090C $R39B03A32FEFD285ED4E488938C8E4A8A ORDER BY $R23D3D9B8DFA4E4368DA39400B9C86AE0 $RD8DCC7F148C8D95B199B9E279DACA58B LIMIT $RBE4C4D037E939226F65812885A53DAD9, $RFED47D15719EF82BD3F83B580230DA5B";     
												}     
												else      
													$R3DBA9CA9C983EE1579A11D1F9DCCB80B = $this->select_command.$R1DE5EB826FD16191A583C874762A090C." ORDER BY $R23D3D9B8DFA4E4368DA39400B9C86AE0 $RD8DCC7F148C8D95B199B9E279DACA58B LIMIT $RBE4C4D037E939226F65812885A53DAD9, $RFED47D15719EF82BD3F83B580230DA5B";                   
													$R679E9B9234E2062F809DBD3325D37FB6 = mysql_query( $R3DBA9CA9C983EE1579A11D1F9DCCB80B ) or die("Couldn't execute query. ".mysql_error());      
												while($R4EEB713E57BBAAF1217CF39632604473 = mysql_fetch_array($R679E9B9234E2062F809DBD3325D37FB6,MYSQL_ASSOC))     
												{           
													foreach($this->options["colModel"] as $R3E33E017CD76B9B7E6C7364FB91E2E90)      
													{             
														$R565CE24E665D0C6F383AEA8C9DC17B27 = str_replace(".","::",$R3E33E017CD76B9B7E6C7364FB91E2E90["name"]);       
															if ($R3E33E017CD76B9B7E6C7364FB91E2E90["formatter"] == "image")       
															{        
																$R60BDA7385E13A62AA6FD1F1FEC071BC7 = array();        
																foreach($R3E33E017CD76B9B7E6C7364FB91E2E90["formatoptions"] as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RA3D52E52A48936CDE0F5356BB08652F2)         
																$R60BDA7385E13A62AA6FD1F1FEC071BC7[] = "$RA09FE38AF36F6839F4A75051DC7CEA25='$RA3D52E52A48936CDE0F5356BB08652F2'";                
																$R60BDA7385E13A62AA6FD1F1FEC071BC7 = implode(" ",$R60BDA7385E13A62AA6FD1F1FEC071BC7);        
																$R4EEB713E57BBAAF1217CF39632604473[$R565CE24E665D0C6F383AEA8C9DC17B27] = "<img $R60BDA7385E13A62AA6FD1F1FEC071BC7 src='".$R4EEB713E57BBAAF1217CF39632604473[$R565CE24E665D0C6F383AEA8C9DC17B27] ."'>";       
															}                    
														if (!empty($R3E33E017CD76B9B7E6C7364FB91E2E90["link"]))       
														{               
															foreach($this->options["colModel"] as $R7BFD22312AFC202571C98E50BD3A3E5B)        
															{         
																$RA0C95E76B5BEFAD1716FD2144FAF4BDA = str_replace(".","::",$R7BFD22312AFC202571C98E50BD3A3E5B["name"]);         
																$RA4139DE6AC782C986E25FADCEB6B17D2 = urlencode($R4EEB713E57BBAAF1217CF39632604473[$RA0C95E76B5BEFAD1716FD2144FAF4BDA]);         
																$R3E33E017CD76B9B7E6C7364FB91E2E90["link"] = str_replace("{".$R7BFD22312AFC202571C98E50BD3A3E5B["name"]."}", $RA4139DE6AC782C986E25FADCEB6B17D2, $R3E33E017CD76B9B7E6C7364FB91E2E90["link"]);        
															}                
														if (!empty($R3E33E017CD76B9B7E6C7364FB91E2E90["linkoptions"]))         
																$R60BDA7385E13A62AA6FD1F1FEC071BC7 = $R3E33E017CD76B9B7E6C7364FB91E2E90["linkoptions"];                 
																$R4EEB713E57BBAAF1217CF39632604473[$R565CE24E665D0C6F383AEA8C9DC17B27] = "<a $R60BDA7385E13A62AA6FD1F1FEC071BC7 href='{$R3E33E017CD76B9B7E6C7364FB91E2E90["link"]}'>{$R4EEB713E57BBAAF1217CF39632604473[$R565CE24E665D0C6F383AEA8C9DC17B27]}</a>";       
														}                    
															if ($R3E33E017CD76B9B7E6C7364FB91E2E90["formatter"] == "password")        
															$R4EEB713E57BBAAF1217CF39632604473[$R565CE24E665D0C6F383AEA8C9DC17B27] = "*****";                  
													}        
														foreach($R4EEB713E57BBAAF1217CF39632604473 as $RA09FE38AF36F6839F4A75051DC7CEA25=>$RAA7BB4B05FBD27DB7CA594893F166B47)       
														$R4EEB713E57BBAAF1217CF39632604473[$RA09FE38AF36F6839F4A75051DC7CEA25] = stripslashes($R4EEB713E57BBAAF1217CF39632604473[$RA09FE38AF36F6839F4A75051DC7CEA25]);            
														$R674635BCB9D7D69791FDBB3B5D56DF5D->rows[] = $R4EEB713E57BBAAF1217CF39632604473;     
												}          
												echo json_encode($R674635BCB9D7D69791FDBB3B5D56DF5D);     die;    
											}             
											$this->options["pager"] = '#'.$R4BC8E01FD735B288AE2C70A47401309E."_pager";    
											$this->options["jsonReader"] = array("repeatitems" => false, "id" => "0");         
												if ($this->actions["edit"] === false || $this->actions["delete"] === false || $this->options["cellEdit"] === true)     
													$this->actions["rowactions"] = false;         
												if ($this->actions["rowactions"] !== false)    
												{         
													$this->options["colNames"][] = "Actions";          
													$R6B6E98CDE8B33087A33E4D3A497BD86B = false;     
														foreach($this->options["colModel"] as $R3E33E017CD76B9B7E6C7364FB91E2E90)     
														{      
															if (!empty($R3E33E017CD76B9B7E6C7364FB91E2E90["width"]))      
															{       
																$R6B6E98CDE8B33087A33E4D3A497BD86B = true;       
																break;      
															}     
														}              
												if ($R6B6E98CDE8B33087A33E4D3A497BD86B)      
													$this->options["colModel"][] = array("name"=>"act", "align"=>"center", "index"=>"act", "width"=>"30", "sortable"=>false, "search"=>false);     
												else      
													$this->options["colModel"][] = array("name"=>"act", "align"=>"center", "index"=>"act", "sortable"=>false, "search"=>false);    
												}          
												$R4A18FB3F34307C291A1914D7471481C9 = json_encode_jsfunc($this->options);    
												$R4A18FB3F34307C291A1914D7471481C9 = substr($R4A18FB3F34307C291A1914D7471481C9,0,strlen($R4A18FB3F34307C291A1914D7471481C9)-1);         
													if ($this->actions["rowactions"] !== false)    
													{     
														$R4A18FB3F34307C291A1914D7471481C9 .= ",'gridComplete': function()
														{        
															var ids = jQuery('#$R4BC8E01FD735B288AE2C70A47401309E').jqGrid('getDataIDs');        
															for(var i=0;i < ids.length;i++)
															{         
																var cl = ids[i];         
																be = ' <a title=\"Edit this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$R4BC8E01FD735B288AE2C70A47401309E\').editRow('+cl+',true); jQuery(this).parent().hide(); jQuery(this).parent().next().show(); \">Edit</a>';          
																de = ' | <a title=\"Delete this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$R4BC8E01FD735B288AE2C70A47401309E\').delGridRow('+cl+'); \">Delete</a>';                  
																se = ' <a title=\"Save this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$R4BC8E01FD735B288AE2C70A47401309E\').saveRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Save</a>';          
																ce = ' | <a title=\"Restore this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$R4BC8E01FD735B288AE2C70A47401309E\').restoreRow('+cl+'); jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Cancel</a>';                   
																jQuery('#$R4BC8E01FD735B288AE2C70A47401309E').jqGrid('setRowData',ids[i],{act:'<span id=\"edit_row_'+cl+'\">'+be+de+'</span>'+'<span style=display:none id=\"save_row_'+cl+'\">'+se+ce+'</span>'});        
															}        
														}";                
													}                
														if ($this->actions["edit"] !== false && $this->options["cellEdit"] !== true)    
														{     
															$R4A18FB3F34307C291A1914D7471481C9 .= ",'ondblClickRow':function(id)        
															{         
																if(id && id!==lastSel)
																{           
																	jQuery('#$R4BC8E01FD735B288AE2C70A47401309E').restoreRow(lastSel);                              
																	jQuery('#edit_row_'+lastSel).show();          
																	jQuery('#save_row_'+lastSel).hide();                            
																	lastSel=id;                  
																}                  
																jQuery('#$R4BC8E01FD735B288AE2C70A47401309E').editRow(id, true, function(){}, 
																function()
																{                       
																	jQuery('#edit_row_'+id).show();                       
																	jQuery('#save_row_'+id).hide();                       
																	return true;                      
																},null,null,null,null,                      
																function()
																{                       
																	jQuery('#edit_row_'+id).show();                       
																	jQuery('#save_row_'+id).hide();                       
																	return true;                      
																}                );                   
																	jQuery('#edit_row_'+id).hide();         
																	jQuery('#save_row_'+id).show();        
															}";    
														}           
														if ($this->options["subgridurl"] != '')     
														{                                  
															$RD82DF3779EBBBE173C5A990F17DBA23D = "false";     
																if (!empty($this->options["subgridparams"]))      
																	$RD82DF3779EBBBE173C5A990F17DBA23D = "true";           
																	$R4A18FB3F34307C291A1914D7471481C9 .= ",'subGridRowExpanded': function(subgridid, id)              
															{               
																var data = {subgrid:subgridid, rowid:id};                            
																if('$RD82DF3779EBBBE173C5A990F17DBA23D' == 'true') 
																{               
																	var anm= '".$this->options["subgridparams"]."';               
																	anm = anm.split(',');               
																	var rd = jQuery('#".$R4BC8E01FD735B288AE2C70A47401309E."').jqGrid('getRowData', id);               
																if(rd) 
																{                
																	for(var i=0; i<anm.length; i++) 
																	{                 
																		if(rd[anm[i]]) 
																		{                  
																			data[anm[i]] = rd[anm[i]];                 
																		}                
																	}               
																}              
															}              
															jQuery('#'+jQuery.jgrid.jqID(subgridid)).load('".$this->options["subgridurl"]."',data);             
														}";    
													}        
													$R4A18FB3F34307C291A1914D7471481C9 .= "}";         ob_start();    
?>
<table id="<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>">	</table> 
	<div id="<?php echo $R4BC8E01FD735B288AE2C70A47401309E."_pager"?>"></div> 
		<script>
			jQuery(document).ready(function()
			{
				<?php echo $this->render_js($R4BC8E01FD735B288AE2C70A47401309E,$R4A18FB3F34307C291A1914D7471481C9);?>
			});	
		</script>	
<?php    return ob_get_clean();   }         
	function render_js($R4BC8E01FD735B288AE2C70A47401309E,$R4A18FB3F34307C291A1914D7471481C9)   
	{   
?>
	var lastSel; 		
	var grid_<?php echo $R4BC8E01FD735B288AE2C70A47401309E?> = jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid(<?php echo $R4A18FB3F34307C291A1914D7471481C9?>); 		
	jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid('navGrid','#<?php echo $R4BC8E01FD735B288AE2C70A47401309E."_pager"?>', 				
		{ 					
			edit: <?php echo ($this->actions["edit"] === false)?"false":"true"?>, 					
			add: <?php echo ($this->actions["add"] === false)?"false":"true"?>, 					
			del: <?php echo ($this->actions["delete"] === false)?"false":"true"?> 				
		}, 				
		{},{},{},{multipleSearch:<?php echo ($this->actions["search"] == "advance")?"true":"false"?>} 				); 		 		
<?php if ($this->actions["autofilter"] !== false) { 
?> 		
jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});  		
<?php } ?>  		
<?php 
	if ($this->actions["showhidecolumns"] !== false) { 
?> 		
jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid('navButtonAdd',"#<?php echo $R4BC8E01FD735B288AE2C70A47401309E."_pager"?>",{caption:"Columns",title:"Hide/Show Columns", buttonicon :'ui-icon-note', 			onClickButton:function(){ 				jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid('setColumns');  			}  		}); 		
<?php } ?> 				 		
	function link_dtpicker(el) 		
		{ 				
			setTimeout(function(){ 					
						if(jQuery.ui)  					
						{  						
							if(jQuery.ui.datepicker)  						
							{  							
								jQuery(el).after('<button>Calendar</button>').next().button({icons:{primary: 'ui-icon-calendar'}, text:false}).css({'font-size':'69%'}).click(function(e){jQuery(el).datepicker('show');return false;}); 							
						
								jQuery(el).datepicker({"disabled":false,"dateFormat":"yy-mm-dd"}); 							
								jQuery('.ui-datepicker').css({'font-size':'69%'}); 						
							}  					
						} 				
					     },100); 		
		} 		 		 		
	jQuery("#<?php echo $R4BC8E01FD735B288AE2C70A47401309E?>").jqGrid('gridResize',{}); 	
<?php 	}	 }