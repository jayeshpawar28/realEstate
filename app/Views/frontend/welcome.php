<?php include('header.php');
    $session = session();
?>


<div class="container px-4">
    <?= $session->getFlashdata('message'); ?>

   
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped mt-4">
            <h3 class="text-center">Your Enquires</h3>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Property Name</th>
                    <th scope="col">Broker Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Your Requirement</th>
                    <th scope="col">Enquiry Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($enquires as $enquiry) {?>
                <tr onclick="<?= base_url('details/'. $enquiry->enquiry_id); ?>">
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $enquiry->title; ?></td>
                    <td><?= $enquiry->fullname; ?></td>
                    <td><?= $enquiry->email; ?></td>
                    <td><?= $enquiry->mobile; ?></td>
                    <td><?= $enquiry->requirement; ?></td>
                    <td><?= $enquiry->enquiry_date; ?></td>
                </tr>
                <?php $i++; }?>

            </tbody>
        </table>

    </div>

</div>
<?php include('footer.php'); ?>