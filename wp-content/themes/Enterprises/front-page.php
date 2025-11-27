<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<?php
$hero_image = get_field('hero_image');
$hero_image_url = '';

if (is_array($hero_image) && isset($hero_image['url'])) {
	$hero_image_url = $hero_image['url'];
} elseif (is_string($hero_image)) {
	$hero_image_url = $hero_image;
}

$hero_bg = $hero_image_url
	? "background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('$hero_image_url') center/cover no-repeat;"
	: "";
?>

<section class="hero" style="<?php echo esc_attr($hero_bg); ?>">


	<div class="hero-content">
		<?php if (get_field('hero_title')) : ?>
			<h1><?php the_field('hero_title'); ?></h1>
		<?php endif; ?>
		<?php if (get_field('hero_subtitle')) : ?>
			<p class="hero-subtitle"><?php the_field('hero_subtitle'); ?></p>
		<?php endif; ?>

		<?php
		$button_text = get_field('button_text');
		$button_link = get_field('button_link');

		if ($button_text) : ?>
			<a href="<?php echo esc_url($button_link); ?>"
				class="hero-btn btn-primary"
				<?php // target="_blank" 
				?>
				rel="noopener noreferrer">
				<?php echo esc_html($button_text); ?>
			</a>

		<?php endif; ?>
	</div>
</section>

<section>
	<div class="front-posts-section" style="max-width:900px; margin:40px auto; padding:20px;">
		<h2 style="margin-bottom:20px; text-align:center;">Latest Posts</h2>

		<?php
		// Custom query to fetch posts
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => 10, // number of posts to show
		);
		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('front-post-item'); ?> style="margin-bottom:25px; padding:15px; border-bottom:1px solid #ddd;">
					<h3 class="entry-title" style="margin:0;">
						<a href="<?php the_permalink(); ?>" style="text-decoration:none; color:#333;">
							<?php the_title(); ?>
						</a>
					</h3>
					<div class="entry-meta" style="font-size:14px; color:#666; margin-top:5px;">
						<span class="posted-on">📅 <?php echo get_the_date(); ?></span> |
						<span class="byline">✍️ <?php the_author_posts_link(); ?></span> |
						<span class="categories">📂 <?php the_category(', '); ?></span>
					</div>
				</article>

			<?php endwhile; ?>

			<!-- Pagination -->
			<div class="pagination" style="margin-top:20px; text-align:center;">
				<?php
				the_posts_pagination(array(
					'prev_text' => '« Prev',
					'next_text' => 'Next »',
				));
				?>
			</div>

		<?php else : ?>
			<p>No posts found.</p>
		<?php endif;

		// Reset query
		wp_reset_postdata();
		?>
	</div>
</section>

<section Class="third">
	<div class="container">
		<div class="left">
			<div class="image">
				<img src="<?php echo get_template_directory_uri(); ?>/Images/about.webp" alt="Team working">
			</div>
			<div class="right">
				<div class="cont">
					<h4>About our company </h4>
					<h2>Your Passionate Tech Partner Fueling Business Growth</h2>
					<p>We're a team of passionate IT specialists driven by a shareds mission: to empower businesses through strategic technology. We don't just more build websites and apps; we craft innovative solutions that unlock your potential and propel you towards success.</p>
				</div>
				<div class="boxes">
					<div class="left-box">
						<h5> &#10003; Free Consultation</h5>
						<p>IT agencies usually offer free consultat-ions to understand a potential.</p>
					</div>

					<div class="right-box">
						<h5>&#10003; Active Team</h5>
						<p>IT agencies usually offer free consultat-ions to understand a potential.</p>
					</div>
				</div>
				<a href="#" class="btn-primary">Contact Us</a>


</section>



<!-- Services Section -->
<section class="services">
	<div class="container">
		<h2>Our Services</h2>
		<p class="subtitle">We offer a wide range of solutions to help your business grow online.</p>

		<div class="service-grid">
			<div class="service-card">
				<img src="https://img.icons8.com/ios-filled/100/000000/web-design.png" alt="Web Design Icon">
				<h3>Web Design</h3>
				<p>Modern and responsive web designs that look great on all devices.</p>
			</div>

			<div class="service-card">
				<img src="https://img.icons8.com/ios-filled/100/000000/code.png" alt="Development Icon">
				<h3>Development</h3>
				<p>Custom websites and apps built with the latest technologies.</p>
			</div>

			<div class="service-card">
				<img src="https://img.icons8.com/ios-filled/100/000000/digital-marketing.png" alt="Marketing Icon">
				<h3>Digital Marketing</h3>
				<p>Boost your reach with our SEO, social media, and ad campaigns.</p>
			</div>
		</div>
	</div>
	<a href="#" class="btn-secondry">Explore More</a>
</section>



<section Class="fourth">
	<div class="container">
		<div class="left">
			<div class="back">
				<div class="image-chose">
					<img src="<?php echo get_template_directory_uri(); ?>/Images/chose.webp" alt="Team working">
				</div>
			</div>
			<div class="chose">
				<div class="cont">
					<h4>Why Choose Us </h4>
					<h2>Your Trusted Partner For IT Success</h2>
					<p>In today's digital landscape, having a strong online presence and robust IT infrastructure is crucial for business growth. But with so many IT agencies out there, why choose Webteck? Here's why we stand out</p>
				</div>
				<div class="boxes">
					<div class="left-box">
						<h5> &#10003;Proven Track Record of Success</h5>
						<p>We take the time to delve into <br>your unique goals, challenges, and target audience before crafting any solutions.</p>
					</div>

					<div class="right-box">
						<h5>&#10003; A Team of Experts You Can Trust</h5>
						<p>IT agencies usually offer free consultat-ions to understand a potential.</p>
					</div>
				</div>

