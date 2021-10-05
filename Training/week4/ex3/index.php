<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
$number = "9";
if($number>9){
    echo "toi da =9";
}else{
    for ($j = 1; $j <$number; $j++) {
        echo "<p class='text-center'>";
//    vong lap tu ben trai sang
        for ($z = 1; $z<$j; $z++) {
//            cap so nhan:P
            $result=pow(2,$z-1);
            echo "<span class='m-3'>$result</span>";
        }
//      vong lap tu ben phai sang
        for ($i = $j; $i >0; $i--) {
//            cap so nhan luon
            $result=pow(2,$i-1);
            echo "<span class='m-3'>$result</span>";
        }
        echo "</p>";
        echo "<br>";
    }
}
?>