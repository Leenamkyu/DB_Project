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
  var request;

  $(document).ready(function () {

    request = $.post("/DB_Project/select_process.php", {
      sql: "select * from actor",
    }, function (returnedData) {});

    request.done(function (response, textStatus, jqXHR) { // Log a message to the console
      if (response.length == 0) {
        alert('데이터베이스에 배우 정보가 없습니다.')
      } else {
        buildHtmlTable(response, '#movie_list_table');
        $("[id^=row]").click(function () {

          if (confirm('해당 배우를 삭제하시겠습니까?')) {

            request2 = $.post('/DB_Project/delete_process/actor_delete_process.php', {
              a_id: this.value,
            }, function (returnedData) {
              console.log(returnedData);
            });
            request2.done(function (response, textStatus, jqXHR) {
              alert('배우가 삭제되었습니다.');
              setTimeout(() => {
                location.reload();
              }, 1000);
            });
            request2.fail(function (response, textStatus, jqXHR) {
              alert('배우 삭제에 실패하였습니다.')
            });
          } else {

          }
        }); // end of button click

        $("[id^=write]").click(function () {
          if (confirm('출연작품을 추가하시겠습니까?')) {
            console.log(this.value);
            var form = document.createElement('form');
            var objs;
            objs = document.createElement('input');
            objs.setAttribute('type', 'hidden');
            objs.setAttribute('name', 'name');
            objs.setAttribute('value', this.value);
            form.appendChild(objs);
            form.setAttribute('method', 'post');
            form.setAttribute('action', "/DB_Project/insert/actor_awards_insert.php");
            document.body.appendChild(form);
            form.submit();
          }

        }); // end of button click

        $("[id^=read]").click(function () {
          if (confirm('출연작품을 보시겠습니까?')) {
            //  request2 = $.post('/', {
            //      m_id: this.value,                           
            //  }, function (returnedData) {
            //      console.log(returnedData);
            //  });
            //  request2.done(function (response, textStatus, jqXHR) {
            //$('#movie_list_table').empty(); //새로운 쿼리에 대한 table을 생성하기 위해 기존 table 삭제(남규)
            //buildHtmlTable(response, '#movie_list_table');

            //  });
            //  request2.fail(function (response, textStatus, jqXHR) {
            //       alert('수상 내역이 없습니다')
            //  });
          }

        }); // end of button click


      }
    });
    request.fail(function (jqXHR, textStatus, errorThrown) { // Log the error to the console
      alert('fail request');
    });

    $('#search_button').click(function () {
      event.preventDefault();

      if (request) {
        request.abort();
      }

      var search_value = $("#search_value").val();
      alert(search_value);

      request = $.post('/DB_Project/select_process.php', {
        sql: search_value,
      }, function (returnedData) {
        console.log(returnedData);
      });

      request.done(function (response, textStatus, jqXHR) { // Log a message to the console
        if (response.length == 0) {
          alert('검색 조건에 일치하는 배우가 없습니다.')
        } else {
          $('#movie_list_table').empty(); //새로운 쿼리에 대한 table을 생성하기 위해 기존 table 삭제(남규)
          buildHtmlTable(response, '#movie_list_table');
          $("[id^=row]").click(function () {

            if (confirm('해당 배우를 삭제하시겠습니까?')) {

              request2 = $.post('/DB_Project/delete_process/actor_delete_process.php', {
                a_id: this.value,
              }, function (returnedData) {
                console.log(returnedData);
              });
              request2.done(function (response, textStatus, jqXHR) {
                alert('배우가 삭제되었습니다.');
                setTimeout(() => {
                  location.reload();
                }, 1000);
              });
              request2.fail(function (response, textStatus, jqXHR) {
                alert('배우 삭제에 실패하였습니다.')
              });
            } else {

            }
          }); // end of button click

          $("[id^=write]").click(function () {
            if (confirm('출연작품을 추가하시겠습니까?')) { //리뷰 작성
              console.log(this.value);
              var form = document.createElement('form');
              var objs;
              objs = document.createElement('input');
              objs.setAttribute('type', 'hidden');
              objs.setAttribute('name', 'name');
              objs.setAttribute('value', this.value);
              form.appendChild(objs);
              form.setAttribute('method', 'post');
              form.setAttribute('action', "/DB_Project/insert/actor_awards_insert.php");
              document.body.appendChild(form);
              form.submit();
            }

          }); // end of button click

          $("[id^=read]").click(function () {
            if (confirm('출연작품을 보시겠습니까?')) { // 리뷰 가져오기 
              //  request2 = $.post('/', {
              //      m_id: this.value,                           
              //  }, function (returnedData) {
              //      console.log(returnedData);
              //  });
              //  request2.done(function (response, textStatus, jqXHR) {
              //$('#movie_list_table').empty(); //새로운 쿼리에 대한 table을 생성하기 위해 기존 table 삭제(남규)
              //buildHtmlTable(response, '#movie_list_table');

              //  });
              //  request2.fail(function (response, textStatus, jqXHR) {
              //       alert('수상 내역이 없습니다')
              //  });
            }

          }); // end of button click
        }
      });
      request.fail(function (jqXHR, textStatus, errorThrown) { // Log the error to the console
        alert('해당 배우를 찾지 못했습니다');
      });

    });

  }); 
  </script>

  <script>
    function buildHtmlTable(myList, selector) {
      var columns = addAllColumnHeaders(myList, selector);

      for (var i = 0; i < myList.length; i++) {
        var row$ = $('<tr/>');
        for (var colIndex = 0; colIndex < columns.length; colIndex++) {
          var cellValue = myList[i][columns[colIndex]];
          if (cellValue == null) cellValue = "";
          row$.append($('<td style="color:white	"/>').html(cellValue));
        }
        row$.append($('<button type="button" id=row"' + i + '" style ="background-color:white; "class="btn btn btn-block" value="' + myList[i]['a_id'] + '" />').html('배우 삭제'));
        row$.append($('<td/>'));
        row$.append($('<button type="button" id=write"' + i + '" style ="background-color:white; "class="btn btn btn-block" value="' + myList[i]['a_id'] + '" />').html('출연작품추가'));
        row$.append($('<td/>'));
        row$.append($('<button type="button" id=read"' + i + '" style ="background-color:white; "class="btn btn btn-block" value="' + myList[i]['a_id'] + '" />').html('출연작품'));

        $(selector).append(row$);
      }
    }
  // Adds a header row to the table and returns the set of columns.
  // Need to do union of keys from all records as some records may not contain
  // all records.
  
  function addAllColumnHeaders(myList, selector) {
      var columnSet = [];
      var headerTr$ = $('<tr/>');
  
      for (var i = 0; i < myList.length; i++) {
          var rowHash = myList[i];
          for (var key in rowHash) {
              if ($.inArray(key, columnSet) == -1) {
                  columnSet.push(key);
                  headerTr$.append($('<th style="color:white"/>').html(key));
  
              }
          }
  
      }
      headerTr$.append($('<th/>').html(''));
      $(selector).append(headerTr$);
  
      return columnSet;
  }
  </script>
  
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Database Project</a>
        <a href="/DB_Project/main/movie_search_delete.php">영화</a>
        <a href="/DB_Project/main/director_search_delete.php">감독</a>
        <a href="/DB_Project/insert/actor_insert.php">배우 추가</a>
        <a href="/DB_Project/main/theater_search_delete.php">극장</a>
      </div>
    </nav>
  
    <!-- Masthead -->
    <header class="masthead text-white text-center"  style="background-image: url('../img/actor_search.jpg');" >
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">actor 테이블 Query를 입력하세요</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" id= "search_value" class="form-control form-control-lg" placeholder="ex) select * from actor...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" id= "search_button" class="btn btn-block btn-lg btn-primary">검색</button>
                </div>
              </div>
            </form>
            
            <h1><br>배우 목록</br></h1>
            <div class="table-responsive">
                <!-- <table class="table table-striped table-bordered table-hover" -->
                <table class="table  
                    sytle="margin: auto; text-align: center" id="movie_list_table">
                </table>
            </div>
          </div>
          
        </div>
      </div>
    </header>
  
    <!-- Advanced Tables -->
  
  
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
  