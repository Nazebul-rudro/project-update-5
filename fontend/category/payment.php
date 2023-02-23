<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../public/assets/fontend/css/header.css">
    <link rel="stylesheet" href="../../public/assets/fontend/css/cart.css">
    <link rel="stylesheet" href="../../public/assets/fontend/css/product_details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payment</title>
</head>

<body>
     <!-- header start -->
     <header class="backgroundline col-lg-12 col-md-12 col-dm-12">
        <div class="container mt-2">
            <div class="d-flex justify-content-end align-items-center headerButton">
                <p class="px-3"> <i class="fa-solid fa-phone"></i> +8801580339094</p>
                <p class="px-3"><a href="login.php">Login</a></p>
                <p class="px-3"><a href="register.php">Registration</a></p>
            </div>
        </div>
    </header>
    <!-- header end -->
  <div style="border-bottom: 1px solid #ddd;">
  <div class="container">
    <div class="row ">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="col-lg-6 col-md-6 col-sm-6">
      <a class="navbar-brand" href="../index.php">
        <img src="../../public/assets/fontend/img/logo.jpg" alt="" width="60" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </div>


      <div class="col-lg-6 col-md-6 col-sm-6" id="navbarSupportedContent">
        <div class=" d-flex justify-content-end collapse navbar-collapse">
        <form class="d-flex">
          <input class="form-control me-2 " type="search" placeholder="I am shopping for...." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav me-auto">
            <li class="nav-item navbarAbsolute">
              <a class="nav-link" aria-current="page" href="#"> <i class="fa-sharp fa-solid fa-arrows-rotate"></i> <span class="refresh">0</span>Compare  </a>
            </li>
            <li class="nav-item navbarAbsolute">
              <a class="nav-link" href="#"><i class="fa-regular fa-heart"></i><span class="refresh">0</span> Wishlist</a>
            </li>
            <li class="nav-item navbarAbsolute">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><span class="refresh">0</span> Cart</a>
            </li>          
          </ul>
      </div>
        </div>   
    </nav>
    </div>

  </div>

  </div>

            <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card rounded-3">
          <div class="card-body mx-1 my-2">
            <div class="d-flex align-items-center">
              <div>
                <i class="fab fa-cc-visa fa-4x text-black pe-3"></i>
              </div>
              <div>
                <p class="d-flex flex-column mb-0">
                  <b>Martina Thomas</b><span class="small text-muted">**** 8880</span>
                </p>
              </div>
            </div>

            <div class="pt-3">
              <div class="d-flex flex-row pb-3">
                <div class="rounded border border-primary border-2 d-flex w-100 p-3 align-items-center"
                  style="background-color: rgba(18, 101, 241, 0.07);">
                  <div class="d-flex align-items-center pe-3">
                    <input class="form-check-input" type="radio" name="radioNoLabelX" id="radioNoLabel11"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="d-flex flex-column">
                    <p class="mb-1 small text-primary">Total amount due</p>
                    <h6 class="mb-0 text-primary">$8245</h6>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-row pb-3">
                <div class="rounded border d-flex w-100 px-3 py-2 align-items-center">
                  <div class="d-flex align-items-center pe-3">
                    <input class="form-check-input" type="radio" name="radioNoLabelX" id="radioNoLabel22"
                      value="" aria-label="..." />
                  </div>
                  <div class="d-flex flex-column py-1">
                    <p class="mb-1 small text-primary">Other amount</p>
                    <div class="d-flex flex-row align-items-center">
                      <h6 class="mb-0 text-primary pe-1">$</h6>
                      <input type="text" class="form-control form-control-sm" id="numberExample"
                        style="width: 55px;" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center pb-1">
              <a href="cart.php" class="text-muted">Go back</a>
              <a href="invoice.php" class="btn btn-primary btn-lg">Pay amount</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


     <!-- footer start -->
<footer class="">
  <div class="container py-5">
    <div class="row d-flex justify-content-between">
      <div class="col-md-3 col-sm-3">
        <div class="footer_style">
          <ul>
            <li><a href="../index.php">
              <img src="../../public/assets/fontend/img/logo.jpg" alt="" height="80" width="80">
            </a></li>
            <li class="footerContent">Reader's is an online best solution to find any kind of book.</li>
            <li style="display: flex; margin-left: -45px;">
              <input type="email" class=" border" name="" id="email" placeholder="Your Email Address" required>
              <a href="" class="btn btn-success mx-2">Subscribe</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="footercontact">
          
          <div>
            
            <ul>
              <h4>Contact Info</h4>
              <li>Address: <br>Level-5, Rajuk Rajib, Cosmo Shopping Complex, Plot-71 Sector-7, ঢাকা 1230 </li>
              <li>Phone: <br>
                +8801580339094
              </li>
              <li>Email: <br>
              support@readers.com.bd</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="footercontact">
          <ul>
            <h4>USFUL LINK</h4>
            <li>Blog</li>
            <li>Contact Us</li>
            <li>Coupon</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="footercontact">
          <ul>
            <h4>MY ACCOUNT</h4>
            <li><a href="login.php" style="text-decoration: none; color: #fff;">Login</a></li>
            <li>Order History</li>
            <li>My Wishlist</li>
            <li>Track Order</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->
    <!-- fontawesome js file -->
    <script src="https://kit.fontawesome.com/1baf502ca2.js" crossorigin="anonymous"></script>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="../../public/assets/fontend/js/jquery.min.js"></script>
    <script src="../../public/assets/fontend/js/product_details.js"> </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>