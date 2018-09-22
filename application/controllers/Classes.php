<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Combo_model');
		$this->load->model('Teachers_model');
		$this->load->model('Class_model');
	}
	
	public function index()
	{
		redirect(base_url().'index.php/Classes/grid_view'); 
	}
	
	
	public function addclass()
	{
	
		$data['cbo_teacher'] = $this->Combo_model->cbo_teacher();
		
		
		// Field Validation
		$this->form_validation->set_rules('classname','Class Name','required');
		$this->form_validation->set_rules('capacity','Class Capacity','required');
		$this->form_validation->set_rules('startdate','Class Start date','required');
		$this->form_validation->set_rules('enddate','Class End date','required');
		$this->form_validation->set_rules('cbo_teacher','Teacher Name','required');
		
		
		if(($this->form_validation->run())==false)
		{
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Class/AddClass',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
			
		$data =array
			(
				'status'=>'Active',
				'class_name'=>$this->input->post('classname'),
				'class_capacity'=>$this->input->post('capacity'),
				'class_number'=>$this->input->post('classnum'),
				'class_teacher_id'=>$this->input->post('cbo_teacher'),
				'class_starting_date'=>$this->input->post('startdate'),
				'class_ending_date'=>$this->input->post('enddate'),
				'class_location'=>$this->input->post('location')
				
			);				
			$this->Class_model->add_record($data);
			
			echo '<script>alert("Record Added Successfully.");</script>';
			
			redirect(base_url().'index.php/Classes/grid_view','refresh'); 

		}
		
	}
	
	public function updateclass()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		
		//GET DATA FROM TABLE
		$data['class_row'] = $this->Class_model->get_record_by_id($id);
		$data['cbo_teacher'] = $this->Combo_model->cbo_teacher();
		
		
		// Field Validation
		$this->form_validation->set_rules('classname','Class Name','required');
		$this->form_validation->set_rules('capacity','Class Capacity','required');
		$this->form_validation->set_rules('startdate','Class Start date','required');
		$this->form_validation->set_rules('enddate','Class End date','required');
		$this->form_validation->set_rules('cbo_teacher','Teacher Name','required');
		
		
		if(($this->form_validation->run())==false)
		{
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Class/UpdateClass',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		if(strtoupper($_SESSION['USER_TYPE']) == '' )
			{
			$data =array(	
						'status'=>$this->input->post('cbo_status'),
						);
			}else{
			$data =array(	
						'status'=>'Active',
						);
			}
				$this->Class_model->edit_record($id,$data);
			
		$data =array
			(
				'class_name'=>$this->input->post('classname'),
				'class_capacity'=>$this->input->post('capacity'),
				'class_number'=>$this->input->post('classnum'),
				'class_teacher_id'=>$this->input->post('cbo_teacher'),
				'class_starting_date'=>$this->input->post('startdate'),
				'class_ending_date'=>$this->input->post('enddate'),
				'class_location'=>$this->input->post('location')
				
			);						
			$this->Class_model->edit_record($id,$data);
			 echo '<script>alert("Record Updated Successfully.");</script>';
			
			//$this->session->set_flashdata('msg','alert(<i class="icon fa fa-check"></i> Record Updated Successfully.)');
				  
			redirect(base_url().'index.php/Classes/grid_view','refresh'); 			
		}		
	}
	
	public function grid_view()
	{
		//$id = $this->input->post('id');
		//echo $id;
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['class'] = $this->Class_model->view_record('');
		/*echo "<pre>";
		print_r($data['class']);
		echo "<pre>";*/
	//	$data['student_count'] = $this->Class_model->view_record_count('',$id);
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Class/ClassList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Class_model->delete_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'index.php/Classes/grid_view'); 
	}
	
	public function single_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['class_row'] = $this->Class_model->get_single_view($id);
		$data['number_of_students'] = $this->Class_model->get_class_student_count($id);
		//print_r($data['number_of_students']);
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Class/Class_view',$data);
		$this->load->view('Home/footer');	
	}
	
	public function get_student_count()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['class_student_count'] = $this->Class_model->get_class_student_count($id);
		print_r($data['class_student_count']);
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Class/ClassList',$data);
		$this->load->view('Home/footer');	
	}
	
	
}
