<?php
    $conn_ptth = new mysqli("localhost","root","","k22cnt4_phamthithuhuyen_project1");
    if($conn_ptth->error ){
        echo "Lỗi kết nối". $conn_ptth->error;
    }else{
        echo "<h1> Phạm Thị Thu Huyền -2210900030 </h1>";

    }
    ?>