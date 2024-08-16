<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Broker</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('manage-broker')?>">Manage-Broker</a>
                        </li>
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
                            <h3 class="card-title">Broker</h3>
                        </div>

                        <form method="post" id="add-broker" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter full name"
                                            name="fullname">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <textarea class="form-control" rows="2" name="address"></textarea>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Short
                                            Description</label>
                                        <textarea class="form-control" rows="2" name="short_desc"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Mobile</label>
                                        <input type="number" class="form-control" placeholder="mobile" name="mobile">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input class="form-control" type="file" id="formFile" name="photo">
                                            </div>
                                        </div>
                                        <label id="photo-error" class="error" style="display:none;" for="photo">Enter
                                            Your photo</label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Join Date</label>
                                        <input type="date" class="form-control" placeholder="mobile" name="date">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary float-right mt-4"
                                            onclick="addBroker()">Submit</button>

                                        <!-- <a class="btn btn-primary btn-sm" href="#" onclick="addBroker()">
                                            <i class="fas fa-folder">
                                            </i>
                                            Submit
                                        </a> -->
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