<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>

<?php

$search = isset($_GET["search"]) ? $_GET["search"] : "";
$linkSearch = "search.php?search=$search";

// nạp file kết nối CSDL
include_once "config.php";

if (strlen($search) > 0) {
    $sqlSelect = "SELECT * FROM newwords WHERE newword LIKE '%$search%'";

    /**
     * Thực hiện câu truy vấn và trả data cho biến $newwordList
     */
    $newwordList = $connection->query($sqlSelect);
} else {
    $sqlSelect = "SELECT * FROM newwords";

    /**
     * Thực hiện câu truy vấn và trả data cho biến $newwordList
     */
    $newwordList = $connection->query($sqlSelect);
}

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
if ($id > 0) {
    $sqlSelect2 = "SELECT * FROM newwords WHERE id = ".$id;

    /**
     * Thực hiện câu truy vấn và trả data cho biến $result
     */
    $mean = $connection->query($sqlSelect2);
}


if ($id > 0) {
    $sqlSelect3 = "SELECT * FROM sentences WHERE newword_id = ".$id;

    /**
     * Thực hiện câu truy vấn và trả data cho biến $result
     */
    $sentences = $connection->query($sqlSelect3);
}
?>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="toeic.png" width="40px" height="40px" style="margin-right: 20px">
        <a class="navbar-brand" href="#">Từ điển</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Quản lý từ vựng<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bg_english.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
            </div>
            <div class="carousel-item">
                <img src="2000-x-600-Home-Page-Book-RVLove-Book-Out_rfw.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
            </div>
            <div class="carousel-item">
                <img src="313914832.jpg" class="bd-placeholder-img" width="1600px" height="450px" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <form action="search.php" name="" method="get" style="margin-left: 300px;margin-top: 70px;">
        <input type="text" name="search" class="btn btn-outline-light my-2 my-sm-0" style="width: 600px;" value="<?php echo $search ?>" placeholder="Nhập từ muốn tra cứu">
        <input type="submit" name="translate" class="btn btn-info" value="Tìm kiếm">
        <a href="#" class="btn btn-warning" id="reset">Xóa</a>
    </form>
    <div class="container">
        </div>
        <div class="row" style="margin-top: 30px; margin-left: 30px;">
        </div>
        <div class="row" style="margin: 50px 0; border: 1px solid gray; border-radius: 30px; height: 600px;">

            <div class="col-md-4" style="border-right: 1px solid gray; height: 600px;   ">
                <div class="col-md-12" style="padding: 30px 0;margin-top: 20px;margin-left: 40px;">
                    <h2>Từ vựng tìm kiếm : </h2>
                </div>
                <div class="col-md-12" style="max-height: 600px;overflow: auto">

                    <?php
                    /**
                     * Nếu $newwordList->num_rows > 0 tức là có dữ liệu trong bảng
                     * ngược lại là bảng đang rỗng
                     */
                    if (isset($newwordList) && $newwordList->num_rows > 0) {
                        /*
                         *
                         * Sử dụng $newwordList->fetch_assoc() để lấy về từng dòng bản ghi trong bảng
                         * và trả về cho biến $row
                         */
                        while($row = $newwordList->fetch_assoc()) {

                            ?>
                            <div class="col-md-12" style="margin-left: 10px"><a href="<?php echo $linkSearch."&id=".$row["id"] ?>">+ <?php echo $row["newword"] ?></a></div>
                            <?php
                        }
                    } else {
                        ?> <div class="alert alert-danger"><?php echo "Không tìm thấy từ vựng nào"; ?></div>
                        <?php
                    }
                    ?>



                </div>
            </div>
            <div class="col-md-8" style="margin-top: 50px;">
                <?php
                if ($id > 0) {
                    if (isset($mean)) {
                        $meanWord = $mean->fetch_assoc();
                        ?>
                        <div class="alert alert-info"><h3>Từ mới : <?php echo $meanWord["newword"]; ?></h3></div>
                        <div class="alert alert-info">Nghĩa của từ : <?php echo $meanWord["mean"]; ?></div>
                        <?php
                    }
                }

                ?>

                <?php
                if ($id > 0) {
                    /**
                     * Nếu $result->num_rows > 0 tức là có dữ liệu trong bảng
                     * ngược lại là bảng đang rỗng
                     */
                    if (isset($sentences) && $sentences->num_rows > 0) { ?>
                        <h3>Các ví dụ :</h3>
                        <?php
                        /*
                         *
                         * Sử dụng $result->fetch_assoc() để lấy về từng dòng bản ghi trong bảng
                         * và trả về cho biến $row
                         */
                        while($row = $sentences->fetch_assoc()) {
                            ?>
                            <div class="alert alert-success">Example : <?php echo $row["sentence_example"] ?><br>Dịch nghĩa : <?php echo $row["sentence_translate"] ?></div>
                            <?php
                        }
                    } else { ?>
                        <div class="alert alert-danger"><?php echo "Không tìm thấy ví dụ cho từ này";  ?></div>
                        <?php
                    }
                }

                ?>
            </div>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Premium</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="76661230_1545934292239585_6871501439382847488_o.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
                <h2>Hồng Ánh</h2>
                <p>Bây giờ, Học tiếng Anh với mình như một hoạt động xả stress vậy!</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="70658044_972499259778031_2295796299024302080_o.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
                <h2>Lê Hoàng Hiệp</h2>
                <p>Mỗi lần trò chuyện với du khách nước ngoài bằng cái ngôn ngữ mà mình tưởng rằng sẽ không bao giờ chinh phục được là mình lại cảm thấy vừa vui sướng, vừa tự hào cực kì. Không ngờ chàng trai “dốt đặc” một thời như mình cũng có ngày nói Tiếng Anh trôi chảy được như thế.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="65713726_720092561743914_6439220849420533760_n.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
                <h2>Trần Thị My</h2>
                <p>Sau 4 tháng kiên trì, tôi cảm thấy mình đã tự tin nói chuyện và hiểu được những gì chuyên gia nước ngoài truyền tải. Vốn ngoại ngữ mà Từ điển mang lại sẽ là một lợi thế tuyệt vời của tôi trong những dự định sắp tới.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top" style="margin-left:30px ">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="toeic.png" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>




<script type="text/javascript">
    $(document).ready(function () {
        $("a#reset").on("click", function (e) {
            e.preventDefault();

            $("input[name='search']").val();

            window.location.replace("search.php");
        });
    });
</script>

</body>
</html>