<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Management and Investing</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  <div class="navbar navbar-inverse navbar-static-top" >
  <div class="container" >
		<a href= "#" class="navbar-brand"> Tech site </a>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse" >
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse">
		
		<ul class = "nav navbar-nav navbar-right">
			<li class="active"><a  href="#"> Home</a></li>
			<li><a href="#"> Order</a></li>
			<li><a href="#"> Store</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle = "dropdown" > Social Media <b class= "caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href= "#" >Twitter</a></li>
					<li><a href= "#" >Facebook</a></li>
					<li><a href= "#" >Google+</a></li>
					<li><a href= "#" >Instangram</a></li>
				</ul>
			</li>
			<li><a href="#"> About</a></li>
			<li><a href="#contact" data-toggle = "modal" > Contact Us</a></li>
		</ul>
		
		</div>
  </div>
  
  </div>  
  
<div class="container">
	<div class="row">
	          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Omkar Shinde</h3>
            </div>
            <div class="panel-body">
              <div class="row">
		 <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Age:</td>
                        <td>23</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1998</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Mano Apartments, Whitefield, Bangalore</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="analyse.php?user=user1" class="btn btn-primary">Analyse</a>
                  <a href="edituser.php?user=user1" class="btn btn-primary">Edit Details</a>
                </div>
	</div>
	</div>
	</div>
	</div>
</div>

	
	<div class = "navbar navbar-default navbar-fixed-bottom">
	<div class = "container" >
	<p class = "navbar-text pull-left" > Site build by Karthik</p>
	<a href = "#youtube" class = "navbar-btn btn btn-danger btn pull-right"> Subscribe on Youtube(email)</a>
	</div>
	</div>

		<div class="modal fade" id="contact" role = "dialog">
		<div class="modal-dialog">
			<div class="modal-content" >
			<form class = "form-horizontal">
					<div class="modal-header" >
						<h4> Contact Tech Site</h4>
					</div>
					<div class="modal-body">
					
						<div class  = "form-group" >
							<label for = "contact-name" class="col-lg-2 control-label"> Name:</label> 
							<div class="col-lg-10" >
								<input type = "text"  class="form-control"  id = "contact-name" placeholder = "Full Name" >
							</div>
						</div>
						  <div class  = "form-group" >
							<label for = "contact-email" class="col-lg-2 control-label"> Email:</label> 
							<div class="col-lg-10" >
								<input type = "email"  class="form-control"  id = "contact-email" placeholder = "you@example.com" >
							</div>
						</div>
						   <div class  = "form-group" >
							<label for = "contact-message" class="col-lg-2 control-label"> Message:</label> 
							<div class="col-lg-10" >
								<textarea class="form-control" rows = "6" id="contact-message" placeholder = "your query here." ></textarea>
							</div>
						</div>
						  
					</div>
					<div class="modal-footer" >
							<a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
							<button class="btn  btn-primary" type = "submit" >Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>