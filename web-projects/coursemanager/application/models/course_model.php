<?php

    class Course_model extends CI_Model
    {
        public function __construct() {
            parent::__construct();
        }
        
        public function add_course()
        {
            $data=array(
                'course_code' => $this->input->post('course_id'),
                'uid' => $this->ion_auth->get_user()->id,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'credit' => $this->input->post('credit'),
                'status' => $this->input->post('status'),
                'grade' => $this->input->post('grade'),
                'grade_point' => $this->input->post('grade_point')
            );
            
            $this->db->insert('course', $data);
        }
        
        public function get_result()
        {
            $total_grade_point=  $this->get_total_gp();
            $total_credit=  $this->get_total_credit();
			
			if($total_credit==0)
				return 0.00;
			
			else
				return $total_grade_point/$total_credit;
        }
        
        public function get_total_gp()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1'
            );
            
            $this->db->select('grade_point, credit');
            $this->db->where($where_array);
//            $this->db->where('status', '1');            
//            $this->db->where('uid', $this->ion_auth->get_user()->id);
            $query=$this->db->get('course');
            $total_grade_point=0;
            
            foreach($query->result() as $val)
            {
                $temp=$val->credit;
                $temp=$temp*$val->grade_point;
                $total_grade_point+=$temp;
            }
                
            return $total_grade_point;
        }
        
        public function get_total_credit()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1'
            );
            
            $this->db->select('credit');
            $this->db->where($where_array);
//            $this->db->where('uid', $this->ion_auth->get_user()->id);
            $query=$this->db->get('course');
            $total_credit=0;
            
            foreach($query->result() as $num)
            {
                $temp=$num->credit;
                $total_credit+=$temp;
            }
            
            return $total_credit;
        }
        
        public function get_remaining_credit()
        {
            return (132-$this->get_total_credit());
        }
        
        public function get_course_list()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1'
            );
            $this->db->where($where_array);
//            $this->db->where('user_id', $this->ion_auth->get_user()->id);
            $query=$this->db->get('course');
            return $query;
        }
        
        public function delete_row()
        {
            $this->db->where('course_code', $this->uri->segment(3));
            $this->db->delete('course');
        }
        
        public function to_grade_point($grade)
        {
            switch ($grade)
            {
                case 'A':
                    return 4.0;
                    
                case 'A-':
                    return 3.7;
                
                case 'B+':
                    return 3.3;
                    
                case 'B':
                    return 3.0;
                
                case 'B-':
                    return 2.7;
                    
                case 'C+':
                    return 2.3;
                    
                case 'C':
                    return 2.0;
                    
                case 'C-':
                    return 1.7;
                    
                case 'D+':
                    return 1.3;
                    
                case 'D':
                    return 1.0;
                    
                case 'F':
                    return 0.0;    
            }
        }
        
        public function set_grade_point()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1'
            );
            
            $this->db->where($where_array);
//            $this->db->where('user_id', $this->ion_auth->get_user()->id);
            $query=$this->db->get('course');
            
            foreach ($query->result() as $value)
            {
                $gp=  $this->to_grade_point($value->grade);
                $data=array(
                    'grade_point' => $gp
                );
                
                $this->db->where('course_code', $value->course_code);
                $this->db->update('course', $data);
            }
        }
        
        public function get_record()
        {
            $id=$this->uri->segment(3);
            $this->db->where('course_code', $id);
            $query= $this->db->get('course');
            return $query;
        }
        
        public function update_record()
        {
            $data=array(
                'title' => $this->input->post('title'),
                'uid' => $this->ion_auth->get_user()->id,
                'description' => $this->input->post('description'),
                'credit' => $this->input->post('credit'),
                'status' => $this->input->post('status'),
                'grade' => $this->input->post('grade'),
                'grade_point' => $this->input->post('grade_point')
            );
            
            $this->db->where('course_code', $this->input->post('course_id'));
//            $this->db->where('user_id', $this->ion_auth->get_user()->id);
            $this->db->update('course', $data);
        }
        
        public function number_A()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1',
                'grade' => 'A'
            );
            
            $this->db->where($where_array);
//            $this->db->where('user_id', $this->ion_auth->get_user()->id);
            $query=$this->db->get('course');
            return count($query->result());
        }
        
        public function number_courses()
        {
            $where_array=array(
                'uid' => $this->ion_auth->get_user()->id,
                'status' => '1'
            );
            
            $this->db->where($where_array);
//            $this->db->where('user_id', $this->ion_auth->get_user()->id);
            $query = $this->db->get('course');
            return count($query->result());
        }
        
        public function excel_backup()
        {
            $this->load->helper('to_excel');
            $this->db->where('uid', $this->ion_auth->get_user()->id);
            $query = $this->db->get('course');
            echo to_excel($query);
        }

        public function csv_backup()
        {
            $this->load->dbutil();
            $this->load->helper('file');
            $this->db->where('uid', $this->ion_auth->get_user()->id);
            $query = $this->db->get('course');
            $csv_file = $this->dbutil->csv_from_result($query);
            $headers = ''; // just creating the var for field headers to append to below
            $data = ''; // just creating the var for field data to append to below
            header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=backup.csv");
            echo "$headers\n$csv_file";
        }
        
        public function search()
        {
            $key=$this->input->post('key');    
            $this->db->like('course_code',$key);
            $this->db->or_like('title',$key);
            $this->db->or_like('description',$key);
            $this->db->or_like('grade',$key);
            $this->db->or_like('grade_point',$key);
            $query = $this->db->get('course');
            return $query;
        }
    }

?>