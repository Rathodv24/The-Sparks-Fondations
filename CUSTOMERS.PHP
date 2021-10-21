<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="mystyle.css" rel="stylesheet" type="text/css" />
	<link href="styles/mystyle.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<title>VISHAL BANK</title>
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
  background-color: #04AA6D;
  color: white;
}

a{
   color:black;
   font-size: x-large;
   font-weight: bold;
 }
#c1{
    float: right;
   }
</style>
</head>
<body>
<section id="navbar">
	    <section id="header">
        <div class="container">
        <h1>
            Vishal Bank..!
        </h1>    
        </div>
        </section>
<nav class="navbar navbar-light">
    <div class="container-fluid">
      <div class="navbar-header">
       
      </div>
      <ul class="nav navbar-nav"id="c1" >
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="CUSTOMERS.PHP">View Customer</a></li>
        <li><a href="view customers.html">Transaction History</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </div>
</nav>

</section>
	<br>
	<br>
	<br>
    <section>
        <div class="container"id="pop">
        <div class="container">
            
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"id="m1">
              Send Money
            </button>
           <a href="view customers.html"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"id="m2">
                View Transaction History
              </button></a>
              
            <br>
			<br>
			<br>
			<br>
			<br>
			<table id="customers">

<tr>
<th>ID</th>
<th>NAME</th>
<th>NUMBER</th>
<th>EMAIL</th>
</tr>

<?php
include ("connection.php");
error_reporting(0);
$query ="SELECT * FROM customers";
$data =mysqli_query($conn,$query);
$total =mysqli_num_rows($data);
$result =mysqli_fetch_assoc($data);

if($total!=0)
{
	$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['ID']."</td>
		<td>".$result['NAME']."</td>
		<td>".$result['NUMBER']."</td>
		<td>".$result['EMAIL']."</td>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
            <br>
            
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Send Money</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="container">
                        <form action="">
                          <div class="form-group">
                            <label for="email">Senders Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Senders email" name="email">
                          </div>
                          <div class="form-group">
                            <label for="email">Recipents  Email:</label>
                            <input type="email" class="form-control" id="email1" placeholder="Enter Recipents email" name="email1">
                          </div>
                          <div class="form-group">
                            <label for="text">Recipents  Amount</label>
                            <input type="number" class="form-control" id="number" placeholder="Enter Amount" name="Amount">
                          </div>
                          
                          
                        </form>
                      </div>
                      
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <a href="CUSTOMERS.PHP"><button type="submit" class="btn btn-primary">Submit</button></a>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
          </div>
          
    </section>
     

<footer id="Custfoot">

    <div class="container">
        <h1>Find Us On Social Media</h1>
        <a href="https://www.facebook.com/vishal.rathod.374549/"><i class="social-icon fa fa-facebook-square"aria-hidden></i></a>
            <a href="https://www.instagram.com/vishal_rathod24/"><i class="social-icon fa fa-instagram" aria-hidden="true"></i></a>
            <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
            <a href="https://www.linkedin.com/in/vishal-rathod-5b3bbb205/"><i class="social-icon fa fa-linkedin" aria-hidden="true"></i></a>
        <br>
            <p>© Copyright 2021 VISHAL BANK.</p>

    </div>
</footer>
</body>
</html>