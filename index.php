<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dental</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
	<!--nav section-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
		<div class="container">
			<img src="Assets\Screenshot 2025-09-18 113321.png" style="height: 5vh; width: 150;"class="logoimg" >

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item"><a class="nav-link" href="#Home">Home</a></li>
				<li class="nav-item"><a class="nav-link"href="#About">About</a></li>
				<li class="nav-item"><a class="nav-link"href="#Services">Services</a></li>
				<li class="nav-item"><a class="nav-link"href="#Reviews">Reviews</a></li>
				<li class="nav-item"><a class="nav-link"href="#Appointment">Contacts</a></li>
				<li class="nav-item"><a class="nav-link"href="#gallery">Gallery</a></li>
			</ul>

			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal">
      Book an Appointment
    </button>

		</div>
</nav>

	<!--Hero section-->
	<section id="Home">
		<div id="heroCarousel" class="carousel slide carousel-fade"data-bs-ride="carousel"data-bs-interval="5000">
			<div class="carousel-indicators">
				<button type="button"data-bs-target="#heroCarousel"data-bs-slide-to="0"class="active" aria-current="true"></button>
				<button type="button"data-bs-target="#heroCarousel"data-bs-slide-to="1"class="active" aria-current="true"></button>
				<button type="button"data-bs-target="#heroCarousel"data-bs-slide-to="2"class="active" aria-current="true"></button>
			</div>
			<div class="carousel-inner">
				<!--slide1-->
				<div class="carousel-item active">
					<img src="Assets/d2.jpg" class="d-block w-100">
						<div class="carousel-caption text-start">
							<h1>Let us Brighten Your Smile</h1>
							<p>Professional dental care with modern equipment and experienced doctors.</p>
							<button type="button" class="btn btn-custom fw-bold"data-bs-target="#appointmentModal"data-bs-toggle="modal">Make Appointment</button>

						</div>
			</div>
				<!--slide2-->
				<div class="carousel-item active">
						<img src="Assets/39+ Thousand Dental .png" class="d-block w-100">
						<div class="carousel-caption text-start">
							<h1>We care For Your Smile</h1>
							<p>Providing top-notch dental services to keep your teeth healthy and shining.</p>
							<button type="button" class="btn btn-custom fw-bold"data-bs-target="#appointmentModal"data-bs-toggle="modal">Book Now</button>
						</div>
				</div>
				<!--slide3-->
				<div class="carousel-item active">
					<img src="Assets/Dental Banner Images.png" class="d-block w-100">
						<div class="carousel-caption text-start">
							<h1>Healthy Teeth, Happy Life</h1>
							<p>Our experts ensure your oral health with personalized treatments.</p>
							<button type="button" class="btn btn-custom fw-bold"data-bs-target="#appointmentModal"data-bs-toggle="modal">Get Started</button>
					</div>
				</div>
			</div>


			<!--controls-->
				<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>

				<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
			</div>
</section>

<!-- About -->
<section id="About" class="py-5">
		<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-6 mb-4 about-img scroll-animate">
				<img src="Assets\Screenshot 2025-08-29 215419.png" class="img-fluid rounded" alt="About Us">
			</div>

			<div class="col-lg-6 about-text scroll-animate">
				<h5 class="text-primary">About Us</h5>

				<h2 class="fw-bold">True Healthcare For Your Family</h2>

				<p>We are committed to providing trusted and affordable healthcare services for you and your loved ones. Our team of experienced doctors and caring staff work together to ensure that every patient receives personalized treatment, compassion, and the highest level of medical care.
				At Dentelo, your family’s health and well-being come first. From routine check-ups to specialized treatments, we are here to support your journey toward a healthier life.
				</p>

				<button type="button"data-bs-target="#appointmentModal"data-bs-toggle="modal" class="btn btn-outline-info">Make Appointment</button>
			</div>
		</div>
	</div>	
</section>

