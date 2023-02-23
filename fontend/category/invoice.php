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

    <title>Invoice</title>
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

  <div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Invoice -- <strong>ID: #123-123</strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
              class="fas fa-print text-primary"></i> Print</a>
          <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="far fa-file-pdf text-danger"></i> Export</a>
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <img src="../../public/assets/fontend/img/logo.jpg" alt="" height="70" width="60">
            <p class="pt-0">Readers</p>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">To: <span style="color:#5d9fc5 ;">John Lorem</span></li>
              <li class="text-muted">Street, City</li>
              <li class="text-muted">State, Country</li>
              <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">ID:</span>#123-456</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Creation Date: </span>Jun 23,2021</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                  Unpaid</span></li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Qty</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pro Package</td>
                <td>4</td>
                <td>$200</td>
                <td>$800</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Web hosting</td>
                <td>1</td>
                <td>$10</td>
                <td>$10</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Consulting</td>
                <td>1 year</td>
                <td>$300</td>
                <td>$300</td>
              </tr>
            </tbody>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <p class="ms-3">Add additional notes and payment information</p>

          </div>
          <div class="col-xl-3">
            <ul class="list-unstyled">
              <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>$1110</li>
              <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>$111</li>
            </ul>
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 25px;">$1221</span></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you for your purchase</p>
          </div>
          <div class="col-xl-2">
            <a href="thankyou.php" class="btn btn-primary text-capitalize"
              style="background-color:#60bdf3 ;">Pay Now</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


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