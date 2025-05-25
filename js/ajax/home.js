jQuery(document).ready(function($) {
    $('.casestudy-filter').on('click', function() {
      var categoryId = $(this).data('id');
      $('#casestudy-loader').removeClass('hidden');
      $.ajax({
        url: nits_ajax_object.ajax_url,
        type: 'POST',
        data: {
          action: 'filter_casestudies',
          nonce: nits_ajax_object.nonce,
          category_id: categoryId
        },
        beforeSend: function() {
            $('#casestudy-results').html('');
          },
        success: function(response) {
          $('#casestudy-results').html(response);

        },
        complete: function () {
            $('#casestudy-loader').addClass('hidden'); 
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            $('#casestudy-results').html('<div class="swiper-slide p-5 text-red-600">An error occurred. Please try again.</div>');
            $('#casestudy-loader').addClass('hidden');
        }
      });
    });

    $('.blog-filter').on('click', function () {
        var categoryId = $(this).data('id');   
        $('#blog-loader').removeClass('hidden');
        $.ajax({
          url: nits_ajax_object.ajax_url,
          type: 'POST',
          data: {
            action: 'filter_blog_posts', 
            nonce: nits_ajax_object.nonce,
            category_id: categoryId
          },
          beforeSend: function () {
            $('#blog-post-results').html(''); 
          },
          success: function (response) {
            $('#blog-post-results').html(response); 
          },
          complete: function () {
            $('#blog-loader').addClass('hidden'); 
          },
          error: function (xhr) {
            console.log(xhr.responseText);
            $('#blog-post-results').html('<div class="text-red-600">An error occurred. Please try again.</div>');
            $('#blog-loader').addClass('hidden');
          }
        });
      });
  });
  