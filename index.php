<?php
    #echo "hello world <br>";
    #echo "Ai galera"

$a = 1;
$b = 2;
$fl = 10.55131;
$cars = array(10,12,13,14);

function Soma()
{
    global $a, $b;

    $GLOBALS['c'] = $a + $b;
}
function Teste(){
    static $count= 0;

    $count++;
    echo $count;

    if($count < 10){
        Teste();
    }
    $count--;
}


Soma();
echo "$c<br>";
print $fl;
print "<br>";
#var_dump($fl);
print $cars[3];
#Teste();

for($i = 0; $i <= 3; $i++){
    print "<br>";
    print $cars[$i];
    print "<br>";
}

?>