<?php
$zoo=array(
  'Australia'=>array('Sarcophilus satanicus','Myrmecobius','Macropus giganteus' ),
  'Africa'=>array('Amblysomus marleyi', 'Nesotragus moschatus','Taphozous'),
  'Arctic'=>array('Arvicolinae','Spermophilus undulatus', 'Delphinapterus leucas',
  'Orcinus orca')
);
echo "<pre>";
print_r($zoo);
echo "</br></br>";
$a=[];
$b=[];
foreach ($zoo as $continent => $animals) {
  foreach ($animals as $animal) {
  if (substr_count($animal, ' ') ==1) {
    $perem=explode(" ",$animal);
    $a[]=$perem[0];
    $b[]=$perem[1];
    }
  }
}

shuffle($b);
print_r($b);
echo "</br></br>";
$result=[];
for($i = 0; $i<count($a); $i++)
  {
    $v=$a[$i].' '.$b[$i];
    $result[$i]=$v;
  }
  echo "<pre>";
  print_r($result);
  echo "</br></br>";
//дополнительное

$fantzoo=$zoo;
foreach ($fantzoo as $fcontinent => $fanimals) {
  echo "<h2>".$fcontinent."</h2>";
  foreach ($fanimals as $fanimal) {
    if (substr_count($animal, ' ') ==1 ) {
    $dlaproverka=explode(" ",$fanimal);
    //echo $dlaproverka[0];
    foreach ($result as $fantast) {
    $dlaproverka2=explode(" ",$fantast);
    if($dlaproverka[0]==$dlaproverka2[0]) {
      echo $fantast.', ';
        }
      }
    }
  }
}
?>
