<?php add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_previous');

function posts_link_attributes_next() {
    return 'class="green btn btn-primary back"';
}

function posts_link_attributes_previous() {
    return 'class="green btn btn-primary"';
}

?>
