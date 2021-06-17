<!doctype html>
<html lang="en">
<head><meta charset="us-ascii">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <title><?= $data['judul']; ?></title>
    <style>
        body {
            margin: 20px;
            padding: 20px;
        }
        .hr50 {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>

<?php
	$url1 = $_GET['url'] ?? "";
?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>X-MEN</h1>
        <p>
            Ini adalah X-MEN, ini adalah tentang para pahlawan pembela bumi.
        </p>
    </div>
    <div class="col-md-2"></div>

</div>

<hr class="hr50"/>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">	
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item <?php if( $url1 == "" ) echo "active";  ?>">
					    	<a class="nav-link" href="<?= BASE_URL; ?>">Daftar Superhero
					    	</a>
					  	</li>
					  	<li class="nav-item <?php if( $url1 == "skill" ) echo "active";  ?>">
					    	<a class="nav-link" href="<?= BASE_URL; ?>/skill">Daftar Skill
					    	</a>
					  	</li>
					  	<li class="nav-item <?php if( $url1 == "simulasi" ) echo "active";  ?>">
					    	<a class="nav-link" href="<?= BASE_URL; ?>/simulasi">Simulasi Superhero Menikah
					    	</a>
					  	</li>
					</ul>
				</div>
			</div>
		</nav>        
    </div>
    <div class="col-md-2"></div>
</div>

<div class="row" style="padding: 20px;"></div>