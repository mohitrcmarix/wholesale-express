jQuery(function ($) {
  let timer;

  $(".donation-popup, .popup-overlay").hide();

  $(".ct-header-cta").on("click", function (e) {
    e.preventDefault();

    $(".popup-overlay").show();
    $(".donation-popup").show();

    let countdown = 5;
    $("#timer-text").show().text("Redirecting in " + countdown + " seconds...");

    clearInterval(timer);

    timer = setInterval(function () {
      countdown--;
      $("#timer-text").text("Redirecting in " + countdown + " seconds...");
      if (countdown <= 0) {
        $(".popup-overlay").show();
        $(".donation-popup").show();
        clearInterval(timer);
        window.location.href = "https://endhitting.org/donate";
      }
    }, 1000);
  });

  $(".popup-overlay, .donation-popup .close-btn").on("click", function () {
    $(".donation-popup, .popup-overlay").fadeOut();

    clearInterval(timer);
    $("#timer-text").hide();
  });

  // $('#redirect-link').on('click', function(e) {
  //     e.preventDefault();
  //     clearInterval(timer);
  //     window.location.href = "https://endhitting.org";
  // });
});
