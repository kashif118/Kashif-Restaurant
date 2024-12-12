<?php include 'header.php'; ?>
<style>
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }
</style>
<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Our Menu</h2>
    <p class="text-center lead text-muted">Discover a variety of dishes crafted with fresh ingredients and a touch of love. Bon appétit!</p>

    <!-- Search Bar -->
    <div class="input-group mb-5">
        <input type="text" id="menuSearch" class="form-control" placeholder="Search for a dish...">
        <button class="btn btn-primary" onclick="searchMenu()">Search</button>
    </div>

    <!-- Appetizers Section -->
    <div class="row mt-5" id="menuSection">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <h4 class="text-primary fw-bold d-flex align-items-center">
                        <i class="bi bi-basket-fill me-2"></i> Appetizers
                    </h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Garlic Bread
                            <span class="badge bg-primary rounded-pill">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Stuffed Mushrooms
                            <span class="badge bg-primary rounded-pill">$7</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Bruschetta
                            <span class="badge bg-primary rounded-pill">$6</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Course Section -->
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <h4 class="text-success fw-bold d-flex align-items-center">
                        <i class="bi bi-egg-fried me-2"></i> Main Course
                    </h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Grilled Chicken
                            <span class="badge bg-success rounded-pill">$15</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Beef Steak
                            <span class="badge bg-success rounded-pill">$20</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pasta Alfredo
                            <span class="badge bg-success rounded-pill">$12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Chef's Specials Section -->
    <div class="mt-5">
        <h3 class="text-center mb-4 fw-bold">Chef's Specials</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/GrilledSalmon2.webp" class="card-img-top rounded-top" alt="Chef's Dish">
                    <div class="card-body text-center">
                        <h5 class="card-title">Signature Grilled Salmon</h5>
                        <p class="card-text text-muted">Freshly grilled salmon with a lemon butter sauce.</p>
                        <span class="badge bg-primary rounded-pill">$25</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/tUXEDO-cAKE-004.webp" class="card-img-top rounded-top" alt="Chef's Dessert">
                    <div class="card-body text-center">
                        <h5 class="card-title">Triple Chocolate Mousse</h5>
                        <p class="card-text text-muted">Rich layers of milk, dark, and white chocolate mousse.</p>
                        <span class="badge bg-warning rounded-pill">$12</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/dark-rum-mojito-2.webp" class="card-img-top rounded-top" alt="Chef's Drink">
                    <div class="card-body text-center">
                        <h5 class="card-title">Classic Mojito</h5>
                        <p class="card-text text-muted">Refreshing mojito with fresh mint and lime.</p>
                        <span class="badge bg-success rounded-pill">$8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Desserts Section -->
    <div class="mt-5">
        <h3 class="text-center mb-4 fw-bold">Desserts</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <h4 class="text-warning fw-bold">
                            <i class="bi bi-cupcake me-2"></i> Sweet Treats
                        </h4>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Chocolate Lava Cake
                                <span class="badge bg-warning rounded-pill">$10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cheesecake Delight
                                <span class="badge bg-warning rounded-pill">$9</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tiramisu Heaven
                                <span class="badge bg-warning rounded-pill">$8</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./images/What.png" class="img-fluid rounded shadow-lg" alt="Desserts">
            </div>
        </div>
    </div>

    <!-- Beverages Section -->
    <div class="mt-5">
        <h3 class="text-center mb-4 fw-bold">Beverages</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/cafe-cappuccino.jpg" class="card-img-top rounded-top" alt="Coffee">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text text-muted">A classic cup of rich and creamy coffee.</p>
                        <span class="badge bg-dark rounded-pill">$5</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/fresh-berry.jpg" class="card-img-top rounded-top" alt="Smoothie">
                    <div class="card-body text-center">
                        <h5 class="card-title">Berry Smoothie</h5>
                        <p class="card-text text-muted">Fresh mixed berries blended into perfection.</p>
                        <span class="badge bg-danger rounded-pill">$6</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg">
                    <img src="./images/tTom.jpg" class="card-img-top rounded-top" alt="Cocktail">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tropical Cocktail</h5>
                        <p class="card-text text-muted">A vibrant mix of tropical flavors to refresh your day.</p>
                        <span class="badge bg-success rounded-pill">$7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nutritional Information -->
    <div class="mt-5">
        <h3 class="text-center mb-4 fw-bold">Nutritional Information</h3>
        <div class="alert alert-info" role="alert">
            All our dishes are prepared with fresh, locally-sourced ingredients. Each dish is crafted to provide a balanced and healthy meal.
        </div>
    </div>
</div>

<script>
    // Search Menu Functionality
    function searchMenu() {
        const query = document.getElementById('menuSearch').value.toLowerCase();
        const menuItems = document.querySelectorAll('#menuSection .list-group-item');

        menuItems.forEach(item => {
            const itemName = item.textContent.toLowerCase();
            if (itemName.includes(query)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>

<?php include 'footer.php'; ?>
