<?php
 
class Usuario_model_admin extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    
    function login($username,$password){

        /*Nos devuelve una fila existe es porque el usuario existe*/
        $this->db->where('user',$username);
        $this->db->where('password',$password);
        $q =  $this->db->get('pd_user_admin');
        if($q->num_rows()>0){
            return true;
        }else
        {
            return false;
            
        }
    }
    
}
