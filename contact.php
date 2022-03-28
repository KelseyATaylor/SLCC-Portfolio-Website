<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contact | Kelsey Taylor</title>
	</head>
	<body>
		<header>
			<nav>
				<a href="index.html">Home</a>
				<a href="about.html">About</a>
				<a href="portfolio.html">Portfolio</a>
				<a href="contact.html">Contact</a>
			</nav>
		</header>

		<h3>Contact me!</h3>
		<form action="https://form-test.slccwebdev.com/form-success.php" method="get" target="_blank">
			<div>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" required />
			</div>

			<div>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required />
			</div>

			<div>
				<label for="subject">Subject:</label>
				<input type="text" name="subject" id="subject" />
			</div>

			<div>
				<label for="message">Message</label><br />
				<textarea
					name="message"
					id="message"
					type="text"
					cols="100"
					rows="10"
					maxlength="500"
					placeholder="Dearest Kelsey..."
				></textarea>
			</div>

			<div>
				<p>Are you interested in scheduling an interview?</p>
				<input type="radio" id="yes" name="contact-back" value="yes" />
				<label for="yes">Yes</label>
				<input type="radio" id="no" name="contact-back" value="no" />
				<label for="no">No</label>
			</div>
			<div>
				<input type="submit" value="Submit" />
			</div>
		</form>
	</body>
</html>
