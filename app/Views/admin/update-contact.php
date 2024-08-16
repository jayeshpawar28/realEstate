
<?php include('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update-Contact</h1>
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
                            <h3 class="card-title">Add</h3>
                        </div>

                        <form method="post" id="add-broker" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter full name"
                                            name="fullname" value="<?= $contact[0]->fullname; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?= $contact[0]->email; ?>">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" rows="2" name="message"><?= $contact[0]->message; ?></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Mobile</label>
                                        <input type="number" class="form-control" placeholder="mobile" name="mobile" value="<?= $contact[0]->mobile; ?>">
                                    </div>
                                    

                                   

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="addBroker()">Submit</button>
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
