<?php
	session_start();
	$first_name = $_SESSION['first'];
    $last_name = $_SESSION['last'];
?>

<HTML>
<head>
<title>User DashBoard</title>
 
<style type="text/css">
        /* Basics */
        html, body {
            width: 100%;
            height: 100%;
            font-family: "Helvetica Neue", Helvetica, sans-serif;
            color: #444;
            -webkit-font-smoothing: antialiased;
            background: #f0f0f0; 
        }
        #GraphContainer {
            position: fixed;
            width: 595px;
            height: 455px;
            top: 230px;
            left: 503px;
	        margin-top: -140px;
            margin-left: -170px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }

        #BillContainer {
            position: fixed;
            width: 300px;
            height: 200px;
            top: 370px;
            left: 30px;
	        margin-top: -10px;
            margin-left: -10px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
		
        #CalcContainer {
            position: fixed;
            width: 300px;
            height: 200px;
            top: 370px;
            right: 30px;
	        margin-top: -10px;
            margin-right: -10px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
		
        #CalcContainer {
            position: fixed;
            width: 300px;
            height: 200px;
            top: 370px;
            right: 30px;
	        margin-top: -10px;
            margin-right: -10px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
		
        #logOutContainer {
            position: fixed;
            width: 77px;
            height: 23px;
            top: 60px;
            right: 30px;
	        margin-top: -10px;
            margin-right: -10px;
            background: #f0f0f0;
            border-radius: 3px;
            border: 0px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0);
        }
		
        #accSettingsContainer {
            position: fixed;
            width: 154px;
            height: 23px;
            top: 60px;
            right: 120px;
	        margin-top: -10px;
            margin-right: -10px;
            background: #f0f0f0;
            border-radius: 3px;
            border: 0px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0);
        }
		
        #profileNameContainer {
            position: fixed;
            width: 238px;
            height: 20px;
            top: 30px;
            right: 30px;
	        margin-top: -10px;
            margin-right: -10px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
		
        #logoContainer {
            position: fixed;
            width: 70px;
            height: 70px;
            top: 14px;
            left: 30px;
	        margin-top: -10px;
            margin-left: -10px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
		
		h1 {
			position: fixed;
			display: block;
			font-size: 4em;
			left: 1%;
			right: 18%;
			margin-top: .005em;
			margin-bottom: 0.67em;
			text-align: center;
			font-weight: bold;
		}
		
		div.hr_title {
			position: fixed;
			background: #000;
			margin-top: 70px;
			width:99%;
			height:1px;
		}

		div.hr_billing {
			position: fixed;
			background: #000;
			margin-top: .1px;
			margin-left: 5px;
			width:20%;
			height:1px;
		}

</style>
 
<script>
</script>
</head>
 
<body>

    <center><h1>H2O-Flows Dashboard</h1></center>
	<div class="hr_title"></div>
	
	<!--/ Graph Container-->
	<div id="GraphContainer">
	<h4><?php echo $first_name.' '.$last_name; ?></h4>
	</div>

	<!--/ Billing Container Left-->
	<div id="BillContainer">
	<center><h3>Billing</h3></center>
	<div class="hr_billing"></div>
	</div>	
	
	<!--/ Profile Name Container Left-->
	<div id="profileNameContainer">
	<center><?php echo $first_name.' '.$last_name; ?></center>
	</div>	
	
	<!--/ Calculation Container Right-->
	<div id="CalcContainer">
	<center><h3>Calculation</h3></center>
	</div>
	
	<!--/ logout Container Right-->
	<div id="logOutContainer">
		<form action="logout.php">
			<center><button>LOG OUT</button></center>
		</form>
	</div>
	
	<!--/ Account Settings Container Right-->
	<div id="accSettingsContainer">
		<form action="logout.php">
			<center><button>ACCOUNT SETTINGS</button></center>
		</form>
	</div>
	
	<!--/ logo Container Right-->
	<div id="logoContainer">
	logo
	</div>
	
</body>
</html>