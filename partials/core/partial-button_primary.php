<?php
$class = $args['class'];
$text = isset($args['text']) ? $args['text'] : 'Get a Demo';
$link = isset($args['link']) ? $args['link'] : '/contact';
$target = isset($args['target']) ? $args['target'] : '';
$rel = isset($args['rel']) ? $args['rel'] : '';
?>
<a class="btn btn-fill font-type2 text-base lg:text-lg <?= $class ?>" href="<?= $link ?>"
    <?php if ($target) {
        echo 'target="' . esc_attr($target) . '"';
    } ?>
    <?php if ($rel) {
        echo 'rel="' . esc_attr($rel) . '"';
    } ?>>
    <?= $text ?>
</a>