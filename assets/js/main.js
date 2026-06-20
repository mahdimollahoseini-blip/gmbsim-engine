jQuery(function ($) {

    $('#gmbsim-search-btn').on('click', function () {

        let pattern = $('#gmbsim-pattern').val();

        $('#gmbsim-results').html("در حال جستجو...");

        $.post(gmbsim.ajaxurl, {

            action: 'gmbsim_search',

            pattern: pattern

        }, function (response) {

            $('#gmbsim-results').html(response);

        });

    });

});