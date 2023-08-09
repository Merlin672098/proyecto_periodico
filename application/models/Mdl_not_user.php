<?php
 
class Mdl_not_user extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    } 
       
    
    function subir_noticia($parametros){
        $campos= array(
            'titulo'=> $parametros['ctitular'],
            
            'fecha_publi'=> $parametros['cfecha_p'],
            'id_usuario'=> $parametros['ccolumnista'],
            'id_usuario_e'=> $parametros['ceditor'],
            'id_tema'=> $parametros['ctema'],
            'nom_archivo' =>$parametros['ctitulo'],
            'id_estad'=> $parametros['cestado']
        );
        echo $parametros['ctitular'];
        $this->db->insert('pd_noticia',$campos);     
    }



    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    /*function subir($titulo,$imagen)
    {
        $data = array(
            'nom_video' => $titulo,
            'ubicacion' => $imagen
        );
        return $this->db->insert('pd_videos', $data);
    }*/


    function modificar_noticia($parametros){
        $noticia =$parametros['cnoticia'];
        $campos= array(
            'id_noticia'=> $parametros['cnoticia'],
            'titulo'=> $parametros['ctitular'],
            'fecha_publi'=> $parametros['cfecha_p'],
            'id_usuario'=> $parametros['ccolumnista'],
            'id_usuario_e'=> $parametros['ceditor'],
            'id_tema'=> $parametros['ctema'],
            'nom_archivo' =>$parametros['ctitulo'],
            'id_estad'=> $parametros['cestado']
        );
                        
    $this->db->where('id_noticia', $noticia);
    $this->db->update('pd_noticia', $campos);

    }

    function eliminar_noticia($cid_noticia){
        $consulta="delete from pd_noticia where id_noticia='$cid_noticia'";
        $this->db->query($consulta);
         
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
        $consulta="select n.nom_archivo,e.descripcion,n.id_estad,n.id_tema,n.id_usuario_e,n.id_usuario,n.id_noticia,n.titulo,n.fecha_publi,c.user,t.tipo_tema
        from pd_tema_noticia t, pd_noticia n, pd_usuario_colum c, pd_estado e
        where t.id_tema = '$ntipo'
        and n.id_usuario = c.id_usuario
        and e.id_estad = n.id_estad
        and t.id_tema = n.id_tema";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();

    }

    

    

    
}
