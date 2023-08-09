<?php
 
class Mdl_admin_2 extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function registro_columnistas($parametros){
        $campos= array(
            'user'=> $parametros['cusuario'],
            'password'=> $parametros['cpassword'],
            
            'fecha_creacion'=> $parametros['cfecha_c'],
            'id_editor'=> $parametros['ccolumnista'],
            'id_usuario_adm'=> $parametros['cadmin']
        );
        echo $parametros['cusuario'];
        $this->db->insert('pd_usuario_editor',$campos);     
    }

    function modificar_registro($parametros){
        $columnistas =$parametros['cid_usuario'];
        $campos= array(
            'id_usuario_e'=> $parametros['cid_usuario'],
            'user'=> $parametros['cusuario'],
            'password'=> $parametros['cpassword'],
            
            'fecha_creacion'=> $parametros['cfecha_c'],
            'id_editor'=> $parametros['ccolumnista'],
            'id_usuario_adm'=> $parametros['cadmin']
        );
                        
    $this->db->where('id_usuario_e', $columnistas);
    $this->db->update('pd_usuario_editor', $campos);

    }

    function eliminar($cid_usuario){
        $consulta="delete from pd_usuario_editor where id_usuario_e='$cid_usuario'";
        $this->db->query($consulta);
         
    }
        
    function obtener_registros(){
        $consulta="select*from pd_usuario_editor;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();      
        
    }


    function buscar_registro($name_colum){
        $consulta="select* from pd_usuario_editor where user like '%$name_colum%';";
        /*$consulta="Select * from p_ingresos where id_tipo_ingre='$id_tipo_ingreso';";*/
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }

    
}
