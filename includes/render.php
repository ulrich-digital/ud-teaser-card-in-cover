<?php
/**
 * Render Callback für ud/teaser-card-in-cover
 */
defined('ABSPATH') || exit;

$post_id = isset($attributes['postId']) ? absint($attributes['postId']) : 0;
/*
if (!$post_id) {
    $wrapper_attributes = get_block_wrapper_attributes(['class' => 'teaser_card_in_cover is-empty']);
    echo '<div ' . $wrapper_attributes . '>' . esc_html__('Bitte Beitrag auswählen…', 'ud-teaser-card-in-cover') . '</div>';
    return;
}
*/
$post = get_post($post_id);
if (!$post || 'trash' === $post->post_status) {
    return;
}

$title = get_the_title($post);
$link  = get_permalink($post);

$wrapper_attributes = get_block_wrapper_attributes(['class' => 'teaser_card_in_cover']);
?>
<div <?php echo $wrapper_attributes; ?>>
    <h2><?php echo esc_html($title); ?></h2>

    <div class="wave_button">
        <a class="post_link" href="<?php echo esc_url($link); ?>">
            <i class="fa-sharp fa-regular fa-arrow-down-right arrow_before_text"></i>
            <?php echo esc_html__('Mehr', 'ud-teaser-card-in-cover'); ?>
        </a>
        <svg class="overlay_bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.702 77.466" preserveAspectRatio="none" aria-hidden="true" focusable="false">
            <path class="button_wave" d="M0,77.4c38.3-2.6,73.7-6.1,129.2-35C169.1,21.7,198.4,0,249.4,0c14.9,0,29.7,1.5,44.3,4.8v72.7H0Z"/>
        </svg>
    </div>
</div>
