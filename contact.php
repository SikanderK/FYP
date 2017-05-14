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
                <li role="presentation"><a href="car.php">Car</a></li>
                <li role="presentation"><a  href="about.php">About</a></li>
                <li role="presentation"><a class="active" href="contact.php">Contact</a></li>
            </ul>

            <div class="article">
             
             <p>For any enquiries please dont hesitate to contact us directly.</p>

              <form id="contact-form">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>

                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="phone" placeholder="Email">
                    </div>

                    <div class="form-group">
                        
                       <textarea class="form-control" name="messsage" rows="6" placeholder="Message"></textarea>
                    </div>


                    
                    
                    <button type="submit" class="btn btn-default send">Submit</button>
                </form>  

               

            </div>
  
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>