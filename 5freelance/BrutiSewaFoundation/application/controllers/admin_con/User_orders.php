<?php
require_once FCPATH . 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
class User_orders extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Orders',
						   	'table_name'=>'orders',
						   	'upload_path'=>'media/uploads/user_orders/',
						   	'load_path'=>'admin/user_orders/',
						   	'redirect_path'=>'admin_con/user_orders/',
						   	'back_url'=>'user_orders',
						   	'add_url'=>'user_orders',
						   	'edit_url'=>'user_orders',
						   	'delete_url'=>'user_orders',
						   	'view_url'=>'user_orders',
						   	'table_url'=>'admin/user_orders/table',
						   	'status_value'=>'user_orders',
						   	'multiple_delete'=>'admin_con/user_orders/delete_all',
						   	'pagination_url'=>'admin_con/user_orders/get_table_data',
						   	'controller_name'=>'user_orders',
						   	'page_name'=>'user_orders.php',
						   	'pagination_limit'=>'15',
						   	'formURL'=>'admin_con/user_orders/UpdateData',
						   	'excellink'=>'admin_con/user_orders/download_excel',
						   ); 


   //--check user login or not
	public function __construct()
    {
    	parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(11);
    }




    function UpdateData()
	{
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$id = $this->input->post('id');	
			$user_id = $this->session->userdata("id");

			$order_number = generate_order_number();
			$products = $this->input->post('products');
			$status = 0;			
			$getdatetime = date('Y-m-d H:i:s');
			$total = 0; 


			$insertdata = array(
	            "user_id" => $user_id,
	            "status" => $status,
	        );			

			if(empty($id))
			{	
				$insertdata["order_number"] = generate_order_number();
				$insertdata["addeddate"]=$getdatetime;
				$this->crud->insert($this->arr_values['table_name'],$insertdata);
				$insert_id = $this->db->insert_id();
			}
			else
			{
				$insertdata["modifieddate"]=$getdatetime;
				$this->db->update($this->arr_values['table_name'],$insertdata,["id"=>$id]);
				$insert_id = $id;
				$this->db->where('order_id', $insert_id)->delete('order_items');
			}

			if (!empty($products))
	        {
	            foreach ($products as $item)
	            {
	                $qty   = (int)$item['qty'];
	                $price = (float)$item['price'];

	                if ($qty <= 0) continue;

	                $total_price = $qty * $price;

	                $this->db->insert('order_items', [
	                    'order_id'      => $insert_id,
	                    'product_id'    => $item['product_id'],
	                    'product_name'    => $item['product_name'],
	                    'product_price' => $price,
	                    'quantity'      => $qty,
	                    'total_price'   => $total_price
	                ]);
	                $total += $total_price;
	            }
	        }

	        $this->db->update(
	            $this->arr_values['table_name'],
	            ['total_amount' => $total],
	            ['id' => $insert_id]
	        );


			
			$this->session->set_flashdata('message','Record has been Successfully Saved..');
			redirect($this->arr_values['redirect_path'].'listing');	
		}

	}



	//insert

	function add()
	{
		check_controller_inner_access(11,2);
		
		$data['page_title'] = 'Add '.$this->arr_values['page_title'];
		$data['formURL'] = $this->arr_values['formURL'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'form',$data);
	}


	//----list dekhney ke lia 

	function listing()
	{		
		check_controller_inner_access(11,1);
		$data['page_title'] = $this->arr_values['page_title'];
		$data['excellink'] = $this->arr_values['excellink'];
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['pagination_url'] = $this->arr_values['pagination_url'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['multiple_delete'] = base_url($this->arr_values['multiple_delete']);
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	public function get_table_data() 
	{
	    check_controller_inner_access(11, 1);

	    $user_id = $this->session->userdata("id");

	    $search = $this->input->post('search');
	    $limit = $this->arr_values['pagination_limit'];
	    $offset = $this->input->post('offset');

	    // Apply search filters
	    $this->db->group_start();
	    $this->db->like('order_number', $search);
	    $this->db->or_like('id', $search);
	    // $this->db->or_like('sub_title', $search);
	    $this->db->group_end();
	    $this->db->order_by('id desc');
	    // Fetch paginated data
	    $this->db->where('user_id',$user_id);
	    $data['ALLDATA'] = $this->db->get($this->arr_values['table_name'], $limit, $offset)->result();

	    // Rebuild query for count
	    $this->db->group_start();
	    $this->db->like('order_number', $search);
	    $this->db->or_like('id', $search);
	    // $this->db->or_like('sub_title', $search);
	    $this->db->group_end();
	    $this->db->where('user_id',$user_id);
	    $total_rows = $this->db->count_all_results($this->arr_values['table_name']);

	    $current_page = ($offset / $limit) + 1;
	    $total_pages = ceil($total_rows / $limit);
	    $pagination_links = '';

	    if ($total_pages > 1) {
	        // Previous link
	        if ($current_page > 1) {
	            $prev_offset = ($current_page - 2) * $limit;
	            $pagination_links .= '<a href="javascript:void(0)" class="pagination-link btn btn-sm btn-dark" data-offset="' . $prev_offset . '">&lt;</a>';
	        }

	        // Always show first 2 pages
	        for ($i = 1; $i <= min(2, $total_pages); $i++) {
	            $offset_val = ($i - 1) * $limit;
	            $pagination_links .= '<a href="javascript:void(0)" class="pagination-link btn btn-primary btn-sm ' . ($i == $current_page ? 'active-page' : '') . '" data-offset="' . $offset_val . '">' . $i . '</a>';
	        }

	        // Show dots if needed
	        if ($current_page > 4) {
	            $pagination_links .= '<span style="margin: 0 5px;">...</span>';
	        }

	        // Show current-1, current, current+1 if in range
	        for ($i = max(3, $current_page - 1); $i <= min($total_pages - 2, $current_page + 1); $i++) {
	            $offset_val = ($i - 1) * $limit;
	            $pagination_links .= '<a href="javascript:void(0)" class="pagination-link btn btn-primary btn-sm ' . ($i == $current_page ? 'active-page' : '') . '" data-offset="' . $offset_val . '">' . $i . '</a>';
	        }

	        // Show dots if needed
	        if ($current_page < $total_pages - 3) {
	            $pagination_links .= '<span style="margin: 0 5px;">...</span>';
	        }

	        // Always show last 2 pages
	        for ($i = max($total_pages - 1, 3); $i <= $total_pages; $i++) {
	            $offset_val = ($i - 1) * $limit;
	            $pagination_links .= '<a href="javascript:void(0)" class="pagination-link btn btn-primary btn-sm ' . ($i == $current_page ? 'active-page' : '') . '" data-offset="' . $offset_val . '">' . $i . '</a>';
	        }

	        // Next link
	        if ($current_page < $total_pages) {
	            $next_offset = $current_page * $limit;
	            $pagination_links .= '<a href="javascript:void(0)" class="pagination-link btn btn-sm btn-dark" data-offset="' . $next_offset . '">&gt;</a>';
	        }
	    }

	    $data['pagination_links'] = $pagination_links;

	    $data['upload_path'] = $this->arr_values['upload_path'];
	    $data['view_url'] = base_url('admin_con/' . $this->arr_values['view_url'] . '/view/');
	    $data['edit_url'] = base_url('admin_con/' . $this->arr_values['edit_url'] . '/edit/');
	    $data['delete_url'] = base_url('admin_con/' . $this->arr_values['delete_url'] . '/delete/');
	    $data['excellink'] = $this->arr_values['excellink'];

	    $definevariable = array(
	        'ALLDATA' => $data['ALLDATA'],
	        'upload_path' => $data['upload_path'],
	        'view_url' => $data['view_url'],
	        'edit_url' => $data['edit_url'],
	        'delete_url' => $data['delete_url'],
	        'excellink' => $data['excellink'],
	        'limit' => $limit,
	        'total_rows' => $total_rows,
	        'offset' => $offset,
	        'total_pages' => $total_pages,
	    );

	    $html = $this->load->view($this->arr_values['table_url'], $definevariable, true);

	    echo json_encode(array(
	        'html' => $html,
	        'pagination_links' => $pagination_links,
	        'limit' => $limit
	    ));
	}





	//------------delete 

	public function delete()
	  {
	  	check_controller_inner_access(11,4);
	  	$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete($this->arr_values['table_name']);
		$this->session->set_flashdata('message','Record has been Successfully Delete..');
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			check_controller_inner_access(11,4);
			$ids = $this->input->post('id');
		    if (!empty($ids)) 
		    {
		    	$this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		        $this->session->set_flashdata('message','Record has been Successfully Delete..');
		    }
		}


	//----------------edit

	function edit()
	{
		check_controller_inner_access(11,3);		 
		$args=func_get_args();

		$data['formURL'] = $this->arr_values['formURL'];
		$data['page_title'] = 'Update '.$this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		if(!empty($data['EDITDATA']))
		{
			$data['EDITDATA'] = $data['EDITDATA'][0];
			$data['order_items'] = $this->db->get_where('order_items',['order_id' => $data['EDITDATA']->id])->result_object();


			$this->load->view($this->arr_values['load_path'].'form',$data);
		}
		else
		{
			// $this->load->view($this->arr_values['load_path'].'404',$data);			
		}

	}





	//----------------view

	function view()
	{
		check_controller_inner_access(11,5);		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		if(!empty($data['EDITDATA']))
		{
			$data['EDITDATA'] = $data['EDITDATA'][0];
			$data['order_items'] = $this->db->get_where('order_items',['order_id' => $data['EDITDATA']->id])->result_object();
			$this->load->view($this->arr_values['load_path'].'view',$data);
		}
	}


	function invoice()
	{
		check_controller_inner_access(11,5);		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		if(!empty($data['EDITDATA']))
		{
			$data['EDITDATA'] = $data['EDITDATA'][0];

			$order_text = $data['EDITDATA']->order_number
			    .'|'.$data['EDITDATA']->total_amount
			    .'|'.invoiceorder_status($data['EDITDATA']->status)
			    .'|'.date('Y-m-d', strtotime($data['EDITDATA']->addeddate));

			$qr_url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".urlencode($order_text);

			$data['qr_code'] = $qr_url;


			$data['order_items'] = $this->db->get_where('order_items',['order_id' => $data['EDITDATA']->id])->result_object();
			$this->load->view($this->arr_values['load_path'].'invoice',$data);
		}
	}



	public function download_invoice($order_id)
{
    // 1️⃣ Order data
    $data['EDITDATA'] = $this->db
        ->get_where('orders', ['id' => $order_id])
        ->row();

    if (!$data['EDITDATA']) {
        show_404();
    }

    // 2️⃣ Site setting
    $data['sitesetting'] = $this->db
        ->get_where('site_setting', ['id' => 1])
        ->row();

    // 3️⃣ QR code text
    $order_text =
        $data['EDITDATA']->order_number . '|' .
        $data['EDITDATA']->total_amount . '|' .
        invoiceorder_status($data['EDITDATA']->status) . '|' .
        date('Y-m-d', strtotime($data['EDITDATA']->addeddate));

    $data['qr_code'] =
        "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" .
        urlencode($order_text);

    // 4️⃣ HTML View
    $html = $this->load->view('admin/orders/invoice', $data, true);

    // 5️⃣ Dompdf options
    $options = new Options();
    $options->set('isRemoteEnabled', true); // 🔥 images / qr / logo ke liye
    $options->set('defaultFont', 'DejaVu Sans');

    // 6️⃣ Dompdf init
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    // 7️⃣ Force download
    $dompdf->stream(
        "Invoice_" . $data['EDITDATA']->order_number . ".pdf",
        ["Attachment" => true]
    );
}


//---------------------status

	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update($this->arr_values['table_name'],$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}

	}



	public function new_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->db->update($this->arr_values['table_name'],array('status'=>$status),array('id'=>$id));
		$status_html = status($status);
		$data['data'] = array("status"=>$status_html,);
		echo json_encode($data);
	}


	public function download_excel()
	{

	    $this->load->database();

	    $status = $this->input->get('status');
	    $search = $this->input->get('search');

	    $this->db->from($this->arr_values['table_name']);
	    if ($status !== null && $status !== '' && $status != '--Select Status --') {
	        $this->db->where('status', (int)$status);
	    }
	    if (!empty($search)) {
	        $this->db->group_start();
	        $this->db->like('name', $search);
	        $this->db->or_like('id', $search);
	        $this->db->group_end();
	    }
	    $rows = $this->db->get()->result_array();

	    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
	    $sheet = $spreadsheet->getActiveSheet();

	    // Header
	    $headers = ['ID','Name','Status','Added Date'];
	    $col = 'A';
	    foreach ($headers as $h) {
	        $sheet->setCellValue($col.'1', $h);
	        $col++;
	    }

	    // Data
	    $rowNum = 2;
	    foreach ($rows as $r) {
	        $sheet->setCellValue('A'.$rowNum, $r['id']);
	        $sheet->setCellValue('B'.$rowNum, $r['name']);
	        $sheet->setCellValue('C'.$rowNum, $r['status']);
	        $sheet->setCellValue('D'.$rowNum, $r['addeddate']);
	        $rowNum++;
	    }

	    $filename = $this->arr_values['page_title'].date('Ymd_His').'.xlsx';
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment;filename="'.$filename.'"');
	    header('Cache-Control: max-age=0');

	    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	    $writer->save('php://output');
	    exit;
	}


	public function get_product_detail()
	{
	    $product_id = $this->input->post('product_id');

	    $product = $this->db->get_where('product', ['id'=>$product_id])->row();

	    echo json_encode($product);
	}




	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}



