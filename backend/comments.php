<?php require_once('./includes/header.php'); ?>

    <body class="nav-fixed">
        <?php require_once('./includes/top-navbar.php'); ?>
        

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php 
                    $curr_page = basename(__FILE__);
                    require_once("./includes/left-sidebar.php");
                ?>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="package"></i></div>
                                    <span>All Comments</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Comments</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>In response to</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Approve</th>
                                                <th>Unapprove</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql = "SELECT * FROM comments";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute();
                                                while($comments = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    // comment_id, comment_detail, comment_date, comment_status, 
                                                    // comment_user_id, user_name, user_email, comment_post_id, post_title
                                                    $comment_id = $comments['comment_id'];
                                                    $comment_detail = $comments['comment_detail'];
                                                    $comment_date = $comments['comment_date'];
                                                    $comment_status = $comments['comment_status'];
                                                    $comment_user_id = $comments['comment_user_id'];
                                                    // getting user_name and user_email from users table
                                                    $sql1 = "SELECT * FROM users WHERE user_id = :id";
                                                    $stmt1 = $pdo->prepare($sql1);
                                                    $stmt1->execute([
                                                        ':id' => $comment_user_id
                                                    ]);
                                                    $user = $stmt1->fetch(PDO::FETCH_ASSOC);
                                                    $user_name = $user['user_name'];
                                                    $user_email = $user['user_email'];

                                                    $comment_post_id = $comments['comment_post_id'];
                                                    // post_id and post_title from posts table
                                                    $sql2 = "SELECT * FROM posts WHERE post_id = :id";
                                                    $stmt2 = $pdo->prepare($sql2);
                                                    $stmt2->execute([
                                                        ':id' => $comment_post_id
                                                    ]);
                                                    $post = $stmt2->fetch(PDO::FETCH_ASSOC);
                                                    $post_id = $post['post_id'];
                                                    $post_title = $post['post_title']; ?>
                                                        <tr>
                                                            <td><?php echo $comment_id; ?></td>
                                                            <td>
                                                                <?php echo $user_name; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $user_email; ?>
                                                            </td>
                                                            <td>
                                                                <a href="../single.php?post_id=<?php echo $post_id; ?>" target="_blank">
                                                                    <?php echo $post_title; ?>
                                                                </a>
                                                            </td>
                                                            <td><?php echo $comment_detail; ?></td>
                                                            <td><?php echo $comment_date; ?></td>
                                                            <td>
                                                                <div class="badge badge-<?php echo $comment_status=="approved"?"success":"danger"; ?>">
                                                                    <?php echo $comment_status; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if(isset($_POST['approve'])) {
                                                                        $comment_id = $_POST['comment_id'];
                                                                        $sql = "UPDATE comments SET comment_status = :status WHERE comment_id = :id";
                                                                        $stmt = $pdo->prepare($sql);
                                                                        $stmt->execute([
                                                                            ':status' => 'approved',
                                                                            ':id' => $comment_id
                                                                        ]);
                                                                        header("Location: comments.php");
                                                                    }
                                                                ?>
                                                                <?php 
                                                                    if($comment_status == 'approved') { ?>
                                                                        <button title="Sorry, the status already approved!" class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                                    <?php } else { ?>
                                                                        <form action="comments.php" method="POST">
                                                                            <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>" />
                                                                            <button name="approve" type="submit" class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                                        </form>
                                                                    <?php }
                                                                ?>
                                                            </td>
                                                            <td>
                                                               <?php 
                                                                    if(isset($_POST['unapprove'])) {
                                                                        $comment_id = $_POST['comment_id'];
                                                                        $sql = "UPDATE comments SET comment_status = :status WHERE comment_id = :id";
                                                                        $stmt = $pdo->prepare($sql);
                                                                        $stmt->execute([
                                                                            ':status' => 'unapproved',
                                                                            ':id' => $comment_id
                                                                        ]);
                                                                        header("Location: comments.php");
                                                                    }
                                                                ?>
                                                                <?php 
                                                                    if($comment_status == 'unapproved') { ?>
                                                                        <button title="Sorry, it's already unapproved!" name="unapprove" class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                                    <?php } else { ?>
                                                                        <form action="comments.php" method="POST">
                                                                            <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>" />
                                                                            <button name="unapprove" class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                                        </form>
                                                                   <?php }
                                                                ?>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                    if(isset($_POST['delete'])) {
                                                                        $comment_id = $_POST['comment_id'];
                                                                        $sql = "DELETE FROM comments WHERE comment_id = :id";
                                                                        $stmt = $pdo->prepare($sql);
                                                                        $stmt->execute([
                                                                            ':id' => $comment_id
                                                                        ]);
                                                                        header("Location: comments.php");
                                                                    }
                                                                ?>
                                                                <form action="comments.php" method="POST" >
                                                                    <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>" />
                                                                    <button name="delete" type="submit" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>    
                                                <?php }
                                            ?>
                                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->

                </main>

<?php require_once('./includes/footer.php'); ?>