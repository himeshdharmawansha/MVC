<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>University Website Design - Easy</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/landing.css?v=1.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
</head>
<body>
    <section class="header">
        <img class="header-img"  src="<?=ROOT?>/assets/images/doc.jpg">
        <nav>
            <a ref="landing.html">
                <img src="../assests/logo (1).png">
                <span class="logo_text">WELL BE</span>
            </a>
            
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">SEARCH FOR <br/>DOCTOR</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li class="login-dropdown">
                        <a class="appointment-btn" id="loginButton">Login</a>
                        <div class="dropdown-content" id="dropdownMenu">
                            <p>Login as</p>
                            <form method="post">
                                <a href="<?=ROOT?>/login" data-type="doctor" class="loginFilter">Doctor</a>
                                <a href="<?=ROOT?>/login" data-type="patient" class="loginFilter">Patient</a>
                            </form>
                        </div>
                    </li>
                    
                </ul>
            
        </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
           
            <p>WELCOME TO WELLBE!</p>
            <h1>TAKING CARE OF<br/> YOUR HEALTH IS <br/>OUR TOP<br/>PRIORITY</h1>
            <a href="" class="hero-btn1">Make Appointment</a>

        </div>

    </section>


<!------------------------Service-------------------------------->   

<section class="course">
    <h1>Services We Offer</h1>
    <p>In a personalized patient care system like WellBe, the services offered could be tailored to meet the individual needs of patients while enhancing the overall efficiency of healthcare providers. </p>

    <div class="row">
        <div class="course-col">
            <h3>Search for a Doctor</h3>
            <p>
                A comprehensive directory of doctors, specialists, and healthcare providers within the system. Options to filter doctors by specialty, location, availability, language, and patient reviews.</p>
        </div>
            <div class="course-col">
                <h3>Book an Appointment</h3>
                <p>
                    Seamless online booking system that allows patients to schedule appointments with their chosen healthcare provider. View real-time availability of doctors and select preferred dates and times for appointments.</p>
            </div>
                <div class="course-col">
                    <h3>View Your Medical Records and View Your Lab Reports</h3>
                    <p>
                        Patients can securely log in to access their complete medical records, including past consultations, treatments, and prescriptions. Direct access to lab reports as soon as they are available, with the ability to download or print them.</p>
                </div>
    </div>

</section>

<!------------------------Campus--------------------------------   

<section class="campus">

    <h1>Our Global Campus</h1>
    <p>Your CSS looks well-structured and includes responsiveness for smaller screens. Here are a few minor corrections and improvements to ensure consistency and correct functionality</p>

    <div class="row">
        <div class="campus-col">
            <img src="images/london.png">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
            <div class="campus-col">
                <img src="images/newyork.png">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/washington.png">
                <div class="layer">
                    <h3>WASHINGTON</h3>
                </div>
            </div>

    </div>

</section>



<section class="facilities">
    <h1>ABOUT US</h1>
    <p>In a personalized patient care system like WellBe, we offer a range of services designed to empower patients and streamline their healthcare experience. Our platform allows you to easily search for doctors based on your preferences, book appointments at your convenience, and securely access your medical records and lab reports. By integrating these essential services, we ensure that your healthcare journey is not only efficient but also tailored to your individual needs, providing you with the tools and support to manage your health with confidence.</p>

    
</section>

<!------------------------Testimonials-----------------------------------------

<section class="testimonials">
    <h1>What Our Students Say</h1>
    <p>cool buddy..all cool</p>

    <div class="row">
        <div class="testimonials-col">
          <img src="images/user1.jpg">
          <p>The bestest campus ever</p> 
          <h3>Amrah Slamath</h3>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
 
        </div>
        <div class="testimonials-col">
            <img src="images/user2.jpg">
            <p>The worst campus ever</p> 
            <h3>Mazeen Azeez</h3>
            <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i> 
          </div>
    </div>
</section>
>
<!------------------------Call to Action-----------------------------------------

<section>
    

</section>
>
<!------------------------JavaScript for Toggle Menu----------------------------------------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }

        function hideMenu(){
                navLinks.style.right = "-300px";  
        }

        const loginButton = document.getElementById("loginButton");
        const dropdownMenu = document.getElementById("dropdownMenu");

        loginButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior if necessary
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        });

        // Close the dropdown if clicked outside of it
        document.addEventListener("click", function (event) {
            if (!loginButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = "none";
            }
        });


        const loginOptions = document.querySelectorAll(".loginFilter");

        loginOptions.forEach(option => {
            option.addEventListener("click", function () {

                event.preventDefault();

                // Get the user type from data attribute
                const userType = option.getAttribute("data-type");

                // Send the user type to PHP via AJAX
                fetch('Ajax.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'user_type=' + encodeURIComponent(userType),
                })
                .then(response => response.text())
                .then(data => {
                    console.log("User type saved in session:", data);
                    // Redirect or take other action if needed
                    window.location.href = option.href;
                });
            });
        });
            

    </script>
    
</body>

<!------------------------Footer----------------------------------------->

<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>About WellBe</h3>
            <p>WellBe is dedicated to providing personalized healthcare services, ensuring that each patient receives tailored care that meets their unique needs. Our mission is to enhance the healthcare experience through innovation and compassion.</p>
            <div class="socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>

        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Search for Doctor</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="/MVC/public/signup">Login</a></li>
            </ul>
        </div>

        <div class="footer-section contact-form">
            <h3>Contact Us</h3>
            <form action="#">
                <input type="email" placeholder="Your Email Address" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit" class="hero-btn">Send</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 WellBe. All Rights Reserved.</p>
    </div>
</footer>

</html>