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

                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Md. A. Barik</div>
                        </div>
                    </div>

                </nav>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="layout"></i></div>
                                    <span>All Posts</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Posts</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Views</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Tags</th>
                                                <th>Comments</th>
                                                <th>Views</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">I Love You!</a>
                                                </td>
                                                <td>
                                                    <div class="badge badge-success">Published
                                                    </div>
                                                </td>
                                                <td>Love</td>
                                                <td>Md. A. Barik</td>
                                                <td>Image</td>
                                                <td>17 Nov 2020</td>
                                                <td>Post details</td>
                                                <td>Important Tags</td>
                                                <td>
                                                    <a href="comments.html">2</a>
                                                </td>
                                                <td>100</td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="#">I Love You!</a>
                                                </td>
                                                <td>
                                                    <div class="badge badge-warning">Draft
                                                    </div>
                                                </td>
                                                <td>Love</td>
                                                <td>Md. A. Barik</td>
                                                <td>Image</td>
                                                <td>17 Nov 2020</td>
                                                <td>Post details</td>
                                                <td>Important Tags</td>
                                                <td>
                                                    <a href="comments.html">2</a>
                                                </td>
                                                <td>100</td>
                                                <td>
                                                    <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
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