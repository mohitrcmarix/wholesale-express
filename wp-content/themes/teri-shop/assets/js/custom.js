jQuery(document).ready(function ($) {
  // <!------- Header sticky Js Start ------->
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 500) {
      $(".header-section.home-header").addClass("sticky");
    } else {
      $(".header-section.home-header").removeClass("sticky");
    }
  });

  // <!------- Swiper: Recently Sold ------->
  new Swiper("#rc-sold-slider", {
    slidesPerView: 3.2,
    spaceBetween: 16,
    navigation: {
      nextEl: ".swiper-button-next-new",
      prevEl: ".swiper-button-prev-new",
    },
    breakpoints: {
      991: { slidesPerView: 3.2 },
      768: { slidesPerView: 2.5 },
      481: { slidesPerView: 2.2 },
      320: { slidesPerView: 1.2 },
    },
  });

  // <!------- Swiper: Testimonials ------->
  new Swiper("#testimonials-slider", {
    slidesPerView: 2.3,
    spaceBetween: 16,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: { slidesPerView: 2.3 },
      991: { slidesPerView: 2 },
      768: { slidesPerView: 1.3 },
      641: { slidesPerView: 1.1 },
      481: { slidesPerView: 1.5 },
      0: { slidesPerView: 1.2 },
    },
  });

  // <!------- Swiper: Trusted Partners ------->
  new Swiper(".trusted-partners", {
    loop: true,
    autoplay: true,
    slidesPerView: 7,
    paginationClickable: true,
    spaceBetween: 56,
    speed: 500,
    autoplay: {
      delay: 1500,
    },
    breakpoints: {
      992: { slidesPerView: 7, spaceBetween: 40 },
      768: { slidesPerView: 5, spaceBetween: 30 },
      480: { slidesPerView: 4, spaceBetween: 20 },
      0: { slidesPerView: 3, spaceBetween: 20 },
    },
  });

  // <!------- Menu Toggle ------->
  $("#toggle").click(function () {
    $(this).toggleClass("on");
    $(".menu").slideToggle();
  });

  $("#toggle").click(function () {
    $(this).toggleClass("click");
    $(".menu").toggleClass("show");
  });

  $(".close-icon").on("click", function () {
    $(".menu").removeClass("show");
  });

  $(".htop-inner .close-icon").on("click", function () {
    $(".header-top-section").removeClass("show");
  });
});


jQuery(document).ready(function ($) {

  $("#open-signup").on("click", function () {
    $("#signup-popup, #signup-footer").show();
    $("#signin-popup, #signin-footer").hide();
  });

  $("#open-signin").on("click", function () {
    $("#signup-popup, #signup-footer").hide();
    $("#signin-popup, #signin-footer").show();
  });
  $(".signup-footer").on("click", function () {
    $("#signup-popup, #signup-footer").hide();
    $("#signin-popup, #signin-footer").show();
  });
  $(".signin-footer").on("click", function () {
    $("#signup-popup, #signup-footer").show();
    $("#signin-popup, #signin-footer").hide();
  });
});

jQuery(function ($) {

  $("#signup-form").on("submit", function (e) {
    let hasError = false;

    $("span.first_name_error, span.last_name_error, span.email_error, span.password_error, span.phone_number_error, span.dealership_name_error, span.dealership_type_error").text("");

    let fname = $("input[name='first_name']").val().trim();
    let lname = $("input[name='last_name']").val().trim();
    let email = $("input[name='email']").val().trim();
    let password = $("input[name='password']").val().trim();
    let phone = $("input[name='phone_number']").val().trim();
    let dname = $("input[name='dealership_name']").val().trim();
    let dtype = $("input[name='dealership_type']").val().trim();

    if (password === "") {
      $(".password_error").text("Password is required.");
      hasError = true;
    } else if (password.length < 8) {
      $(".password_error").text("Password must be minimum 8 characters.");
      hasError = true;
    }

    if (fname === "") {
      $(".first_name_error").text("First Name is required.");
      hasError = true;
    }

    if (lname === "") {
      $(".last_name_error").text("Last Name is required.");
      hasError = true;
    }

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
      $(".email_error").text("Invalid email address.");
      hasError = true;
    }

    if (phone === "") {
      $(".phone_number_error").text("Phone number is required.");
      hasError = true;
    } else if (/[^0-9]/.test(phone)) {
      $(".phone_number_error").text("Please enter only numbers.");
      hasError = true;
    } else if (!/^[0-9]{10}$/.test(phone)) {
      $(".phone_number_error").text("Phone number must be 10 digits.");
      hasError = true;
    }


    if (dname === "") {
      $(".dealership_name_error").text("Dealership Name is required.");
      hasError = true;
    }

    if (dtype === "") {
      $(".dealership_type_error").text("Dealership Type is required.");
      hasError = true;
    }

    if (hasError) {
      e.preventDefault();
      return false;
    }

    return true;
  });

  $("#signin-form").on("submit", function (e) {
    let hasError = false;

    $("span.signin-email_error, span.signin-password_error").text("");

    let email = $("input[name='signin-email']").val().trim();
    let password = $("input[name='signin-password']").val().trim();

    console.log(email + "----" + password);

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
      $(".signin-email_error").text("Invalid email address.");
      hasError = true;
    }

    if (password === "") {
      $(".signin-password_error").text("Password is required.");
      hasError = true;
    } else if (password.length < 8) {
      $(".signin-password_error").text("Password must be minimum 8 characters.");
      hasError = true;
    }

    if (hasError) {
      e.preventDefault();
      return false;
    }

    return true;

  });

  $(".wpcf7").on("submit", function (e) {
    let hasError = false;

    $(".error-message").remove();

    let fname = $(".first_name").val().trim();
    let lname = $(".last_name").val().trim();
    let email = $(".email").val().trim();
    let phone = $(".number").val().trim();

    if (fname === "") {
      $(".first_name").after('<span class="error-message" style="color:red;font-size:1em;"><br>First Name is required</span>');
      hasError = true;
    }

    if (lname === "") {
      $(".last_name").after('<span class="error-message" style="color:red;font-size:1em;"><br>Last Name is required</span>');
      hasError = true;
    }

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      $(".email").after('<span class="error-message" style="color:red;font-size:1em;"><br>Invalid email address</span>');
      hasError = true;
    }

    if (phone === "") {
      $(".number").after('<span class="error-message" style="color:red;font-size:1em;"><br>Phone number is required</span>');
      hasError = true;
    } else if (/[^0-9]/.test(phone)) {
      $(".number").after('<span class="error-message" style="color:red;font-size:1em;"><br>Please enter only numbers</span>');
      hasError = true;
    } else if (!/^[0-9]{10}$/.test(phone)) {
      $(".number").after('<span class="error-message" style="color:red;font-size:1em;"><br>Phone number must be 10 digits</br></span>');
      hasError = true;
    }

    if (hasError) {
      e.preventDefault();
      return false;
    }

    return true;
  });

});