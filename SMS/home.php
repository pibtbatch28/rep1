<?php require_once('DB_CONNECTION/DB_Connection.php'); ?>
<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	        <meta http-equiv="x-UA-Compatible" content="id=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a href="#" class="navbar-brand col-sm-3 col-md-2 mr-0 p-3 "><h2>STUDENT MANAGEMENT SYSTEM</h2></a>
		<!-- <input type="text" class="form-control form-control-dark w-100" placeholder="search" aria-lable="Search"> -->
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
<?php echo  '<div class="navbar-brand col-sm-3 col-md-2 mr-0 p-3 "><h6>WELCOME '.$_SESSION["curuser"].'! <h6/><div/>';?>
				<a href="index.php" class="nav-link">Sign out</a>
			</li>
		</ul>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-dark sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a href="#" class="nav-link text-white mt-5">
									<span data-feather="home"></span>
									Dashboard<span class="sr-only ">(current</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file"></span>
									Orders
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="Shopping-cart"></span>
									Product
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file"></span>
									Custmers
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file"></span>
									Reportes
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file"></span>
									Integration
								</a>
							</li>
						</ul>

						<h6 class="sidebar-haeding d-flex justify-content-between align-items-center px-3 mt-4 mb-1 texxt-muted">
							<span>Saved reports</span>
							<a href="#" class="d-flex align-items-center text-muted">
								<span data-feather="plus-circle"></span>
							</a>
						</h6>
						<ul class="nav flex-column mb-2">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file-text"></span>Current month
								</a>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file-text"></span>Last quarter
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file-text"></span>Social engagement
								</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									<span data-feather="file-text"></span>Year-end sale
								</a>
							</li>
						</ul>
						
					</div>
					
				</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

						<h1 class="h2 mt-5">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                         <div class="btn-group mr-2">
                             <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                             <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                             </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                             <span data-feather="calendar"></span>
                            This week
                               </button>
                               </div>
						
					</div>

					<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

					<h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>
              <td>mauris</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>
              <td>sed</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>
              <td>Mauris</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>
              <td>arcu</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>eget</td>
              <td>nulla</td>
              <td>Class</td>
              <td>aptent</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>taciti</td>
              <td>sociosqu</td>
              <td>ad</td>
              <td>litora</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>torquent</td>
              <td>per</td>
              <td>conubia</td>
              <td>nostra</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>per</td>
              <td>inceptos</td>
              <td>himenaeos</td>
              <td>Curabitur</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>sodales</td>
              <td>ligula</td>
              <td>in</td>
              <td>libero</td>
            </tr>
          </thead>
          <tbody>
					
				</main>
			</div>
		</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>