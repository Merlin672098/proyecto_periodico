<?php
 
class Mdl_egresos extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function insertar_egreso($parametros)
    {
        $campos= array(
            'id_tipo_egre'=> $parametros['cid_tipo_egreso'],
            'fecha_eg'=> $parametros['cfecha_eg'],
            'monto_eg'=> $parametros['cmonto_eg'],
            'explicacion_eg'=> $parametros['cexpli_eg'],
            'id_usuario_reg'=> $parametros['cid_ureg'],
            'fecha_reg'=> $parametros['cfecha_reg'],
            'borrado'=> $parametros['cborrado'],
            'id_usuario'=> $parametros['cid_usuario'],
            'id_evento'=> $parametros['cid_evento'],
        );
        echo $parametros['cid_egreso'];
        $this->db->insert('p_egresos',$campos);     
    }

    function modificar_egreso($parametros){
        $id_egreso =$parametros['cid_egreso'];
        $campos= array(
            'id_egreso'=> $parametros['cid_egreso'],
            'id_tipo_egre'=> $parametros['cid_tipo_egreso'],
            'fecha_eg'=> $parametros['cfecha_eg'],
            'monto_eg'=> $parametros['cmonto_eg'],
            'explicacion_eg'=> $parametros['cexpli_eg'],
            'id_usuario_reg'=> $parametros['cid_ureg'],
            'fecha_reg'=> $parametros['cfecha_reg'],
            'borrado'=> $parametros['cborrado'],
            'id_usuario'=> $parametros['cid_usuario'],
            'id_evento'=> $parametros['cid_evento']
        );
                        
    $this->db->where('id_egreso', $id_egreso);
    $this->db->update('p_egresos', $campos);

    }

    function eliminar_egreso($cid_egreso){
        $campos= array(
            'borrado'=>'T'
        );
        $this->db->where('id_egreso',$cid_egreso);
        $this->db->update('p_egresos',$campos);
    }

    function obtener_egreso_all(){
        /*$consulta="Select * from p_ingresos;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();     */ 
        $this->db->select('*');
        $this->db->from('p_egresos');
        $this->db->where('borrado', 'F');
        $query = $this->db->get();
        return $query->result_array();
    }


    function buscar_id_tipo_egreso($id_tipo_egreso)
    {
        $consulta="Select * from p_egresos where id_tipo_egre='$id_tipo_egreso';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }

    //SUBMONTO///

    function obtener_suma()
    {
        $consulta="Select sum(monto_eg) as suma from p_egresos;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function obtener_suma_mes($parametros)
    {
        $consulta="Select sum(monto_eg) as suma
        from p_egresos
        where 
        month(fecha_eg) like '%" .$parametros['fecha_eg']."%';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function buscar_mes_by($parametros)
    {      
        $consulta="Select 
        id_egreso, id_tipo_egre, month(fecha_eg) as fecha , monto_eg,
        explicacion_eg, id_usuario_reg, fecha_reg, borrado, id_usuario,id_evento
        from p_egresos
        where 
        month(fecha_eg) like '%" .$parametros['fecha_eg']."%';";        
        $resultado= $this->db->query($consulta,);
        return $resultado->result_array();
    }
}
