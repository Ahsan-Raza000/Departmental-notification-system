


<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
         #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #800080;
  color: white;
}
  body 
  {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 
  {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container 
  {
    padding: 80px 120px;
  }
  .person 
  {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover 
  {
    border-color: #f1f1f1;
  }
  .carousel-inner img
  { 
    width: 60%; 
    margin: auto;
  }
  .carousel-caption h3 
  {
    color: #fff !important;
  }
  @media (max-width: 600px) 
  {
    .carousel-caption {
      display: none; 
    }
  }
  .bg-1 
  {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child 
  {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child 
  {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail 
  {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p 
  {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    padding: 10px;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 13px !important;
    letter-spacing: 4px;
    opacity: 1;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: rgb(51, 2, 167) !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Department Notices System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Student_Home.html">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTIFICATION
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view_project/view_project.html">View Project Dates</a></li>
            <li><a href="query/query.html">Submit Queries</a></li>
            <li><a href="tt_view/view_tt.php">View TimeTable</a></li>
            <li><a href="query/response.html">View Query Response</a></li>
           </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>


<table id="customers">
   <thead>
   <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Project Name</th>
            <th>Review Date</th>
            <th>Description</th>
        </tr>
   </thead> 
    <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahah";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pro_id = $_POST["pro_id"];
$sql = "SELECT * FROM project WHERE pro_id = $pro_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "<table id='customers'>";     
        echo "<tr>";
        echo "<td>".$row["pro_id"]. "</td>";
        echo "<td>".$row["pro_std_name"]. "</td>";
        echo "<td>".$row["pro_name"]. "</td>";
        echo "<td>".$row["pro_review_date"]."</td>";
        echo "<td>".$row["project_description"]."</td>";
        echo "</tr>";
        echo "</table>";
    }
} else {
    echo "No project found with the given ID";
}
$conn->close();
?>
</thead> 
    <tbody>




<div id="band" class="container text-center">
  
  <br><br><br><br><h3>Computer Science Department</h3>
  <p><em>CODE TILL YOU EXPIRE!</em></p>
  <br><br>
  <center>
  <p>This site maintains important notices of the department every semester. This includes time table, sessional and final paper dates, project review dates, holiday announcements, and meeting announcements for faculty.</p>
  <br>
  </center>
    </div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
 
</footer>

<script>
$(document).ready(function()
{
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
       
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>


