<html>
	<head>
		<title>Game | The Word Winner</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="common.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-8"> 

	</head>
	<body>

		<div class="topRibbon"></div>

		<div class="container" align="center">
			<div class="row">
				<h3>Game - The Word Winner</h3>
			</div>
		</div>

		<div class="container">
			<div class="row" align="center">
				
					<form method="post" action="#">
						<table class="table table-striped table-hover table-condensed ">
							<caption><i class="icon-signal"></i> &nbsp;&nbsp; Word Trend </caption>
							<thead>
								<tr>
									<th>Hashtags</th>
									<th>Player</th>
									<th>Count @ HH:MM</th>
									<th>Count @ HH:MM</th>
									<th>Count @ HH:MM</th>
									<th>Base Count @ HH:MM</th>
									<th>Event Factor</th>
									<th>Awareness Factor</th>
								</tr>
							</thead>
							<tbody>
								
									
									<?php
										require_once('dbconfig.php');
										$getTagsQ="select hashtag from hashtags ";
										$resQ=mysql_query($getTagsQ) or die("error");
										if (mysql_num_rows($resQ) > 0){
											while($row = mysql_fetch_assoc($resQ)) {
												echo '<tr>';
												echo '<td><span class="label label tags"><i class="icon-tag"></i>&nbsp;' . $row["hashtag"] . '</span></td>';
												echo '<td>PersonX</td>';
												echo '<td>I</td>';
												echo '<td>J</td>';
												echo '<td>K</td>';
												echo '<td>X</td>';
												echo '<td>e</td>';
												echo '<td>a</td>';
												echo '</tr>';
											}
										}
									?>
								
							</tbody>
						</table>
						<input type="submit" class="btn" value="Start"/>
					</form>
			</div>
		</div>

		<div class="footer container">
			<div class="row">
				<hr>
				<p>&copy; IT Expo 2015 | Q-uantum Techni-K | <a href="index.php">TheWordWinnerGame</a></p>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="common.js"></script>
    	
	</body>
</html>

