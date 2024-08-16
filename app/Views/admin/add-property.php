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
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url('manage-property')?>">Manage-Property</a></li>
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
                            <h3 class="card-title">Property</h3>
                        </div>

                        <form action="" method="post" id="add-property" enctype="multipart/form-data">


                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Select Broker Name</label>
                                        <select class="form-control" class="form-control" name="broker_id">
                                            <option value=""></option>
                                            <?php foreach($brokers as $broker) {?>
                                            <option value="<?= $broker->broker_id; ?>"><?= $broker->fullname; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter title" name="title">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Square Feet</label>
                                        <input type="number" class="form-control" placeholder="Enter SQFT" name="sqft">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="number" class="form-control" placeholder="Price" name="price">
                                    </div>

                                    <div class=" col-md-6  form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <textarea class="form-control" rows="2" name="address"></textarea>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Select You Want</label>
                                        <select class="form-control" name="property_type">
                                            <option value="">--Scale or Rent--</option>
                                            <option value="Sale">Sale</option>
                                            <option value="Rent">Rent</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">State</label>
                                        <select class="form-control" name="state">
                                            <option value="">--Select State--</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Hydrabad">Hydrabad</option>
                                            <option value="Rajastan">Rajastan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">City</label>
                                        <select class="form-control" name="city">
                                            <option value="">--Select City--</option>
                                            <option value="Nashik">Nashik</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Nagpur">Nagpur</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Pincode</label>
                                        <input type="number" class="form-control" placeholder="pincode" name="pincode">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Bedroom</label>
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="bedroom">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Bathroom</label>
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="bathroom">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputEmail1">Garage</label>
                                        <input type="text" class="form-control" placeholder="Enter title" name="garage">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Mainphoto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="form-control" type="file" id="formFile" name="mainphoto">
                                            </div>
                                        </div>
                                        <label id="mainphoto-error" class="error" style="display:none;"
                                            for="mainphoto">Select main photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 1</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="form-control" type="file" id="formFile" name="photo1">
                                            </div>
                                        </div>
                                        <label id="photo1-error" class="error" style="display:none;" for="photo1">Select
                                            first photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 2</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="form-control" type="file" id="formFile" name="photo2">
                                            </div>
                                        </div>
                                        <label id="photo2-error" class="error" style="display:none;" for="photo2">Select
                                            second photo</label>

                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 3</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="form-control" type="file" id="formFile" name="photo3">
                                            </div>
                                        </div>
                                        <label id="photo3-error" class="error" style="display:none;" for="photo3">Select
                                            third photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputFile">Photo 4</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="form-control" type="file" id="formFile" name="photo4">
                                            </div>
                                        </div>
                                        <label id="photo4-error" class="error" style="display:none;" for="photo4">Select
                                            fourth photo</label>
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Is Active?</label>
                                        <select class="form-control" name="is_active">
                                            <option value="">--Yes/No--</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Add Date</label>
                                        <input type="date" class="form-control" placeholder="date" name="add_date">
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