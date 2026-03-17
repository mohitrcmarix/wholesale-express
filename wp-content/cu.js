jQuery(function ($) {
    // Hide popup initially
    $('#donation-popup').hide();

    // When CTA button is clicked
    $('.ct-header-cta').on('click', function(e) {
        e.preventDefault();

        // Show the popup
        $('#donation-popup').fadeIn();

        // Show timer text
        let countdown = 5; // seconds before redirect
        $('#timer-text').show().text("Redirecting in " + countdown + " seconds...");

        let timer = setInterval(function() {
            countdown--;
            $('#timer-text').text("Redirecting in " + countdown + " seconds...");
            if (countdown <= 0) {
                clearInterval(timer);
                window.location.href = "https://endhitting.org//donate"; // redirect link
            }
        }, 1000);
    });

    // Optional: allow manual click on the link
    $('#redirect-link').on('click', function(e) {
        e.preventDefault();
        window.location.href = "https://endhitting.org";
    });
});
