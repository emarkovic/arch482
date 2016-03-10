<?php
	include('common.php');
	$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forum</title>

		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="nav-menu">
			<ul>
				<li class="left" id="logo">
					<i class="fa fa-forumbee"></i>
				</li>
			<?php
				$pages = [
					'Home' => 'index.php',
					'Profile' => '',
					'About' => ''				
				];

				if ($logged_in) {
					$pages['Add a post'] = 'add.php';
				}

				foreach ($pages as $key => $page) {
					if ($current_page === $page) {						
						?> <li class="middle"><a class="active" href="<?=$page?>"><?=$key?></a></li> <?php							
					} else {						
						?> <li class="middle"><a href="<?=$page?>"><?=$key?></a></li> <?php
					}
				}
			
				if ($logged_in) {
					if ($current_page === 'logoutForm.php') {
						?> <li class="right" id="logout"><a class="active" href="logout.php">Logout</a></li> <?php
					} else {
						?> <li class="right" id="logout"><a href="logout.php">Logout</a></li> <?php
					}
				} else {
					if ($current_page === 'loginForm.php') {
						?> <li class="right" id="login"><a class="active" href="loginForm.php">Login</a></li> <?php
					} else {
						?> <li class="right" id="login"><a href="loginForm.php">Login</a></li> <?php
					}
				}
			?>
				 			
				<li class="right" id="changeTheme">Change Theme</li>
				
			</ul>

		</nav>