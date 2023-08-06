<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--main file css-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!--font awoesome library-->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bondi bootstrap.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
rel="stylesheet">
</head>
<body class="body">
    <nav class="navbar navbar-expand-lg sticky-top bg-transparent ">

        <div class="container-fluid">
          <a class="navbar-brand " href="#"><img class="rounded-circle" style="width: 10%" src="https://miemar.com.sa/wp-content/uploads/2022/09/dor-miemar-1-1024x733.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"> <i style="color: white;" class="fa-solid fa-list"></i></span>
          </button>
          <div  class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">الرئيسيه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about"> من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ourServeices">خدماتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">العروض العقاريه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ourProjects">مشاريعنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contactUs">اتصل بنا</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
@yield('content')
</body>
<footer class="text-center text-lg-start  text-light">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4">
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3 text-center">
          <!-- Grid column -->
          <div class="col-sm-12  col-md-6  mx-auto mb-4 ">
          <img class="mt-3" style="width: 200px;" src="https://miemar.com.sa/wp-content/uploads/2022/09/dor-miemar-1.png">
          </div>


          <div class="link col-sm-12  col-md-6  mx-auto mb-4 ">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white-50">
              links
            </h6>
            <p>
              <a href="#!" class="text-reset text-white-50">facebook</i></a>
            </p>
            <p>
              <a href="#!" class="text-reset text-white-50">twitter</a>
            </p>
            <p>
              <a href="#!" class="text-reset text-white-50">instgram </a>
            </p>
          </div>
          <!-- Grid column -->
          <div class="col-sm-12  col-md-6  mx-auto mb-4 ">
            <img style="width: 200px;" src="https://miemar.com.sa/wp-content/uploads/2022/09/Untitled-1@1x_1-600x349.png">
          </div>
          </div>



          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white-50" style="background-color: rgba(0, 0, 0, 0.05);">
      ©جميع الحقوق محفوظه :
      <a class="text-reset fw-bold text-white-50" href="https://mdbootstrap.com/">دور معمار للعقارات</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- ################## -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset:400,
      duration:1000
    });
  </script>
<script src="js/bootstrap.min.js"></script>
  </html>
