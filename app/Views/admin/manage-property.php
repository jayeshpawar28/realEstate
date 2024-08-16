<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage-Properties</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('add-property')?>">Add-Property</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $session->getFlashdata('message'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!--card -->
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Broker Name</th>
                                        <th>Action</th>
                                        <th>Title</th>
                                        <th>Square Feet</th>
                                        <th>Price</th>
                                        <th>Bedroom</th>
                                        <th>Bathroom</th>
                                        <th>Garage</th>
                                        <th>City</th>
                                        <th>Adderss</th>
                                        <th>Scale/Rent</th>
                                        <th>Pincode</th>
                                        <th>State</th>
                                        <th>Active</th>
                                        <th>Date</th>
                                        <th>Main Photo</th>
                                        <th>Photo 1</th>
                                        <th>Photo 2</th>
                                        <th>Photo 3</th>
                                        <th>Photo 4</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php $i=1; foreach($properties as $property) {?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $property->fullname; ?></td>
                                        <td> 
                                            <a class="btn btn-info btn-sm mb-2"
                                            href="<?= base_url('update-property/' . $property->property_id); ?>">
                                                <i class="fas fa-pencil-alt"></i>Edit</a>

                                            <a class="btn btn-danger btn-sm"
                                            href="<?= base_url('delete-property/' . $property->property_id); ?>">
                                                  Delete</a>
                                        </td>
                                        <td><?= $property->title; ?></td>
                                        <td><?= $property->sqft; ?></td>
                                        <td><?= $property->price; ?></td>
                                        <td><?= $property->bedroom; ?></td>
                                        <td><?= $property->bathroom; ?></td>
                                        <td><?= $property->garage; ?></td>
                                        <td><?= $property->city; ?></td>
                                        <td><?= $property->address; ?></td>
                                        <td><?= $property->property_type; ?></td>
                                        <td><?= $property->pincode; ?></td>
                                        <td><?= $property->state; ?></td>
                                        <td><?= $property->is_active; ?></td>
                                        <td><?= $property->add_date; ?></td>
                                        <td><img src="<?= base_url('uploads/' . $property->mainphoto); ?>" width="70px">
                                        </td>
                                        <td><img src="<?= base_url('uploads/' . $property->photo1);?>" width="70px">
                                        </td>
                                        <td><img src="<?= base_url('uploads/' . $property->photo2);?>" width="70px">
                                        </td>
                                        <td><img src="<?= base_url('uploads/' . $property->photo3);?>" width="70px">
                                        </td>
                                        <td><img src="<?= base_url('uploads/' . $property->photo4);?>" width="70px">
                                        </td>

                                    </tr>
                                    <?php $i++; }?>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>