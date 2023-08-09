<?php
 
class Usuario_model extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    
    function login($username,$password){

        /*Nos devuelve una fila existe es porque el usuario existe*/
        $this->db->where('user',$username);
        $this->db->where('password',$password);
        $q =  $this->db->get('pd_usuario_colum');
        if($q->num_rows()>0){
            return true;
        }else
        {
            return false;
            
        }
    }
    
}
