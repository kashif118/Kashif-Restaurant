<?php include 'header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Make a Reservation</h2>
    <p class="text-center lead text-muted">Reserve your table today and enjoy a delightful dining experience with us!</p>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <form id="reservationForm" class="shadow-lg p-4 rounded" style="background: #f8f9fa;">
                <div class="mb-3" data-aos="fade-up">
                    <label for="name" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3" data-aos="fade-up" data-aos-delay="100">
                    <label for="email" class="form-label fw-bold">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                    <label for="phone" class="form-label fw-bold">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3" data-aos="fade-up" data-aos-delay="300">
                    <label for="date" class="form-label fw-bold">Reservation Date</label>
                    <input type="date" class="form-control" id="date" required>
                </div>
                <div class="mb-3" data-aos="fade-up" data-aos-delay="400">
                    <label for="time" class="form-label fw-bold">Reservation Time</label>
                    <input type="time" class="form-control" id="time" required>
                </div>
                <div class="mb-3" data-aos="fade-up" data-aos-delay="500">
                    <label for="guests" class="form-label fw-bold">Number of Guests</label>
                    <select class="form-select" id="guests" required>
                        <option value="" disabled selected>Select number of guests</option>
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                        <option value="5">5 Guests</option>
                        <option value="6+">6+ Guests</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3" data-aos="fade-up" data-aos-delay="600">Reserve Table</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Handle form submission
    document.getElementById('reservationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Thank you for your reservation! We look forward to serving you.');
        // Reset the form
        this.reset();
    });
</script>

<?php include 'footer.php'; ?>
