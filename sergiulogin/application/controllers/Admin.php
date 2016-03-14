<?php 
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
       
        
        $this->load->helper('url');
        $this->load->model('admin_model');
         $this->load->library('grocery_CRUD');



            $lang_var = $this->session->userdata('lang');
            $this->language = empty($lang_var) ? 'romanian' : $this->session->userdata('lang');

            //load lang files and shit
            $this->load->helper('language');
            $this->lang->load('text', $this->language);

    }

    // public function _administrator_output($output = null) {
    //     $this->load->view('template/admin', $output);
    // }

    // public function is_loggedin() {
    //     $username = $this->session->userdata('username');
    //     $password = $this->session->userdata('password');

    //     if (empty($username) OR empty($password)) {
    //         return false;
    //     }

    //     $username = $this->session->userdata('username');
    //     $password = $this->session->userdata('password');

    //     $admin = $this->admin->getAdmin();

    //     if (!isset($admin->$username)) {
    //         return false;
    //     }

    //     if ($admin->$username !== $password) {
    //         return false;
    //     }

    //     return true;
    // }

    //     public function login() {
    //     if ($this->is_loggedin()) {
    //         redirect('admin');
    //     }

    //     $this->load->helper('form');
    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('login', 'логин', 'required');
    //     $this->form_validation->set_rules('password', 'пароль', 'required');

    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('template/login');
    //     } else {
    //         $admin = $this->admin->getAdmin();
    //         $login = $this->input->post('login');
    //         $password = $this->input->post('password');

    //         if (isset($admin->$login) AND $admin->$login === $password) {
    //             $newdata = array(
    //                 'username' => $login,
    //                 'password' => $password
    //             );

    //             $this->session->set_userdata($newdata);

    //             redirect('administrator/news');
    //         } elseif (isset($admin->$login) AND $admin->$login !== $password) {
    //             $data['text'] = 'Неверный Пароль.';
    //             $this->load->view('template/login', $data);
    //         } else {
    //             $data['text'] = 'Неверный Логин.';
    //             $this->load->view('template/login', $data);
    //         }
    //     }
    // }

        public function is_loggedin() 
    {
        $username = $this->session->userdata('login');
        $password = $this->session->userdata('password');

        if (empty($username) OR empty($password)) {
            return false;
        }

        // $username = $this->session->userdata('username');
        // $password = $this->session->userdata('password');

        // $admin = $this->admin->getAdmin();

        // if (!isset($admin->$username)) {
        //     return false;
        // }

        // if ($admin->$username !== $password) {
        //     return false;
        // }

        return true;
    }


    public function adminLog($login, $password)
    {
       $mysqli = new mysqli("fdb3.freehostingeu.com", "2048645_capital", "rapina123", "2048645_capital");
        mysqli_set_charset($mysqli,"utf8");
        if(mysqli_num_rows($mysqli->query("SELECT * FROM admin WHERE `login` = '$login' AND `password` = '$password'")))
            return TRUE; 
        else  
            { 
                printf("Error: %s\n", $mysqli->error);
                    return FALSE; 
            } 

    } 

    public function login()
        {

            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('login', 'login', 'required' );
            $this->form_validation->set_rules('password', 'pas','required');
            $this->load->view('templates/header2');
             if ($this->is_loggedin() || (($this->form_validation->run()) && ($this->adminLog($this->input->post('login'),$this->input->post('password')))))
                {
                    $this->session->set_userdata('login', 'sergiu');
                    $this->session->set_userdata('password', '1234');
                    redirect(site_url('admin/text'));
                }
              else $this->load->view('templates/admin');  

              $this->load->view('templates/footer2');

        }


    public function text()
    {

      
        $this->load->view('templates/header2');
         

                $crud = new grocery_CRUD();
                $crud->set_language("russian");
                $crud->set_table('text_lang');
                $crud->order_by('id','desc');               
                
                $output = $crud->render();
                $this->load->view('example' ,$output);

                $this->load->view('templates/footer2');
    }  


    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url(''));
        //$this->load->view('template/login');
    }

    
}
