document
  .querySelector("#js-drawer-button")
  .addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector("#js-drawer-button").classList.toggle("is-checked");
    document.querySelector("#js-drawer-content").classList.toggle("is-checked");
  });

document
  .querySelectorAll('#js-drawer-content a[href^="#"]')
  .forEach(function (link) {
    link.addEventListener("click", function (e) {
      document
        .querySelector("#js-drawer-button")
        .classList.remove("is-checked");
      document
        .querySelector("#js-drawer-content")
        .classList.remove("is-checked");
    });
  });

//header-line
class Main {
  constructor() {
    this.init();
  }

  init() {
    this.copyText();
    this.calculateLoopAnimationSpeed();
    this.resizeRefresh();
  }

  //リサイズ時にアニメーションの速度を再計算
  resizeRefresh() {
    const target = document.body;
    const resizeObserver = new ResizeObserver((entries) => {
      entries.forEach((entry) => {
        this.calculateLoopAnimationSpeed();
      });
    });
    resizeObserver.observe(target);
  }

  //アニメーションの速度を計算してCSS変数に
  calculateLoopAnimationSpeed() {
    const targets = document.querySelectorAll(".js-tick");
    if (!targets.length) {
      return;
    }

    const distance = window.innerWidth;
    const mql = window.matchMedia("(min-width: 801px)");
    const time = mql.matches ? 40 : 20;
    const speed = distance / time;

    targets.forEach((target) => {
      const tickElems = target.querySelectorAll(".js-tick-item");
      if (!tickElems.length) {
        return;
      }

      const total = tickElems.length - 1;

      tickElems.forEach((el, i) => {
        const elWidth = el.clientWidth;
        const elTime = Math.floor(elWidth / speed);
        el.style.setProperty("--tick-duration", `${elTime}s`);
        el.style.setProperty("--tick-delay", `${elTime / -2}s`);

        if (i === total) {
          el.parentNode.classList.remove("no-tick");
        }
      });
    });
  }

  //テキストをコピーする
  copyText() {
    const targets = document.querySelectorAll(".js-tick");
    if (!targets.length) {
      return;
    }

    targets.forEach((target) => {
      const tickElems = target.querySelectorAll(".js-tick-item");
      if (!tickElems.length) {
        return;
      }

      let length = 0;
      tickElems.forEach((el) => {
        length += el.clientWidth;
        el.insertAdjacentHTML("afterend", el.outerHTML);
        if (length > window.innerWidth) {
          return;
        }
      });
    });
  }
}

//fade-in-view
const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-in-view");
    } else {
    }
  });
});

const inViewItems = document.querySelectorAll(".js-in-view");
inViewItems.forEach(function (inViewItem) {
  intersectionObserver.observe(inViewItem);
});

//heading
document.addEventListener("DOMContentLoaded", () => {
  const objects = document.querySelectorAll(".heading");

  const cb = function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("displayed");
        observer.unobserve(entry.target);
      }
    });
  };

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0,
  };

  const io = new IntersectionObserver(cb, options);

  objects.forEach((object) => {
    io.observe(object);
  });
});

const animationTargetElements = document.querySelectorAll(".heading");
for (let i = 0; i < animationTargetElements.length; i++) {
  const targetElement = animationTargetElements[i];
  texts = targetElement.textContent;
  textsArray = [];

  targetElement.textContent = "";

  for (let j = 0; j < texts.split("").length; j++) {
    textsArray.push(
      '<span><span style="animation-delay: ' +
        (j + 12) * 0.05 +
        's" >' +
        texts.split("")[j] +
        "<span></span>"
    );
  }
  for (let k = 0; k < textsArray.length; k++) {
    targetElement.innerHTML += textsArray[k];
  }
}

//fv

//skill
const scrollAnim = () => {
  const fadeElem = document.querySelectorAll(".lineAnimation");

  window.addEventListener("scroll", (event) => {
    fadeElem.forEach((fadeElem) => {
      const position = fadeElem.offsetTop;
      const scroll = window.scrollY;
      const windowHeight = window.innerHeight;
      if (scroll > position - windowHeight + 180) {
        fadeElem.classList.add("isActive");
      }
    });
  });
};
scrollAnim();

