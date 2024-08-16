<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?= $session->getFlashdata('message'); ?>

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage-Brokers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('add-broker')?>">Add-Broker</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!--card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">See All Brokers</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Action</th>
                                        <th>Photo</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Short Description</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($brokers as $broker) {?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm mb-2"
                                                href="<?= base_url('update-broker/' . $broker->broker_id); ?>">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a> 
                                            <a class="btn btn-danger btn-sm"
                                                href="<?= base_url('delete-broker/' . $broker->broker_id); ?>">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
                                        </td>
                                        <td><img src="<?= base_url('uploads/' . $broker->photo);?>" width="70px"></td>
                                        <td><?= $broker->fullname; ?></td>
                                        <td><?= $broker->email; ?></td>
                                        <td> <?= $broker->address; ?></td>
                                        <td><?= $broker->short_desc; ?></td>
                                        <td><?= $broker->mobile; ?></td>
                                        <td><?= $broker->date; ?></td>

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