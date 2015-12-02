<?php
 
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
/**
* Description of highchart_model
*
* @author http://www.roytuts.com
*/
class Highchart_model extends CI_Model {
 
private $site_log = 'site_log';
 
/**
* get chart data
*/
function get_chart_data_for_visits($start_date, $end_date) {
$sql = 'SELECT SUM(no_of_visits) total_visits, DATE(access_date) day_date
FROM ' . $this->site_log . '
WHERE DATE(access_date) >= ' . $this->db->escape($start_date) . '
AND DATE(access_date) <= ' . $this->db->escape($end_date) . '
GROUP BY DATE(access_date) ORDER BY DATE(access_date) DESC';
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
$data = array();
foreach ($query->result_array() as $key => $value) {
$data[$key]['label'] = $value['day_date'];
$data[$key]['value'] = $value['total_visits'];
}
return $data;
}
return NULL;
}
 
}
 