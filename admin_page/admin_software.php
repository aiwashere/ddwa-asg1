

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   My Software
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="simple-text logo-mini">
          A
        </a>
        <a  class="simple-text logo-normal">
         Admin
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li >
            <a href="./admin_student.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Student List</p>
            </a>
          </li>
        
          <li class ="active">
            <a href="./admin_software.php">
              <i class="now-ui-icons design_vector"></i>
              <p> Softwares</p>
            </a>
          </li>
          <li>
            <a href="./admin_notebook.php">
              <i class="now-ui-icons tech_laptop"></i>
              <p>Notebook</p>
            </a>
          </li>
          <li>
            <a href="./admin_lecturer.php">
              <i class="now-ui-icons tech_laptop"></i>
              <p>Lecturer List</p>
            </a>
          </li>
          
           
          <li class="nav-item">
            <a class="nav-link" href="/10195010B/ddwa-asg1/index.php" style="text-align: center;" >Logout</a>
        
          </li>
         
        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           
            <a class="navbar-brand" >Softwares</a>
          </div>
         
         
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Software</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" style='font-size:80%'>
                  <thead class=" text-primary">
                 
                      <th>
                      SoftwareID
                      </th>
                     
                      <th>
                      Publisher
                      </th> <th><th>
                      <th>
                      Version
                      </th>
                      <th><th><th>
                      PricePerCopy
                      </th>
                      
                      <th>
                      DatePurchased
                      </th>
                   
                      <th>
                      NoOfCopies
                      </th>
                     
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                     $servername="localhost";
                     $username="amphibis_aira";
                     $password="p_S52*!*M1WA";
                    $dbname="amphibis_aira";
                     $conn = mysqli_connect($servername, $username, $password, $dbname);

                     if(mysqli_connect_errno()){
                       die("Database connection failed:" .
                       mysqli_connect_errno() .
                       "(" . mysqli_connect_errno().")"
                     );
                    }
                    else{
                      echo("connected!");
                    }
                     

                    
                    $sql ="SELECT * FROM `software` WHERE `SoftwareID` ";
                    $SoftwareID = "SoftwareID";
                    $Publisher = "Publisher";
                    $Version ="Version";
                    $PricePerCopy ="PricePerCopy";
                    $DatePurchased = "DatePurchased";
                    $NoOfCopies ="NoOfCopies";
 
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($result->num_rows > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<td>".$row[$SoftwareID]."</td>";
                        echo "<td>".$row[$Publisher]."</td>";
                        echo "<td>".$row[$Version]."</td>";
                        echo "<td>".$row[$PricePerCopy]."</td>";
                        echo "<td>".$row[$DatePurchased]."</td>";
                        echo "<td>".$row[$NoOfCopies]."<td></td>";
                       
                        

                      }
                    } else{
                      echo "No results";
                    }
                    ?>
                    </tr>
                     </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a
              href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>