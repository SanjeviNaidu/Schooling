<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Combo_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	function combo_base()
    { 
        $this->db->select('id');
        $this->db->select('zone');
        $this->db->from('tab_zone');
		$this->db->order_by('zone', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->value);
        }
        return $result_combo = array_combine($id, $value);
    }
	function cbo_sex()
    { 
        $this->db->select('id');
        $this->db->select('gender_type');
        $this->db->from('tab_sex');
		$this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->gender_type);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_class()
    { 
        $this->db->select('id');
        $this->db->select('class_name');
        $this->db->from('tab_class');
		$this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->class_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_teacher()
    { 
        $this->db->select('id');
        $this->db->select('first_name,middle_name,last_name');
        $this->db->from('tab_teachers');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
			array_push($value, $result[$i]->first_name . ' ' . $result[$i]->middle_name . ' ' . $result[$i]->last_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	
	
	
	function cbo_blood_group()
    { 
        $this->db->select('id');
        $this->db->select('group_name');
        $this->db->from('tab_blood_group');
		$this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->group_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_bill_type()
    { 
        $this->db->select('id');
        $this->db->select('bill_type');
        $this->db->from('tab_bill_type');
		$this->db->order_by('bill_type', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->bill_type);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_country()
    { 
        $this->db->select('id');
        $this->db->select('country_name');
        $this->db->from('tab_country');
		$this->db->order_by('country_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->country_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_state()
    { 
        $this->db->select('id');
        $this->db->select('state_name');
        $this->db->from('tab_state');
		$this->db->order_by('state_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->state_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	function cbo_district()
    { 
        $this->db->select('id');
        $this->db->select('district_name');
        $this->db->from('tab_district');
		$this->db->order_by('district_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->district_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_city()
    { 
        $this->db->select('id');
        $this->db->select('city_name');
        $this->db->from('tab_city');
		$this->db->order_by('city_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->city_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_area()
    { 
        $this->db->select('id');
        $this->db->select('area_name');
        $this->db->from('tab_area');
		$this->db->order_by('area_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->area_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
		
	
	function cbo_department()
    { 
        $this->db->select('id');
        $this->db->select('department_name');
        $this->db->from('tab_department');
		$this->db->order_by('department_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->department_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	
	function cbo_designation()
    { 
        $this->db->select('id');
        $this->db->select('designation_name');
        $this->db->from('tab_designation');
		$this->db->order_by('designation_name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->designation_name);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_usertype()
    { 
        $this->db->select('id');
        $this->db->select('usertype');
        $this->db->from('tab_usertype');
		$this->db->order_by('usertype', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->usertype);
        }
        return $result_combo = array_combine($id, $value);
    }
	
	function cbo_owner($usertype='owner')
    { 
        $this->db->select('id');
        $this->db->select('first_name,middle_name,last_name');
		$this->db->from('tab_registration as r');
		if($usertype != ''){
			$this->db->where('r.usertype',$usertype);
		}
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->first_name . ' ' . $result[$i]->middle_name . ' ' . $result[$i]->last_name);        
	    }
            return $result_combo = array_combine($id, $value);
     }
	 
	 function cbo_user($status = 'Active')
    { 	
		
        $this->db->select('id');
        $this->db->select('first_name,middle_name,last_name,usertype');
		$this->db->from('tab_registration as r');
        if($status != ''){
			$this->db->where('r.status',$status);
		}
		$query = $this->db->get();
        $result = $query->result();
        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->first_name . ' ' . $result[$i]->middle_name . ' ' . $result[$i]->last_name
			.'&nbsp;-&nbsp;'. $result[$i]->usertype.'');        
	    }
            return $result_combo = array_combine($id, $value);
     }
	
	function cbo_tenant($usertype='tenant')
    { 
        $this->db->select('id');
        $this->db->select('first_name, middle_name,last_name');
        $this->db->from('tab_registration as r');
		if($usertype != ''){
			$this->db->where('r.usertype',$usertype);
		}
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->first_name . ' ' . $result[$i]->middle_name . ' ' . $result[$i]->last_name);       
		}
            return $result_combo = array_combine($id, $value);
     }
	 
	 function cbo_staff($usertype='staff')
    { 
        $this->db->select('id');
        $this->db->select('first_name, middle_name,last_name');
        $this->db->from('tab_registration as r');
		if($usertype != ''){
			$this->db->where('r.usertype',$usertype);
		}
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->first_name . ' ' . $result[$i]->middle_name . ' ' . $result[$i]->last_name);       
		}
            return $result_combo = array_combine($id, $value);
     }
	 
	 function cbo_wing()
    { 
        $this->db->select('id');
        $this->db->select('wing');
        $this->db->from('tab_wing');
		$this->db->order_by('wing', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->wing);
        }
        return $result_combo = array_combine($id, $value);
    }
	 function cbo_flat_no()
    { 
        $this->db->select('id');
        $this->db->select('flat_no');
        $this->db->from('tab_building');
		$this->db->order_by('flat_no', 'ASC');
        $query = $this->db->get();
        $result = $query->result();

        $id = array('');
        $value = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($value, $result[$i]->flat_no);
        }
        return $result_combo = array_combine($id, $value);
    }
	
}
      