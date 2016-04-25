<div id="login-form">
<form method ="POST" action="">
<table align="center" width="30%" border="0">
<tr><td><input type="text" id="username" name="username" placeholder="Username" class="input" autocomplete="off" id="username" /></td></tr>
<tr><td><input type="password" id="password" name="password" placeholder="Password" class="input" autocomplete="off" id="password" /><br/></td></tr>
<tr><td><input type="submit"  value="Log In" id="login"/> <br></td></tr>
<tr><td><a href = "javascript:void(0)" onclick = "document.getElementById('dark').style.display='none';document.getElementById('fade').style.display='none'">Close</a></td></tr>
<br>
</table>
                                         <?php
                if(isset($_GET['error']))
                {
                    echo $_GET['error'];
                }
               ?>  
<div id="error">

</div>
</form>
</div>