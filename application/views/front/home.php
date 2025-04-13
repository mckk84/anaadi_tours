<?php if( count($homeslider) > 0 ){ ?>
<div class="th-hero-wrapper hero-1" id="hero">
	<div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
		<div class="swiper-wrapper">
			<?php foreach ($homeslider as $tour_category => $slider) { ?>
			<div class="swiper-slide">
				<div class="hero-inner">
					<div class="th-hero-bg" data-bg-src="<?=base_url('assets/images/homeslider/'.$slider['image'])?>"></div>
					<div class="container">
						<div class="hero-style1">
							<span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s"><?=$slider['sub_title']?></span>
							<h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s"><?=$slider['title']?></h1>
							<div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
								<a href="<?=base_url('Tours')?>" class="th-btn th-icon">Explore Tours</a> 
								<a href="<?=base_url('Services')?>" class="th-btn style2 th-icon">Our Services</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<?php } ?>
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
					<div class="title-area mb-10">
						<span class="sub-title fs-2 style1">Welcome to Anaadi Tours & Travels</span>
						<h3 class="sec-title mb-10">Begin Your Travel Story with Us</h3>
						<p class="sec-text mb-20">We are here to provide you one stop solution for all your travel needs.</p>
					</div>
					<div class="about-item-wrap">
						<div class="about-item">
							<div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_1.svg" alt=""></div>
							<div class="about-item_centent">
								<h5 class="box-title">Exclusive Trip</h5>
								<p class="about-item_text">We plan trip according to customer requirement and also provide unique and customized itineraries to our customers.</p>
							</div>
						</div>
						<div class="about-item">
							<div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_2.svg" alt=""></div>
							<div class="about-item_centent">
								<h5 class="box-title">Safety First Always</h5>
								<p class="about-item_text">We provide utmost importance for safety and comfort for clients.</p>
							</div>
						</div>
					</div>
					<div class="mt-30"><a href="<?=base_url('/About')?>" class="th-btn th-icon">Read More</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if( count($domestic_tours) > 0 ){ ?>
<section class="category-area3 bg-smoke space" data-bg-src="<?=base_url()?>assets/img/bg/line-pattern3.png">
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
							<div class="box-img global-img shadow"><img class="shadow" src="<?=base_url('assets/images/tours/'.$images[0])?>" alt="<?=$tour_category?> Tours"></div>
							<h3 class="box-title"><a href="<?=base_url('Domestictours/'.$tour_category)?>"><?=$tour_category?></a></h3>
							<a class="line-btn" href="<?=base_url('Domestictours/'.$tour_category)?>">See more</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php if( count($international_tours) > 0 ){ ?>
<section class="category-area3 bg-smoke space pt-0" data-bg-src="<?=base_url()?>assets/img/bg/line-pattern3.png">
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
			</div>
		</div>
	</div>
</section>	
<?php } ?>

<?php if(isset($destination_tours) && count($destination_tours) > 0 ) { ?>
<div class="destination-area position-relative overflow-hidden space mt-0">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Top Destination</span>
            <h2 class="sec-title">Popular Destination</h2>
        </div>
        <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
            <div class="swiper-wrapper">
                <?php foreach($destination_tours as $tours){
                	$images = explode(",", $tours['images']);
                ?>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img">
                            <img src="<?=base_url('assets/images/tours/'.$images[0])?>" alt="<?=$tours['destination_location']?>">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="<?=base_url('Destination/'.$tours['destination_location'])?>"><?=$tours['destination_location']?></a></h4>
                                    <span class="destination-subtitle"><?=$tours['count']?> Listing</span>
                                </div>
                                <div class=""><a href="<?=base_url('Destination/'.$tours['destination_location'])?>" class="th-btn style2 th-icon">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            	<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- <div class="gallery-area">
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
</div> -->
<!-- <div class="counter-area space">
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
</div> -->

<div class="bg-smoke overflow-hidden space">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <div class="title-area">
                    <span class="sub-title style1">Why Choose Us</span>
                    <h2 class="sec-title">Why Choose Us for Your Tour?</h2>
                </div>
                <div class="choose-about wow fadeInUp">
                    <div class="choose-about_icon"><img src="<?=base_url()?>assets/img/icon/choose_1_1.svg" alt="image"></div>
                    <div class="media-body">
                        <h3 class="box-title">Safety First</h3>
                        <p class="choose-about_text">We provide utmost importance for safety and comfort for clients.</p>
                    </div>
                </div>
                <div class="choose-about wow fadeInUp">
                    <div class="choose-about_icon"><img src="<?=base_url()?>assets/img/icon/choose_1_2.svg" alt="image"></div>
                    <div class="media-body">
                        <h3 class="box-title">Budget Efficiency</h3>
                        <p class="choose-about_text">Anaadi offers a travel experience designed to minimize costs while still allowing for exploration and enjoyment.</p>
                    </div>
                </div>
                <div class="choose-about wow fadeInUp">
                    <div class="choose-about_icon"><img src="<?=base_url()?>assets/img/icon/guide.svg" alt="image"></div>
                    <div class="media-body">
                        <h3 class="box-title">Best Guide</h3>
                        <p class="choose-about_text">Anaadi leads visitors on tours, providing information and guidance about a specific location, its history, culture, and attractions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-wrapp">
                    <div class="img1 global-img"><img src="<?=base_url()?>assets/img/normal/choose_1.jpg" alt="Choose"></div>
                    <div class="img1 global-img"><img src="<?=base_url()?>assets/img/normal/choose_2.jpg" alt="Choose"></div>
                    <div class="img1 global-img"><img src="<?=base_url()?>assets/img/normal/choose_3.jpg" alt="Choose"></div>
                    <div class="img1 global-img"><img src="<?=base_url()?>assets/img/normal/choose_4.jpg" alt="Choose"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-block" data-top="5%" data-right="-20%"><img src="<?=base_url()?>assets/img/shape/shape_19.png" alt=""></div>
        <div class="shape-mockup d-none d-xxl-block" data-bottom="-17%" data-left="-20%"><img src="<?=base_url()?>assets/img/shape/shape_20.png" alt=""></div>
    </div>
</div>
<div class="counter-sec2 space">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">
            <div class="col-md-6 col-xl-3">
                <div class="counter-card style3">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">12</span></h3>
                        <h6 class="counter-title">Years Experience</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="counter-card style3">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                        <h6 class="counter-title">Tour Completed</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="counter-card style3">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">19</span>k</h3>
                        <h6 class="counter-title">Happy Travellers</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="40%" data-left="-17%"><img src="<?=base_url()?>assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="55%" data-left="-18%"><img src="<?=base_url()?>assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="47%" data-left="-10%"><img src="<?=base_url()?>assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xl-block" data-bottom="-15%" data-left="-15%"><img src="<?=base_url()?>assets/img/shape/shape_2_3.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="30%" data-right="-14%"><img src="<?=base_url()?>assets/img/shape/shape_2_2.png" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xl-block" data-bottom="-10%" data-right="-14%"><img src="<?=base_url()?>assets/img/shape/shape_2_5.png" alt="shape"></div>
    </div>
</div>

<!-- <section class="testi-area13 overflow-hidden" id="testi-sec">
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
						<h2 class="sec-title">What Clients Say About Us?</h2>
					</div>
					<div class="swiper th-slider testiSlide13" id="testiSlide13" data-slider-options='{"paginationType":"progressbar","direction":"vertical","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"}}}'>
						<div class="swiper-wrapper">
							<?php foreach($testimonial as $row){?>
							<div class="swiper-slide">
								<div class="testi-grid2 style2">
									<div class="box-review"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
									<div class="box-content">
										<p class="box-text">“<?=$row['testimonial']?>”</p>
										<h6 class="box-title"><?=$row['name']?></h6>
										<span class="box-desig"><?=$row['sub_title']?></span>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="slider-pagination"></div>
						<div class="icon-box"><button data-slider-prev="#testiSlide13" class="slider-arrow style7 default"><img src="<?=base_url()?>assets/img/icon/right-arrow2.svg" alt=""></button> <button data-slider-next="#testiSlide13" class="slider-arrow style7 default"><img src="<?=base_url()?>assets/img/icon/left-arrow2.svg" alt=""></button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="testi-area11 overflow-hidden space" id="testi-sec">
	<div class="container-fluid p-0">
		<div class="title-area text-center">
			<span class="sub-title">Testimonial</span>
			<h2 class="sec-title">What Client Say About us</h2>
		</div>
		<div class="slider-area">
			<div class="swiper th-slider slider-drag-wrap testiSlider11" id="testiSlider0" data-slider-options='{"centeredSlides":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
				<div class="swiper-wrapper">
					<?php foreach($testimonial as $row){?>
					<div class="swiper-slide">
						<div class="testi-card4 gsap-cursor" style="height:277px;">
							<div class="testi-card4_review">
								<i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
							</div>
							<div class="box-content">
								<div style="max-height: 78px;" class="box-text overflow-hidden">“<?=$row['testimonial']?>”</div>
								<div class="box-profile">
									<div class="box-avater"><img src="<?=base_url()?>assets/img/testimonial/avatar.jpg" alt=""></div>
									<div class="media-body">
										<h3 class="box-title"><?=$row['name']?></h3>
										<span class="box-desig"><?=$row['sub_title']?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="slider-pagination"></div>
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