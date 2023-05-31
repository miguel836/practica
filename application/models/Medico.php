<?php
class Medico extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function getAll($gender=""){
    if ($gender=="") {
      $list=$this->db->get("medico");
    }else{
 $this->db->where("genero_med",
 $gender);

      $list=$this->db->get("medico");
    }
if ($list->num_rows()>0) {
  return $list;
}else{
  return false;
}
}

  function getAct($gender=""){
    if ($gender=="") {
      $list=$this->db->get("medico");
    }else{
 $this->db->where("estado_med",
 $gender);

      $list=$this->db->get("medico");
    }
if ($list->num_rows()>0) {
  return $list;
}else{
  return false;
}
  }


    function getEsp($gender=""){
      if ($gender=="") {
        $list=$this->db->get("medico");
      }else{
   $this->db->where("especialidad_med",
   $gender);

        $list=$this->db->get("medico");
      }
  if ($list->num_rows()>0) {
    return $list;
  }else{
    return false;
  }
    }




        function getMedi($gender=""){
          if ($gender=="") {
            $list=$this->db->get("medico");
          }else{
       $this->db->where("medicamentos_med",
       $gender);

            $list=$this->db->get("medico");
          }
      if ($list->num_rows()>0) {
        return $list;
      }else{
        return false;
      }
        }





                function getTot($gender=""){
                  if ($gender=="") {
                    $list=$this->db->get("medico");
                  }else{
               $this->db->where("tratamientos_med",
               $gender);

                    $list=$this->db->get("medico");
                  }
              if ($list->num_rows()>0) {
                return $list;
              }else{
                return false;
              }
                }






      function getReu($gender=""){
          if ($gender=="") {
          $list=$this->db->get("medico");
          }else{
         $this->db->where("reuniones_med",
        $gender);
       $list=$this->db->get("medico");
           }
    if ($list->num_rows()>0) {
        return $list;
        }else{
      return false;
      }
     }




           function getTra($gender=""){
               if ($gender=="") {
               $list=$this->db->get("medico");
               }else{
              $this->db->where("tratamientos_med",
             $gender);
            $list=$this->db->get("medico");
                }
         if ($list->num_rows()>0) {
             return $list;
             }else{
           return false;
           }
          }


                     function getPro($gender=""){
                         if ($gender=="") {
                         $list=$this->db->get("medico");
                         }else{
                        $this->db->where("provincia_med",
                       $gender);
                      $list=$this->db->get("medico");
                          }
                   if ($list->num_rows()>0) {
                       return $list;
                       }else{
                     return false;
                     }
                    }
}//cierre de la clase
 ?>
