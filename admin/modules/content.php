<div class="clear"></div>
<div class="main">
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

</div>