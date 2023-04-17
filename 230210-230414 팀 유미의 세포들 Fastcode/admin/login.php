<!-- 아이디 admin 비밀번호 0000 으로 만들기-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Admin Login | FASTCODE</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
 <!-- POPUP -->
  <dialog id="popup">
    <div class="modal_box">
      <div class="modal_list">
        <h1>본 사이트는 개인 포트폴리오 사이트 입니다.</h1>
        <hr />
        <h2>※ 원활한 화면구현을 위해 최신 Browser를 사용해주세요.</h2>
        <hr />
        <h2>※ Admin 관리자 사이트 : 아이디- admin / 비밀번호- 0000</h2>
        <hr />

        <div class="modal_info">
          <p><strong>제작기간 :</strong> 2023.02.13 ~ 2023.3.16</p>
          <p><strong>특징 :</strong> HTML, CSS, Javascript, JQuery, PHP</p>
          <p>
            <strong>구현 완료 페이지 </strong> 
            <br /><a href="login.php">로그인</a> / <a href="dashboard/index.php">대시보드</a> / <a href="category/category_list.php">카테고리리스트</a> /<a href="lecture/lecture_list.php">강좌리스트</a> / <a href="coupon/coupon_list.php">쿠폰리스트</a> / <a href="board/board_index.php">공지사항</a>
          </p>
          <p><strong>팀원 :</strong> 장*홍, 오*경, 박*지, 유*은, 손*진, 이*희</p>
        </div>
        <hr />
        <div class="modal_info_part">
          <strong>파트 분담</strong>
          <p><strong>기획 :</strong>  오*경, 박*지, 이*희</p>
          <p><strong>디자인 :</strong> 장선홍, 유*은, 손*진</p>
          <p><strong>로그인페이지 :</strong> HTML, CSS - 박*지 / PHP - 장선홍</p>
          <p><strong>대시보드페이지 :</strong> HTML, CSS - 박*지 / PHP - 장선홍</p>
          <p><strong>강좌리스트페이지 :</strong> HTML, CSS - 오*경 / PHP - 손*진</p>
          <p><strong>강좌상세보기페이지 :</strong> HTML, CSS - 오*경 / PHP - 손*진</p>
          <p><strong>공지사항페이지 :</strong> HTML, CSS - 유*은 / PHP - 이*희</p>
    <p><strong>쿠폰페이지 :</strong> HTML, CSS - 유*은 / PHP - 이*희</p>
        </div>
        <hr />
        <button>
          <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="popup_check">
          <label for="oneday_close">오늘 하루 보지않기</label>
          <input type="checkbox" id="oneday_close" />
        </div>
      </div>
    </div>
  </dialog>
  <!-- end POPUP -->
  <main>
    <h1 id="main-logo"><a href="/"><img src="img/fastcode_logo_big.png" alt="Fastcode"><span>fastcode</span></a></h1>
    <form action="login_ok.php" method="post">
      <h2 class="content-title">admin</h2>
      <p class="field">
        <label for="username">username</label>
        <i class="fa-solid fa-user"></i>
        <input type="text" id="username" name="userid" placeholder="username">
      </p>
      <p class="field">
        <label for="password">password</label>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="password" name="passwd" placeholder="password">
      </p>
      <input type="submit" value="LOGIN" class="y-btn login-btn btn-navy">
    </form>
  </main>
  <!-- <div class="login-bg"> -->
    <img src="img/login_wave_bg.png" alt="background" class="bg-bottom">
    <div><i class="fa-solid fa-sailboat"></i></div>
    <img src="img/login_wave_top.png" alt="background" class="bg-top">
  <!-- </div> -->
  <script>
    //팝업 생성
    let popupDialog = document.querySelector("#popup"),
      dayCheck = document.querySelector("#oneday_close"),
      popupClose = popupDialog.querySelector("button");

    function setCookie(name, value, day) {
      let date = new Date();
      date.setDate(date.getDate() + day);
      document.cookie = `${name}=${value};expires=${date.toUTCString()}`;
    }

    //쿠키확인
    function checkCookie(name) {
      let cookieArr = document.cookie.split(";");
      let visited = false;

      for (let cookie of cookieArr) {
        if (cookie.search(name) > -1) {
          visited = true;
          break;
        }
      }

      //dialog 표시여부
      if (!visited) {
        popupDialog.setAttribute("open", "");
      }
    }
    checkCookie("ABC");

    //닫기버튼
    popupClose.addEventListener("click", () => {
      popupDialog.removeAttribute("open");
      if (dayCheck.checked) {
        setCookie("ABC", "home", 1);
      } else {
        setCookie("ABC", "home", -1);
      }
    });
  </script>
</body>
</html>
