<footer class="main-footer">
    
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('static/admin/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('static/admin/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('static/admin/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('static/admin/'); ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('static/admin/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->

<!-- daterangepicker -->
<script src="<?= base_url('static/admin/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('static/admin/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('static/admin/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?= base_url('static/admin/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('static/admin/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('static/admin/'); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('static/admin/'); ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('static/admin/'); ?>dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('static/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('static/admin/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('static/admin/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('static/admin/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

function addBroker() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z," "]+$/i.test(value);
    }, "Letters and spaces only please");
    $('#add-broker').validate({
        rules: {
            fullname: {
                required: true,
                lettersonly: true
            },
            email: {
                required: true
            },
            address: {
                required: true
            },
            mobile: {
                required: true
            },
            photo: {
                required: true
            },
            date: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages: {
            fullname: {
                required: 'Enter Your Name',
                lettersonly: 'Letters only not numbers'
            },
            email: {
                required: 'Enter Your email'
            },
            address: {
                required: 'Enter Your address'
            },
            mobile: {
                required: 'Enter Your mobile'
            },
            photo: {
                required: 'Enter Your photo'
            },
            date: {
                required: 'Enter Your date'
            },
            message: {
                required: 'Text Some message'
            }
        }
    })
}

function property_check() {

    
        //var mainphoto = document.getElementById('mainphoto');

        var fileInput = document.getElementById('mainphoto');

            // Check if any file is selected
            if (fileInput.files.length > 0) {
                // Get the selected file name
                var fileName = fileInput.files[0].name;

                // Display the file name
                document.getElementById('display').innerText = "Selected File: " + fileName;
            } else {
                // If no file is selected
                document.getElementById('display').innerText = "No file selected.";
            }

    $('#add-property').validate({
        rules: {
            title: {
                required: true
            },
            sqft: {
                required: true
            },
            price: {
                required: true
            },
            city: {
                required: true
            },
            address: {
                required: true
            },
            property_type: {
                required: true
            },
            pincode: {
                required: true
            },

            state: {
                required: true
            },
            mainphoto: {
                required: true
            },
            is_active: {
                required: true
            },
            add_date: {
                required: true
            }
        },
        messages: {
            title: {
                required: 'Enter Your title'
            },
            sqft: {
                required: 'How many Square feet'
            },
            price: {
                required: 'Enter Your price'
            },
            city: {
                required: 'Select Your city'
            },
            address: {
                required: 'Enter Your address'
            },
            property_type: {
                required: 'Select sale or rent'
            },
            pincode: {
                required: 'Enter Your pincode'
            },

            state: {
                required: 'Select Your state'
            },
            mainphoto: {
                required: 'Select main photo'
            },
            is_active: {
                required: 'Active or Not'
            },
            add_date: {
                required: 'Select date'
            }
        }
    });
}

function user() {
    $('#add-user').validate({
        rules: {
            username: {
                required: true
            },
            email: {
                required: true
            },
            address: {
                required: true
            },
            mobile: {
                required: true
            },
            date: {
                required: true
            }
        },
        messages: {
            username: {
                required: 'Enter User Name'
            },
            email: {
                required: 'Enter User email'
            },
            address: {
                required: 'Enter User address'
            },
            mobile: {
                required: 'Enter User mobile'
            },
            date: {
                required: 'Enter User date'
            }
        }
    });
}

function inquiry() {
    $('#add-inquiry').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true
            },
            subject: {
                required: true
            },

            mobile: {
                required: true
            }

        },
        messages: {
            fullname: {
                required: 'Enter Your Name'
            },
            email: {
                required: 'Enter Your email'
            },
            subject: {
                required: 'Text Your subject'
            },

            mobile: {
                required: 'Enter Your mobile number'
            }
        }
    });
}
</script>

</body>

</html>