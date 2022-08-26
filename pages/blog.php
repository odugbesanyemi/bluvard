<?php include("../includes/header.php") ?>
<!-- END OF HEADER -->

<div class="container mt-5">
    <h2 class="fw-bold">RECENT POSTS</h2>
    <div class="breadcrumb mb-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="../assets/IMG-20211222-WA0016.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="blog-posts.php">
                                        <h4>Donec tincidunt leo</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 31, 2020</a></li>
                                        <li><a href="#">12 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet eleifend.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="../assets/IMG-20211222-WA0020.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4>Suspendisse et metus</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">May 22, 2020</a></li>
                                        <li><a href="#">26 Comments</a></li>
                                    </ul>
                                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a
                                        mauris sit amet eleifend.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="page-numbers">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('../includes/blog_sidebar.php') ?>
        </div>
    </div>
</section>
<?php include("../includes/footer.php") ?>