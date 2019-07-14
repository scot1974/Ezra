<?php 
session_start();
$con=mysqli_connect("localhost","root","","frscdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
	else
		header("Location:error.php");
}

if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$query="UPDATE offendertb SET payment='$status' WHERE contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:updated.php");
}



function get_offender_details(){
    global $con;
    $query="SELECT * FROM offendertb";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $contact=$row['contact'];
        $platenumber=$row['platenumber'];
        $offence=$row['offence'];
        $address=$row['address'];
        $sex=$row['sex'];
        $age=$row['age'];
        $payment=$row['payment'];
        
        echo "<tr>
                <td>$fname</td>
                <td>$lname</td>
                <td>$contact</td>
                <td>$platenumber</td>
                <td>$offence</td>
                <td>$address</td>
                <td>$sex</td>
                <td>$age</td>
                <td>$payment</td>
            </tr>";

    }
}



function display_admin_panel(){
    echo '
    
    <!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>FRSC Offenders Tracking System</title>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>FRSC Offenders Tracking System </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-lable="Search" name="contact">
                    <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
                </form>
            </div>
        </nav>
    </head>
    <style type="text/css">
        button:hover{cursor: pointer;}
        #inputbtn:hover{cursor: pointer;}
    </style>
    <body style="padding-top:50px;">
    <div class="jumbotron" id="ab1"></div>
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-4">
  <div class="card" style="width: 26rem;">
  <ul class="list-group list-group-flush">
    <a href="sheet.php"><li class="list-group-item">Add New Offender</li></a>
    <a href="updateform.php"><li class="list-group-item">Update Payment Status</li></a>
    <a href="viewsheet.php"><li class="list-group-item">Offence Sheet</li></a>
    <a href="genbill.php"><li class="list-group-item">Generate Bill</li></a>
     
  </ul>
</div>
    <br>
  </div>
<div class="col-md-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
  
  <br>
      </div>
      
      
       
      
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
    </body>
</html>';
}

 ?>
