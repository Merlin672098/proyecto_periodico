<?php
 
class Mdl_admin extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function registro_columnistas($parametros){
        $campos= array(
            'user'=> $parametros['cusuario'],
            'password'=> $parametros['cpassword'],
            'noti_publi'=> $parametros['cnot_publi'],
            'fecha_creacion'=> $parametros['cfecha_c'],
            'id_columnista'=> $parametros['ccolumnista'],
            'id_usuario_adm'=> $parametros['cadmin']
        );
        echo $parametros['cusuario'];
        $this->db->insert('pd_usuario_colum',$campos);     
    }

    function modificar_registro($parametros){
        $columnistas =$parametros['cid_usuario'];
        $campos= array(
            'id_usuario'=> $parametros['cid_usuario'],
            'user'=> $parametros['cusuario'],
            'password'=> $parametros['cpassword'],
            'noti_publi'=> $parametros['cnot_publi'],
            'fecha_creacion'=> $parametros['cfecha_c'],
            'id_columnista'=> $parametros['ccolumnista'],
            'id_usuario_adm'=> $parametros['cadmin']
        );
                        
    $this->db->where('id_usuario', $columnistas);
    $this->db->update('pd_usuario_colum', $campos);

    }

    function eliminar($cid_usuario){
        $consulta="delete from pd_usuario_colum where id_usuario='$cid_usuario'";
        $this->db->query($consulta);
         
    }
        
    function obtener_registros(){
        $consulta="select*from pd_usuario_colum;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();      
        
    }


    function buscar_registro($name_colum){
        $consulta="select* from pd_usuario_colum where user like '%$name_colum%';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }

    
}
