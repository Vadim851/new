<html>
<body>
<?php
$bas = [];
for ($i=0; $i<30; $i++) {
    $bas[$rnlt.$i] = rand (20, 40);
}
echo "<br>";
print_r($bas);
?> 

</body>
</html>

//======================//1b:

<html>
<body>

<?php
$arr = [];
for ($i=0; $i<30; $i++) {
	$arr[] = rand (20,40);
    }
    foreach ($arr as $a)
        print_r ($a.' ');
?> 

</body>
</html>

//======================================================================================//

//========2-2b:

<!DOCTYPE html>
<html>
<body>

<?php
$arr = [];
for ($i=0; $i<10; $i++) {
	$arr[] = rand (0,10);
    }
    foreach ($arr as $a)
        print_r ($a.' ');
        echo "<br>";
    for ($i=0; $i<10; $i++) {
	    $arrg[] = rand (10,20);
        }
        foreach ($arrg as$b)
        print_r ($b.' ');
        
?> 

</body>
</html>
//...............2c dntnw

<!DOCTYPE html>
<html>
<body>

<?php

$tda = array();

for ($c = 0; $c < 10; $c++): {
    for ($r = 0; $r < 10; $r++): {
        $tda[$c][$r] = rand(0, 9);
        }
    }
print_r($tda);
?>

</body>
</html>
//==========================gera neveikianti ideja...siandien pasiduodu.