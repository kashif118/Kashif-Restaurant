<?php include 'header.php'; ?>

<style>
    .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    h2 {
        color: #007bff;
        font-size: 2.5rem;
        animation: fadeIn 2s ease-in-out;
    }
    p {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    img {
        transition: transform 0.3s ease-in-out;
    }
    img:hover {
        transform: scale(1.05);
    }
    .hover-zoom {
        transition: transform 0.3s ease-in-out;
    }
    .hover-zoom:hover {
        transform: scale(1.05);
    }

    .fs-display1 {
        font-size: 6rem;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes slideInLeft {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(0); }
    }

    @keyframes slideInRight {
        0% { transform: translateX(100%); }
        100% { transform: translateX(0); }
    }
</style>

<script>
    AOS.init({
        duration: 1200,
        offset: 120,
    });
</script>

<!-- Carousel Section -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 90vh;">
            <img src="./images/hero1.jpeg" class="d-block w-100" alt="Delicious Food" style="object-fit: cover; height: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">Welcome to My Restaurant</h1>
                <p class="lead animate__animated animate__fadeInUp">Experience the finest dining in the city</p>
                <a href="menu.php" class="btn btn-primary btn-lg mt-3 animate__animated animate__zoomIn">Explore Our Menu</a>
            </div>
        </div>
        <div class="carousel-item" style="height: 90vh;">
            <img src="./images/hero2.jpeg" class="d-block w-100" alt="Tasty Meals" style="object-fit: cover; height: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">Unforgettable Moments</h1>
                <p class="lead animate__animated animate__fadeInUp">Enjoy delicious food in a cozy ambiance</p>
                <a href="reservation.php" class="btn btn-light btn-lg mt-3 animate__animated animate__zoomIn">Reserve a Table</a>
            </div>
        </div>
        <div class="carousel-item" style="height: 90vh;">
            <img src="./images/hero3.jpeg" class="d-block w-100" alt="Exquisite Dining" style="object-fit: cover; height: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">Exceptional Quality</h1>
                <p class="lead animate__animated animate__fadeInUp">Made with the freshest ingredients just for you</p>
                <a href="about.php" class="btn btn-warning btn-lg mt-3 animate__animated animate__zoomIn">Learn More About Us</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Highlights Section -->
<div class="container my-5" data-aos="fade-up">
    <h2 class="text-center mb-4 fw-bold">Why Choose Us?</h2>
    <div class="row text-center">
        <div class="col-md-4" data-aos="fade-right">
            <div class="card border-0 shadow p-4 h-100 bg-light">
                <i class="bi bi-star-fill text-warning fs-1 mb-3"></i>
                <h5 class="fw-bold">Exceptional Quality</h5>
                <p>We use the freshest ingredients to prepare mouthwatering dishes that leave you craving more.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow p-4 h-100 bg-light">
                <i class="bi bi-heart-fill text-danger fs-1 mb-3"></i>
                <h5 class="fw-bold">Heartwarming Ambiance</h5>
                <p>Our cozy and inviting atmosphere sets the perfect stage for your memorable dining experience.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-left">
            <div class="card border-0 shadow p-4 h-100 bg-light">
                <i class="bi bi-clock-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold">Timely Service</h5>
                <p>Enjoy prompt and courteous service that makes every visit a delight.</p>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
            <img src="./images/Modular-Kitchen-1-scaled.jpg" alt="Our Kitchen" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold">About Us</h2>
            <p>At <strong>My Restaurant</strong>, we take pride in delivering exceptional dining experiences. From the freshest ingredients to our welcoming atmosphere, every detail is crafted to ensure your satisfaction.</p>
            <p>Join us for an unforgettable culinary journey and savor the flavors of excellence!</p>
            <a href="about.php" class="btn btn-outline-primary btn-lg mt-3">Learn More</a>
        </div>
    </div>
</div>

<!-- Featured Dishes -->
<div class="container my-5" data-aos="zoom-in">
    <h2 class="text-center">Our Special Dishes</h2>
    <div class="row mt-4" id="dynamicSection">
        <!-- JavaScript will populate this section -->
    </div>
</div>

<!-- Photo Gallery -->
<div class="container my-5" data-aos="fade-up">
    <h2 class="text-center mb-4">Photo Gallery</h2>
    <div class="row g-4">
        <div class="col-md-4" data-aos="flip-left">
            <a href="./images/4343.jpg" data-bs-toggle="lightbox" data-bs-title="Dish 1">
                <img src="./images/4343.jpg" class="img-fluid rounded shadow hover-zoom">
            </a>
        </div>
        <div class="col-md-4" data-aos="flip-up">
            <a href="./images/2323.jpg" data-bs-toggle="lightbox" data-bs-title="Dish 2">
                <img src="./images/2323.jpg" class="img-fluid rounded shadow hover-zoom">
            </a>
        </div>
        <div class="col-md-4" data-aos="flip-right">
            <a href="./images/Good+Restaurant+Service.jpeg" data-bs-toggle="lightbox" data-bs-title="Dish 3">
                <img src="./images/Good+Restaurant+Service.jpeg" class="img-fluid rounded shadow hover-zoom">
            </a>
        </div>
    </div>
</div>

<!-- FAQs Section -->
<div class="container my-5" data-aos="fade-up">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqs">
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                    What are your opening hours?
                </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faq1">
                <div class="accordion-body">
                    We are open daily from 10:00 AM to 11:00 PM.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                    Do you offer vegetarian options?
                </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faq2">
                <div class="accordion-body">
                    Yes, we have a variety of vegetarian and vegan options available on our menu.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                    Do you offer gluten-free dishes?
                </button>
            </h2>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faq3">
                <div class="accordion-body">
                    Yes, we have a selection of gluten-free dishes to cater to dietary needs.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                    Do you host private events?
                </button>
            </h2>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faq4">
                <div class="accordion-body">
                    Yes, we offer private event hosting with customizable menus and seating arrangements.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5">
                    Is there parking available?
                </button>
            </h2>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faq5">
                <div class="accordion-body">
                    Yes, we provide complimentary parking for all our guests.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6">
                    Do you have a kids' menu?
                </button>
            </h2>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faq6">
                <div class="accordion-body">
                    Yes, we have a specially crafted kids' menu with delicious and healthy options.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call-to-Action Section -->
<div class="bg-primary text-white text-center py-5">
    <div class="container" data-aos="zoom-in">
        <h2 class="fw-bold text-white">Ready to Dine with Us?</h2>
        <p>Book your table today and enjoy a delightful dining experience!</p>
        <a href="reservation.php" class="btn btn-light btn-lg mt-3">Reserve a Table</a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dishes = [
            { title: "Grilled Chicken", description: "Tender and juicy grilled chicken served with sides.", image: "./images/chicken.jpg" },
            { title: "Margherita Pizza", description: "Classic Italian pizza with fresh ingredients.", image: "./images/Margherita-Pizza.jpg" },
            { title: "Chocolate Lava Cake", description: "Rich chocolate dessert with a molten center.", image: "./images/ava_Cake.jpg" },
            { title: "Caesar Salad", description: "Fresh and crispy Caesar salad with a tangy dressing.", image: "./images/Caesar_Salad.webp" },
            { title: "Beef Burger", description: "Juicy beef burger with a side of crispy fries.", image: "./images/basic-beef-burger.jpg" },
            { title: "Seafood Pasta", description: "Delicious pasta with fresh seafood and a creamy sauce.", image: "./images/fullsizeoutput_d8c7.jpeg" }
        ];

        const container = document.querySelector('#dynamicSection');
        dishes.forEach(dish => {
            const dishCard = `
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="${dish.image}" class="card-img-top" alt="${dish.title}">
                        <div class="card-body">
                            <h5 class="card-title">${dish.title}</h5>
                            <p class="card-text">${dish.description}</p>
                        </div>
                    </div>
                </div>
            `;
            container.innerHTML += dishCard;
        });
    });
</script>

<?php include 'footer.php'; ?>
