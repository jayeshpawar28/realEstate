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
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('add-contact')?>">Add-Contact</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <?= $session->getFlashdata('message');?>

            <div class="row">
                <div class="col-12">

                    <!--card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">See All contacts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($contacts as $contact) {?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $contact->fullname; ?></td>
                                        <td><?= $contact->email; ?></td>
                                        <td> <?= $contact->message; ?></td>
                                        <td><?= $contact->mobile; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="<?= base_url('update-contact/' . $contact->user_id); ?>">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a> 
                                            <a class="btn btn-danger btn-sm"
                                                href="<?= base_url('delete-contact/' . $contact->user_id); ?>">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
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