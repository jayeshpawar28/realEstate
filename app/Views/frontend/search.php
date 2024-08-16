<?php include('header.php'); ?>
<section class="form-12" id="home">
    <div class="form-12-content">
        <div class="container">
            <div class="grid grid-column-2 ">
                <div class="column2">
                </div>
                <div class="column1">


                    <form action="<?= base_url('search'); ?>" method="GET">
                        <div class="blog-search form d-flex search-form">
                            <input type="search" class="form-control" placeholder="Enter Your Keywords"
                                name="keyword" required="required" value="<?= $_GET['keyword']; ?>">
                            <button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="grids-4" id="properties">
    <div id="grids4-block" class="py-5">
        <div class="container py-md-3">
            
            <div class="row mt-5 pt-3">

                <?php foreach($users as $property) {?>

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


<?php include('footer.php'); ?>