//skill-title
$(function () {
  $(".inview").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show");
    }
  });
});

//skill/about/site-detail-img
$(window).on("load", function () {
  $(".rotation").each(function () {
    var elemPos = $(this).offset().top,
      scroll = $(window).scrollTop(),
      windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 150) {
      $(this).addClass("scrollin");
    }
  });
});

$(window).scroll(function () {
  $(".rotation").each(function () {
    var elemPos = $(this).offset().top,
      scroll = $(window).scrollTop(),
      windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 150) {
      $(this).addClass("scrollin");
    }
  });
});

//scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll(".fade-in");
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (
        window.innerHeight >
        scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin
      ) {
        scrollAnimationElm[i].classList.add("on");
      }
    }
  };
  window.addEventListener("load", scrollAnimationFunc);
  window.addEventListener("scroll", scrollAnimationFunc);
});

//other-swiper
const swiper = new Swiper(".swiper", {
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 2,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },

  breakpoints: {
    768: {
      spaceBetween: 20,
      centeredSlides: true,
      loop: true,
      speed: 500,
      slidesPerView: 3,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
    },
  },
});

//work-card
$(function () {
  $(window).scroll(function () {
    const wHeight = $(window).height();
    const wScroll = $(window).scrollTop();
    $(".work-card").each(function () {
      const bPosition = $(this).offset().top;
      if (wScroll > bPosition - wHeight + 200) {
        $(".fadeIn500ms").addClass("fadeInAnime500ms");
        $(".fadeIn1s").addClass("fadeInAnime1s");
        $(".fadeIn1500ms").addClass("fadeInAnime1500ms");
      }
    });
  });
});

//career
$(function () {
  $(window).scroll(function () {
    const wHeight = $(window).height();
    const wScroll = $(window).scrollTop();
    $(".career__box").each(function () {
      const bPosition = $(this).offset().top;
      if (wScroll > bPosition - wHeight + 200) {
        $(".fadeIn500ms-up").addClass("fadeInAnime500ms");
        $(".fadeIn1s-up").addClass("fadeInAnime1s");
        $(".fadeIn1500ms-up").addClass("fadeInAnime1500ms");
        $(".fadeIn2s-up").addClass("fadeInAnime2s");
        $(".fadeIn2500ms-up").addClass("fadeInAnime2500ms");
      }
    });
  });
});

//likes
$(function () {
  $(window).scroll(function () {
    const wHeight = $(window).height();
    const wScroll = $(window).scrollTop();
    $(".likes-card").each(function () {
      const bPosition = $(this).offset().top;
      if (wScroll > bPosition - wHeight + 200) {
        $(".fadeIn500ms").addClass("fadeInAnime500ms");
        $(".fadeIn1s").addClass("fadeInAnime1s");
        $(".fadeIn1500ms").addClass("fadeInAnime1500ms");
        $(".fadeIn2s").addClass("fadeInAnime2s");
      }
    });
  });
});

//site-detail__cards
$(function () {
  $(window).scroll(function () {
    const wHeight = $(window).height();
    const wScroll = $(window).scrollTop();
    $(".site-detail__card ").each(function () {
      const bPosition = $(this).offset().top;
      if (wScroll > bPosition - wHeight + 200) {
        $(".fadeIn500ms").addClass("fadeInAnime500ms");
        $(".fadeIn1s").addClass("fadeInAnime1s");
        $(".fadeIn1500ms").addClass("fadeInAnime1500ms");
      }
    });
  });
});

//footer
new Main();

var timeOut;
document
  .getElementById("contact-link")
  .addEventListener("mouseover", function () {
    document.getElementById("contact-link").className =
      "active text nodecoration flex horizontal";
    clearTimeout(timeOut);
    timeOut = setTimeout(function () {
      document.getElementById("contact-link").className =
        "text nodecoration flex horizontal";
    }, 4000);
  });

//page-top
jQuery(window).on("scroll", function () {
  if (100 < jQuery(window).scrollTop()) {
    jQuery("#js-pagetop").addClass("is-show");
  } else {
    jQuery("#js-pagetop").removeClass("is-show");
  }
});
