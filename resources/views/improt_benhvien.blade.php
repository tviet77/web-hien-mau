<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap4.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('importtonvimh.css') }}" >

    <title>Document</title>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->


    <link rel="stylesheet" href="{{ asset('css/stylevip.css') }}" >

    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style.css" rel='stylesheet' type='text/css' media="all" />
    <!-- <link rel="stylesheet" href="/css/timethongke.css"> -->
    <!-- Boxiocns CDN Link -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- /fonts -->

<!-- /css -->
   </head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus'></i>
          <span class="logo_name">Web Tôn Vinh</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class='bx bx-grid-alt' ></i>
              <span class="link_name"></span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#"></a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-collection' ></i>
                <span class="link_name"></span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#"></a></li>
              <li><a href="#">HTML & CSS</a></li>
              <li><a href="#">JavaScript</a></li>
              <li><a href="#">PHP & MySQL</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">Tim Kiếm</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Tìm kiếm</a></li>
              <li><a href="{{ route('timkiem.timkiemnguoi') }}">Người hiến máu</a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li>
            <a href="{{ route('taikhoan.index') }}">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="link_name">Tài khoản</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Analytics</a></li>
            </ul>
          </li>
          <li>
              <div class="iocn-link">
            <a href="#">
              <i class='bx bx-line-chart' ></i>
              <span class="link_name">Kiểm duyệt</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="a">Kiểm duyệt </a></li>
              <li><a href="{{ route('kiemduyet.index') }}">Tôn vinh</a></li>
            </ul>

          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-plug' ></i>
                <span class="link_name">Import</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="a">Import</a></li>
              <li><a href="{{ route('page.import_show') }}">Bệnh viện</a></li>
              <li><a href="{{ route('import.index_tonvinh') }}">Tôn vinh</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-compass' ></i>
              <span class="link_name">Explore</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Explore</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-history'></i>
              <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">History</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Setting</a></li>
            </ul>
          </li>
          <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="https://scontent.fdad3-1.fna.fbcdn.net/v/t1.6435-1/p160x160/157307061_2517975938506502_2205240183652711162_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=7206a8&_nc_ohc=RxXxsaxko8EAX_0OrRQ&_nc_ht=scontent.fdad3-1.fna&oh=c6719ed05f9cd40b7341b0c82a8c7e44&oe=619F59F1" alt="avarta">
          </div>
          <div class="name-job">
            <div class="profile_name">NTH</div>
            <div class="job">Cán bộ</div>
          </div>
          <i class='bx bx-log-out' onclick="nextpage('{{ route('taikhoan.dangxuat')}}')"></i>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <h1>Import Bệnh Viện</h1>
      <span class="text"></span>
    </div>
    <div class="col">
        <form action="import" class="form-import" method="$_POST" enctype="multipart/form-data">
            <input type="file" name="file" accept=".xlsx" value="nhập file">
            <input type="submit" value="Improt">
        </form>
    </div>
</body>
</html>
