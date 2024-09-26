<?php
$array = array('Ogrenciler' => array(
  array(
    "numara" => "12257000",
    "adi" => "Ahmet Candan",
    "bolum" => "Makine Muhendisligi"
    ),
  array(
    "numara" => "12254000",
    "adi" => "Ahmet Candan",
    "bolum" => "Makine Muhendisligi"
    ),
  array(
    "numara" => "12253000",
    "adi" => "Oguzhan Tasci",
    "bolum" => "Bilgisayar Muhendisligi"
    )
  )
);
$json = json_encode($array); 
echo $json;
?>