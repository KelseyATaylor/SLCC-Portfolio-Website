<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/x-icon" href="assets/Kelsey_Lotus.png" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="styles2.css" />
		<title>Kelsey Taylor</title>
	</head>

	<body>
		<!-- Nav Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-success p-2 text-white bg-opacity-25 shadow">
			<div class="container-fluid">
				<a href="index-2.html" class="navbar-brand px-5">
					<img src="assets/Kelsey_Logo_noBackground.png" alt="Kelsey Taylor Logo" height="75" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-nav collapse navbar-collapse" id="navContent">
					<a class="nav-link active px-5 nav-text" href="index-2.html" id="home">Home</a>
					<a class="nav-link px-5 nav-text" href="about.html" id="about">About</a>
					<a class="nav-link px-5 nav-text" href="portfolio.html" id="portfolio">Portfolio</a>
					<a class="nav-link px-5 nav-text" href="contact.html" id="contact">Contact</a>
					<!-- <a class="nav-link" href="assets/Kelsey Taylor Resume 2022-ForWeb.pdf" target="_blank" id="resumeDownload">Resume Download</a> -->
				</div>
			</div>
		</nav>

		<header class="main-header">
			<div class="container-fluid h-100">
				<div
					class="row h-100 align-items-center justify-content-center text-center text-white"
					style="background-color: rgba(0, 0, 0, 0.2)"
				>
					<div class="col-lg-9">
						<h1 class="display-1 fw-bold">Hello, I'm Kelsey.</h1>
						<hr class="bg-white my-5" />
						<h2 class="display-5 fw-light">Quality Assurance Specialist</h2>
						<h2 class="display-5 fw-light">Aspiring Full-Stack Software Engineer</h2>
					</div>
				</div>
			</div>
		</header>

		<!-- About  -->
		<section id="about">
			<div class="container-fluid">
				<div class="row align-items-center justify-content-center text-center py-5">
					<div class="col-6 col-md-4">
						<img
							src="assets/Kelsey_Profile_Image copy.jpeg"
							alt="Kelsey and her husband Bryant"
							class="profile-image px-5"
						/>
					</div>

					<div class="col-lg-7 my-3">
						<h2 class="font-weight-bold">About</h2>
						<hr class="my-4" />
						<p>
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, itaque. Corrupti eaque iusto aliquam
							magni numquam! Cupiditate, eaque? Nulla debitis reiciendis a consequatur tempora quaerat, ipsam hic officia
							deserunt dolor.
						</p>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quisquam quod quae. Unde ipsum esse amet rerum
							veritatis nobis consequatur perspiciatis nisi, commodi facilis officia distinctio autem odit blanditiis. Nobis!
						</p>
						<a href="about.html" class="btn btn-md mt-3 bg-success p-2 bg-opacity-25">Find out more!</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Carousel  -->
		<section id="portfolio" class="bg-success bg-opacity-25 shadow">
			<div class="container p-3">
				<a href="portfolio.html"
					><h2 class="row justify-content-center text-center pt-4 link-dark">Portfolio of Projects</h2></a
				>
				<hr class="m-3" />
				<div id="portfolioCarousel" class="carousel slide carousel-fade shadow bg-dark" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button
							type="button"
							data-bs-target="#portfolioCarousel"
							data-bs-slide-to="0"
							class="active"
							aria-current="true"
							aria-label="Slide 1"
						></button>
						<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="portfolio.html">
								<img
									src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
									alt="Computer with code"
									class="d-block w-100"
								/>
								<div class="carousel-caption d-none d-md-block">
									<h4 class="font-changes" href="portfolio.html">Personal Website</h4>
									<p>I designed and coded a personal website utilizing HTML, CSS & JavaScript/Bootstrap.</p>
								</div>
							</a>
						</div>
						<div class="carousel-item">
							<a href="portfolio.html">
								<img
									src="https://images.unsplash.com/photo-1514575110897-1253ff7b2ccb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
									alt="Girl with phone app"
									class="d-block w-100"
								/>
								<div class="carousel-caption d-none d-md-block">
									<h4 class="font-changes">Math Application</h4>
									<p>Created a math application with JavaScript, React, Node.js.</p>
								</div>
							</a>
						</div>
						<div class="carousel-item">
							<a href="portfolio.html">
								<img
									src="https://images.unsplash.com/photo-1579539760267-b2e78d9d735e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
									alt="Actress on stage"
									class="d-block w-100"
								/>
								<div class="carousel-caption d-none d-md-block">
									<h4 class="font-changes">First Freelance Website | OPPA Theatre's Website Re-design</h4>
									<p>I redesigned a dated website for a community theatre located in Ogden, UT.</p>
								</div>
							</a>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<a href="portfolio.html" class="btn btn-md mt-3 bg-success p-2 bg-opacity-25">More Projects</a>
		</section>

		<div>
			<h4>References and Testimonials</h4>
		</div>

		<footer>
			<p>Kelsey Taylor &copy; 2021 | All Rights Reserved</p>
		</footer>
		<!-- Javascript Bootstrap -->
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
			crossorigin="anonymous"
		></script>
	</body>
</html>
