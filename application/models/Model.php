<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model extends CI_Model {
        public function regist()
        {
            $idUser = $this->input->post('idUser');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = array(
                'idUser' => $idUser,
                'username' => base64_encode($username),
                'password' => base64_encode($password)
            );
            $regist = $this->db->insert('user', $data);
            if($regist){
                return TRUE;
            }
        }
        
        public function loginUser()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = array(
                'username' => base64_encode($username),
                'password' => base64_encode($password)

            );
            return $this->db->get_where('user', $data);
        }
        //Book

        //Select class
        public function selectClass()
        {
            return $this->db->get('roomclass')->result();
        }

        //Select Available Room
        public function selectAvailableRoom($id)
        {
            return $this->db->where('status', "")
                            ->where('roomClassId', $id)
                            ->join('roomclass', 'roomclass.idRoomClass = room.roomClassId')
                            ->get('room')->result();
        }
        public function reserveAllRoom()
        {
            $userId = $this->session->userdata('id');
            $customer = $this->input->post('guestName');
            $checkIn = $this->input->post('checkIn');
            $checkOut = $this->input->post('checkOut');
            foreach($this->cart->contents() as $item){
                // echo $item['price'];
                // echo $checkOut;
                $data = array(
                    'roomId' => $item['id'],
                    'userId' => $userId,
                    'customer' => $customer,
                    'price' => $item['price'],
                    'checkin' => $checkIn,
                    'checkout' => $checkOut
                );
                $object = array(
                    'status' => "ordered"
                );
                $cart = array(
                    'rowid' => $item['rowid'],
                    'qty' => 0
                );
                $this->db->where('idRoom', $data['roomId'])->update('room', $object);
                $this->db->insert('roomreservation', $data);
                $this->cart->update($cart);
            }
            return TRUE;
        }
        
        public function selectCustomerRoom()
        {
            return $this->db->join('user', 'user.idUser = roomreservation.userId')
                            ->get('roomreservation')->result();
        }

        public function deleteRoomRes($id, $idRoom)
        {
            $object = array(
                'status' => " "
            );
            $this->db->where('idRoom', $idRoom)->update('room', $object);
            $this->db->where('idRoomReservation', $id)->delete('roomreservation');
            return TRUE;
        }
    }
    
    /* End of file Model.php */
    
?>