<?php
 
class Mdl_lawea extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    } 
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen)
    {
        $data = array(
            'nom_video' => $titulo,
            'ubicacion' => $imagen
        );
        return $this->db->insert('pd_videos', $data);
    }
}
