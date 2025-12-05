jQuery(document).ready(function ($) {
  let categoryId = "";
  let currentPage = 1;

  $(".job-filter").on("click", function () {
    var categoryId = $(this).data("id");
    let currentPage = 1;
    $(".job-filter").removeClass(
      "bg-white text-blue-700 border-l-4 border-blue-70",
    );
    $(this).addClass("bg-white text-blue-700 border-l-4 border-blue-70");
    $("#casestudy-loader").removeClass("hidden");
    $.ajax({
      url: nits_ajax_object.ajax_url,
      type: "POST",
      data: {
        action: "load_jobs",
        nonce: nits_ajax_object.nonce,
        category_id: categoryId,
        paged: currentPage,
      },
      beforeSend: function () {
        $("#jobs-contanier").html("");
      },
      success: function (response) {
        $("#jobs-contanier").html(response);
      },
      complete: function () {
        $("#casestudy-loader").addClass("hidden");
      },
      error: function (xhr) {
        console.log(xhr.responseText);
        $("#jobs-contanier").html(
          '<div class="swiper-slide p-5 text-red-600">An error occurred. Please try again.</div>',
        );
        $("#casestudy-loader").addClass("hidden");
      },
    });
  });

  // Load More
  $("#load-more-jobs").on("click", function () {
    console.log("Load more jobs clicked");
    currentPage++;
    //var categoryId = $(this).data('id');
    //let currentPage = 1;
    $("#casestudy-loader").removeClass("hidden");
    $.ajax({
      url: nits_ajax_object.ajax_url,
      type: "POST",
      data: {
        action: "load_jobs",
        nonce: nits_ajax_object.nonce,
        category_id: categoryId,
        paged: currentPage,
      },
      beforeSend: function () {
        $("#jobs-contanier").html("");
      },
      success: function (response) {
        $("#jobs-contanier").html(response);
      },
      complete: function () {
        $("#casestudy-loader").addClass("hidden");
      },
      error: function (xhr) {
        console.log(xhr.responseText);
        $("#jobs-contanier").html(
          '<div class="swiper-slide p-5 text-red-600">An error occurred. Please try again.</div>',
        );
        $("#casestudy-loader").addClass("hidden");
      },
    });
  });
});
