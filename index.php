<?php require_once('config.php')?>
<?php require_once( ROOT_PATH . '/includes/functions.php')?>

<!-- Retrive all posts from database -->
<?php $posts = getPublishedPosts();?>

<?php require_once( ROOT_PATH.'/includes/head_section.php')?>
    <title>LifeBlog | Home </title>
</head>
<body>
    <!-- pagw wrapper container -->
    <div class="container">

        <!-- navabr -->
        <?php include( ROOT_PATH.'/includes/navbar.php')?>
        <!-- Navbar end -->

        <!-- banner -->
        <?php include( ROOT_PATH.'/includes/banner.php') ?>

        <!-- page content -->
        <div class="content">
            <h2 class="content-title">Recent Articles</h2>
            <hr>
            
            <?php foreach($posts as $post): ?>
                <div class="post" style="margin-left: 0px">
                    <image src="<?php echo BASE_URL.'/static/images/'.$posts['image'];?>" class="post_image" alt="blog-image"></image>
                    <a href="single_post.php?post-slug=>?php echo $post['slug]; ?>">
                        <div class="post_info">
                            <h3><?php echo $post['title'] ?></h3>
                            <div class="info">
                                <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach?>
               
            <!-- space for more content -->

        </div>

        <!-- page contentend -->

        <!-- footer -->
        <?php include( ROOT_PATH.'/includes/footer.php')?>