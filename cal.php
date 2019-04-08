<?php 

  include "src/functions.php";
if(isset($_POST['submit_data'])){

    $firstnumber = $_POST['firstnumber'];
    $secondnumber = $_POST['secondnumber'];
    
    $culcutat = new functionData($firstnumber,$secondnumber);
    
     $add = $culcutat->add();
     $minus = $culcutat->minus();
     $multiply = $culcutat->multiply();
     $divide = $culcutat->divide();
     

}

?>