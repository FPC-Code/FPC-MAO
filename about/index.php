<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<title>FPC Model UN - Meetings</title>
	<!-- keep this title convention please-->

	<link rel="stylesheet" href="/Includes/CSS/main.css" />
	<link rel="stylesheet" href="/Includes/CSS/menu.css" />
	<link rel="stylesheet" href="/Includes/CSS/footer.css" />
	<link rel="stylesheet" href="/Includes/CSS/form.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet" />
</head>

<body>
	<?php
	echo file_get_contents("/Includes/header.txt")
	?>

	<main>
		<h1>We are Model United Nations</h1>
		<section id="basic-description">
			<div class="text">
				<h2>Come to a meeting!</h2>
				<ul>
					<li>
						<p>
							We meet on the first MUNday of every month, in
							Mrs. Elledge's room, room 2-218
						</p>

						<p>
							We start a few minutes after school, and end
							around 4. Come visit us, then stay for the year!
						</p>
					</li>
				</ul>
			</div>
		</section>
		<section id="join-today">
			<h2>Join Today</h2>

			<div class="text">
				<ul>
					<li>
						<p>
							Before you can attend meetings, you need to fill
							out a form to let us know a little bit about
							yourself.
						</p>

						<p>
							Click the button below to go there.
						</p>

						<div class="link">
							<input type="button" onclick="redirect('/join/')" value="Join" />
						</div>
					</li>
				</ul>
			</div>
		</section>
	</main>

	<footer>
		<div class="footer-logo">
			<a href="https://www.fpccode.com"><img src="/Images/Assets/fpc_code_trademark_light.svg" alt="FPC Code Logo" /></a>
		</div>
		<p>
			This website is powered by FPC Code
		</p>
		<div class="footer-contacts">
			<a href="https://github.com/codefpc" target="_blank">
				<img src="/Images/Assets/github-brands.svg" alt="Github Icon" />
			</a>
			<a href="mailto:fpc.coding.club@gmail.com" target="_blank">
				<img src="/Images/Assets/envelope-solid.svg" alt="Mail Icon" />
			</a>
		</div>
	</footer>

	<script src="/Includes/JS/main.js"></script>
	<script src="/Includes/JS/menu.js"></script>
</body>

</html>