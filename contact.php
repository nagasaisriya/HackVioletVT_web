<!doctype html>
<html lang="en">

<head>
    <title>SheCodes-Think and Do-Contacts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    img {
        opacity: 0.6;
      }

      h1 {
        color: black;
        font-family: "Times New Roman", Times, serif;
      }
      body {
        background-image: url("./bimage.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color: white;
        text-align:center;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SheCodes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="./mainindex.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./about.html">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Technology
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/blob/main/HTML">HTML </a>
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/blob/main/CSS">CSS</a>
                        <a class="dropdown-item"
                            href="https://github.com/30DaysofWebDEV/DSC-30-Days-of-Web/tree/main/Bootstrap">Bootstrap</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">More to come</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./contact.html">Contact us</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <div class="card text-center my-4">
            <div class="card-header">
                CONTACT FORM
            </div>
            <div class="card-body">
                <form action="">
                   <!--- <p class="bg-dark text-white"><b>Required fields are followed by *</b></p>
                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                        <div class="col-md-8">
                            <p>FIRST NAME: * <input type="text" name="name" required></p>
                            <p>LAST NAME: * <input type="text" name="name" required></p>
                        </div>-->

                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                              </div>
                            </div>
                            <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Address 1</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress2">Address 2</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>Telangana</option>
                                      <option>AP</option>
                                      <option>Orrisa</option>
                                      <option>MP</option>
                                      <option>Other</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>

</body>
<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2021 SheCodes <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
</html>

            
<?php
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = "Hi i am ".$name." ".$_POST['message'];
    $subject = "Need help";
    $headers = "From:" . $_POST['email'];
    $to = "codingninja576@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Successfully sent!";
        // header("location:index.html");
    } else {
        echo 'oops! Somthing went wrong';
    }
}

?>
