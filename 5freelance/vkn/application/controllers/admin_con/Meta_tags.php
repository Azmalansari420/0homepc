<?php

class Meta_tags extends CI_Controller
{
	///------author for login--


	protected $arr_values = array(
	   	'page_title'=>'Meta',
	   	'table_name'=>'meta_tags',
	   	'upload_path'=>'media/uploads/meta_tags/',
	   	'load_path'=>'admin/meta_tags/',
	   ); 




	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(6);
    }


	//---edit function in left menu

	function edit()
	{
		check_controller_inner_access(6,3);
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');


			$meta_title = $this->input->post('meta_title');			
			$meta_auther = $this->input->post('meta_auther');			
			$meta_keyword = $this->input->post('meta_keyword');			
			$meta_description = $this->input->post('meta_description');
			

			$updatedata = array(
				"meta_title"=>$meta_title,
				"meta_auther"=>$meta_auther,
				"meta_keyword"=>$meta_keyword,
				"meta_description"=>$meta_description,
			);
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$updatedata);
			$this->session->set_flashdata('message','Successfully Updated.');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}


}