<!--Services-->
<section class="services-section bg-light" id="Services">
	<div class="text-center mb-5">
		<h2 class="fw-bold">OUR SERVICES</h2>
	</div>
	<div class="row g-4">


		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="bi bi-braces service-icon"></i>
				<h5 class="service-title">Alignment Specialist</h5>
				<p class="service-desk">We provide expert orthodontic care to straighten your teeth and improve your bite using the latest alignment techniques.</p>
			</div>
		</div>

		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="bi bi-tools service-icon"></i>
				<h5 class="service-title">Cosmetic Dentistry</h5>
				<p class="service-desk">Enhance your smile with our cosmetic treatments including teeth whitening, veneers, and smile makeovers.</p>
			</div>
		</div>

		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="bi bi-person-hearts service-icon"></i>
				<h5 class="service-title">Oral Hygiene Experts</h5>
				<p class="service-desk">Our oral hygiene experts guide you in proper brushing, flossing, and preventive care to maintain a healthy mouth.</p>
			</div>
		</div>

		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="fas fa-tooth service-icon"></i>
				<h5 class="service-title">Root Canal Specialist</h5>
				<p class="service-desk">Painful tooth problems? Our root canal specialists use gentle techniques to save infected teeth effectively.</p>
			</div>
		</div>

		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="bi bi-chat-left-quote service-icon"></i>
				<h5 class="service-title">Live Dental Advisory</h5>
				<p class="service-desk">Get real-time dental advice from our certified professionals through chat or video consultations.</p>
			</div>
		</div>

		<div class="col-md-4 animated" style="animation-delay: 0.1s;">
			<div class="service-card">
				<i class="bi bi-clipboard-check service-icon"></i>
				<h5 class="service-title">Cavity Inspection</h5>
				<p class="service-desk">Regular cavity checks and preventive treatments help keep your teeth healthy and free from decay.</p>
			</div>
		</div>
	</div>
</section>

<!--work process-->
<section class="work-process-section container">
	<h2>WORK PROCESS</h2>
	<div class="row g-4 justify-content-center">

		<div class="col-12 col-md-6 col-lg-4">
			<div class="card-custom d-flex flex-column align-items-center">
				<i class="bi bi-brush card-icon"></i> <!-- Example icon -->
          <h3 class="card-title">Cosmetic Dentistry</h3>
          <p class="card-text">
            Enhance your smile with our advanced cosmetic treatments including teeth whitening, veneers, and smile makeovers.
          </p>

			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-4">
        <div class="card-custom d-flex flex-column align-items-center">
          <i class="bi bi-people card-icon"></i>
          <h3 class="card-title">Pediatric Dentistry</h3>
          <p class="card-text">
            Gentle and friendly dental care designed especially for children, ensuring a positive and stress-free experience.
          </p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card-custom d-flex flex-column align-items-center">
          <i class="bi bi-file-medical card-icon"></i>
          <h3 class="card-title">Dental Implants</h3>
          <p class="card-text">
           Permanent and natural-looking solutions to replace missing teeth, restoring your confidence and smile.
          </p>
        </div>
      </div>

	</div>
</section>

