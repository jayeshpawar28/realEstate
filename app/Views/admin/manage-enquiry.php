<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="container-fluid">

            <?= $session->getFlashdata('message'); ?>

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage-Enquires</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('enquiry')?>">Add-Enquiry</a></li>
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
                            <h3 class="card-title">See All Enquires</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Action</th>
                                        <th>User Name</th>
                                        <th>Property</th>
                                        <th>Message</th>
                                        <th>Requirement</th>
                                        <th>Mobile</th>
                                        <th>Enquiry-Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($enquires as $enquiry) {?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm mb-3"
                                                href="<?= base_url('update-enquiry/' . $enquiry->enquiry_id); ?>">
                                                <i class="fas fa-pencil-alt"></i>Edit</a>

                                            <a class="btn btn-danger btn-sm"
                                                href="<?= base_url('delete-enquiry/' . $enquiry->enquiry_id); ?>">
                                                <i class="fas fa-trash"></i>Delete</a>
                                        </td>
                                        <td><?= $enquiry->fullname; ?></td>
                                        <td><?= $enquiry->title; ?></td>
                                        <td><?= $enquiry->subject; ?></td>
                                        <td><?= $enquiry->requirement; ?></td>
                                        <td><?= $enquiry->mobile; ?></td>
                                        <td><?= $enquiry->enquiry_date; ?></td>

                
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