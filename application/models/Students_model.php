<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Students_model extends CI_Model
	{
	public function __construct()
	{
	$this->load->database();
    }
    
    public function add_record($data)
    {
    //SELECT MAX ID
    $max_id = 1;
    $this->db->select_max('id');
    $query = $this->db->get('tab_Students');
    $row = $query->row();
    if (isset($row))
    {
    $max_id = $row->id + 1;
    }
    
    $data['id'] = $max_id;
    return $this->db->insert('tab_Students', $data);
    }
	
	public function add_parent_record($data)
    {
    //SELECT MAX ID
    $max_id = 1;
    $this->db->select_max('id');
    $query = $this->db->get('tab_parents');
    $row = $query->row();
    if (isset($row))
    {
    $max_id = $row->id + 1;
    }
    
    $data['id'] = $max_id;
    return $this->db->insert('tab_parents', $data);
    }
    
    public function edit_record($id,$data)
    {
    $this->db->where('id', $id);
    $this->db->update('tab_Students', $data);		
    }
	public function edit_parent_record($id,$data)
    {
    $this->db->where('student_id', $id);
    $this->db->update('tab_parents', $data);		
    }
    
    public function delete_record($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('tab_Students');
    }
	
	public function delete_parent_record($id)
    {
    $this->db->where('student_id', $id);
    return $this->db->delete('tab_parents');
    }
    
    public function view_record($order_by = '')
    {
    $this->db->select('s.*,c.id,c.class_name,t.first_name as tfirst_name,t.middle_name as tmiddle_name,t.last_name as tlast_name,t.id as tid');
    $this->db->select('p.first_name as pfirst_name,p.middle_name as pmiddle_name,p.last_name as plast_name');
    $this->db->from('tab_Students as s');
	$this->db->join('tab_parents as p','p.student_id = s.id', 'left');
	$this->db->join('tab_class as c','c.id = s.class_id', 'left');
	$this->db->join('tab_teachers as t','t.id = c.class_teacher_id', 'left');
    if($order_by != ''){
    $this->db->order_by('t.id',$order_by);
    }
    $query = $this->db->get();		
    return $query->result_array();
    }
	
	public function view_parent_record($order_by = '')
    {
    $this->db->select('t.*');
    $this->db->from('tab_parents as t');
    if($order_by != ''){
    $this->db->order_by('t.id',$order_by);
    }
    $query = $this->db->get();		
    return $query->result_array();
    }
    
    public function user_view_record()
    {
    $this->db->select('r.*,se.gender_type,c.country_name,s.state_name,d.district_name,ci.city_name,a.area_name');
    $this->db->from('tab_registration as r');
    
    $this->db->join('tab_country as c','c.id = r.country_id', 'left');
    $this->db->join('tab_state as s','s.id = r.state_id', 'left');
    $this->db->join('tab_district as d','d.id = r.district_id', 'left');
    $this->db->join('tab_city as ci','ci.id = r.city_id', 'left');
    $this->db->join('tab_area as a','a.id = r.area_id', 'left');
    $this->db->join('tab_sex as se','se.id = r.gender_id', 'left');
    
    $query = $this->db->get();		
    return $query->result_array();
    }
    
    public function get_record_by_id($id)
    {
    $this->db->where('id', $id);
    $query = $this->db->get('tab_Students');
    
    return $query->row_array();
    }
	
	public function get_parent_record_by_id($id)
    {
    $this->db->where('student_id', $id);
    $query = $this->db->get('tab_parents');
    
    return $query->row_array();
    }
    
    public function get_single_view($id)
    {
    $this->db->select('r.*,se.gender_type,c.country_name,co.country_name as per_country_name,cl.class_name');
    $this->db->from('tab_Students as r');
    $this->db->join('tab_country as c','c.id = r.country_id', 'left');
    $this->db->join('tab_country as co','co.id = r.per_country_id', 'left');
    $this->db->join('tab_sex as se','se.id = r.gender_id', 'left');
	$this->db->join('tab_class as cl','cl.id = r.class_id', 'left');
    $this->db->where('r.id', $id);
    $query = $this->db->get();
    
    return $query->row_array();
    }
	
	public function get_parent_single_view($id)
    {
    $this->db->select('p.*,se.gender_type,c.country_name,s.per_address,s.per_city,s.per_zipcode');
    $this->db->from('tab_parents as p');
    $this->db->join('tab_students as s','s.id = p.student_id', 'left');
    $this->db->join('tab_country as c','c.id = s.per_country_id', 'left');
    $this->db->join('tab_sex as se','se.id = p.gender_id', 'left');
    $this->db->where('p.id', $id);
    $query = $this->db->get();
    
    return $query->row_array();
    }
	
	public function students_count()
    {
    return $this->db->count_all_results('tab_Students');
    }
   public function classwise_students_count($id)
    {
	$this->db->from('tab_students as p');
	$this->db->where('p.class_id', $id);
    $query = $this->db->get();
    return $query->row_array();
    }
    
    }