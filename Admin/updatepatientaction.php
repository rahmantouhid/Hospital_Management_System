      <?php

$db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'hospitalmanagement' ) or die(mysqli_error($db));
if($_SERVER["REQUEST_METHOD"] == "POST") {
     // if(isset($_POST['submit'])){
        $puserid=$_POST['puserid'];
        $username=$_POST['username'];
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $DOB = $_POST['DOB'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
    
      $query = "UPDATE patient SET FirstName = '$FirstName',
                      LastName = '$LastName', DOB = '$DOB', Email = '$Email' , password = '$password',username = '$username'
                      WHERE puserid = '$puserid'";
            
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    echo "Update Successful!";

             }
else 
{echo "Failed to update data!";} 

?>