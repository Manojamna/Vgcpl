<?php
/**
 * Get asset URL
 *
 * @access  public
 * @return  string
 */
if(!function_exists('site_name'))
{  
    function site_name()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();  
        //return the full asset path
        return $CI->config->item('site_name');
    }
}

if(!function_exists('addhttp'))
{ 
	function addhttp($url) {
		if(!empty($url)) {
			if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
				$url = "http://" . $url;
			}
		}
		else{
			$url = 'javascript:void(0);';
		}
		return $url;
	}
}

if(!function_exists('get_blog_comments'))
{ 
	function get_blog_comments($blog_id, $limit) {
		$CI =& get_instance(); 
		$CI->load->library("session");
		$CI->load->model('blogs_model');
		
		$conditions = array(
			'select' => array('blog_comments.*', 'tbl_users.fname', 'tbl_users.lname'),
			'join' => array('0' => array('table'=>'tbl_users', 'condition'=>'tbl_users.id =blog_comments.user_id' )),
			'where' => array('blog_comments.blog_id'=> $blog_id),
			'orderby' => array('field' => 'blog_comments.date', 'order' => 'DESC')
		);

//		if(!empty($limit)) :
//			$conditions['limit'] = array('limit' => $limit, 'from' => 0);
//		endif;
		$comments = $CI->blogs_model->get_rows($conditions, 'blog_comments');
		
		return $comments;
	}
}

if(!function_exists('count_blog_comments'))
{ 
	function count_blog_comments($blog_id) {
		$CI =& get_instance(); 
		$CI->load->library("session");
		$CI->load->model('blogs_model');
		
		$conditions = array(
			'where' => array('blog_id'=> $blog_id),
		);
		
		$total_comments = $CI->blogs_model->get_count($conditions, 'blog_comments');
		
		return $total_comments;
	}
}

if(!function_exists('get_blog_images'))
{ 
	function get_blog_images($blog_id) {
		$CI =& get_instance(); 
		$CI->load->library("session");
		$CI->load->model('blogs_model');
		
		$conditions = array(
			'select' => '*', 
			'where' => array('blog_id'=> $blog_id),
		);
		
		$images = $CI->blogs_model->get_rows($conditions, 'blog_images');
		
		return $images;
	}
}

if(!function_exists('get_country'))
{ 
	function get_country($admin_id, $main_id) {
		$CI =& get_instance(); 
		$CI->load->library("session");
		$CI->load->model('blogs_model');
		$query = $CI->db->query('SELECT location.location from maintenance JOIN location on location.id = maintenance.location_id where maintenance.location_id = (SELECT maintenance.location_id from tbl_users JOIN maintenance ON maintenance.id = tbl_users.maintenance_id where tbl_users.maintenance_id = "'.$main_id.'" or tbl_users.maintenance_id = (SELECT maintenance_id from tbl_users where id = "'.$admin_id.'" ) group by tbl_users.maintenance_id)');
		$country = $query->row();		
		return $country;
	}
}

if(!function_exists('get_nation'))
{ 
	function get_nation($nationalities) {
		$CI =& get_instance(); 
		$CI->load->library("session");
		$CI->load->model('blogs_model');
		$ass_nat = explode(',',$nationalities);
		$nations = array();
		foreach($ass_nat as $key => $value ) :
			$nation_query = array(
			'select' => array('visa_api.alpha3', 'visa_api.id'),
			'where' => array('id' => $value),
			'row' => 1
			);
			$nations[$key]['visa_api'] = $CI->utility_model->get_rows($nation_query, 'visa_api');
		endforeach;		
		return $nations;
	}
}