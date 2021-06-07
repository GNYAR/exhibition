<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/utility.css">
    <title>主辦方</title>
</head>

<?php
    session_start();
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'm') {
        header('location: acc.php');
    }
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-2 px-sm-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">展覽資訊平台</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="register.php?id=m" id="register"><span class="align-middle">註冊</span></a>
                    <a class="nav-link" href="login.php" id="login"><span class="align-middle">登入</span></a>
                    <a class="nav-link" href="acc.php" id="acc">
                        <svg id="person" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person me-1" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        <span class="align-middle" id="account"></span>
                    </a>
                    <a class="nav-link" href="index.php" id="logout"><span class="align-middle">登出</span></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="my-4" id="member">
            <div class="d-flex">
                <div>  
                    <h3>基本資料</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-dark rounded-pill" href="accEdit.php">
                        <i class="bi bi-pencil"></i>
                        &nbsp;更改資訊
                    </a>
                </div>
            </div>
            <div class="mt-2 border border-2 border-dark rounded rounded-3 p-3 overflow-auto text-nowrap">
                <div class="row row-cols-1 row-cols-lg-2 g-2">
                    <div class="col">
                        <b>帳　　號</b>
                        <span id="sAcc" class="ms-3"></span>
                    </div>
                    <div class="col">
                        <b>單位名稱</b>
                        <span id="name" class="ms-3"></span>
                    </div>
                    <div class="col">
                        <b>單位地址</b>
                        <span id="address" class="ms-3"></span>
                    </div>
                    <div class="col">
                        <b>聯絡電話</b>
                        <span id="phone" class="ms-3"></span>
                    </div>
                </div>
                <div class="mt-3">
                    <b>簡　　介</b>
                    <div class="m-2 text-wrap">
                        <h5 id="title">---暫無內容---</h5>
                        <span id="descript"></span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="my-4" id="exhibiton">
            <div class="d-flex">
                <div>  
                    <h3>展覽列表</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-dark rounded-pill" href="exhAdd.php">
                        <i class="bi bi-plus"></i>
                        &nbsp;新增展覽
                    </a>
                </div>
            </div>
            <div class="mt-3 border border-2 border-dark rounded rounded-3 p-3">
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle table-hover">
                        <thead>
                            <tr>
                                <th scope="col">時間</th>
                                <th scope="col">名稱</th>
                                <th scope="col">地點</th>
                            </tr>
                        </thead>
                        <tbody id="exh_list">
                            <!-- <tr>
                                <td>
                                    2021-05-09 ~ 2021-05-15
                                </td>
                                <td>
                                    2020商業經營系專題成果展
                                </td>
                                <td>
                                    國立臺中科技大學
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../js/vjs/sAcc.js"></script>
</body>
</html>