<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inquires</h1>
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
                            <h3 class="card-title">Update-Enquires</h3>
                        </div>

                        <form method="post" id="add-inquiry" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                   
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Select Property</label>
                                        <select class="form-control" class="form-control" name="property_id">
                                            <?php foreach($properties as $property) {?>
                                            <option value="<?= $property->property_id; ?>"><?= $property->title; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?= $enquiry[0]->email;?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="number" class="form-control" placeholder="Enter Monile Number" name="mobile"
                                        value="<?= $enquiry[0]->mobile;?>">
                                    </div>
                                    <div class="col-md-6  form-group">
                                        <label for="exampleInputPassword1">Enquiry Date</label>
                                        <input type="date" class="form-control" placeholder="date" name="enquiry_date" value="<?= $enquiry[0]->enquiry_date;?>">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
                                        <textarea class="form-control" rows="2" name="subject"><?= $enquiry[0]->subject;?></textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Your Reqirement</label>
                                        <textarea class="form-control" rows="2" name="requirement"><?= $enquiry[0]->requirement;?></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="inquiry()">Submit</button>
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