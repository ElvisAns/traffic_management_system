<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class End_point extends CI_Controller {

	public function index(){

		$var = $this->DataBase_model->get_settings();
		
		echo json_encode($var,JSON_UNESCAPED_SLASHES,JSON_FORCE_OBJECT);

		return ;
	}

	public function write_count($value_now){
		$this->DataBase_model->time_sync($value_now);
	}

	public function get_count(){

		$var = $this->DataBase_model->get_settings();

		$var2 =  $this->DataBase_model->get_count_now();


		if($var['delay_light_change'] < $var2['current_time_sync']){
			echo $var['delay_light_change']	;		
		}

		else{
			echo $var2['current_time_sync'];
		}


	}

	public function iot_hub(){

		if (null != $this->input->get()) {
			$data = $this ->input->get();

			if(isset($data['res'])){
				switch ($data['res']) {
					case 'start':

					$var = $this->DataBase_model->get_settings();

					$var2 =  $this->DataBase_model->get_count_now();


					$end=array();

					$end['st'] = "ok";
					$end['nc'] = $var2['current_time_sync'];
					$end['dlc'] = $var['delay_light_change'];
					$end['la1s'] = $var['lane_1_light_state'];
					$end['la2s'] = $var['lane_2_light_state'];
					$end['la3s'] = $var['lane_3_light_state'];

					date_default_timezone_set("Africa/Kigali");
					$end['hr'] = date("H");
					$end['mn'] = date("i");


					echo json_encode($end,JSON_UNESCAPED_SLASHES,JSON_FORCE_OBJECT);

					return;

						//things to answer when device says its booting. //doont forget to json encode it and status = ok+ all_all_settings + now_count + current_heure_minute
						/*
						 response_state =  resp["st"];
					      now_count = resp["nc"] ;
					      delay_light_change = resp["dlc"]; //remember, if now_count = 0 then delay_light_change is given to now_count

					      lane_1_light_state = resp["La1s"]; //La1s
					      lane_2_light_state = resp["La2s"]; //La2s
					      lane_3_light_state = resp["La3s"]; //La3s
					      heures = resp["hr"] //heure
					      minutes = resp["mn"] //minute

					      dont forget to user shorter name of indexes to reduce sent data on
						*/
					      break;



					      default:
						# code...
					      break;
					  }
					}
				}

			}

			public function monitor($type,$A1,$A2,$B1,$B2,$C1,$C2){
				if ($type) {
				
				$var = array('tr_lv' => array($A1,$A2,$B1,$B2,$C1,$C2));



				$spent_times=$var['tr_lv']; //

				$maks = max($spent_times);

				if($maks < 10){
					for ($i=0; $i < 6 ; $i++) { 
						$spent_times[$i]=5;
					}
				}



				//var_dump($spent_times);

			/*
			  traffic_level.add(jam_detection_lane_A_1);
			  traffic_level.add(jam_detection_lane_A_2);
			  traffic_level.add(jam_detection_lane_B_1);
			  traffic_level.add(jam_detection_lane_B_2);
			  traffic_level.add(jam_detection_lane_C_1);
			  traffic_level.add(jam_detection_lane_C_2);

			*/

			  $jam_detection_lane_A = $spent_times[0] + $spent_times[1];
			  $jam_detection_lane_B = $spent_times[2] + $spent_times[3];
			  $jam_detection_lane_C = $spent_times[4] + $spent_times[5];


			  //those spend time will help us to computer the traffic level, then we estimated better delays after we save data in database

			  $traffic_lane1=0;
			  $traffic_lane2=0;
			  $traffic_lane3=0;


			  $var = $this->DataBase_model->get_settings();

			  $var2 =  $this->DataBase_model->get_count_now();


			  $cmp=max( $traffic_lane1, $traffic_lane2, $traffic_lane3);

			  function map($value, $valueRangeStart, $valueRangeEnd, $newRangeStart, $newRangeEnd) {
			  	return intval($newRangeStart + ($newRangeEnd - $newRangeStart) * (($value - $valueRangeStart) / ($valueRangeEnd - $valueRangeStart)));
			  }

			  $traffic_lane1 = map($jam_detection_lane_A,0,120,0,100);
			  $traffic_lane2 = map($jam_detection_lane_B,0,120,0,100);
			  $traffic_lane3 = map($jam_detection_lane_C,0,120,0,100);

			  $traffic_lane1>100?$traffic_lane1=100:$traffic_lane1;
			  $traffic_lane2>100?$traffic_lane2=100:$traffic_lane2;
			  $traffic_lane3>100?$traffic_lane2=100:$traffic_lane3;


			  if ($var["switching_mode"] == "A Pair of Lane twice") {

			  	
			  	if($var["lane_1_light_state"] == "red"){

			  		$var["lane_1_light_state"] = "green";

			  		$var["delay_light_change"] = map($traffic_lane1,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);

			  		$who = max($traffic_lane2,$traffic_lane3);

			  		if ($who == $traffic_lane2) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_2_light_state"] = "green"; 
			  			$var["lane_3_light_state"] = "red";
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_3_light_state"] = "green";
			  			$var["lane_2_light_state"] = "red";
			  		}

			  	}

			  	else if ($var["lane_2_light_state"] == "red") {
			  		
			  		$var["lane_2_light_state"] = "green";

			  		$var["delay_light_change"] = map($traffic_lane2,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);

			  		$who = max($traffic_lane1,$traffic_lane3);

			  		if ($who == $traffic_lane1) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_1_light_state"] = "green";
			  			$var["lane_3_light_state"] = "red";
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_3_light_state"] = "green";
			  			$var["lane_1_light_state"] = "red";
			  		}
			  	}

			  	elseif ($var["lane_3_light_state"] == "red") {
			  		$var["lane_3_light_state"] = "green";

			  		$var["delay_light_change"] = map($traffic_lane3,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);

			  		$who = max($traffic_lane2,$traffic_lane1);

			  		if ($who == $traffic_lane2) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_2_light_state"] = "green";
			  			$var["lane_1_light_state"] = "red";
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_1_light_state"] = "green";
			  			$var["lane_2_light_state"] = "red";
			  		}
			  	}
			  }

			  else{ //one by one

			  	if($var["lane_1_light_state"] == "red" AND $var["lane_2_light_state"] == "red"){

			  		$who = max($traffic_lane1,$traffic_lane2);

			  		if ($who == $traffic_lane1) {

			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_1_light_state"] = "green"; 
			  			$var["lane_2_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane1,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_2_light_state"] = "green";
			  			$var["lane_1_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane2,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}


			  		$var["lane_3_light_state"] = "red";

			  	}

			  	else if ($var["lane_2_light_state"] == "red" AND $var["lane_3_light_state"] == "red") {

			  		$who = max($traffic_lane2,$traffic_lane3);

			  		if ($who == $traffic_lane3) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_3_light_state"] = "green"; 
			  			$var["lane_2_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane3,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_2_light_state"] = "green";
			  			$var["lane_3_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane2,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		$var["lane_1_light_state"] = "red";

			  	}

			  	elseif ($var["lane_1_light_state"] == "red"  AND $var["lane_3_light_state"] == "red") {
			  		
			  		$who = max($traffic_lane1,$traffic_lane3);

			  		if ($who == $traffic_lane1) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_1_light_state"] = "green"; 
			  			$var["lane_3_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane1,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_3_light_state"] = "green";
			  			$var["lane_1_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane3,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		$var["lane_2_light_state"] = "red";
			  	}
			  	else{
			  		$who = max($traffic_lane1,$traffic_lane3);

			  		if ($who == $traffic_lane1) {
			  		//max traffic is on lane 2 and lane 1
			  			$var["lane_1_light_state"] = "green"; 
			  			$var["lane_3_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane1,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		else{
			  		//max traffic is on lane1 and lan3
			  			$var["lane_3_light_state"] = "green";
			  			$var["lane_1_light_state"] = "red";
			  			$var["delay_light_change"] = map($traffic_lane3,0,100,$var["min_sec_wait"],$var["max_sec_wait"]);
			  		}

			  		$var["lane_2_light_state"] = "red";
			  	}
			  }

			  $var["lane_1_traffic"] =  $traffic_lane1 ;
			  $var["lane_2_traffic"] =  $traffic_lane2 ;
			  $var["lane_3_traffic"] =  $traffic_lane3 ;


			  $this->DataBase_model->update_settings($var);

			  //here we get dabase infos and then we send back to nodecmu

			  $var = $this->DataBase_model->get_settings();

			  $var2 =  $this->DataBase_model->get_count_now();


			  $end=array();


			  $tmh=$var["time_on_street_light"];
			  $tml =$var["time_off_street_light"];

			  $hru= (int) date("H");
			  $mru = (int) date("i");


			  $x_h=(int)explode(":", $tmh)[0];
			  $x_m=(int)explode(":", $tmh)[1];
			  
			  $y_h=(int)explode(":", $tml)[0];
			  $y_m=(int)explode(":", $tml)[1];

			  if($var["street_light_state"]==0){
			  	//off
			  	if($hru >= $x_h AND $mru >= $x_m ){
			  		$this->DataBase_model->update_settings(array("street_light_state"=>1));
			  	}
			  }
			  else{

			  	if($hru == $y_h AND $mru >= $y_m ){
			  		$this->DataBase_model->update_settings(array("street_light_state"=>0));
			  	}
			  }


			  $var = $this->DataBase_model->get_settings();

			  $end['nc'] = $var2['current_time_sync'];
			  $end['dlc'] = $var['delay_light_change'];
			  $end['la1s'] = $var['lane_1_light_state'];
			  $end['la2s'] = $var['lane_2_light_state'];
			  $end['la3s'] = $var['lane_3_light_state'];
			  $end['strl'] = $var['street_light_state'];

			  echo json_encode($end,JSON_UNESCAPED_SLASHES,JSON_FORCE_OBJECT);
			}

			else{
				
				header("HTTP/1.0 400 Bad Request Error");
			}
		}

		public function image_acquisition($lane,$speed){

			date_default_timezone_set("Africa/Kigali");
			

			function map($value, $valueRangeStart, $valueRangeEnd, $newRangeStart, $newRangeEnd) {
				return intval($newRangeStart + ($newRangeEnd - $newRangeStart) * (($value - $valueRangeStart) / ($valueRangeEnd - $valueRangeStart)));
			}

			function file_get_contents_curl($url) { 
							$ch = curl_init(); 

							curl_setopt($ch, CURLOPT_HEADER, 0); 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
							curl_setopt($ch, CURLOPT_URL, $url); 
							$data = curl_exec($ch); 
							curl_close($ch); 
							return $data; 
						} 

			function processor($obj,$req,$ip){
				$var = $req;
				$ip_lane_1 = $ip;

					if($var['speed'] > 80){ //the car exceed 80kmph we alert him on sms
						// Save image  locally
						$img = 'plate_lane_'.$var['speed'].'kph_'.Date("Y_m_d H_i_s").'.jpg';

						$img_name = 'plate_images/'.$img;

					// Initialize cURL
						$ch = curl_init($ip_lane_1);
						
						curl_setopt($ch, CURLOPT_NOBODY, true);

						curl_setopt($ch, CURLOPT_URL, $ip_lane_1);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_exec($ch);
						$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						curl_close($ch);

						// Check the response code
						if($responseCode == 200){
							
						    //echo 'File exists'; 
							$data = file_get_contents_curl($ip_lane_1); 

							$fp = $img_name; 

							file_put_contents( $fp, $data ); 

							$output = shell_exec('C:/openALPR/alpr "C:/wamp/www/smart_traffic_system/plate_images/'.$img.'" --json 2>&1'); 

							$json_response = (array)json_decode($output);

							// Display the list of all file 
							// and directory 
							//echo "<pre>$output</pre>"; 

							$result = $json_response['results'];

							if(!empty($result)){


								$result = $json_response['results'][0];

								$result_arr = (array)$result;

								$number_plate = $result_arr['plate'];

								$car_owner = $obj->DataBase_model->get_car_owner($number_plate);

								if(!empty($car_owner)){
								//car exist


										$price = map($var['speed'],81,400,30000,200000); //the price should varie btn 30k and 200k

										$Names = $car_owner["Names"];
										$var["speed"] = "120";
										$telephone = $car_owner["telephone_number"];
										$ch = curl_init();
										curl_setopt($ch, CURLOPT_URL, 'https://rest.clicksend.com/v3/sms/send');
										curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
										curl_setopt($ch, CURLOPT_POST, 1);
										curl_setopt($ch, CURLOPT_POSTFIELDS, '{"messages":[{"source":"php","body":"Please '.$Names.', You have drive at '.$var['speed'].'kph,which is prohibited. You are now charged a penalty of '.$price.'rwf. \n","to":"'.$telephone.'"}]}');
										curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //disable security
										curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
										$headers = array();
										$headers[] = 'Authorization: Basic '.base64_encode('ansimapersic@gmail.com'.':004CDC68-480C-3D0F-A8C4-87F2687A212B');
										$headers[] = 'Content-Type: application/json';
										curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

										$result = curl_exec($ch);
										if (curl_errno($ch)) {
			    						//echo 'Error:' . curl_error($ch); //dont forget to remove this echo message not send
										}


										$toInsert= array(
											'Names' => $Names,
											'Phone' => $telephone,
											'plate_num' =>  $var['speed'],
											'speed' => $var['speed'],
											'time' => Date("H:i"),
											'date' => Date("d/m/Y"),
											'observation' => 'Alerted',
											'status' => 'Has to pay'.$price.'frw'
										);

										$obj->DataBase_model->save_logs($toInsert);	
										curl_close($ch);

									}

									else{//user plate dont exist

										$price = map($var['speed'],81,400,30000,200000); //the price should varie btn 30k and 200k

										$toInsert= array(
											'Names' => 'Unregistered Car',
											'Phone' => 'Unregistered Car',
											'plate_num' => $number_plate,
											'speed' => $var['speed'],
											'time' => Date("H:i"),
											'date' => Date("d/m/Y"),
											'observation' => 'No-Alert',
											'status' => 'Could be paying'.$price.'frw'
										);

										$obj->DataBase_model->save_logs($toInsert);	

									}

								}
								else{
									
									$price = map($var['speed'],81,400,30000,200000); //the price should varie btn 30k and 200k

									$toInsert= array(
										'Names' => 'Noise image',
										'Phone' => 'Noise image',
										'plate_num' => 'Noise image',
										'speed' => $var['speed'],
										'time' => Date("H:i"),
										'date' => Date("d/m/Y"),
										'observation' => 'No-Alert',
										'status' => 'Could be paying'.$price.'frw'
									);

									$obj->DataBase_model->save_logs($toInsert);
								}
							}
							else{
								//image not found(no camera)
								$price = map($var['speed'],81,400,30000,200000); //the price should varie btn 30k and 200k

								$toInsert= array(
									'Names' => 'No camera',
									'Phone' => 'No camera',
									'plate_num' => 'No camera',
									'speed' => $var['speed'],
									'time' => Date("H:i"),
									'date' => Date("d/m/Y"),
									'observation' => 'No-Alert',
									'status' => 'Could be paying'.$price.'frw'
								);

								$obj->DataBase_model->save_logs($toInsert);
							}

						}

						else{
						   //normal logs with just speed,speed less than 80kph speed is m/s * 3,6 to get km/h

							$toInsert= array(
								'Names' => 'Not neccessary',
								'Phone' => 'Not neccessary',
								'plate_num' => 'Not neccessary',
								'speed' => $var['speed'],
								'time' => Date("H:i"),
								'date' => Date("d/m/Y"),
								'observation' => 'Fine',
								'status' => 'Regular'
							);

							$obj->DataBase_model->save_logs($toInsert);

						}


					}


					if($lane){


						$var["car_data"] = $lane;
						$var["speed"] = $speed;

						$var1 = $this->DataBase_model->get_settings();

						$ip_lane_1 = $var1["camera_lane_1"]."photoaf.jpg";
						$ip_lane_2 = $var1["camera_lane_2"]."photoaf.jpg";
						$ip_lane_3 = $var1["camera_lane_3"]."photoaf.jpg";


						$target = $var["car_data"];

			if($target=="lane_A"){ //lane1

				processor($this,$var,$ip_lane_1);
			}

					else if($target=="lane_B"){ //lane2
						
				processor($this,$var,$ip_lane_2);
					}

					else if($target=="lane_C"){ //lane3
						
				processor($this,$var,$ip_lane_3);
						}

					// Save image  locally


						//model id 91592488-6b8d-429d-b41a-f6722ce1656f

						//api key 91592488-6b8d-429d-b41a-f6722ce1656f

					}
				}
			}
		

