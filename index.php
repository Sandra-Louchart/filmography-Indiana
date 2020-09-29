<?php
$filmographyIndiana = [
  "The_Last_Crusade" => 1989,
  "Indiana_Jones_And_The_Temple_Of_Doom" => 1984,
  "The_Kingdom_Of_The_Crystal_Skull" => 2008
];
ksort($filmographyIndiana);
foreach ($filmographyIndiana as $key =>$filmographyIndiana){
    echo $key;
    echo "   ";
    echo $filmographyIndiana ."<br>";
    echo "   ";
}
?>
