<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link">
        <img src="<?= base_url('static/admin/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">RealEstate</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            
            <div class="info">
                <a href="#" class="d-block">
                    <?= strtoupper($session->get('fullname')); ?>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-address-book"></i>
                        <p>
                            Broker
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('add-broker'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Broker</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('manage-broker'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage-Broker</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon fa fa-home"></i>
                        <p>
                            Properties
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('add-property'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-Property</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('manage-property'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage-Property</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class=' nav-icon fas fa-user-cog'></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Add-User
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('manage-user'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage-User</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>

                        <p>
                            Enquires
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('enquiry'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Add-Enquires
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('manage-enquiry'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage-Enquiry</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-phone"></i>

                        <p>
                            Contacts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('add-contact'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Add-Contact
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('manage-contact'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage-Contact</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-header">Acount</li>
                <li class="nav-item">
                    <a href="<?= base_url('admin-logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>