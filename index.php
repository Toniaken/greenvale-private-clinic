<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GreenVale Private Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Connect CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="logo">GreenVale Private Clinic</div>

    <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#doctors">Doctors</a>
        <a href="#booking">Book Appointment</a>
        <a href="#contact">Contact</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h1>Private Healthcare Appointments Made Simple</h1>
        <p>
            Book private GP consultations, child health checks, blood tests,
            women’s health appointments, mental wellbeing support, and follow-up care online.
        </p>
        <a href="#booking" class="btn">Book Appointment</a>
    </div>
</section>

<section class="hospital-section">
    <div class="hospital-content">
        <div class="hospital-text">
            <h2>Welcome to GreenVale Private Clinic</h2>
            <p>
                GreenVale Private Clinic is a modern private healthcare centre offering
                convenient appointments for adults, children, and families.
            </p>
            <p>
                Our aim is to provide clear pricing, trusted clinicians, and simple access to private healthcare.
            </p>
            <a href="#booking" class="btn">Book an Appointment</a>
        </div>

        <div class="hospital-image">
            <img src="img/hospital-building.jpg" alt="GreenVale Private Clinic building">
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <h2>Our Services</h2>
    <p class="section-intro">
        Private healthcare appointments designed around your needs, with clear pricing and simple online booking.
    </p>

    <div class="services-grid">

        <div class="service-card">
            <h3>General Consultation</h3>
            <p>Speak with a private GP about your health concerns.</p>
            <p class="service-price">£350</p>
        </div>

        <div class="service-card">
            <h3>Child Health Check</h3>
            <p>Book child health and developmental reviews.</p>
            <p class="service-price">£385</p>
        </div>

        <div class="service-card">
            <h3>Blood Test Booking</h3>
            <p>Request a private blood test appointment at a convenient time.</p>
            <p class="service-price">From £400</p>
        </div>

        <div class="service-card">
            <h3>Women’s Health Consultation</h3>
            <p>Private consultation for women’s health needs.</p>
            <p class="service-price">£250</p>
        </div>

        <div class="service-card">
            <h3>Mental Wellbeing Support</h3>
            <p>Book a confidential wellbeing support appointment.</p>
            <p class="service-price">£170</p>
        </div>

        <div class="service-card">
            <h3>Follow-up Appointment</h3>
            <p>Continue your care after a previous appointment.</p>
            <p class="service-price">£370</p>
        </div>

    </div>
</section>

<section class="doctors-section" id="doctors">
    <h2>Meet Our Private Doctors</h2>
    <p class="section-intro">
        Our experienced clinicians provide private healthcare appointments across general practice,
        child health, women’s health, diagnostics, mental wellbeing, and follow-up care.
    </p>

    <div class="doctors-grid">

        <div class="doctor-card">
            <img src="img/doctor-1.jpg" alt="Dr Josh Hart">
            <h3>Dr Josh Hart</h3>
            <p class="specialty">General Practitioner</p>
            <p class="doctor-experience">12 years experience</p>
            <p>Provides private GP consultations, preventive care, lifestyle advice, and reviews for common health concerns.</p>
            <p class="doctor-price">Consultation: £350</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-2.jpg" alt="Dr Daniel Reeves">
            <h3>Dr Daniel Reeves</h3>
            <p class="specialty">Paediatrician</p>
            <p class="doctor-experience">10 years experience</p>
            <p>Specialises in child health checks, developmental reviews, childhood illnesses, and growth monitoring.</p>
            <p class="doctor-price">Consultation: £385</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-3.jpg" alt="Dr Priya Mehta">
            <h3>Dr Priya Mehta</h3>
            <p class="specialty">Women’s Health Specialist</p>
            <p class="doctor-experience">14 years experience</p>
            <p>Provides confidential women’s health consultations, reproductive health support, and menopause advice.</p>
            <p class="doctor-price">Consultation: £400</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-4.jpg" alt="Dr Ken Madu">
            <h3>Dr Ken Madu</h3>
            <p class="specialty">Mental Wellbeing Consultant</p>
            <p class="doctor-experience">9 years experience</p>
            <p>Supports patients with stress, anxiety, emotional wellbeing, work-related pressure, and confidential guidance.</p>
            <p class="doctor-price">Consultation: £250</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-5.jpg" alt="Dr Sonma Eva">
            <h3>Dr Sonma Eva</h3>
            <p class="specialty">Family Medicine Consultant</p>
            <p class="doctor-experience">11 years experience</p>
            <p>Provides follow-up care, medication reviews, chronic condition support, and family medicine consultations.</p>
            <p class="doctor-price">Consultation: £170</p>
        </div>

        <div class="doctor-card">
            <img src="img/doctor-6.jpg" alt="Dr Alex Ken">
            <h3>Dr Alex Ken</h3>
            <p class="specialty">Diagnostics & Blood Test Specialist</p>
            <p class="doctor-experience">8 years experience</p>
            <p>Supports private blood test bookings, diagnostic appointments, test result reviews, and onward referral advice.</p>
            <p class="doctor-price">From £370</p>
        </div>

    </div>
