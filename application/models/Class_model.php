<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Class_model extends CI_Model
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
    $query = $this->db->get('tab_class');
    $row = $query->row();
    if (isset($row))
    {
    $max_id = $row->id + 1;
    }
    
    $data['id'] = $max_id;
    return $this->db->insert('tab_class', $data);
    }
    
    public function edit_record($id,$data)
    {
    $this->db->where('id', $id);
    $this->db->update('tab_class', $data);		
    }
	
	public function edit_record_details($id)
    {
	$this->db->select('c.class_name,c.id');
    $this->db->from('tab_class as c');
    $this->db->where('id', $id);	
	$query = $this->db->get();		
    return $query->row_array();	
    }
    
    public function delete_record($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('tab_class');
    }
    
    public function view_record($order_by = '')
    {
    $this->db->select('c.*,t.first_name,t.middle_name,t.last_name');
    $this->db->from('tab_class as c');
	$this->db->join('tab_teachers as t','t.id = c.class_teacher_id', 'left');
	//$this->db->where('s.status','Active');
	//$this->db->where('s.class_id','c.id');
    if($order_by != ''){
    $this->db->order_by('c.id',$order_by);
    }
    $query = $this->db->get();		
    return $query->result_array();
    }
	
	public function get_class_student_count($id)
    {
    $this->db->select('count(s.id) as number_of_students');
    $this->db->from('tab_students as s');
	//$this->db->join('tab_teachers as t','t.id = c.class_teacher_id', 'left');
	$this->db->join('tab_class as c','c.id = s.class_id', 'left');
	$this->db->where('s.status','Active');
	$this->db->where('c.id',$id);
    
    $query = $this->db->get();		
    return $query->row_array();
    }
    
   /* public function user_view_record()
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
    }*/
    
    public function get_record_by_id($id)
    {
    $this->db->where('id', $id);
    $query = $this->db->get('tab_class');
    
    return $query->row_array();
    }
    
    public function get_single_view($id)
    {
	$this->db->select('c.*,t.first_name,t.middle_name,t.last_name');
    $this->db->from('tab_class as c');
	$this->db->join('tab_teachers as t','t.id = c.class_teacher_id', 'left');
    $this->db->where('c.id', $id);
    
	$query = $this->db->get();		
	return $query->row_array();
    }
    
    public function class_count()
    {
    
    return $this->db->count_all_results('tab_class');
    }
	
    public function view_record_count($order_by = '',$id)
    {
    $this->db->select('count("s.*") as std_count');
    $this->db->from('tab_Students as s');
	$this->db->join('tab_class as c','c.id = s.class_id', 'left');
	$this->db->where('s.class_id', $id);
    
    $query = $this->db->get();		
    return $query->row_array();
    }
    
    }