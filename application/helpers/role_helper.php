<?php

function is_login()
{
   $ci = get_instance();
   if(!$ci->session->userdata('id')){
      $ci->session->set_flashdata('info', 'Session Anda Telah Berakhir. SIlahkan Login Kembali');
      redirect('auth');
   }
}

// function is_login()
// {
//    $ci = get_instance();
//    if($ci->session->userdata('id')){
//       $url = $ci->uri->segment(1);

//       // if($url == 'laporan'){
//             $url = $url . "/" . $ci->uri->segment(2)??'';
//       // }

//       $menu = $ci->session->userdata('menu');

//       if(!in_array($url, $menu)){
//             $ci->session->set_flashdata('gagal', 'Akses Ditolak');
//             redirect($_SERVER['HTTP_REFERER']);
//       }
//    } else {
//       $ci->session->set_flashdata('info', 'Session Anda Telah Berakhir. SIlahkan Login Kembali');
//       redirect('auth');
//    }
// }

?>