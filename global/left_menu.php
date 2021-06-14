<!-- Brand Logo -->
<a href="dashboard.php" class="brand-link">
  <span class="brand-text font-weight-light">Accounting Software</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  <div class="image">
    <img src="/uploads/<?php echo $_SESSION['profile_image'];?>" class="img-circle elevation-2" alt="User Image">
  </div>
  <div class="info">
    <a href="#" class="d-block"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></a>
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
<?php 
$paths = parse_url($_SERVER['REQUEST_URI']);
$segments = explode('/', $paths['path']);
$first_path = $segments[1];
$active = '';
?>

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item <?php if($first_path == 'dashboard') { $active = 'active'; ?> menu-open <?php } ?>">
      <a class="nav-link <?php echo $active; $active = ''; ?>" href="/dashboard/dashboard.php">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
           Dashboard  
        </p>
      </a>
    </li>     
    <li class="nav-item <?php if($first_path == 'user_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
          User Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/user_manager/user_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user_manager/user_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'user_role_manager') { $active = 'active'; ?>menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
       <i class="fab fa-critical-role"></i>
        <p>
          User Role Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/user_role_manager/user_role_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add User Role</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user_role_manager/user_role_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User Role List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'category_manager') { $active = 'active'; ?>menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
        <i class="nav-icon fas fa-sitemap"></i>
        <p>
           Category Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/category_manager/category_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add  Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/category_manager/category_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'bank_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
        <i class="nav-icon fas fa-landmark"></i>
        <p>
          Bank Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/bank_manager/bank_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add Bank Account</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/bank_manager/bank_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bank Account List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'general_ledger') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
       <i class="fas fa-book-reader"></i>
        <p>
          General Ledger Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/general_ledger_manager/general_ledger_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add General Ledger</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/general_ledger_manager/general_ledger_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General Ledger List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'party_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
      <i class="far fa-handshake"></i>
        <p>
          Party Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/party_manager/party_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add new Party</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/party_manager/party_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Party List</p>
          </a>
        </li>
      </ul>
    </li>
     <li class="nav-item <?php if($first_path == 'product_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
     <i class="fab fa-product-hunt"></i>
        <p>
          Product Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/product_manager/product_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add new Product</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/product_manager/product_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Product List</p>
          </a>
        </li>
      </ul>
    </li>
     <li class="nav-item <?php if($first_path == 'product_unit_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
      <i class="fab fa-unity"></i>
        <p>
          Product Unit Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/product_unit_manager/product_unit_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add new Data</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/product_unit_manager/product_unit_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Unit List</p>
          </a>
        </li>
      </ul>
    </li>
     <li class="nav-item <?php if($first_path == 'fixt_asset_manager') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  class="nav-link <?php echo $active; $active = ''; ?>">
      <i class="fas fa-money-check-alt"></i>
        <p>
          Fixt Asset Manager
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/fixt_asset_manager/fixt_asset_add_form.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Add new Data</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/fixt_asset_manager/fixt_asset_list.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Fixt Asset List</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php if($first_path == 'setting') { $active = 'active'; ?> menu-open <?php } ?>">
      <a  href="/setting/setting.php" class="nav-link <?php echo $active; $active = ''; ?> ">
        <i class="fas fa-cog"></i>
        <p>
           Setting  
        </p>
      </a>
    </li> 
  </ul>
</nav>
</div>
<!-- /.sidebar-menu -->