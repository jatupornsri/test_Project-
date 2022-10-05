<form action='<?=$_SERVER['PHP_SELF']; ?>' method='POST'> 
    กรุณากรอกค่าฐาน <input type='text' name='base'><br/> 
    กรุณากรอกค่าความสูง<input type='text' name='height'><br/> 
    <input type='submit' value='คำนวณ' >
 </form> 

  <?php 
    isset($_POST['base']) ? $base = $_POST['base']: $base = 0; 
    isset($_POST['height'])? $height = $_POST['height']: $height = 0; 

     if( $base > 0 && $height > 0) { 
        $area = 1.0 / 2.0 *( $base * $height );  
        echo "พื้นที่สามเหลี่ยมเท่ากับ".number_format( $area, 2); 
    }
?>