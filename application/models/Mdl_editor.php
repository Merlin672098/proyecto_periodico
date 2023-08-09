<?php
 
class Mdl_editor extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    


    function modificar_estado($parametros){
        $noticia =$parametros['cnoticia'];
        $campos= array(
            'id_noticia'=> $parametros['cnoticia'],
            'id_estad'=> $parametros['cestado']
        );
                        
    $this->db->where('id_noticia', $noticia);
    $this->db->update('pd_noticia', $campos);
    /*$consulta="update pd_noticia set id_estad = '$id_noticia' where id_noticia = '$estado'";
    $this->db->query($consulta);*/
    }
        
    function obtener_noticia(){
        $consulta="select n.nom_archivo,e.descripcion,n.id_estad,n.id_tema,n.id_usuario_e,n.id_usuario,n.id_noticia,n.titulo,n.fecha_publi,c.user,t.tipo_tema
        from pd_tema_noticia t, pd_noticia n, pd_usuario_colum c, pd_estado e
        where t.id_tema = n.id_tema
        and n.id_usuario = c.id_usuario
        and e.id_estad = n.id_estad;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();      
        
    }


    function buscar_id_tipo_tema($ntipo){
        $consulta="select n.id_tema,n.nom_archivo,e.descripcion,n.id_estad,n.id_tema,n.id_usuario_e,n.id_usuario,n.id_noticia,n.titulo,n.fecha_publi,c.user,t.tipo_tema
        from pd_tema_noticia t, pd_noticia n, pd_usuario_colum c, pd_estado e
        where n.id_tema = '$ntipo'
        and n.id_usuario = c.id_usuario
        and e.id_estad = n.id_estad
        and t.id_tema = n.id_tema;";
        
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }
    function buscar_por_nombre($name_colum){
        $consulta="select n.id_tema,n.nom_archivo,e.descripcion,n.id_estad,n.id_tema,n.id_usuario_e,n.id_usuario,n.id_noticia,n.titulo,n.fecha_publi,c.user,t.tipo_tema
        from pd_tema_noticia t, pd_noticia n, pd_usuario_colum c, pd_estado e
        where c.user like '%$name_colum%'
        and n.id_usuario = c.id_usuario
        and e.id_estad = n.id_estad
        and t.id_tema = n.id_tema;";
        
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }
    
}
