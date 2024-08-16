<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Properties</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update-Property</h3>
                        </div>

                        <form action="" method="post" id="add-property" enctype="multipart/form-data">


                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Select Broker Name</label>
                                        <select class="form-control" class="form-control" name="broker_id">
                                            <option value="<?= $broker[0]->broker_id; ?>"><?= $broker[0]->fullname; ?></option>
                                            <?php foreach($broker as $brokers) {?>
                                            <option value="<?= $brokers->broker_id; ?>"><?= $brokers->fullname; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?= $property[0]->title; ?>">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Square Feet</label>
                                        <input type="number" class="form-control" placeholder="Enter SQFT" name="sqft"  value="<?= $property[0]->sqft; ?>">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $property[0]->price; ?>">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <select class="form-control" name="city" value="<?= $property[0]->city; ?>">
                                            <option value="">--Select City--</option>
                                            <option value="Nashik">Nashik</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Nagpur">Nagpur</option>
                                        </select>
                                    </div>
                                    
                                    <div class=" col-md-6  form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <textarea class="form-control" rows="2" name="address"><?= $property[0]->address; ?></textarea>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Select You Want</label>
                                        <select class="form-control" name="property_type" value="<?= $property[0]->property_type; ?>">
                                        <option value="">--Scale or Rent--</option>
                                            <option value="Sale">Sale</option>
                                            <option value="Rent">Rent</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Pincode</label>
                                        <input type="number" class="form-control" placeholder="pincode" name="pincode" value="<?= $property[0]->pincode; ?>">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">State</label>
                                        <select class="form-control" name="state" value="<?= $property[0]->state; ?>">
                                            <option value="">--Select State--</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Hydrabad">Hydrabad</option>
                                            <option value="Rajastan">Rajastan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Mainphoto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="hidden" class="custom-file-input" name="oldmainphoto" value="<?= $property[0]->mainphoto; ?>">
                                                <input type="file" class="custom-file-input" name="mainphoto" >
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            
                                            <img src="<?= base_url('uploads/' . $property[0]->mainphoto); ?>" width="70px">

                                        </div>
                                        <label id="mainphoto-error" class="error" style="display:none;" for="mainphoto">Select main photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 1</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="hidden" class="custom-file-input" name="oldphoto1" value="<?= $property[0]->photo1; ?>">
                                                <input type="file" class="custom-file-input" name="photo1">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <img src="<?= base_url('uploads/' . $property[0]->photo1);?>" width="70px">    
                                        </div>
                                        <label id="photo1-error" class="error" style="display:none;" for="photo1">Select first photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 2</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="hidden" class="custom-file-input" name="oldphoto2" value="<?= $property[0]->photo2; ?>">
                                                <input type="file" class="custom-file-input" name="photo2">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <img src="<?= base_url('uploads/' . $property[0]->photo2);?>" width="70px">    

                                        </div>
                                        <label id="photo2-error" class="error" style="display:none;" for="photo2">Select second photo</label>

                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 3</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="hidden" class="custom-file-input" name="oldphoto3" value="<?= $property[0]->photo3; ?>">
                                                <input type="file" class="custom-file-input" name="photo3">                                               
                                                 <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <img src="<?= base_url('uploads/' . $property[0]->photo3);?>" width="70px">    

                                        </div>
                                        <label id="photo3-error" class="error" style="display:none;" for="photo3">Select third photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 4</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="hidden" class="custom-file-input" name="oldphoto4" value="<?= $property[0]->photo4; ?>">
                                                <input type="file" class="custom-file-input" name="photo4">                                                
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <img src="<?= base_url('uploads/' . $property[0]->photo4);?>" width="70px">    
                                        </div>
                                        <label id="photo4-error" class="error" style="display:none;" for="photo4">Select fourth photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Is Active?</label>
                                        <select class="form-control" name="is_active" value="<?= $property[0]->is_active; ?>">
                                        <option value="">--Yes/No--</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Add Date</label>
                                        <input type="date" class="form-control" placeholder="date" name="add_date" value="<?= $property[0]->add_date; ?>">
                                    </div>

                                    <div class="col-md-6  form-group mt-4">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="property_check()">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->


                    </form>
                </div>
                <!-- /.card -->




            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>