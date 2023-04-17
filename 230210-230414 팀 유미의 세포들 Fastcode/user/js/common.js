 // header
 let lastScrollTop = 0;
 let headerHeight = $("header").innerHeight();
	$(window).scroll(function () {
	let scrollTop = $(this).scrollTop();
	// Math.abs: 주어진 숫자의 절대값을 반환
	if (Math.abs(lastScrollTop - scrollTop) <= headerHeight) return;
	if (scrollTop > lastScrollTop && lastScrollTop > headerHeight) {
		$("header").css({ top: "-90px" });
	} else {
		$("header").css({ top: "0px" });
	}
	lastScrollTop = scrollTop;
}); 

 // top btn
 $(window).scroll(function () {
		if ($(this).scrollTop() > 250) {
			$('.top-btn').fadeIn(100);
		} else {
			$('.top-btn').fadeOut(400);
		}
	});

	$('.top-btn').click(function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 ,behavior:'smooth'}, 300);
	});

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