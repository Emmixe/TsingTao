<?

$pathologies = array(Meridien,Viscere,Luo,MerveileuxVaisseaux,JingJin);
for($i=0;$i<sizeof($pathologies);$i++){

echo"<input type='checkbox' name='pathologies[]' value='".$pathologies[$i]."'>".$pathologies[$i]."<br>";
}
?>