</section>

<!-- <section class="faq">
	<div class="faq-content">
		<h2>let's Discuss your Project</h2>
		<p>Struggling with IT challenges? Webteck offers a helping hand! Schedule a free consultation to discuss your unique project needs. Our passionate team will collaborate with you to craft solutions that unlock your business potential.discuss your unique project needs.</p>
	</div>
</section> -->


<section class="dynamic-slider py-5">
    <div class="container">
         <!-- Dynamic Slider Title -->
        <h2 class="slider-title text-center mb-4 fw-bold">
            <?php 
                // Fetch the dynamic slider title from ACF
                $slider_title = get_field('slider_title'); 
                if ($slider_title) {
                    echo esc_html($slider_title); // Display the title if it exists
                } else {
                    echo 'test'; // Default title if no title is set
                }
            ?>
        </h2>
        <!-- Swiper Slider -->
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php if (have_rows('slider_images')) : ?>
                    <?php while (have_rows('slider_images')) : the_row(); 
                        $image = get_sub_field('slider_image');
                    ?>
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="slider-item position-relative">
                                <?php if ($image) : ?>
                                    <!-- Image -->
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded">
                                <?php else : ?>
                                    <!-- Fallback Image -->
                                    <div class="fallback-image d-flex justify-content-center align-items-center w-100 h-100 bg-secondary text-white rounded">
                                        <span>No Image Available</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <!-- If no images are found, show a default message -->
                    <div class="swiper-slide">
                        <div class="slider-item d-flex justify-content-center align-items-center w-100 h-100 bg-secondary text-white rounded">
                            <span>No Images to Display</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination (Below images) -->
            <div class="swiper-pagination"></div>

            <!-- Navigation buttons (inside the swiper container) -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>



<!-- Bootstrap JS (optional, needed for some components like dropdowns or modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS Library -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Your Custom Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1, // Initially show 1 slide
            spaceBetween: 30, // Spacing between slides
            loop: true, // Infinite loop
            autoplay: {
                delay: 4000, // 4 seconds for auto-slide
                disableOnInteraction: false, // Keep sliding even if user interacts
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // Make pagination clickable
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3, // Show 3 slides on large screens
                },
                768: {
                    slidesPerView: 2, // Show 2 slides on medium screens
                },
                480: {
                    slidesPerView: 1, // Show 1 slide on small screens
                }
            }
        });

        // Ensure navigation is only destroyed if there's one or fewer slides
        swiper.on('init', function () {
            if (swiper.slides.length <= 1) {
                swiper.navigation.destroy();
            }
        });

        // Initialize Swiper
        swiper.init();
    });
</script>



<style>
	/* Image scale on hover */
.swiper-slide .slider-item img {
    transition: transform 0.9s ease-in-out; /* Smooth transition for scale */
}

/* Scale image on hover */
.swiper-slide .slider-item img:hover {
    transform: scale(1.4); /* Scale up the image */
}

/* Position navigation buttons outside the image, but inside the swiper container */
.swiper-button-prev,
.swiper-button-next {
    position: absolute;
    top: 50%;  /* Position vertically in the middle */
    transform: translateY(-50%); /* Adjust for perfect centering */
    z-index: 10; /* Ensure buttons are on top of the images */
    color: black;
    border-radius: 90%;
}

/* Position the previous button on the left */
.swiper-button-prev {
    left: 1px; /* Adjust the distance from the left */
}

/* Position the next button on the right */
.swiper-button-next {
    right: 1px; /* Adjust the distance from the right */
}

/* Style the pagination dots at the bottom */
.swiper-pagination {
    position: absolute;
    bottom: 1px;  /* Adjust the distance from the bottom */
    width: 100%;
    text-align: center;
    z-index: 10;
}

.swiper-pagination-bullet {
    background-color: #bebdbdff; /* White dots */
    width: 12px;
    height: 12px;
    margin: 0 4px;
    opacity: 0.7;
    transition: opacity 0.3s;
}

.swiper-pagination-bullet-active {
    background-color: #000000ff; /* Active dot color */
    opacity: 1;
    transform: translateY(0) scale(1); /* Initial position and size */
    animation: bounce 0.6s ease-in-out;
}

@keyframes bounce {
    0% {
        transform: translateY(0) scale(1); /* Normal size */
    }
    30% {
        transform: translateY(-15px) scale(1.5); /* Slightly above and scale up */
    }
    50% {
        transform: translateY(0) scale(1.2); /* Back to original size */
    }
    70% {
        transform: translateY(-6px) scale(1.3); /* Slight bounce with a little scaling */
    }
    100% {
        transform: translateY(0) scale(1.1); /* End at original position and size */
    }
}

/* Style the slider image and container */
.swiper-slide {
    position: relative;
    height: 400px; /* Set a height for the slider */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

/* .swiper-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
} */
/* Ensure images fit without stretching */
.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Adjust the image to fit the container while maintaining aspect ratio */
    object-position: center; /* Center the image within the container */
}


/* Fallback Image Style */
.fallback-image {
    font-size: 1.5rem;
    font-weight: bold;
    color: #fff;
    text-align: center;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>



</body>

</html>
<?php get_footer(); ?>