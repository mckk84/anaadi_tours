<div class="breadcumb-wrapper" data-bg-src="<?=base_url()?>assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?=$tour['title']?></h1>
        </div>
    </div>
</div>
<div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="img-box3">
                    <?php $images = explode(",", $tour['images']);
                    foreach($images as $i => $img){?>
                    <div class="img<?=$i?>"><img src="<?=base_url('assets/images/tours/'.$img)?>" alt="Tour"></div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="ps-xl-4">
                    <div class="title-area mb-20">
                        <span class="sub-title style1">Tour Details</span>
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading"><?=$tour['title']?></h2>
                    </div>
                    <p class="pe-xl-5">Anaadi Tours and Travels enables you to discover a new destination and offer unique ideas to your travel. </p>
                    <p class="mb-30 pe-xl-5">Anaadi Tours and Travels provide a wide range of holiday tour packages for all the domestic and international destinations across the world. </p>
                    <div class="about-item-wrap">
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_1.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Exclusive Trip</h5>
                                <p class="about-item_text">We plan trip accordingly to customer requirement in best way to satisfy them. Also we provide unique and customized itineraries to our customers with 24/7 support.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/about_1_2.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Safety First Always</h5>
                                <p class="about-item_text">No compromise for Safety, Comfort and On time travel. We provide utmost importance for safety and comfort for clients.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="<?=base_url()?>assets/img/icon/choose_3_1.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Convenience</h5>
                                <p class="about-item_text">We will provide you all type of solutions accordingly with convenience. As we are the trusted travel partner you will be offered with lot of benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35"><a href="<?=base_url('/Contact')?>" class="th-btn style3 th-icon">Contact With Us</a></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-18%"><img src="<?=base_url()?>assets/img/shape/shape_2_1.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="-15%"><img src="<?=base_url()?>assets/img/shape/shape_2_2.png" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-112%"><img src="<?=base_url()?>assets/img/shape/shape_2_3.png" alt="shape"></div>
        <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="-12%"><img src="<?=base_url()?>assets/img/shape/shape_2_4.png" alt="shape"></div>
    </div>
</div>