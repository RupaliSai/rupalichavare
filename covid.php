
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>Covid19 Report</title>

	<style type="text/css">
		.header {
			background-image: url('cool-background.png');
			width: 40%;
			font-family: 'Niconne';
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
					0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 20px;
			background-size: auto;
		}

		.middle {
			margin-top: 60px;
			opacity: 1.0;
			border-radius: 20px;
			background-color: #f2f2f2;
			background-image: url('cool-background3.png');
			background-size: auto;
			padding: 20px;
		}

		th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}

		td,
		th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #ddd;
		}
	</style>
</head>

<body>
	<center>
		<div class="header">
			<h1>Covid19 Tracker</h1>
		</div>

		<div class="middle">
			<h2>
				Latest Updates of Covid19
				about States and Union
				Territories of India
			</h2>
		</div>

		<div style="overflow-x:auto;">
			<table border="1px ">
				<?php
				$data=file_get_contents(
	'https://api.covid19india.org/data.json');

	$coronalive =json_decode($data,true);

	// echo $coronalive['statewise'][1]['state'];
	$satecount = count($coronalive['statewise']);
				?>
				<tr>
					<th>State</th>
					<th>Last Updated Date Time</th>
					<th>Confirmed Cases</th>
					<th>Active Cases</th>
					<th>Recovered Cases</th>
					<th>Death Cases</th>
				</tr>
				<?php
				$i = 1;
				while($i < 38) {
				?>
				<tr>
					<td>
<?php echo $coronalive['statewise'][$i]['state'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?>
					</td>>

					<td>
<?php echo $coronalive['statewise'][$i]['confirmed'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['active'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['recovered'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['deaths'] ?>
					</td>
				</tr>
				<?php $i++;
				}
				?>
			</table>
		</div>
	</center>
</body>

</html>