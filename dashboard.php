<?php
 
  session_start();
  if(!isset($_SESSION['userdata'])){

  	header("location: ../");
  }
  ?>



<html>
    <head>
        <title>ONLINE VOTING SYSTUM - Dashboard</title>
    </head>
    <BODY>
    	<button>Back</button>
    	<button>Log Out</button>
        <h1>ONLINE VOTING SYSTUM</h1>
        <hr>
        <div id="Profile"></div>
        <div id="Group"></div>
</body>
</html>