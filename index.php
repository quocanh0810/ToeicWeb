<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


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
    // nạp file kết nối CSDL
    include_once "config.php";

    $sqlSelect = "SELECT * FROM newwords";

    /**
     * Thực hiện câu truy vấn và trả data cho biến $result
     */
    $result = $connection->query($sqlSelect);


    ?>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <img src="toeic.png" width="40px" height="40px" style="margin-right: 10px;margin-left: 20px ">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="search.php">Từ điển</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">
                                <span data-feather="layers"></span>
                                Dictionaries home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                English <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                American English
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Academic
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                <Collocations></Collocations>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                German-English
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Grammar</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Grammar home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Practical English Usage
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Liệt kê từ mới</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <a href="create.php" class="btn btn-success">Thêm từ mới</a>
                    <a href="search.php" class="btn btn-info">Trở lại từ điển</a>
                </h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Từ mới</th>
                        <th>Loại</th>
                        <th>Ý nghĩa của từ</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    /**
                     * Nếu $result->num_rows > 0 tức là có dữ liệu trong bảng
                     * ngược lại là bảng đang rỗng
                     */
                    if (isset($result) &&  $result->num_rows > 0) {
                        /*
                         *
                         * Sử dụng $result->fetch_assoc() để lấy về từng dòng bản ghi trong bảng
                         * và trả về cho biến $row
                         */
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["newword"] ?></td>
                                <td><?php echo $row["type"] ?></td>
                                <td><?php echo $row["mean"] ?></td>
                                <td>

                                    <p><a href="sentence.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Xem ví dụ câu cho từ này</a> </p>
                                    <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa từ này</a> </p>
                                    <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa từ này</a> </p>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "Không tồn tại bản ghi nào";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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


</body>
</html>