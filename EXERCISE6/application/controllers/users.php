<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
function __construct()
{
parent::__construct();
#$this->load->helper('url');
$this->load->model('users_model');
}
public function index(){
	$data['user_list'] = $this->users_model->get_all_users();
	$this->load->view('Users_view',$data);
	
}


public function add_form()
{
$this->load->view('Users_add');
}
public function insert_users_db()
{
$udata['name'] = $this->input->post('name');
$udata['nickname'] = $this->input->post('nickname');
$udata['email'] = $this->input->post('email');
$udata['address'] = $this->input->post('address');
$udata['gender'] = $this->input->post('gender');
$udata['cp_number'] = $this->input->post('cp_number');
$res = $this->users_model->insert_users_to_db($udata);
if($res){
header('location:'.base_url()."index.php/users/");
}
}
public function Users_edit(){
$user_id = $this->uri->segment(3);
 $data['users'] = $this->users_model->getById($user_id);
$this->load->view('Users_edit', $data);
}
public function update()
{
$mdata['name']=$_POST['name'];
$mdata['nickname']=$_POST['nickname'];
$mdata['email']=$_POST['email'];
$mdata['address']=$_POST['address'];
$mdata['gender']=$_POST['gender'];
$mdata['cp_number']=$_POST['cp_number'];
$res=$this->users_model->update_info($mdata, $_POST['user_id']);
if($res){
header('location:'.base_url()."index.php/users/");
}
}
public function delete($user_id)
{
$this->users_model->delete_a_user($user_id);
$this->index();
}
}