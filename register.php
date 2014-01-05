<?php
//this file will only output the messages because we are using ajax
include('errorchecker.func.php');
?>   
<div class="body">  <!--body class -->
<?php
    if(isset($_POST['submit'])) {
        $fname = trim($_POST['firstname']); 
         $lname = trim($_POST['lastname']); 
         $address = trim($_POST['address']); 
         $city = trim($_POST['city']);
         $state = trim($_POST['state']); 
         $zip = trim($_POST['zip']); 

         if(checkIfEmpty($fname)) {
            echo 'Empty Firstname <br>';
         } elseif(checkIfEmpty($lname)) {
            echo 'Empty Lastname';
         }
         elseif(checkIfEmpty($address)) {
            echo 'Empty Address';
         }
         elseif(checkIfEmpty($city)) {
            echo 'Empty City';
         }
          elseif(checkIfEmpty($state)) {
            echo 'Empty State';
         }
          elseif(checkIfEmpty($zip)) {
            echo 'Empty Zip';
         }
} //end if posted

?>
</div>  
