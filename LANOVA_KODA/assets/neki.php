	<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>LIGHTBOX EXAMPLE</title>
    <style>
    .black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        border: 16px solid orange;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }
</style>
<body>
	
			<p>This is the main content. To display a lightbox click <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">here</a></p>
			    <div id="light" class="white_content">This is the lightbox content. 
			    
			    
			       <div class="modal fade" id="signupForm">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        		
        			<h4 class="modal-title">Sign Up</h4>
        			</div>
        			<div class="modal-body">
        				<form class="form-horizontal">
        					<div class="form-group">
        						<label class="col-md-4 col-md-offset-1">First name:</label>
        						<div class="col-md-5">
        							<input type="text" class="form-control input-sm">
        						</div>
        					</div>
        					
        					        					<div class="form-group">
        						<label class="col-md-4 col-md-offset-1">Last name:</label>
        						<div class="col-md-5">
        							<input type="text" class="form-control input-sm">
        						</div>
        					</div>
        					
        					        					<div class="form-group">
        						<label class="col-md-4 col-md-offset-1">Password:</label>
        						<div class="col-md-5">
        							<input type="email" class="form-control input-sm">
        						</div>
        					</div>
        					        					<div class="form-group">
        						<label class="col-md-4 col-md-offset-1">Email:</label>
        						<div class="col-md-5">
        							<input type="password" class="form-control input-sm">
        						</div>
        					</div>
        					
        					        					<div class="form-group">
        						<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
        						<div class="col-md-5">
        							<input type="password" class="form-control input-sm">
        						</div>
        					</div>
        					        					<div class="form-group">
        						<div class="col-md-2 col-md-offset-8">
        							<input type="submit" class="btn btn-success" value="submit">
        						</div>
        					</div>
        				</form>
        			</div>
        			<div class="modal-footer"></div>
        		</div>
        	</div>
        </div>
    </div>
			    
			    
			    
			    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
			
     
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main2.js"></script> <!-- Gem jQuery -->



</body>
</html>