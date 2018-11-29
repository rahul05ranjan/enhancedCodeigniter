<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
 
if (! function_exists('get_table')) {
    
    function get_table($table_name, $limit = null, $offset = null)
    {
       $ci =& get_instance();
       $ci->load->model('Extended_model', 'enhance');
       $gett = $ci->enhance->get_table_model($table_name, $limit, $offset);
       return $gett;
    }
}

if (! function_exists('get_table_where')) {
    
    function get_table_where($table_name, $where = [], $limit = null, $offset = null)
    {
       $ci =& get_instance();
       $ci->load->model('Extended_model', 'enhance');
       $gett = $ci->enhance->get_table_where_model($table_name, $where, $limit, $offset);
       return $gett;
    }
}

if (! function_exists('is_table_exist')) {
    
    function is_table_exist($table_name)
    {
       $ci =& get_instance();
       $ci->load->model('Extended_model', 'enhance');
       $gett = $ci->enhance->is_table_exist_model($table_name);
       return $gett;
    }
}