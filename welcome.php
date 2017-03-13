<?php
   include('session.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="styleSheet" href="css/default.css">
	<link rel="styleSheet" href="css/style.css">
        <script type="text/javascript" src="js/update.js"></script>
</head>
<body>
	<header class="head">
		<p>Welcome <?php echo $login_session;?><a class="logout" href="logout.php">Logout</a></p>
		
		<h1>Daily Basis Update - 12/06/2016</h1>
		<h3>Production support update from 5th Dec 8:00 AM PST to 6th Dec 8:45 AM PST.</h3>
	</header>
	
	<table class="table-fill">
		
		<tr>
			<th>Severity Level</th>
			<th>Ticket #</th>
			<th>System(s) impacted</th>
			<th>Description</th>
			<th>Open time</th>
			<th>Close time</th>
			<th>Status</th>
			<th >Additional comments</th>
			<th>action</th>
		</tr>
		<tbody id="table1" class="table-hover">
                    <script>disp_data1();</script>
		</tbody>
	</table>
        <?php if ($_SESSION['admin'] == 1){?>
	<form id="hidden1" >
	<label><input type="text" id="severLevel" required/></label>
	<label><input type="text" id="ticketNo" required/></label>
	<label><input type="text" id="sysImpact" required/></label>
	<label><input type="text" id="desc" required/></label>
	<label><input type="text" id="openTime" required/></label>
	<label><input type="text" id="closeTime" /></label>
	<label><input type="text" id="stats" required/></label>
	<label><input type="text" id="comments"/></label>
	<p>Please enter complete details</p>
	<button type="button" onclick="clearFirstTable()">Clear</button><button type="button" class="add" onclick="insert1()">Add</button>
	</form>
        <?php }?>
	
	<table  class="table-fill">
		
		<tr>
			<th style="text-align:center;">Additional Events – Requiring Management visibility</th>
			<th>Action</th>
		</tr>
		<tbody id="table2" class="table-hover">
                <script>disp_data2();</script>
		</tbody>
	</table>
        <?php if ($_SESSION['admin'] == 1){?>
	<form id="hidden2">
	<label><input type="text" class="require" id="addEvents" required/></label></br>
	<p>Please enter details to save.</p>
	<button type="button" onclick="clearSecondTable()">Clear</button><button type="button" class="add" onclick="insert2()">Add</button>
	</form>
        <?php } ?>
    
    <div class="archive">
		<div class="left"><h2><u>IDOC Archiving Update:</u></h2>

		<h4>Current Status:</h4>

            <p>IDOC archiving jobs in PRD & PRA are stopped until further notice. </p></div>

		<div class="right"><h2><u>SOLMAN Alerts Resolution:</u></h2>


            <p>Open Alert count: 06</p></br>
			<p>Alert Confirmed:  13</p></div>

	</div>
	
	<table  class="table-fill">
		
		<tr>
			<th>Group</th>
			<th>System Details</th>
			<th>Alert Count</th>
			<th>Action Plan</th>
			<th>ETA</th>			
			<th>Action</th>
		</tr>
		<tbody id="table3" class="table-hover">
                    <script>disp_data3();</script>
		</tbody>
	</table>
        <?php if ($_SESSION['admin'] == 1){?>
	<form id="hidden3">
	<label><input type="text" class="group" id="group" required/></label>
	<label><input type="text" class="sysDetails" id="sysDetails" required/></label>
	<label><input type="text" class="alertCount" id="alertCount" required/></label>
	<label><input type="text" class="actionPlan" id="actionPlan" required/></label>
	<label><input type="text" class="eta" id="eta" required/></label></br>
	<p>Please enter complete details</p>
	<button type="button" onclick="clearThirdTable()">Clear</button><button type="button" class="add"  onclick="insert3()">Add</button>
	</form>
        <?php }?>
	<footer>
	    </br>
		</br>
	</footer>
</body>