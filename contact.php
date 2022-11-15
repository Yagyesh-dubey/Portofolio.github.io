<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $Name=$_POST['Name'];
    $Mail=$_POST['Mail'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];

    $dbc = mysqli_connect('localhost','root','','portofolio')
            or die('Not connected to database.');

    $query="INSERT INTO contactme (`Name`, `Mail`,`Subject`, `Message`) 
            VALUES ('$Name', '$Mail','$Subject', '$Message')";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');
   }
?>
<script>
        if(confirm("Thanks for submitting"))
        {
                window.history.back();
        }
</script>