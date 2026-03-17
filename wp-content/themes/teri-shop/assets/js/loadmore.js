jQuery(function ($) {

    let categoryPages = {}; 
    let selectedCategory = "all-car"; // default tab ID

    // Detect active tab on page load
    let defaultActive = $(".nav-link.active").data("category");
    if (defaultActive) {
        selectedCategory = defaultActive;
    }

    categoryPages[selectedCategory] = 1;

    // Set load-more default
    $("#load-more")
        .data("category", selectedCategory)
        .data("page", 1)
        .show();

    // Category click
    $(".category-btn, .nav-link").on("click", function () {

        selectedCategory = $(this).data("category");

        if (!categoryPages[selectedCategory]) {
            categoryPages[selectedCategory] = 1;
        }

        $("#load-more")
            .data("category", selectedCategory)
            .data("page", categoryPages[selectedCategory])
            .show();

        console.log("Selected category:", selectedCategory);
    });

    // Load More
    $("#load-more").on("click", function () {

        let button = $(this);

        let category = button.data("category") || selectedCategory;
        let page = categoryPages[category];

        console.log("Load more → category:", category, "page:", page);

        page++;
        categoryPages[category] = page;
        button.data("page", page);

        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: {
                action: "load_more_blog",
                page: page,
                category: category
            },
            success: function (response) {

                if ($.trim(response) === "") {
                    button.hide();
                    return;
                }

                // IMPORTANT FIX: Always append into matching tab div
                $("#" + category + " .blog-boxes").append(response);

                button.text("Load More");
            }
        });
    });
});

jQuery(function($){
  var $imgCarousel = $('#homeBanner');
  var $textCarousel = $('#bannerText');

  if (!$imgCarousel.length || !$textCarousel.length) return;

//   $imgCarousel.on('slid.bs.carousel', function (e) {
//     var idx = $(e.relatedTarget).index();
//     if ($textCarousel.find('.carousel-item.active').index() !== idx) {
//       $textCarousel.carousel(idx);
//     }
//   });

//   $textCarousel.on('slid.bs.carousel', function (e) {
//     var idx = $(e.relatedTarget).index();
//     if ($imgCarousel.find('.carousel-item.active').index() !== idx) {
//       $imgCarousel.carousel(idx);
//     }
//   });
 
  $(document).on('click', '#homeBanner .carousel-indicators li', function(e){
    var idx = $(this).data('slide-to');
    $imgCarousel.carousel(idx);
    $textCarousel.carousel(idx);
  });

});
