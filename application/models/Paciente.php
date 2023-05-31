<?php
class Paciente extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function getAll($gender=""){
    if ($gender=="") {
      $list=$this->db->get("paciente");
    }else{
 $this->db->where("genero_pac",
 $gender);

      $list=$this->db->get("paciente");
    }
if ($list->num_rows()>0) {
  return $list;
}else{
  return false;
}
}

}//cierre de la clase
 ?>
