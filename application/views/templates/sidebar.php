<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-scissors"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Men's Barbershop</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">



<!-- Looping Menu-->
    <div class="sidebar-heading">
        Home
    </div>
        <li class="nav-item active">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                    <span >Dashboard</span></a>
            </li>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/member'); ?>">
                    <i class="fa fa-fw fa-users"></i>
                    <span >Data User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/hairartist'); ?>">
                    <i class="fa fa-fw fa-user"></i>
                    <span >Data Hair Artist</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/haircut'); ?>">
                    <i class="fa fa-fw fa-scissors"></i>
                    <span >Data Haircut</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/shave'); ?>">
                    <i class="fa fa-fw fa-scissors"></i>
                    <span >Data Shave</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/coloring'); ?>">
                    <i class="fa fa-fw fa-brush"></i>
                    <span >Data Coloring</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/produk'); ?>">
                    <i class="fa fa-fw fa-spray-can-sparkles"></i>
                    <span >Data Produk</span></a>
            </li>
        </li>
    
    <hr class="sidebar-divider mt-3">

    <div class="sidebar-heading">
        Transaksi
    </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin/book'); ?>">
                    <i class="fa fa-fw fa-list"></i>
                    <span >Data Booking</span></a>
            </li>
        </li>


<!-- Sidebar Toggler (Sidebar) -->
<!-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

</ul>
<!-- End of Sidebar --   > 