
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Raleway&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield('title')
  </head>
  <body>

    <header id="header">
      <nav id="nav" class="nav container-fluid">
        <div class="bar Row my-2 w-100">
          <div class="col-2">
            <a href="#">
              <img class="img-responsive ml-2" id="logo" src="{{asset('storage/JB.jpg')}}" alt="JB">
            </a>
          </div>
          <div class="smallbar d-block d-lg-none">
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownsmallmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bars"></i>
                </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownsmallmenu">

                    <a class="dropdown-item" href="#">Home</a>
                    <a class="dropdown-item" href="#">Services</a>
                    <a class="dropdown-item" href="#">About me</a>
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="#">Login</a>
                  </div>
                </div>
          </div>
          <div class="bigbar col-8 pt-2 d-none d-lg-block">
            <ul id="navlist" class="row">
                <li class="col-2">
                  <a href="/">
                    Home
                  </a>
                </li>
                <li class="col-2">
                    <a href="#">
                      Services
                    </a>
                </li>
                <li class="col-2">
                  <a href="#">
                    About me
                  </a>
                </li>
                <li class="col-2">
                    <a href="">
                    Contact
                    </a>
                </li>
                <li class="col-2">
                    <a href="">
                    Login
                    </a>
                </li>

          </ul>
          </div>
        </div>



      </nav>
    </header>

    <main id="main">
      @yield('main')
    </main>

    <footer id="footer" class="container-fluid w-100 row pt-4">
      <div class="footerlist col-10 col-lg-4">
        <h5>Bagiu Consulting</h5>
        <p></p>
        <ul class="pl-0">
          <li>Adress: Slingan 31, 44460, Stora höga, Sverige</li>
          <li>Moms: 1312451213</li>
          <li>Bankgiro: 1231-4678-43435</li>
        </ul>

      </div>

      <div class="footerlinks col-10 col-lg-2">
        <h6>Links</h6>
        <ul class="pl-0">
          <li> <a href="#"> Home </a> </li>
          <li> <a href="#"> Services </a> </li>
          <li> <a href="#"> About Me </a> </li>
          <li> <a href="#"> Contact </a> </li>

          <br/>
          <li> <a href="#"> Login </a> </li>
          <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>

        </ul>

      </div>


    </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
