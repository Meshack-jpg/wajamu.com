
<center><?php

$username = 'root';
$password = '';
$db = 'wajdb';

$conn = mysqli_connect('127.0.0.1', $username, $password, $db) or die("Unable to connect");

if (!$conn){
    die("Connection failed!!!". mysqli_connect_error());
}

// echo "Connected successfully to Wajamu Database";

$fname = $_REQUEST['txtfname'];
$lname = $_REQUEST['txtlname'];
$contact = $_REQUEST['txtcontact'];
$password = $_REQUEST['txtpassword'];
$password2 = $_REQUEST['txtpassword2'];
$date = $_REQUEST['txtdate'];
$gender = $_REQUEST['txtgender'];
$resident = $_REQUEST['txtresident'];
$comment = $_REQUEST['txtcomment'];

if($password == $password2){
 

          //check if user exist............................................................
        $query = "SELECT * FROM wajamu_members WHERE Contact = '$contact'";
        $result = $conn->query($query);

          if($result){
           if(mysqli_num_rows($result) > 0){
           
            echo nl2br("<font size='20' face='Aerial' color='blue' > Already registered!!!\n \n");
            $names = "SELECT ID, First_Name, Last_Name FROM wajamu_members WHERE Contact = '$contact'";
        $result1 = $conn->query($names);
        if($result1 -> num_rows > 0){
          while($row = $result1-> fetch_assoc()){
            echo nl2br("Name;  ".$row['First_Name']." ".$row["Last_Name"]."\n Contact; ". $contact);
          }
        }else{
          echo "";
        }
         
        
            mysqli_close($conn);
            exit();
            
           }else{
         echo "  ";
            }
          }else{
            echo "Error: ";
          }
          // ................................................................................

          $sql = "INSERT INTO wajamu_members VALUES (NULL, '$fname', '$lname', '$contact', '$password', '$date', '$gender', '$resident', '$comment')";

        if(mysqli_query($conn, $sql)){
             echo nl2br ("<font size='20' face='Aerial' color='blue' >\n Hello ".$fname.' '.$lname."\n WELCOME  TO  WAJAMU.");

             echo reset($contact);
        }else{
             echo "Not saved";
            }
        
          }else{
               echo "<font size='20' face='Aerial' color='blue' > Password must mutch!!!";
          }   
?></center>

