<div class="th-hero-wrapper hero-1" id="hero">
	<div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="hero-inner">
					<div class="th-hero-bg" data-bg-src="<?=base_url()?>assets/img/hero/hero_bg_1_2.jpg"></div>
					<div class="container">
						<div class="hero-style1">
							<span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
							<h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Let’s make your best trip with us</h1>
							<div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="<?=base_url('Tours')?>" class="th-btn th-icon">Explore Tours</a> <a href="<?=base_url('Services')?>" class="th-btn style2 th-icon">Our Services</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="about-area position-relative overflow-hidden space" id="about-sec" data-bg-src="<?=base_url()?>assets/img/bg/about_bg_1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="img-box6">
					<div class="img1"><img src="<?=base_url()?>assets/img/travel/OmBeach.jpg" alt="About"></div>
					<div class="img2"><img src="<?=base_url()?>assets/img/travel/JogFallsSmall.jpg" alt="About"></div>
					<div class="img3"><img src="<?=base_url()?>assets/img/travel/MysorepalaceSmall.jpg" alt="About"></div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="ps-xl-5 ms-xl-3">
					<div class="title-area mb-20">
						<span class="sub-title style1">Welcome to Anaadi Tours & Travels</span>
						<h3 class="sec-title mb-20">Begin Your Travel Story with Us</h3>
						<p class="sec-text mb-30">We are here to provide you one stop solution for all your travel needs.</p>
					</div>
					<div class="about-item-wrap">
						<div class="about-item">
							<div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_1.svg" alt=""></div>
							<div class="about-item_centent">
								<h5 class="box-title">Exclusive Trip</h5>
								<p class="about-item_text">We plan trip accordingly to customer requirement in best way to satisfy them. Also we provide unique and customized itineraries to our customers with 24/7 support.</p>
							</div>
						</div>
						<div class="about-item">
							<div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_2.svg" alt=""></div>
							<div class="about-item_centent">
								<h5 class="box-title">Safety First Always</h5>
								<p class="about-item_text">No compromise for Safety, Comfort and On time travel. We provide utmost importance for safety and comfort for clients.</p>
							</div>
						</div>
					</div>
					<div class="mt-35"><a href="<?=base_url('/About')?>" class="th-btn style3 th-icon">Learn More</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if( count($domestic_tours) > 0 ){ ?>
<section class="category-area3 bg-smoke space" data-bg-src="assets/img/bg/line-pattern3.png">
	<div class="container th-container">
		<div class="title-area text-center">
			<span class="sub-title">Wornderful Place For You</span>
			<h2 class="sec-title">Domestic Tours</h2>
		</div>
		<div class="slider-area">
			<div class="swiper th-slider has-shadow category-slider3" id="categorySlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
				<div class="swiper-wrapper">
					<?php foreach ($domestic_tours as $tour_category => $tours) { 
						$images = explode(",", $tours[0]['images']);
					?>
					<div class="swiper-slide">
						<div class="category-card single2">
							<div class="box-img global-img"><img src="<?=base_url('assets/images/tours/'.$images[0])?>" alt="<?=$tour_category?> Tours"></div>
							<h3 class="box-title"><a href="<?=base_url('Domestictours/'.$tour_category)?>"><?=$tour_category?></a></h3>
							<a class="line-btn" href="<?=base_url('Domestictours/'.$tour_category)?>">See more</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="slider-pagination"></div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if( count($international_tours) > 0 ){ ?>
<section class="category-area3 bg-smoke space" data-bg-src="assets/img/bg/line-pattern3.png">
	<div class="container th-container">
		<div class="title-area text-center">
			<span class="sub-title">Wornderful Place For You</span>
			<h2 class="sec-title">International Tours</h2>
		</div>
		<div class="slider-area">
			<div class="swiper th-slider has-shadow category-slider3" id="categorySlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
				<div class="swiper-wrapper">
					<?php foreach ($international_tours as $tour_category => $tours) { 
						$images = explode(",", $tours[0]['images']);
					?>
					<div class="swiper-slide">
						<div class="category-card single2">
							<div class="box-img global-img"><img src="<?=base_url('assets/images/tours/'.$images[0])?>" alt="<?=$tour_category?> Tours"></div>
							<h3 class="box-title"><a href="<?=base_url('Internationaltours/'.$tour_category)?>"><?=$tour_category?></a></h3>
							<a class="line-btn" href="<?=base_url('Internationaltours/'.$tour_category)?>">See more</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="slider-pagination"></div>
			</div>
		</div>
	</div>
</section>	
<?php } ?>

<section class="tour-area position-relative bg-top-center overflow-hidden space" id="service-sec" data-bg-src="<?=base_url()?>assets/img/bg/tour_bg_1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="title-area text-center">
					<span class="sub-title">Best Place For You</span>
					<h2 class="sec-title">Most Popular Tour</h2>
					<p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="slider-area tour-slider">
			<div class="swiper th-slider has-shadow slider-drag-wrap" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_1.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_2.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_3.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Dubai Tour Package</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_4.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Switzerland</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_1.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="tour-box th-ani gsap-cursor">
							<div class="tour-box_img global-img"><img src="<?=base_url()?>assets/img/tour/tour_box_2.jpg" alt="image"></div>
							<div class="tour-content">
								<h3 class="box-title"><a href="tour-details.html">Italy Tour package</a></h3>
								<div class="tour-rating">
									<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8 Rating)</span></div>
									<a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span> Rating)</a>
								</div>
								<h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
								<div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="contact.html" class="th-btn style4 th-icon">Book Now</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="gallery-area">
	<div class="overflow-hidden space">
		<div class="container">
			<div class="row gy-3 justify-content-between align-items-center">
				<div class="col-lg-6">
					<div class="title-area">
						<span class="sub-title style1">Why Choose Anaadi</span>
						<h2 class="sec-title">Making Every Journey Extraordinary.</h2>
					</div>
				</div>
				<div class="col-lg-5">
					<p class="mb-60">Anaadi Tours and Travels combines the thrill of travel with the comfort of world-class amenities, a offers something for everyone—adventure seekers, relaxation enthusiasts, and even families.</p>
				</div>
			</div>
			<div class="row gy-80">
				<div class="col-md-6 col-xl-4">
					<div class="choose-item">
						<div class="box-icon"><img src="<?=base_url()?>assets/img/icon/choose_3_1.svg" alt="Convenience"></div>
						<div class="media-body">
							<h3 class="box-title">Convenience</h3>
							<p class="box-text">We will provide you all type of solutions accordingly with convenience. As we are the trusted travel partner you will be offered with lot of benefits.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="choose-item">
						<div class="box-icon"><img src="<?=base_url()?>assets/img/icon/about_1_2.svg"alt="Comfort & Saftey"></div>
						<div class="media-body">
							<h3 class="box-title">Comfort & Saftey</h3>
							<p class="box-text">No compromise for Safety, Comfort and On time travel. We provide utmost importance for safety and comfort for clients.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="choose-item">
						<div class="box-icon"><img src="<?=base_url()?>assets/img/icon/choose_3_3.svg" alt="Perfect for All Ages"></div>
						<div class="media-body">
							<h3 class="box-title">Perfect for All Ages</h3>
							<p class="box-text">With activities for kids, teens, adults, and seniors, we offer tour packages for family vacations.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="counter-area space">
	<div class="container">
		<div class="counter-sec7">
			<div class="row gy-5 align-items-center justify-content-center">
				<div class="col-md-6 col-xl-3">
					<div class="counter-item">
						<div class="counter-shape"></div>
						<div class="media-body">
							<h3 class="box-number"><span class="counter-number">12</span></h3>
							<h6 class="counter-title">Years Experience</h6>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="counter-item">
						<div class="counter-shape"></div>
						<div class="media-body">
							<h3 class="box-number"><span class="counter-number">8</span>k</h3>
							<h6 class="counter-title">Tour Completed</h6>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="counter-item">
						<div class="counter-shape"></div>
						<div class="media-body">
							<h3 class="box-number"><span class="counter-number">19</span>k</h3>
							<h6 class="counter-title">Happy Travellers</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="testi-area13 overflow-hidden" id="testi-sec">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-6">
				<div class="testi-image2">
					<div class="testi-img"><img src="<?=base_url()?>assets/img/normal/testimonials.png" alt="Testimonials"></div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="space-extra">
					<div class="title-area mb-40 pe-xl-5 me-xl-5">
						<span class="sub-title">Testimonial</span>
						<h2 class="sec-title">What Client Say About us Tourm?</h2>
					</div>
					<div class="swiper th-slider testiSlide13" id="testiSlide13" data-slider-options='{"paginationType":"progressbar","direction":"vertical","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"}}}'>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Sarah Rahman</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Angelina Rose</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Michel Smith</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Jesmen</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Sarah Rahman</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<h4 class="box-title2">Popular Themes for Worldwide Tours</h4>
									<div class="box-content">
										<p class="box-text">“A worldwide tour involves visiting multiple destinations across the globe, often spanning several countries, continents, and iconic landmark. It can be customized based on personal interest, such as history, culture, nature, adventure, or luxury travel. A world tour may last anywhere from a few weeks to several months or even a year.”</p>
										<h6 class="box-title">Angelina Rose</h6>
										<span class="box-desig">World Traveler</span>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pagination"></div>
						<div class="icon-box"><button data-slider-prev="#testiSlide13" class="slider-arrow style7 default"><img src="<?=base_url()?>assets/img/icon/right-arrow2.svg" alt=""></button> <button data-slider-next="#testiSlide13" class="slider-arrow style7 default"><img src="<?=base_url()?>assets/img/icon/left-arrow2.svg" alt=""></button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BLogs -->
<!-- <section class="bg-smoke overflow-hidden space overflow-hidden" id="blog-sec">
	<div class="container">
		<div class="mb-30 text-center text-md-start">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-7">
					<div class="title-area mb-md-0">
						<span class="sub-title">About Us Restaurant</span>
						<h2 class="sec-title">News & Articles From Anaadi Tours and Travels</h2>
					</div>
				</div>
				<div class="col-md-auto"><a href="blog.html" class="th-btn style4 th-icon">See More Articles</a></div>
			</div>
		</div>
		<div class="slider-area">
			<div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 05 2024</a> <a href="blog.html">6 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New Jersy</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 06 2024</a> <a href="blog.html">7 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">The best time to visit japan & enjoy the cherry blossoms</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 07 2024</a> <a href="blog.html">8 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for adventure seekers</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 09 2024</a> <a href="blog.html">9 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New Jersy</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 10 2024</a> <a href="blog.html">10 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">The best time to visit japan & enjoy the cherry blossoms</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog-box th-ani">
							<div class="blog-img global-img"><img src="<?=base_url()?>assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
							<div class="blog-box_content">
								<div class="blog-meta"><a class="author" href="blog.html">July 12 2024</a> <a href="blog.html">11 min read</a></div>
								<h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for adventure seekers</a></h3>
								<a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="20%" data-left="-17%"><img src="<?=base_url()?>assets/img/shape/shape_1.png" alt="shape"></div>
		<div class="shape-mockup shape2 d-none d-xl-block" data-bottom="5%" data-left="-17%"><img src="<?=base_url()?>assets/img/shape/shape_2.png" alt="shape"></div>
		<div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="12%" data-left="-10%"><img src="<?=base_url()?>assets/img/shape/shape_3.png" alt="shape"></div>
	</div>
</section> -->