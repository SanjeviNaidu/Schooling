<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Subjects_model');
		$this->load->model('Combo_model');
		$this->load->model('Class_model');
	}
	
	public function index()
	{
		redirect(base_url().'index.php/Subjects/grid_view'); 
	}
	
	
	public function addsubject()
	{
		$data['cbo_class'] = $this->Combo_model->cbo_class();
	
	    // Field Validation
		$this->form_validation->set_rules('cbo_class','Class Name','required');
		$this->form_validation->set_rules('subject_name[0]','Subject','required');
		
		
		
		if(($this->form_validation->run())==false)
		{
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Subjects/AddSubject',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		$subject_name_arr = $this->input->post('subject_name');
		
		for($i=0; $i < count($subject_name_arr); $i++)
			{
			
				$data =array
				(
				'subject_name'=>$subject_name_arr[$i],	
				'class_id'=>$this->input->post('cbo_class')			
				);				
				$this->Subjects_model->add_record($data);
			}
			
			echo '<script>alert("Record Added Successfully.");</script>';
			
			redirect(base_url().'index.php/Subjects/grid_view'); 

		}
		
	}
	
	public function updatesubject()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		
		//GET DATA FROM TABLE
		//
		$data['cbo_class'] = $this->Class_model->edit_record_details($id);
		//print_r($data['cbo_class']);
		$data['subject_row'] = $this->Subjects_model->get_record_by_id($id);
		//print_r($data['subject_row']);
		
		
		
		
		if(($this->form_validation->run())==false)
		{
		echo('hi');
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Subjects/UpdateSubject',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		$subject_name_arr = $this->input->post('subject_name');
		
		for($i=0; $i < count($subject_name_arr); $i++)
			{
			
				$data =array
				(
				'subject_name'=>$subject_name_arr[$i],	
				'class_id'=>$this->input->post('cbo_class')			
				);				
				$this->Subjects_model->edit_record($data);
			}
			 echo '<script>alert("Record Updated Successfully.");</script>';
			
			//$this->session->set_flashdata('msg','alert(<i class="icon fa fa-check"></i> Record Updated Successfully.)');
				  
			redirect(base_url().'index.php/Subjects/grid_view','refresh'); 			
		}		
	}
	
	public function grid_view()
	{
		
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['subject'] = $this->Subjects_model->view_record('');
				
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Subjects/SubjectList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Subject_model->delete_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'index.php/Subjects/grid_view'); 
	}
	
	public function single_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['subject_row'] = $this->Subject_model->get_single_view($id);
		
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Subjects/Subject_view',$data);
		$this->load->view('Home/footer');	
	}
	
	
}
