<?php include('header.php'); ?>
<section class="form-12" id="home">
    <div class="form-12-content">
        <div class="container">
            <div class="grid grid-column-2 ">
                <div class="column2">
                </div>
                <div class="column1">


                    <form action="<?= base_url('search'); ?>" method="GET">
                        <div id="autocomplete" class="blog-search form d-flex search-form">
                            <input type="text" name="search" onkeyup="searchData(this.value)" class="form-control" placeholder="Enter Your Keywords">
                            <div id="search-list"></div>
                            <button type="submit" id="search-btn" class="btn search-btn"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Popular Locations</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="row mt-3 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Austin</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g2.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Chicago</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-lg-0 pt-lg-0 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Dallas</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g4.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Houston</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g5.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Jacksonville</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="<?= base_url('static/frontend/')?>assets/images/g6.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">New Jersey</h3>
                            <span class="post">2 Listings</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="grids-4" id="properties">
    <div id="grids4-block" class="py-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Properties For Sale/Rent</h3>
                <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="row mt-5 pt-3">

                <?php foreach($properties as $property) {?>

                <div class="grids4-info  col-lg-4 col-md-6">
                    <a href="<?= base_url('details/' . $property->property_id); ?>"><img
                            src="<?= base_url('uploads/' . $property->mainphoto); ?>" width="100%" height="200px"></a>
                    <ul class="location-top">
                        <li class="rent"><?= $property->property_type; ?></li>
                    </ul>
                    <div class="info-bg">
                        <h5><a href="<?= base_url('details/' . $property->property_id); ?>"><?= $property->title; ?></a>
                        </h5>
                        <p><?= $property->price; ?> / sqft</p>
                        <ul>
                            <li><span class="fa fa-bed"></span> <?= $property->bedroom; ?> Beds</li>
                            <li><span class="fa fa-bath"></span><?= $property->bathroom; ?> Baths</li>
                            <li><span class="fa fa-share-square-o"></span> <?= $property->sqft; ?> sq ft</li>
                        </ul>
                    </div>
                </div>

                <?php }?>
                
            </div>
        </div>
</section>
<section class="w3l-services2" id="services">
    <div class="features-with-17_sur py-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head text-white">What We Offer</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="row pt-5 mt-3">
                <div class="col-lg-5 features-with-17-left_sur">
                    <h4 class="lft-head">We’re Offering Unmatched Services</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Lorem ipsum dolor sit,
                        amet consectetur adipisicing elit. Vero, dolore. Vestibulum ante ipsum primis in faucibus orci
                        luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc Integer sit amet mattis
                        quam.</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla
                        mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
                    <div class="stats-1">
                        <div class="stats-1-left">
                            <h4>2300</h4>
                            <h6>Clients</h6>
                        </div>
                        <div class="stats-1-left">
                            <h4>16</h4>
                            <h6>Awards</h6>
                        </div>
                        <div class="stats-1-left">
                            <h4>2536</h4>
                            <h6>Projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 my-lg-0 my-5 align-self-center features-with-17-right_sur">
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-laptop s4"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h6><a href="#url">Fastest Service</a></h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                        </div>
                    </div>
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-database s5"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h6><a href="#url">Largest Real Estate</a></h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                        </div>
                    </div>
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-lock s3"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h6><a href="#url">Property Insurance</a></h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                        </div>
                    </div>
                    <div class="features-with-17-right-tp_sur">
                        <div class="features-with-17-left1">
                            <span class="fa fa-codepen s2"></span>
                        </div>
                        <div class="features-with-17-left2">
                            <h6><a href="#url">Doorstep Process</a></h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-apply-6">
    <!-- /apply-6-->
    <div class="apply-info py-5">
        <div class="container py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head text-white">What Makes Us The Preferred Choice</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="apply-grids-info row pt-5 mt-3">
                <div class="apply-gd-left col-lg-7">
                    <div class="row">
                        <div class="col-sm-6 sub-apply">
                            <div class="apply-sec-info text-center">

                                <span class="fa fa-university mb-4"></span>

                                <div class="appyl-sub-icon-info">
                                    <h5><a href="#">Maximum Choices</a></h5>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 sub-apply mt-sm-0 mt-5">
                            <div class="apply-sec-info text-center">

                                <span class="fa fa-bath mb-4"></span>

                                <div class="appyl-sub-icon-info">
                                    <h5><a href="#">Buyers Trust Us</a></h5>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 sub-apply mt-5">
                            <div class="apply-sec-info text-center">

                                <span class="fa fa-cubes mb-4"></span>

                                <div class="appyl-sub-icon-info">
                                    <h5><a href="#">Seller Prefer Us</a></h5>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 sub-apply mt-5">
                            <div class="apply-sec-info text-center">

                                <span class="fa fa-hospital-o mb-4"></span>

                                <div class="appyl-sub-icon-info">
                                    <h5><a href="#">Expert Guidance</a></h5>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="apply-gd-right col-lg-5 mt-lg-0 mt-5">
                    <div class="apply-form p-md-5 p-4 mx-auto bg-white mw-100">
                        <h4>What Makes Us </h4>
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Lorem
                            ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Vestibulum ante ipsum
                            primis in Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
                        <p class="mt-3"> Vero, dolore. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-testimonials" id="testimonials">
    <div class="customers-6-content py-5">
        <div class="container py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Happy Clients</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>

            <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                    <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner pb-5">

                    <div class="carousel-item active">
                        <div class="customer row py-5 mt-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c1.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Henry Nicholas</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 off-testi-2">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c2.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Mark Waugh</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c3.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Sarina Willams</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                        <div class="customer row py-5 mt-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c2.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Mark Waugh</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 off-testi-2">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c3.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Sarina Willams</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c1.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Henry Nicholas</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--.item-->
                    <div class="carousel-item">
                        <div class="customer row py-5 mt-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c3.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Sarina Willams</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 off-testi-2">
                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c2.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Mark Waugh</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">

                                <div class="card">
                                    <img class="card-img-top img-responsive"
                                        src="<?= base_url('static/frontend/')?>assets/images/c1.jpg" alt="">
                                    <div class="card-body">
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        <h3 class="card-title">Henry Nicholas</h3>
                                        <p class="sub-title mb-3">Engineer</p>
                                        <p class="card-text text-center mb-4"> Lorem ipsum dolor sit amet, Ea
                                            consequuntur illum facere aperiam sequi optio
                                        </p>
                                        <div class="text-right">
                                            <span class="fa fa-quote-right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.item-->

                </div>
                <!--.carousel-inner-->
            </div>
        </div>
    </div>
    <!--//customers -->
</section>
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">We Are Here For You</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class="main-cont-wthree-fea row pt-3 mt-5">
                <div class="grids-speci1 col-lg-3 col-6">
                    <div class="spec-2 text-center">
                        <span class="fa fa-map-marker"></span>
                        <h3 class="title-spe">180+</h3>
                        <p>Property Locations</p>
                    </div>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <div class="spec-2 text-center">
                        <span class="fa fa-users"></span>
                        <h3 class="title-spe">100+</h3>
                        <p>Professional Agents</p>
                    </div>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                        <span class="fa fa-building"></span>
                        <h3 class="title-spe">250+</h3>
                        <p>Property for Sell</p>
                    </div>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                        <span class="fa fa-home"></span>
                        <h3 class="title-spe">3200+ </h3>
                        <p>Property for Rent</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //specifications -->
</section>

<?php include('footer.php'); ?>