<!--doctors-->
<section class="container" id="Appointment">
	<div class="section-header">
		<small>OUR DOCTOR</small>
		<h2>Best Expert Dentist</h2>
	</div>
	<div class="row g-4 justify-content-center">
		<!--doctor1-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card card-profile">
				<img src="Assets\doc1.jpg"class="profile-img">
				<div class="card-body">
					<h5 class="profile-name">Dr. Amit Roy
        </h5>
					<p class="profile-role">Dentist</p>
					<div class="social-icons">
					<a href="#"aria-label="Facebook"><i class="bi bi-facebook"></i></a>	
						<a href="#"aria-label="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#"aria-label="instagram"><i class="bi bi-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!--doctor2-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card card-profile">
				<img src="Assets\images (2).jpeg"class="profile-img">
				<div class="card-body">
					<h5 class="profile-name">Dr. Alok Choudhary
         </h5>
					<p class="profile-role">Dentist</p>
					<div class="social-icons">
					<a href="#"aria-label="Facebook"><i class="bi bi-facebook"></i></a>	
						<a href="#"aria-label="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#"aria-label="instagram"><i class="bi bi-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!--doctor3-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card card-profile">
				<img src="Assets\images.jpeg"class="profile-img">
				<div class="card-body">
					<h5 class="profile-name">Dr. Sneha Das</h5>
					<p class="profile-role">Dentist</p>
					<div class="social-icons">
					<a href="#"aria-label="Facebook"><i class="bi bi-facebook"></i></a>	
						<a href="#"aria-label="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#"aria-label="instagram"><i class="bi bi-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!--doctor4-->
		<div class="col-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card card-profile">
				<img src="Assets\images (4).jpeg"class="profile-img">
				<div class="card-body">
					<h5 class="profile-name">Dr. Kabir Singh</h5>
					<p class="profile-role">Dentist</p>
					<div class="social-icons">
					<a href="#"aria-label="Facebook"><i class="bi bi-facebook"></i></a>	
						<a href="#"aria-label="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#"aria-label="instagram"><i class="bi bi-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!--gallery-->
<section class="gallery-section container" id="gallery">
    <div class="gallery-title">
      <h2 class="fw-bold">Our Smile Gallery</h2>
      <p>See some of our real patient transformations and our modern dental facility.</p>
    </div>

    <div class="row g-4">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\images (2).jpg" alt="Before and After 1">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\download (1).jpg" alt="Before and After 2">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\images (1).jpg" alt="Clinic Interior">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\download (5).jpg" alt="Dental Team">
           </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\download (6).jpg" alt="Equipment">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\download.jpg" alt="Equipment">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\images (4).jpg" alt="Equipment">
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="gallery-item">
          <img src="Assets\images (3).jpg" alt="Patient Smiles">
        </div>
      </div>
    </div>
  </section>

<!--Reviews-->
<section class="Reviews-section" id="Reviews">
	<div class="container py-5">
		<h2 class="text-center mb-5 fw-bold">SATISFIED CLIENTS</h2>
		<div class="row g-4">
			<!--client1-->
			<div class="col-md-4">
				<div class="review-card">
					<img src="Assets\pic3.jpeg"alt="Client">
					<p>Best dental experience I’ve had in a long time. Fast, efficient, and absolutely trustworthy.Booking an appointment was quick, and the doctor explained everything clearly. Highly recommended!</p>
					<div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

				</div>
				<div class="client-name">Ayan Ghosh</div>
          <div class="client-role">Satisfied Client</div>
        </div>
			</div>

			<!--client2-->
			<div class="col-md-4">
				<div class="review-card">
					<img src="Assets\pic1.jpeg"alt="Client">
					<p>The staff was so friendly, and the treatment was painless. I finally enjoy visiting the dentist without fear! The clinic is clean, modern, and welcoming. I felt comfortable from the moment I walked in.</p>
					<div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

				</div>
				<div class="client-name">Smita Roy</div>
          <div class="client-role">Satisfied Client</div>
        </div>
			</div>

			<!--client3-->
			<div class="col-md-4">
				<div class="review-card">
					<img src="Assets\pic4.jpeg"alt="Client">
					<p>They took great care of my dental issues. I’m really happy with the results and the personal attention.I’ve been coming here for years. Excellent service, caring staff, and always professional.</p>
					<div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

				</div>
				<div class="client-name">Aditya Nayak</div>
          <div class="client-role">Satisfied Client</div>
        </div>
			</div>

		</div>
	</div>
</section>

