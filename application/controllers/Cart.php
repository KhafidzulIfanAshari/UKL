<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cart extends CI_Controller {
    
        public function addCart($id, $price, $class)
        {
            
            $data = array(
                'id'      => $id,
                'qty'     => 1,
                'price'   => $price,
                'name'    => $class
            );
            
            $this->cart->insert($data);
            
            // $this->session->sess_destroy();
            redirect('Controller/bookPage','refresh');
            
            // foreach($this->cart->contents() as $item){
            //     echo $item['id'];
            // }
        }

        public function reserveAllRoom()
        {
            if($this->input->post('reserve')){
                $this->form_validation->set_rules('guestName', 'guestName', 'trim|required');
                $this->form_validation->set_rules('checkIn', 'checkIn', 'trim|required');
                $this->form_validation->set_rules('checkOut', 'checkOut', 'trim|required');

                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('Model');
                    $data['room'] = $this->Model->reserveAllRoom();
        
                    if($data['room']){
                        redirect('Controller/bookedPage','refresh');
                    } else{
                        // $this->session->set_flashdata('status', 'false');  
                        // redirect('Controller/signup','refresh');                                          
                    }
                    // echo $this->input->post('checkIn') . $this->input->post('checkOut') . $this->input->post('guestName');
                } else{
                    $this->session->set_flashdata('status', 'false');  
                    // redirect('Controller/signup','refresh'); 
                }
            }
        }
    
    }
    
    /* End of file Cart.php */
    
?>