/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "registration"; 

/* nama user yang terdaftar pada database (default: root) */
$Id = "root";

/* password yang terdaftar pada database (default : "") */ 
$password = ""; 

/* membuat koneksi */
$conn = mysqli_connect($servername, $Id, $password, $database);

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "<h1>Yes! Koneksi Berhasil..</h1>";
}


if (isset($_GET['Message'])) {
    print '<script type="text/javascript">
               alert("' . $_GET['Message'] . '");
           </script>';
}

if (isset($_GET['response'])) {
    print '<script type="text/javascript">
               alert("' . $_GET['response'] . '");
           </script>';
}

if(isset($_POST['submit']))
{
  if($_POST['submit']=="login")
  { 
        $Id=$_POST['login_Id'];
        $password=$_POST['login_password'];
        $query = "SELECT * from users where Id ='$Id' AND Password='$password'";
        $result = mysqli_query($con,$query)or die(mysql_error());
        if(mysqli_num_rows($result) > 0)
        {
             $row = mysqli_fetch_assoc($result);
             $_SESSION['user']=$row['Id'];
             print'
                <script type="text/javascript">alert("successfully logged in!!!");</script>
                  ';
        }
        else
        {    print'
              <script type="text/javascript">alert("Incorrect Id Or Password!!");</script>
                  ';
        }
  }
  else if($_POST['submit']=="register")
  {
        $Id=$_POST['register_Id'];
        $password=$_POST['register_password'];
        $query="select * from users where Id = '$Id'";
        $result=mysqli_query($con,$query) or die(mysql_error);
        if(mysqli_num_rows($result)>0)
        {   
               print'
               <script type="text/javascript">alert("Id is taken");</script>
                    ';

        }
        else
        {
          $query ="INSERT INTO tabel_login VALUES ('$Id','$password')";
          $result=mysqli_query($con,$query);
          print'
                <script type="text/javascript">
                 alert("Successfully Registered!!!");
                </script>
               ';
        }
  }
}