<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
$number = "10";
if($number>=11){
    echo "phai nho hon 11";
}else{
    for ($j = 1; $j <= $number; $j++) {
        echo "<p class='text-center'>";
//    vong lap tu ben trai sang
        for ($z = $j; 1 < $z; $z--) {
            echo "<span class='m-3'>$z</span>";
        }
//      vong lap tu ben phai sang
        for ($i = 1; $i <= $j; $i++) {
            echo "<span class='m-3'>$i</span>";
        }
        echo "</p>";
        echo "<br>";
    }
}
?>