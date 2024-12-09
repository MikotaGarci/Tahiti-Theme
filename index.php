<?php get_header(); ?>

<!-- Welcome to Tahiti -->
<section class="hero hero-welcome" id="hero">
    <h1>Welcome to Tahiti</h1>
    <p>Your dream destination awaits.</p>
    <a href="#destinations" class="btn btn-primary">Explore More</a>
</section>

<!-- Cards Section -->
<section class="cards-section" id="destinations">
    <div class="cards">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bora-bora.jpg" alt="Bora Bora">
            <h3>BORA BORA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moorea.jpg" alt="Moorea">
            <h3>MOOREA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raiatea.jpg" alt="Raiatea">
            <h3>RAIATEA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahaa.jpg" alt="Taha'a">
            <h3>TAHA'A</h3>
            <p>From $2,500</p>
        </div>
    </div>
</section>

<!-- Why Tahiti -->
<section class="hero hero-about" id="why-tahiti">
    <div class="container">
        <h2>Why Tahiti?</h2>
        <p>Tahiti is not just a place; it’s an experience. Its pristine beaches, crystal-clear lagoons, and vibrant culture make it a dream destination for travelers around the world.</p>
        <div class="features">
            <div class="feature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bora-bora.jpg" alt="Beaches">
                <h3>Stunning Beaches</h3>
                <p>Relax on soft white sand while enjoying the gentle waves of the Pacific.</p>
            </div>
            <div class="feature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moorea.jpg" alt="Culture">
                <h3>Rich Culture</h3>
                <p>Immerse yourself in the traditions and warm hospitality of the locals.</p>
            </div>
            <div class="feature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raiatea.jpg" alt="Adventure">
                <h3>Adventures</h3>
                <p>Discover lush mountains, vibrant marine life, and hidden waterfalls.</p>
            </div>
        </div>
    </div>
</section>

<!-- Experience Tahiti -->
<section class="hero hero-contact" id="experience">
    <div class="container">
        <h2>Experience Tahiti</h2>
        <p>From luxurious overwater bungalows to exciting activities, Tahiti offers something for everyone.</p>
        <div class="activities">
            <div class="activity">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahaa.jpg" alt="Overwater Bungalows">
                <h3>Overwater Bungalows</h3>
                <p>Stay in iconic accommodations that offer breathtaking views.</p>
            </div>
            <div class="activity">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-bg.jpg" alt="Marine Life">
                <h3>Marine Life</h3>
                <p>Snorkel or dive to witness vibrant coral reefs and colorful fish.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
