<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Teachers_model');
		$this->load->model('Combo_model');
	}
	
	public function index()
	{
		redirect(base_url().'index.php/Teachers/grid_view'); 
	}
	
	
	public function addteacher()
	{
		$data['cbo_sex'] = $this->Combo_model->cbo_sex();
		$data['cbo_blood_group'] = $this->Combo_model->cbo_blood_group();
		$data['cbo_country'] = $this->Combo_model->cbo_country();
	
	    // Field Validation
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('email','Email Id','required|valid_email');
		$this->form_validation->set_rules('dob','Data Of Birth','required');
		$this->form_validation->set_rules('cbo_sex','Gender','required');
		$this->form_validation->set_rules('username','User Name','required|max_length[12]');
		$this->form_validation->set_rules('password','Passowrd','required|max_length[12]|min_length[8]');
		$this->form_validation->set_rules('confirmPassword','Confirm Password','required|max_length[12]|min_length[8]');
		$this->form_validation->set_rules('qual','Qualification','required');
		$this->form_validation->set_rules('position','Position','required');
		$this->form_validation->set_rules('doj','Data of Joining','required');
		$this->form_validation->set_rules('phone','Phone Number','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required|max_length[6]|min_length[6]');
		
		
		if(($this->form_validation->run())==false)
		{
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Teachers/AddTeacher',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		//UPLOAD STARTS
			$config['upload_path'] = './upload/Profile/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			//$config['max_size'] = '';
			
			$this->load->library('upload', $config);
			
			$displaypicture ='Capture.jpg';
			//echo($displaypicture);
			if( !$this->upload->do_upload('displaypicture') ){
				print_r($this->upload->display_errors());
			}else{
				$displaypicture = $_FILES['displaypicture']['name'];
			}
			
		$data =array
			(
				'status'=>'Active',
				'user_type'=>'Teacher',
				'first_name'=>$this->input->post('firstname'),
				'middle_name'=>$this->input->post('middlename'),
				'last_name'=>$this->input->post('lastname'),
				'email'=>$this->input->post('email'),
				'date_of_birth'=>$this->input->post('dob'),
				'gender_id'=>$this->input->post('cbo_sex'),
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country_id'=>$this->input->post('cbo_country'),
				'zipcode'=>$this->input->post('zipcode'),
				'phone'=>$this->input->post('phone'),
				'blood_group_id'=>$this->input->post('cbo_blood_group'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'qualification'=>$this->input->post('qual'),
				'position'=>$this->input->post('position'),
				'date_of_joining'=>$this->input->post('doj'),
				'displaypicture'=>$displaypicture
				
			);				
			$this->Teachers_model->add_record($data);
			
			echo '<script>alert("Record Added Successfully.");</script>';
			
			redirect(base_url().'index.php/Teachers/grid_view'); 

		}
		
	}
	
	public function updateteacher()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		
		//GET DATA FROM TABLE
		$data['teacher_row'] = $this->Teachers_model->get_record_by_id($id);
		
		$data['cbo_sex'] = $this->Combo_model->cbo_sex();
		$data['cbo_blood_group'] = $this->Combo_model->cbo_blood_group();
		$data['cbo_country'] = $this->Combo_model->cbo_country();
	
	    // Field Validation
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('email','Email Id','required|valid_email');
		$this->form_validation->set_rules('dob','Data Of Birth','required');
		$this->form_validation->set_rules('cbo_sex','Gender','required');
		$this->form_validation->set_rules('qual','Qualification','required');
		$this->form_validation->set_rules('position','Position','required');
		$this->form_validation->set_rules('phone','Phone Number','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required|max_length[6]|min_length[6]');
		
		
		if(($this->form_validation->run())==false)
		{
			$this->load->view('Home/header');
			$this->load->view('Home/menu');
			$this->load->view('Teachers/UpdateTeacher',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		//UPLOAD STARTS
			$config['upload_path'] = './upload/Profile/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			//$config['max_size'] = '';
			
			$this->load->library('upload', $config);
			
			
			//IMAGE UPLOAD
			$displaypicture =$this->input->post('displaypicture_hidden');
			if( !$this->upload->do_upload('displaypicture') ){
				//echo "n";
				//print_r($this->upload->display_errors());
			}else{
				//echo "y";
				$displaypicture = $_FILES['displaypicture']['name'];
			}
			
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
				$this->Teachers_model->edit_record($id,$data);
			
		$data =array
			(
				'user_type'=>'Teacher',
				'first_name'=>$this->input->post('firstname'),
				'middle_name'=>$this->input->post('middlename'),
				'last_name'=>$this->input->post('lastname'),
				'email'=>$this->input->post('email'),
				'date_of_birth'=>$this->input->post('dob'),
				'gender_id'=>$this->input->post('cbo_sex'),
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country_id'=>$this->input->post('cbo_country'),
				'zipcode'=>$this->input->post('zipcode'),
				'phone'=>$this->input->post('phone'),
				'blood_group_id'=>$this->input->post('cbo_blood_group'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'qualification'=>$this->input->post('qual'),
				'position'=>$this->input->post('position'),
				'date_of_joining'=>$this->input->post('doj'),
				'displaypicture'=>$displaypicture
				
			);				
			$this->Teachers_model->edit_record($id,$data);
			 echo '<script>alert("Record Updated Successfully.");</script>';
			
			//$this->session->set_flashdata('msg','alert(<i class="icon fa fa-check"></i> Record Updated Successfully.)');
				  
			redirect(base_url().'index.php/Teachers/grid_view','refresh'); 			
		}		
	}
	
	public function grid_view()
	{
		
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['teacher'] = $this->Teachers_model->view_record('');
				
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Teachers/TeachersList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Teachers_model->delete_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'index.php/Teachers/grid_view'); 
	}
	
	public function single_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['teacher_row'] = $this->Teachers_model->get_single_view($id);
		
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Teachers/Teacher_view',$data);
		$this->load->view('Home/footer');	
	}
	
	
}
