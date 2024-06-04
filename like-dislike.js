jQuery(document).ready(function($) {
    $('.like-button').on('click', function() {
        var post_id = $(this).data('id');
        var button = $(this);
        
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'handle_like_dislike',
                post_id: post_id,
                action_type: 'like'
            },
            success: function(response) {
                button.text('Like (' + response + ')');
            }
        });
    });

    $('.dislike-button').on('click', function() {
        var post_id = $(this).data('id');
        var button = $(this);
        
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'handle_like_dislike',
                post_id: post_id,
                action_type: 'dislike'
            },
            success: function(response) {
                button.text('Dislike (' + response + ')');
            }
        });
    });
});
