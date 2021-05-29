<?php 
//    3.Tarmoqning to'qqizta 3 x 3 pastki katakchasining har birida 
$massiv = array(
    ["5","3",".",".","7",".",".",".","."],
    ["6",".",".","1","9","5",".",".","."],
    [".","9","8",".",".",".",".","6","."],
    ["8",".",".",".","6",".",".",".","3"],
    ["4",".",".","8",".","3",".",".","1"],
    [".",".",".",".","2",".",".",".","6"],
    ["7","6",".",".",".",".","2","8","."],
    [".",".",".","4","1","9",".",".","5"],
    ["2",".",".",".","8",".",".","7","9"],
);

$isCorrect = true;

function TekshirColumn($massiv, &$isCorrect){
    $n = count($massiv);
    for($row=0; $row<$n; $row++){
        for ($i=0; $i <$n ; $i++) {
    
            for($j=$i+1; $j<$n; $j++){
                $current1 = $massiv[$i][$row];
                $current2 = $massiv[$j][$row];
                if($current1 == $current2 && $current2!="." &&  $current1!="." )$isCorrect=false;
            }
        
            if(!$isCorrect)break; 
        
        }   
        if(!$isCorrect)break;  
    }
}
function TekshirRow($massiv, &$isCorrect){
    $n = count($massiv);
    for($row=0; $row<$n; $row++){
        for ($i=0; $i <$n ; $i++) {
    
            for($j=$i+1; $j<$n; $j++){
                if($massiv[$row][$i] == $massiv[$row][$j] && $massiv[$row][$j]!="." &&  $massiv[$row][$i]!="." )$isCorrect=false;
            }
        
            if(!$isCorrect)break; 
        
        }
        if(!$isCorrect)break; 
    }
}

for($j=0; $j<3; $j++){
    
    for($k=0; $k<3; $k++){
        $a = [];
        for($i=0; $i<9;$i++ ){
            $temp = $massiv[$j*3+(int)$i/3][$k*3+$i%3];
            array_push($a, $temp);
        }
        Tekshir3_3($a, $isCorrect);
    }
}
function Tekshir3_3($massiv, &$isCorrect){
    $n =count($massiv);
    for ($i=0; $i <$n ; $i++) {
    
        for($j=$i+1; $j<$n; $j++){
            if($massiv[$i] == $massiv[$j] && $massiv[$j]!="." &&  $massiv[$i]!="." )$isCorrect=false;
        }
    
        if(!$isCorrect)break; 
    }
}


if($isCorrect)echo "to'g'ri"; else echo "noto'g'ri";
?>