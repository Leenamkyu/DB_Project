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

      var add_title = $("#title").val();
      var add_genre = $("#genre").val();
      var add_country = $("#country").val();
      var add_running_time = $("#running_time").val();
      var add_release_date = $("#release_date").val();
      var add_age_limit = $("#age_limit").val();
      var add_d_id = $("#d_id").val();
      var add_rating = $("#rating").val();
      var add_opening_period = $("#opening_period").val();
      var add_booking_rate = $("#booking_rate").val();
      

      alert("제목: "+add_title+", 장르: "+add_genre+", 국가: "+ add_country+ ", 러닝타임: "+add_running_time+", 개봉일: "+add_release_date+
            ", 연령제한: "+add_age_limit+", d_id: "+add_d_id+", 평점: "+add_rating+", 상영기간: "+add_opening_period+", 예매율: "+ add_booking_rate);           

      request = $.post('/DB_Project/insert_process/movie_insert_process.php', {
          // sql: order, -------> 여기서 sql문을 다 만들어서 보내려니까 에러가 발생 ----> 각 삽입 페이지를 별도로 만들면 에러 x
          sql_title: add_title,
          sql_genre: add_genre,
          sql_country: add_country,
          sql_running_time: add_running_time,
          sql_release_date: add_release_date,
          sql_age_limit: add_age_limit,
          sql_d_id: add_d_id,
          sql_rating: add_rating,
          sql_opening_period: add_opening_period,
          sql_booking_rate: add_booking_rate,
        }, function (returnedData) {
          console.log(returnedData);
      });

      request.done(function (response, textStatus, jqXHR) {
      alert(response);
      setTimeout(() => {
                  location.reload();
                }, 500);
      
    });
    request.fail(function (response, textStatus, jqXHR) {
      alert('실패하였습니다.')
    });
    
       
});


});

</script>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#"> Database Project</a>
      <a href="/DB_Project/main/movie_search_delete.php">영화</a>
      <a href="/DB_Project/main/director_search_delete.php">감독</a>
      <a href="/DB_Project/main/actor_search_delete.php">배우</a>
      <a href="/DB_Project/main/theater_search_delete.php">극장</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header  class="masthead text-white text-center"  style="background-image: url('../img/bg-masthead.jpg');">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1 style="color:white">새로운 영화 정보를 입력하세요</h1>	
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="tab">
                                
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <h3 style="color:white">영화 정보</h3>
                                        <form action="#">
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="title">영화 제목</label>
                                                    <input type="text" class="form-control" id="title"  placeholder="영화 제목">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="genre">장르</label>
                                                    <input type="text" class="form-control" id="genre"  placeholder="장르">
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
                                                    <label style="color:white"for="running_time">러닝 타임</label>
                                                    <input type="text" class="form-control" id="running_time"  placeholder="러닝 타임"">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="release_date">개봉 일자</label>
                                                    <input type="date" class="form-control" id="release_date"  placeholder="개봉 일자">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="age_limit">연령 제한</label>
                                                    <input type="text" class="form-control" id="age_limit"  placeholder="연령 제한">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="d_id">디렉터_id</label>
                                                    <input type="text" class="form-control" id="d_id"  placeholder="디렉터_id">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="rating">별점</label>
                                                    <input type="text" class="form-control" id="rating"  placeholder="별점">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="opening_period">개봉 기간</label>
                                                    <input type="text" class="form-control" id="opening_period"  placeholder="개봉 기간">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label style="color:white"for="booking_rate">예매율</label>
                                                    <input type="text" class="form-control" id="booking_rate"  placeholder="예매율">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" id= "add_button" class="btn btn-primary btn-block" value="추가">
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
