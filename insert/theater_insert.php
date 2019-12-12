<?php
  require_once("../dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>이전제, 이남규 DB project</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="../css/landing-page.min.css" rel="stylesheet">

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

$('#add_button').click(function () {

      var add_theater_name = $("#theater_name").val();
      var add_si_do = $("#si_do").val();
      var add_si_gun_gu = $("#si_gun_gu").val();
      var add_phone_number = $("#phone_number").val();
      
      alert("영화관 이름: "+add_theater_name+", 시/도: "+add_si_do+", 시/군/구: "+ add_si_gun_gu+ ", 전화번호: "+add_phone_number);           
      
      request = $.post('/DB_Project/insert_process/theater_insert_process.php', {
          // sql: order, -------> 여기서 sql문을 다 만들어서 보내려니까 에러가 발생 ----> 각 삽입 페이지를 별도로 만들면 에러 x
          sql_theater_name: add_theater_name,
          sql_si_do: add_si_do,
          sql_si_gun_gu: add_si_gun_gu,
          sql_phone_number: add_phone_number,
        }, function (returnedData) {
          console.log(returnedData);
      });
       
});


});

</script>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#"> Database Project</a>
      <a href="/DB_Project/main/movie_search_delete.php">영화 </a>
      <a href="/DB_Project/main/director_search_delete.php">감독</a>
      <a href="/DB_Project/main/actor_search_delete.php">배우</a>
      <a href="/DB_Project/main/theater_search_delete.php">극장</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header  class="masthead text-white text-center"  style="background-image: url('../img/theater_insert.jpg');">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1 style="color:white">새로운 영화관 정보를 입력하세요</h1>	
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="tab">
                                
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <h3 style="color:white">영화관 정보</h3>
                                        <form action="#">
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="theater_name">영화관 이름</label>
                                                    <input type="text" class="form-control" id="theater_name"  placeholder="영화관 이름">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="si_do">시/도</label>
                                                    <input type="text" class="form-control" id="si_do"  placeholder="시/도">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="si_gun_gu">시/군/구</label>
                                                    <input type="text" class="form-control" id="si_gun_gu"  placeholder="시/군/구">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="phone_number"">전화번호 </label>
                                                    <input type="text" class="form-control" id="phone_number"  placeholder="02-123-4567"">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" id= "add_button" class="btn btn-primary btn-block" value="추가"">
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
