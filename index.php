<html>
<head>
<title>Reg_page</title>
</head>
<body>
<center>
    <br><br>
        <table border="0px" style="width:1280px;height:630px;background:white;border:none;border-radius:4px">
            <tr>
                <td style="background:white;width:400px;">
                    <form name="myform" method="post" action="acreate.php" onsubmit="return validatePassword();">
					<table border="0px">                        
                            <tr><td><h1 style="font-family:Helvetica;">Sign Up<br><br></h1></td></tr>
							

							<!--Full name-->
                            <tr><td><b><label style="font-family:Helvetica;color:9B9B9B; font-size:12pt">Full Name  </label><span class="asterisk">*</span></b></td></tr><!--<font style="padding:8px;border-radius:6px;font-family:Helvetica;font-size:14pt;"><i class="fas fa-user-tag"></i></font>-->
	 						<tr><td><input type="text" name="e1" autocomplete="off" required="" style="padding:8px;;color:black;font-family:Helvetica;width:300px;border-width:0px;" placeholder="Name..." /><hr /></td></tr>
								
                                      
                            <!--Email-->
                            <tr><td><b><label style="font-family:Helvetica; margin-left:0px;color:9B9B9B;font-size:12pt">Email  </label><span class="asterisk">*</span></b></td></tr>
							<tr><td><input type="email" name="e2"  autocomplete="off" required="" style="padding:8px;border-radius:6px;font-family:Helvetica;width:300px;color:black;border-width:0px;" placeholder="Email address..." /><hr /></td></tr>


							<!--Mobile-->
							<tr><td><b><label style="font-family:Helvetica; margin-left:0px;color:9B9B9B;font-size:12pt">Mobile  </label><span class="asterisk">*</span></b></td></tr>
							<tr><td><input type="tel" name="e3" id="mobno" value="" required="" maxlength="10" style="padding:8px;border-radius:6px;font-family:Helvetica;color:black;width:300px;border-width:0px;" placeholder="Mobile no..." /><hr/></td></tr>


							<!--Password-->
							<tr><td><b><label style="font-family:Helvetica; margin-left:0px;color:9B9B9B;font-size:12pt">Password  </label><span class="asterisk">*</span></b></td></tr>
							<tr><td><input type="password" name="e4" required=""  id="pass" style="padding:8px;border-radius:6px;font-family:Helvetica;width:300px;color:black;border-width:0px;" placeholder="Password..." /><hr /></td></tr>	
						   
						   
						   
                               
							<tr><td></td></tr> 
							<tr><td></td></tr> 

                           <tr><td> <input type="submit" name="submit" value="Sign Up" style="width:150px;height:40px;font-size:13pt;border-radius:100px;background-color:F7B84A;color:white;border:none">
                             </td></tr>  
							
                            
    
                        </table>
                        </form>
						 
                       
                      
						
        </table>
        
       
        
    </center>
                            </div>
    
    
</body>
</html>
