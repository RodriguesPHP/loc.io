<?php 
  function ip_details($ip) {
    $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
    $details = json_decode($json, true);
    return $details;
  }

  $ip = $_REQUEST['ip'];

  $details = ip_details($ip);

  $local = explode(",",$details['loc']);

  $log = $local[1];
  $alt = $local[0];


  echo '    <div class="result-ip">
  <ul>
      <li><b>IP:</b>'.$details['ip'].'</li>
      <li><b>Cidade:</b>'.$details['city'].'</li>
      <li><b>Região:</b>'.$details['region'].'</li>
      <li><b>CEP:</b>'.$details['postal'].'</li>
      <li><b>Loc:</b>'.$details['loc'].'</li>
  </ul>
</div>
<div class="result-ip">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d!2d'.$log.'!3d'.$alt.'00000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDMxJzU3LjAiUyA0NsKwNDcnMzAuMSJX!5e0!3m2!1spt-BR!2sbr!4v1701202063493!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
</div>'

?>
