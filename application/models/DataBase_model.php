<?php
defined('BASEPATH') or exit('No direct script access allowed');


	class DataBase_model Extends CI_Model{

		


		public function get_logs(){
		
			return $this->db->order_by("date")->get('car_logs')->result_array();
		}

		public function save_logs($datas){
			$this->db->insert('car_logs',$datas);
		}

		public function get_licences(){
			return $this->db->get('driving_licence_record')->result_array();
		}

		public function create_user($data){
			return $this->db->replace('driving_licence_record',$data);
		}

		public function get_datas_landing(){
			$values=array();

			$values['avg_speed']= $this->db->select_avg('speed')->get('car_logs')->result_array()[0]['speed'];
			$values['avg_speed'] = (int)$values['avg_speed'];

			$values['car_count']= $this->db->where(array("date" => Date("d/m/Y")))->from('car_logs')->count_all_results();

			$values['wanted'] = $this->db->where(array("Observation" => "Alerted"))->from('car_logs')->count_all_results();

			return $values;
		}



		public function update_settings($data_settings){
			$this->db->where('id', 1);

			return $this->db->update("exchange",$data_settings);

		}

		public function time_sync($time){
			$this->db->where('id',1)->update('time_sync',(array('current_time_sync'=>$time)));
		}

		public function get_settings(){
			return $this->db->get_where('exchange',array('id' => 1))->result_array()[0];
		}

		public function get_count_now(){

			return $this->db->get_where('time_sync',array('id' => 1))->result_array()[0];

		}


		public function get_car_owner($plate){

			$like = $this->db->like('licence_plate',$plate,'both')->get('driving_licence_record');
			
			if(!empty($like)){
				return $like->result_array()[0];
			}

			else{
				return null;
			}

		}
	}
