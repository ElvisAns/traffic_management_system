<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function index()
	{	

		 // in case you did not autoload the library
		$datas = array();

		$datas = array_merge($datas,$this->DataBase_model->get_datas_landing());

		$this->parser->parse('welcome',$datas);

	}


	public function logs()
	{	
		$logs = $this->DataBase_model->get_logs();
		$datas = array();
		$datas = array_merge($datas,$this->DataBase_model->get_datas_landing());

		$datas['notification'] ="";
		$datas['data_exist'] ='';


		if(null != $logs){

			$datas['table_rows']="";

			$template = ' <tr>
			<td>{Names}</td>
			<td>{Phone}</td>
			<td>{speed}km/h</td>
			<td>{plate_num}</td>
			<td>{time}</td>
			<td>{date}</td>
			<td><span class="{style_obs}">{observation}</span></td>
			<td class="{style_status}">
			<span class="{style_text_status}">{status}</span>
			</td>
			</tr>';


			$data = $logs;

			foreach ($data as $entries) {



				if($entries['status'] != 'Regular' ){
					
					$entries = array_merge($entries,array('style_text_status' =>  "text-white"));
					$entries = array_merge($entries,array('style_status' =>  "bg-danger"));
					$entries = array_merge($entries,array('style_obs' =>  "text-danger"));

				}

				else{
					
					$entries = array_merge($entries,array('style_text_status' =>  "text-primary"));
					$entries = array_merge($entries,array('style_status' =>  ""));
					$entries = array_merge($entries,array('style_obs' =>  "text-primary"));
				}

				$datas['table_rows'] .= $this->parser->parse_string($template, $entries, TRUE);
			}

		}


		else{
			$datas['notification'] = '<div class="alert alert-info" role="alert">
			<h4 class="alert-heading">Hello</h4>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<p>Aww yeah, it seems like there is no any data from the table</p>
			<hr>
			<p class="mb-0">Please come back later or make sure the hardware part is interacting with the system</p>

			</div>';

			$datas['data_exist'] ='display:none;';
		}

		
		$this->parser->parse('logs',$datas);
	}

	public function flow()
	{	

		$datas = array();
		$datas['notification'] ="";

		if(!empty($this->input->post())) {


			$datas['notification'] ='<div class="alert alert-info" role="alert">
			<h4 class="alert-heading">Bingo!</h4>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<p>Aww yeah, your settings has been saved!</p>
			<hr>
			</div>';

			/*
			array (size=8)
			  'max_sec_wait' => string '300' (length=3)
			  'min_sec_wait' => string '30' (length=2)
			  'switching_mode' => string 'A Pair of Lane twice' (length=20)
			  'time_on_street_ligh' => string '17:18' (length=5)
			  'time_off_street_light' => string '20:18' (length=5)
			  'camera_lane_1' => string '{camera_lane_1}' (length=15)
			  'camera_lane_2' => string '{camera_lane_2}' (length=15)
			  'camera_lane_3' => string '{camera_lane_3}' (length=15)
			*/

			 //$this->DataBase_model->update_settings($this->input->post());
			  $this->DataBase_model->update_settings($this->input->post());

			}

			$datas=array_merge($datas,$this->DataBase_model->get_settings());

			$datas = array_merge($datas,$this->DataBase_model->get_datas_landing());

			$this->parser->parse('flow',$datas);

		}

		public function licence(){


			$datas = array();
			$datas['notification']="";

			if(!empty($this->input->post())){
				
				if($this->DataBase_model->create_user($this->input->post())){
					$datas['notification'] .= '<div class="alert alert-info" role="alert">
					<h4 class="alert-heading">Great!</h4>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<p>Aww yeah,the new user has been successfull created</p>
					<hr>
					<p class="mb-0">Check in the table now</p>

					</div>';
				}

				else{
					$datas['notification'] .= '<div class="alert alert-danger" role="alert">
					<h4 class="alert-heading">Error!</h4>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<p>Please try again, there was an error inserting the new user</p>
					<hr>
					<p class="mb-0">Check your datas</p>
					</div>';
				}
			}


			$logs = $this->DataBase_model->get_licences();
			$datas = array_merge($datas,$this->DataBase_model->get_datas_landing());

			$datas['data_exist'] ='';


			if(null != $logs){

				$datas['table_rows']="";

				$template = ' <tr>
				<td>{Names}</td>
				<td>{telephone_number}</td>
				<td>{licence_plate}</td>
				<td>{ID_card_or_passport}</td>
				<td>{Address}</td>
				<td>{registration_date}</td>
				</tr>';


				$data = $logs;

				foreach ($data as $entries) {

					$datas['table_rows'] .= $this->parser->parse_string($template, $entries, TRUE);
				}

			}


			else{
				$datas['notification'] += '<div class="alert alert-info" role="alert">
				<h4 class="alert-heading">Hello</h4>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<p>Aww yeah, it seems like there is no any data from the table</p>
				<hr>
				<p class="mb-0">Register a new car to acquire plate number with all informations</p>

				</div>';

				$datas['data_exist'] ='display:none;';
			}

			$this->parser->parse('licence',$datas);
		}

		public function monitor(){



			$datas = array();
			$datas=array_merge($datas,$this->DataBase_model->get_settings());


			$this->parser->parse('monitor',$datas);

		}

		public function lane($option=false){

			$datas = array();
			$datas=array_merge($datas,$this->DataBase_model->get_settings());

			switch ($option) {
				case 'lane1':
				$this->parser->parse('monitor_lane_1',$datas);
				break;
				case 'lane2':
				$this->parser->parse('monitor_lane_2',$datas);
				break;
				case 'lane3':
				$this->parser->parse('monitor_lane_3',$datas);
				break;
				default:
				redirect("dashboard");
				break;
			}

		}

		public function check(){

			redirect('dashboard');

		}


		public function get_report(){

		}

	}