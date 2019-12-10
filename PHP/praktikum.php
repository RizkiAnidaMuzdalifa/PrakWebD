<?php 

$mahasiswa = [
["focus","mayJlee","BADBOY"],
["BigMom","BabyBoom","SONIC"],
["Kimay","Xilau","Bigcock"]
];

for ($i=0; $i < count($mahasiswa); $i++){
	for ($a=0; $a < count($mahasiswa); $a++){
	echo $mahasiswa[$i] [$a], "         ";
}
echo "<hr>";
}
?>