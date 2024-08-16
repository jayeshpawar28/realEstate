<?php include('header.php');
    $session = session();
?>

<section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2><?= $property[0]->title; ?></h2>

        </div>
    </div>
</section>


<section class="p-5 images">
    <div class="container">
        <div class="row">

            <div class="col-md-8 text-center">

                <div class="card">
                    <img src="<?= base_url('uploads/' . $property[0]->mainphoto); ?>" width="100%" height="400px"
                        class="mb-4" id="main_img">
                    <div class="card-body">
                        <img src="<?= base_url('uploads/' . $property[0]->photo1); ?>" height="100px" width="24%"
                            class="photo" onclick="changeImg('<?= base_url('uploads/' . $property[0]->photo1); ?>')">
                        <img src="<?= base_url('uploads/' . $property[0]->photo2); ?>" height="100px" width="24%"
                            class="photo" onclick="changeImg('<?= base_url('uploads/' . $property[0]->photo2); ?>')">
                        <img src="<?= base_url('uploads/' . $property[0]->photo3); ?>" height="100px" width="24%"
                            class="photo" onclick="changeImg('<?= base_url('uploads/' . $property[0]->photo3); ?>')">
                        <img src="<?= base_url('uploads/' . $property[0]->photo4); ?>" height="100px" width="24%"
                            class="photo" onclick="changeImg('<?= base_url('uploads/' . $property[0]->photo4); ?>')">
                    </div>

                    <h3 class="mt-4">Property Details</h3>

                <div class="row m-4">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">Address : <span><?= $property[0]->address; ?>
                            </span></li>
                            <li class="list-group-item  d-flex justify-content-between">City : <span><?= $property[0]->city; ?></span></li>
                            <li class="list-group-item  d-flex justify-content-between">State : <span><?= $property[0]->state; ?></span></li>
                            <li class="list-group-item  d-flex justify-content-between">Pincode : <span><?= $property[0]->pincode; ?></span></li>
                            <li class="list-group-item  d-flex justify-content-between">Active : <span><?= $property[0]->is_active; ?></span></li>
                            <li class="list-group-item  d-flex justify-content-between">Added Date : <span><?= $property[0]->date; ?></span></li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">Price : <span><?= $property[0]->price; ?></span></li>
                            <li class="list-group-item d-flex justify-content-between">Total SQFT : <span><?= $property[0]->sqft; ?></span></li>
                            <li class="list-group-item d-flex justify-content-between">Scale/Rent : <span><?= $property[0]->property_type; ?></span></li>
                            <li class="list-group-item d-flex justify-content-between">Bedroom : <span><?= $property[0]->bedroom; ?></span></li>
                            <li class="list-group-item d-flex justify-content-between">Bathroom : <span><?= $property[0]->bathroom; ?></span></li>
                            <li class="list-group-item d-flex justify-content-between">Garage : <span><?= $property[0]->garage; ?></span></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-4 text-center">

                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('uploads/' . $property[0]->photo); ?>" width="75%"
                        class="rounded-circle m-auto p-2">
                    <h2 class="p-4"><?= $property[0]->fullname; ?></h2>
                    <div class="card-body">
                        <?php  if ( $session->get('user_id') !='') { 
                        echo '<button type="submit" class="btn btn-secondary" data-toggle="modal"
                        data-target="#enquiryModal">Enquiry</button>';    
                 }else { 
                        echo '<a href="'. base_url('login').'"><button type="submit" class="btn btn-secondary"
                        data-target="#enquiryModal">Enquiry</button></a>';
                 }?>
                    </div>
                </div>

            </div>





        </div>
    </div>

</section>

<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="main-input">


                    <div class="form-group">
                        <input type="hidden" name="user_id" class="form-control"
                            value="<?= $session->get('user_id'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="broker_pk" class="form-control"
                            value="<?= $property[0]->broker_id; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="property_id" class="form-control"
                            value="<?= $property[0]->property_id; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="fullname" class="form-control"
                            value="<?= $session->get('fullname'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $session->get('email'); ?>">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile Number</label>
                        <input type="number" name="mobile" class="form-control" value="<?= $session->get('mobile'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Requirement</label>
                        <textarea class="form-control" rows="2" name="requirement"></textarea>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Send Enquiry</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
    <div class="contacts-main">


    </div>
</section>
<!-- //contact form -->

<?php include('footer.php'); ?>