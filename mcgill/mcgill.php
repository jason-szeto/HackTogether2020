<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="mcgill_style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>McGill University</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<!-- Brand/Logo -->
			<a class="navbar-brand" href="../index.html">Covid Overflow</a>

			<!--Collapsible navbar for small screens-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Universities
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="../template.html">University of Toronto</a>
							<a class="dropdown-item" href="calgary.html">University of Calgary</a>
							<a class="dropdown-item" href="../template.html">University of Saskatchewan</a>
							<a class="dropdown-item" href="../template.html">McGill University</a>
							<a class="dropdown-item" href="../template.html">University of Manitoba</a>
							<a class="dropdown-item" href="../template.html">University of British Columbia</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../about/about.html">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Body -->
	<div class="container-fluid padding">
		<div class="welcome text-left">
			<div class="col-0" style="display: flex; align-items: flex-end">
				<img class="img-fluid" style="float: left" src="mcgill-symbol.png" alt="symbol.mcgill" />
				<h1 class="display-4">
					<strong>McGill University</strong>
				</h1>
			</div>
			<hr />
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="whatshappening text-center">
			<h3 class="display-5">
				Here's what's happening in
				<a href="https://www.mcgill.ca/coronavirus/case-status" class="text-primary">McGill University</a>
			</h3>

			<p class="display-5">
				At McGill, there are multiple resources students can use and
				guidelines to follow that can help the student in navigating
				their way through this unprecedented crisis.
			</p>
		</div>
	</div>

	<!-- map temp
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<button
							class="btn btn-link collapsed"
							data-toggle="collapse"
							data-target="#collapseOne"
							aria-expanded="false"
							aria-controls="collapseOne"
						>
							Covid info map
						</button>
					</h5>
				</div>

				<div
					id="collapseOne"
					class="collapse"
					aria-labelledby="headingOne"
					data-parent="#accordion"
				>
					<div class="card-body">
						<div class="map-size">
							<div
								class="embed-responsive embed-responsive-16by9"
							>
								<iframe
									class="embed-responsive-item map"
									src="https://ucalgary-gs.maps.arcgis.com/apps/webappviewer/index.html?id=16adda2b3e1940ae8106749b6aeb106c"
									allowfullscreen
								></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	<!-- stuff after map -->

	<div class="container-fluid padding">
		<h2 class="dashboard text-center">Dashboard</h2>
		<div class="row justify-content-center">
			<div class="col-auto">
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Active Cases</th>
						</tr>
					</thead>
					<tbody>
						<?php
						/* Attempt MySQL server connection. Assuming you are running MySQL
						server with default setting (user 'root' with no password) */
						$link = mysqli_connect("localhost", "root", "password", "university_covid");

						// Check connection
						if ($link === false) {
							die("ERROR: Could not connect. " . mysqli_connect_error());
						}

						// Attempt select query execution
						$sql = "SELECT * FROM quebec WHERE cases != 0";
						if ($result = mysqli_query($link, $sql)) {
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_array($result)) {
									echo "<tr>";
									echo "<th scope='row'>" . $row['date_range'] . "</th>";
									echo "<td>" . $row['cases'] . "</td>";
									echo "</tr>";
								}
								// Free result set
								mysqli_free_result($result);
							} else {
								echo "No records matching your query were found.";
							}
						} else {
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
						}

						// Close connection
						mysqli_close($link);
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="financialaid text-center">
			<p class="display-5">
				For financial resources, McGill has its own scholarship &
				student aid that you can apply for
				<a href="https://www.mcgill.ca/studentaid/faq/covid-19-faq#:~:text=Financial%20Aid%20Counselor-,1.,at%20514%2D398%2D6013." class="text-primary">here</a>
			</p>
		</div>

		<div class="mental aid text-center">
			<p class="display-5">
				For mental help resources, McGill has a plethora of
				resources for covid-19 help including tips on working at
				home and stress management, you can find these resources
				<a href="https://www.mcgill.ca/medicinefacdev/resources/resources-covid-hub/mental-health-and-wellbeing" class="text-primary">here</a>
			</p>
		</div>
	</div>

	<!--- Footer -->
	<footer class="container-fluid">
		<p>HackTogether 2020</p>
		<p>© Covid Overflow 2020</p>
	</footer>
</body>

</html>