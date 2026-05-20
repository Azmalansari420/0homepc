<?php

class Content extends CI_Controller
{
	///------author for login--


	protected $arr_values = array(
	   	'page_title'=>'Site Setting',
	   	'table_name'=>'content',
	   	'upload_path'=>'media/uploads/',
	   	'load_path'=>'admin/content/',
	   ); 




	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(2);
    }


	//---edit function in left menu

	


	function about()
	{
		check_controller_inner_access(2,3);
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['logo']['name'])
			{
				$image = time().'.'.explode(".", $_FILES['logo']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
			}
			else
			{
				$image = $_POST['oldimage'];
			}

			
			$content = $this->input->post('content');

			$updatedata = array(
				"logo"=>$image,
				"content"=>$content,
			);
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$updatedata);
			$this->session->set_flashdata('message','Successfully Updated.');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'about',$data);
	}









}