<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>이전제, 이남규 DB project</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#"> Database Project</a>
      <a href="/movie_search_delete.php">영화 </a>
      <a href="/director_search_delete.php">감독</a>
      <a href="/actor_search_delete.php">배우</a>
      <a href="/theater_search_delete.php">극장</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header  class="masthead text-white text-center"  style="background-image: url('img/director_insert.jpg');">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1 style="color:white">새로운 감독 정보를 입력하세요</h1>	
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="tab">
                                
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <h3 style="color:white">감독 정보</h3>
                                        <form action="#">
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="title">감독 이름</label>
                                                    <input type="text" class="form-control" id="name"  placeholder="감독 이름">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="birth">생년월일</label>
                                                    <input type="date" class="form-control" id="birth"  placeholder="생년월일">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="gender"">성별</label>
                                                    <input type="text" class="form-control" id="gender"  placeholder="남 / 녀 ">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="country"">국가</label>
                                                    <input type="text" class="form-control" id="country"  placeholder="국가">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="추가">
                                                </div>
                                            </div>
                                        </form>	
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
</header>
  
  


  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