<!-- Modal -->
  <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-4 shadow-lg">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="appointmentModalLabel">Book an Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form class="p-3 needs-validation" novalidate>
          <div class="modal-body">

            <div class="row g-3">
              <div class="col-md-6">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
                <div class="invalid-feedback">Please enter your name.</div>
							</div>

              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>

              <div class="col-md-12">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" required>
                <div class="invalid-feedback">Please enter your phone number.</div>
              </div>

              <div class="col-md-6">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" required>
                <div class="invalid-feedback">Please select a date.</div>
              </div>

              <div class="col-md-6">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" required>

							<div class="invalid-feedback">Please select a time.</div>
              </div>

              <div class="col-md-12">
                <label for="service" class="form-label">Select a Service</label>
                <select id="service" class="form-select" required>
                  <option selected disabled>Select a Service</option>
                  <option>Alignment Specialist</option>
                  <option>Cosmetic Dentistry</option>
                  <option>Oral Hygiene Experts</option>
                  <option>Root Canal Specialist</option>
                  <option>Live Dental Advisory</option>
                  <option>Cavity Inspection</option>
                </select>
                <div class="invalid-feedback">Please select a service.</div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100">Confirm Appointment</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-light">
    <div class="container">
      <div class="row gy-4">

        <!-- Company Info -->
        <div class="col-lg-4 col-md-6">
          <h3 class="fw-bold mb-3">Dentelo.</h3>
          <p>
            Mauris non nisi semper, lacinia neque in, dapibus leo. Curabitur sagittis libero tincidunt tempor finibus. 
            Mauris at dignissim ligula, nec tristique orci. Quisque vitae metus.
          </p>
          <div class="d-flex align-items-center mt-3">
            <i class="bi bi-clock-history footer-icon"></i>
            <div>
              <p class="mb-0">Monday - Saturday:</p>
              <p class="mb-0">9:00am - 10:00pm</p>
            </div>
          </div>
          <a href="help.html"><button type="button" class="btn text-light mt-5" style="background-color: #5a5fbc;">
          	<i class="fa-solid fa-circle-question mx-2"></i>Help
          </button></a>
        </div>
        <!-- Other Links -->
        <div class="col-lg-2 col-md-6">
          <h5>Other Links</h5>
          <a href="#Home">Home</a>
          <a href="#About">About Us</a>
          <a href="#Services">Services</a>
          <a href="#">Project</a>
          <a href="#Appointment">Our Team</a>
          <a href="#">Latest Blog</a>
        </div>

        <!-- Our Services -->
        <div class="col-lg-3 col-md-6">
          <h5>Our Services</h5>
          <a href="#">Root Canal</a>
          <a href="#">Alignment Teeth</a>
          <a href="#">Cosmetic Teeth</a>
          <a href="#">Oral Hygiene</a>
          <a href="#">Live Advisory</a>
          <a href="#">Cavity Inspection</a>
        </div>
         <!-- Contact Us -->
        <div class="col-lg-3 col-md-6">
          <h5>Contact Us</h5>
          <div class="d-flex mb-2">
            <i class="bi bi-geo-alt footer-icon"></i>
            <p class="mb-0">1247/Plot No. 39, 15th Phase, LHB Colony, Kanpur</p>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-telephone footer-icon"></i>
            <p class="mb-0">‪+91-7052-101-786‬</p>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-envelope footer-icon"></i>
            <p class="mb-0">help@example.com</p>
          </div>

          <div class="social-icons mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
          </div>
        </div>

      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom mt-4">
      	© 2022 All Rights Reserved by <span class="fw-semibold">Dental Clinic</span>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button -->
  <button class="scroll-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    <i class="bi bi-arrow-up"></i>
  </button>
  </script>
  <script>
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();

	const elements=document.querySelectorAll(".scroll-animate");
	window.addEventListener("scroll",()=>{
		elements.forEach(el=>{
			const position=el.getBoundingClientRect().top;
			const screenHeight=window.innerHeight;
			if(position<screenHeight-100){
				el.classList.add("show");
			}
		});
	});

  </script>
<script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>