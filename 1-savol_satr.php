<?php 

// 1. Har bir satrda 1-9 raqamlari takrorlanmasdan bo'lishi kerak.

$n=9;

$massiv = array(
    ["5","3",".",".","7",".",".",".","."],
    ["6",".",".","1","9","5",".",".","."],
    [".","9","8",".",".",".",".","6","."],
    ["8",".",".",".","6",".",".",".","3"],
    ["4",".",".","8",".","3",".",".","1"],
    ["7",".",".",".","2",".",".",".","6"],
    [".","6",".",".",".",".","2","8","."],
    [".",".",".","4","1","9",".",".","5"],
    [".",".",".",".","8",".",".","7","."],
  );
$isCorrect = true;
$row = 0;

for($row=0; $row<$n; $row++){
    for ($i=0; $i <$n ; $i++) {

        for($j=$i+1; $j<$n; $j++){
            $current1 = $massiv[$row][$i];
            $current2 = $massiv[$row][$j];
            if($current1 == $current2 && $current2!="." &&  $current1!="." )$isCorrect=false;
        }
    
        if(!$isCorrect)break; 
    
    }
}


if($isCorrect) echo "to'g'ri"; else echo "Noto'g'ri";

?>