<!-- content -->
        <div class="img">
            <img src="images/1424x400KV-BOX.jpg" width="100%">
        </div>
        
        <?php
           if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
           }else{
            $tam = '';
           }
           
           if($tam=='gioithieu'){
                include ('slide/content/gioithieu.php');
           }elseif($tam=='lienhe') {
                include("slide/content/lienhe.php");
           }
           elseif($tam=='tintuc') {
                include("slide/content/tintuc.php");
           }
           elseif($tam=='sanpham') {
                
               if(isset($_GET['sanpham'])){
                    $sanpham = $_GET['sanpham'];

                     if($sanpham =='taytrang'){
                         include("slide/sanpham/taytrang.php");
                     }elseif($sanpham=='matna'){
                         include("slide/sanpham/matna.php");
                    
                     }elseif($sanpham=='nuochoahong'){
                         include("slide/sanpham/nuochoahong.php");
                     
                     }elseif($sanpham=='suaduong'){
                         include("slide/sanpham/suaduong.php");
                     }

               }else {     
                    include("slide/content/sanpham.php");
               }

           }else{
               include('slide/content/main-content.php');
           }

        ?>
       