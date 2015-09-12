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
<form class="form-horizontal" role="form" method="get" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Age</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age" name="age" placeholder="age" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">DOB</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Bank Account No:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="account_num" name="account_num" placeholder="Bank Account Number" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Card Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Salary</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Groceries</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="groceries" name="groceries" placeholder="Groceries" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Entertainment Expense</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="entertainment_expense" name="entertainment_expense" placeholder="Entertainment Expense" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Medical Expense</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="medical_expense" name="medical_expense" placeholder="Medical Expense" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Investments</label>
    </div>
	<div id="investment1">
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Investment1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="investment1" name="investment1" placeholder="Investment1">
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Type1</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="type1" name="type1" placeholder="Type">
        </div>
        <label for="human" class="col-sm-2 control-label">Amount1</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="iamount1" name="iamount1" placeholder="Amount">
        </div>
    </div>
    </div>
	<div id="investment2">
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Investment2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="investment2" name="investment2" placeholder="Investment2">
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Type2</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="type2" name="type2" placeholder="Type">
        </div>
        <label for="human" class="col-sm-2 control-label">Amount1</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="iamount2" name="iamount2" placeholder="Amount">
        </div>
    </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Wishlist</label>
    </div>
	<div id="wishfield1">
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Wish1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="wish1" name="wish1" placeholder="Wish">
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Duration1</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="duration1" name="duration1" placeholder="Duration">
        </div>
        <label for="human" class="col-sm-2 control-label">Amount1</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="amount1" name="amount1" placeholder="Amount">
        </div>
    </div>
    <!--<div class="form-group">
        <label for="human" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
			<button id="b1" class="btn btn-primary btn-block add-more" type="button">+</button><br>
        </div>
    </div> -->
    </div>
	<div id="wishfield2">
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Wish2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="wish2" name="wish2" placeholder="Wish">
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Duration2</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="duration2" name="duration2" placeholder="Duration">
        </div>
        <label for="human" class="col-sm-2 control-label">Amount2</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="amount2" name="amount2" placeholder="Amount">
        </div>
    </div>
    <!-- <div class="form-group">
        <label for="human" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
			<button id="b1" class="btn btn-primary btn-block add-more" type="button">+</button><br>
        </div>
    </div> -->
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
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