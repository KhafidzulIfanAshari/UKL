<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Controller extends CI_Controller {
    
        public function index()
        {
            $data['title']="EikoHotel";
            $data['page']="LandingPage";
            $this->load->view('Index', $data);
        }

        //Login here
        public function loginPage()
        {
            $data['title']="Log In";
            $data['page']="Login";
            $this->load->view('Index', $data);
        }

        public function login()
        {
            if($this->input->post('login')){
                $this->form_validation->set_rules('username', 'username', 'trim|required');
                $this->form_validation->set_rules('password', 'password', 'trim|required');

                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('Model');
                    $data['user'] = $this->Model->loginUser();
                    
                    if($data['user']->num_rows() > 0){
                        $dataUser = $data['user']->row();
                        $array = array(
                            'id' => $dataUser->idUser,
                            'username' => base64_decode($dataUser->username)
                        );
                        
                        $this->session->set_userdata( $array );
                        redirect('Controller/','refresh');
                    } else{
                        $this->session->set_flashdata('status', 'false');  
                        // redirect('controller/signin','refresh');                                          
                    }
                }
            }
        }
        //Regist here
        public function registrationPage()
        {
            $data['title']="Regist";
            $data['page']="Regist";
            $this->load->view('Index', $data);
        }

        public function regist()
        {
            if($this->input->post('regist')){
                $this->form_validation->set_rules('idUser', 'idUser', 'trim|required');
                $this->form_validation->set_rules('username', 'username', 'trim|required');
                $this->form_validation->set_rules('password', 'password', 'trim|required');

                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('Model');
                    $data['user'] = $this->Model->regist();
        
                    if($data['user']){
                        $array = array(
                            'id' => $this->input->post('idUser'),
                            'username' => $this->input->post('username'),
                        );
                        $this->session->set_userdata( $array );
                        
                        redirect('Controller/','refresh');
                    } else{
                        // $this->session->set_flashdata('status', 'false');  
                        // redirect('Controller/signup','refresh');                                          
                    }
                } else{
                    $this->session->set_flashdata('status', 'false');  
                    // redirect('Controller/signup','refresh'); 
                }
            }
        }

        //Log out

        public function logout()
        {
            $this->session->sess_destroy();
            
            redirect('Controller/','refresh');
               
        }

        //Book
        public function bookPage()
        {
            $this->load->model('Model');
            $data['roomClass'] = $this->Model->selectClass();
            $data['alphaClass'] = $this->Model->selectAvailableRoom(1);
            $data['bravoClass'] = $this->Model->selectAvailableRoom(2);
            $data['charlieClass'] = $this->Model->selectAvailableRoom(3);
            $data['title']="Book Room";
            $data['page']="Book";
            $data['bookCont']="RoomList";
            $this->load->view('Index', $data);
        }

        public function bookedPage()
        {
            $this->load->model('Model');
            $data['room'] = $this->Model->selectCustomerRoom();
            $data['title']="Booked Room";
            $data['page']="Book";
            $data['bookCont']="BookedRoom";
            $this->load->view('Index', $data);
        }

        // public function FunctionName(Type $var = null)
        // {
            
        // }
        public function reservePage()
        {
            $data['title']="Reserve Page";
            $data['page']="Book";
            $data['bookCont']="Reserve";
            $this->load->view('Index', $data);
        }
        public function deleteRoomRes($id, $idRoom)
        {
            $this->load->model('Model');
            $data['room'] = $this->Model->deleteRoomRes($id, $idRoom);
            
            redirect('Controller/bookedPage','refresh');
        }
    }
    
    /* End of file Controller.php */
    
?>