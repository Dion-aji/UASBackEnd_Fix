<?php
class M_login extends CI_model{
  function cek_login($data){
    return $this-> db -> get_where ('user',$data)->row();
  }
}
 ?>
