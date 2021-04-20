<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="C:\wamp64\www\BasicBankingSystem-main\images\11.gif"> 
   
	 <link rel="stylesheet" href="button.css"> 
	<style>
	*{transition:all 0.3s ease-in-out;}

      .container{
        clear:both;
        overflow:auto;
      }
      nav a
	  {
		display: block;
	    outline: none;
	    margin: 0 em;
	    padding: 0.5em 0 0.25em ;
	    border-bottom: 0.125em solid transparent;
	    color: white;
	    text-decoration: none;
	    text-transform: uppercase;
	    text-shadow: 0 0 2px black;
	  }
	  nav a:hover
        {
	      border-color: currentColor;
        }
		nav 
		 {
           box-shadow: 0 2px 4px 0 rgba(0,0,0,.9);
         }
		  
	  nav{float:left;}

      .logo img{float:left;}

      ul li{
        display: inline-block; padding:10px;
        font-size:20px; font-family:raleway;
      }

      ul li:hover{
              color:orange;
  
      }
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
	body{
		background-image:url("11.gif");
		background-position: center;
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	</style>
</head>
<body >
    <div class="container">
    <div class="logo">
      <img src="logo.gif" alt="" width="130"/>
    </div>
    <nav>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="getdetail.php">User</a></li>
    <li><a href="transaction.php">Transaction History</a></li>
    </ul>
    </nav>
    </div>
	<div id="header">
       <br>
       <h1 style=" font-family:Agency FB;  color:Black;font-size: 40px;text-shadow: 2px 2px black;"> Welcome to Sparks Bank </h1>
       <h1 style=" font-family:Agency FB;  color:white;text-shadow: 2px 2px black;"> SAFE AND SECURE BANKING SYSTEM </h1>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
			   <button class="glow-on-hover" id="button "type="button" href="getdetail.php">View users</button>
			   
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="glow-on-hover" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="glow-on-hover" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>
