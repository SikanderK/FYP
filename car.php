<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Car Rental</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid banner">
    
        <div class="content">
            <img src="assets/images/logo.png">
            <h1 class="logo-text">WestSide Motors</h1>
           
        
        </div>
    
    
    </div>

    <div class="container">
            <ul class="nav ">
                <li role="presentation" ><a  href="index.php">Home</a></li>
                <li role="presentation"><a class="active"  href="car.php">Car</a></li>
                <li role="presentation"><a  href="about.php">About</a></li>
                <li role="presentation"><a href="contact.php">Contact</a></li>
               
            </ul>

            <div class="article">
             
             <p>These are our cars at the moment so have a look through and make your pick. </p>
<div class="row main">
    <div class="col col-md-4">
    
       <form id="search-form">
                    <div class="form-group">
                        <select class="form-control" placeholder="make">
                              <option>Make</option>
  <option>Royal Royce</option>
  <option>Range Over</option>
  <option>Lombargani</option>

</select>
                    </div>
                        <div class="form-group">
                        <select class="form-control" placeholder="make">
                              <option>Model</option>
  <option>Royal Royce</option>
  <option>Range Over</option>
  <option>Lombargani</option>

</select>
                    </div>

                        <div class="form-group">
                        <select class="form-control" placeholder="make">
                              <option>Year</option>
  <option>Royal Royce</option>
  <option>Range Over</option>
  <option>Lombargani</option>

</select>
                    </div>

                        <div class="form-group">
                        <select class="form-control" placeholder="make">
                              <option>Price Per day</option>
  <option>Royal Royce</option>
  <option>Range Over</option>
  <option>Lombargani</option>

</select>
                    </div>

                    <button type="submit" class="btn btn-default send">Submit</button>
       </form>             
    </div>    
    <div class="col col-md-8 car-listing">
        <div class="col col-md-6 item">
        <div class="car">
            <span class="title">Rolls Royce Ghost</span>
            <div class="thumb">
                <img src="assets/images/car1.png">
            </div>
             <div class="price">£175 per day</div>
            
             <button class="btn btn-default " data-toggle="modal" data-target="#myModal">Click for more details</button>
        </div>
    </div>
    <div class="col col-md-6 item">
        <div class="car">
        <span class="title">Lamborghini Aventador</span>
        <div class="thumb">
            <img src="assets/images/car2.png">
        </div>
         <div class="price">£175 per day</div>
          <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
         </div>
    </div>


    <div class="col col-md-6 item">
        <div class="car">
            <span class="title">Rolls Royce Ghost</span>
            <div class="thumb">
                <img src="assets/images/car1.png">
            </div>
             <div class="price">£175 per day</div>
            <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
        </div>
    </div>
    <div class="col col-md-6 item">
        <div class="car">
        <span class="title">Lamborghini Aventador</span>
        <div class="thumb">
            <img src="assets/images/car2.png">
        </div>
         <div class="price">£175 per day</div>
         <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
         </div>
    </div>



    <div class="col col-md-6 item">
        <div class="car">
            <span class="title">Rolls Royce Ghost</span>
            <div class="thumb">
                <img src="assets/images/car1.png">
            </div>
             <div class="price">£175 per day</div>
             <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
        </div>
    </div>
    <div class="col col-md-6 item">
        <div class="car">
        <span class="title">Lamborghini Aventador</span>
        <div class="thumb">
            <img src="assets/images/car2.png">
        </div>
         <div class="price">£175 per day</div>
          <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
         </div>
    </div>



    <div class="col col-md-6 item">
        <div class="car">
            <span class="title">Rolls Royce Ghost</span>
            <div class="thumb">
                <img src="assets/images/car1.png">
            </div>
             <div class="price">£175 per day</div>
             <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
        </div>
    </div>
    <div class="col col-md-6 item">
        <div class="car">
        <span class="title">Lamborghini Aventador</span>
        <div class="thumb">
            <img src="assets/images/car2.png">
        </div>
         <div class="price">£175 per day</div>
         <button class="btn btn-default data-toggle="modal" data-target="#myModal"">Click for more details</button>
         </div>
    </div>



    </div>

</div>
            





  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
      
    </div>
  </div>
  


  
               

            </div>
  
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>