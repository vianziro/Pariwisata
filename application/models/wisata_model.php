<?php
class Wisata_model extends CI_Model {

    function __construct() {
        
    }

    function insert($data){
        $insert=$this->db->insert('wisata',$data);
        return $insert;
    }
    
    function update($id,$data){
        $this->db->where('id',$id);
        $update=$this->db->update('wisata',$data);
        return $update;
    }
    
    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('wisata');
    }
    
    function get_all(){
        $query=$this->db->get('wisata');
        if($query->num_rows()>0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    function get_by_id($id){
        $this->db->where('id',$id);
        $query=$this->db->get('wisata');
        if($query->num_rows()>0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    function get_by_kategori($kategori){
        $this->db->where('id_kategori',$kategori);
        $query=$this->db->get('wisata');
        if($query->num_rows()>0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    function get_by_kecamatan($kec){
        $this->db->where('id_kecamatan',$kec);
        $query=$this->db->get('wisata');
        if($query->num_rows()>0){
            return $query;
        }else{
            return FALSE;
        }
    }
    
    function get_by_kec_kat($kec,$kat){
        $this->db->where('id_kecamatan',$kec);
        $this->db->where('id_kategori',$kat);
        $query=$this->db->get('wisata');
        if($query->num_rows()>0){
            return $query;
        }else{
            return FALSE;
        }
    }
}
?>
