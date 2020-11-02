<?php require_once('./includes/header.php'); ?>

    <body class="nav-fixed">
       <?php require_once('./includes/top-navbar.php');?>
        

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php 
                   $curr_page = basename(__FILE__);
                   require_once('./includes/left-sidebar.php'); 
               ?>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="users"></i></div>
                                    <span>All Users</span>
                                </h1>
                                <a href="new-user.html" title="Add new category" class="btn btn-white">
                                    <div class="page-header-icon"><i data-feather="plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Users</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Photo</th>
                                                <th>Registered on</th>
                                                <th>Role</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>Photo</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">
                                                        Subscriber
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>Photo</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">
                                                        Subscriber
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

<?php require_once('./includes/footer.php'); ?>