</section>

<section id="booking" class="booking-section">
    <h2>Book an Appointment</h2>
    <p class="section-intro">
        Complete the form below and a member of our clinic team will review your request.
    </p>

    <form id="appointmentForm" action="submit-booking.php" method="POST">

        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="appointment_type">Appointment Type</label>
        <select id="appointment_type" name="appointment_type" required>
            <option value="">Select appointment type</option>
            <option value="General Consultation - £75">General Consultation - £75</option>
            <option value="Child Health Check - £65">Child Health Check - £65</option>
            <option value="Blood Test Booking - From £45">Blood Test Booking - From £45</option>
            <option value="Women’s Health Consultation - £85">Women’s Health Consultation - £85</option>
            <option value="Mental Wellbeing Support - £70">Mental Wellbeing Support - £70</option>
            <option value="Follow-up Appointment - £50">Follow-up Appointment - £50</option>
        </select>

        <label for="doctor">Preferred Doctor</label>
        <select id="doctor" name="doctor" required>
            <option value="">Select preferred doctor</option>
            <option value="Dr Amelia Hart - General Practitioner">Dr Amelia Hart - General Practitioner</option>
            <option value="Dr Daniel Reeves - Paediatrician">Dr Daniel Reeves - Paediatrician</option>
            <option value="Dr Priya Mehta - Women’s Health Specialist">Dr Priya Mehta - Women’s Health Specialist</option>
            <option value="Dr Oliver Bennett - Mental Wellbeing Consultant">Dr Oliver Bennett - Mental Wellbeing Consultant</option>
            <option value="Dr Grace Okafor - Family Medicine Consultant">Dr Grace Okafor - Family Medicine Consultant</option>
            <option value="Dr Samuel Clarke - Diagnostics & Blood Test Specialist">Dr Samuel Clarke - Diagnostics & Blood Test Specialist</option>
        </select>

        <label for="preferred_date">Preferred Date</label>
        <input type="date" id="preferred_date" name="preferred_date" required>

        <label for="preferred_time">Preferred Time</label>
        <input type="time" id="preferred_time" name="preferred_time" required>

        <label for="message">Message / Special Request</label>
        <textarea id="message" name="message" rows="5"></textarea>

        <div class="consent-box">
            <input type="checkbox" id="consent" name="consent" required>
            <span>I agree that my information can be used to process this appointment request.</span>
        </div>

        <button type="submit" class="btn">Submit Appointment Request</button>
    </form>
</section>

<section id="contact" class="contact-section">
    <h2>Contact GreenVale Private Clinic</h2>
    <p>Email: appointments@greenvaleclinic.co.uk</p>
    <p>Phone: 0121 456 7890</p>
    <p>Location: Birmingham, United Kingdom</p>
    <p>Opening Hours: Monday - Saturday, 8:00 AM - 6:00 PM</p>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> GreenVale Private Clinic. All rights reserved.</p>
</footer>

<script src="js/main.js"></script>
</body>
</html>