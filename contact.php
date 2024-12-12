<?php include 'header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <p class="text-center lead">We'd love to hear from you! Reach out to us for reservations, inquiries, or feedback.</p>
    
    <div class="row mt-5">
        <!-- Contact Information -->
        <div class="col-md-6 mb-4">
            <h4 class="text-primary">Get in Touch</h4>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <i class="bi bi-geo-alt text-primary me-2"></i>
                    <strong>Address:</strong> 123 Main Street, Food City
                </li>
                <li class="mb-3">
                    <i class="bi bi-telephone text-primary me-2"></i>
                    <strong>Phone:</strong> +123 456 7890
                </li>
                <li class="mb-3">
                    <i class="bi bi-envelope text-primary me-2"></i>
                    <strong>Email:</strong> info@myrestaurant.com
                </li>
            </ul>
            <h5 class="mt-4">Follow Us</h5>
            <div>
                <a href="#" class="text-decoration-none me-3"><i class="bi bi-facebook fs-4 text-primary"></i></a>
                <a href="#" class="text-decoration-none me-3"><i class="bi bi-instagram fs-4 text-primary"></i></a>
                <a href="#" class="text-decoration-none me-3"><i class="bi bi-twitter fs-4 text-primary"></i></a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-6 mb-4">
            <h4 class="text-success">Send Us a Message</h4>
            <form id="contactForm" class="p-3 border rounded shadow-sm">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Embedded Google Map -->
    <div class="mt-5">
        <h4 class="text-center text-warning">Visit Us</h4>
        <div class="ratio ratio-16x9 mt-3">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434508003!2d-122.41941628468148!3d37.77492977975986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064d9f2fd85%3A0xf2c129d7a98e96a5!2sRestaurant!5e0!3m2!1sen!2sus!4v1632950307426!5m2!1sen!2sus" 
                style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</div>

<script>
    // JavaScript form handling
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Your message has been sent. Thank you for contacting us!');
        // Reset the form
        this.reset();
    });
</script>

<?php include 'footer.php'; ?>
