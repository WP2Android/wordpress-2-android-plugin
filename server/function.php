<?  function data_base(){  $iba = new mysqli(base64_decode('bG9jYWxob3N0'), base64_decode('aG9zdHBpZGl2bl9pdGl2Mg=='),base64_decode('NXkxMnl6SmQ=') ,base64_decode('aG9zdHBpZGl2bl9pdGl2Mg==') );  if (!$iba)  throw new Exception(base64_decode('RXJyb3IuLi4='));  else  return $iba;  }  $base_url = base64_decode('aHR0cDovL2V4YW1wbGUuY29t');  $table_prefix = base64_decode('d3Bf');  ?>