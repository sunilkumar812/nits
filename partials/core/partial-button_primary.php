<?php
$class = $args['class'];
$text = isset($args['text']) ? $args['text'] : 'Get a Demo';
$link = isset($args['link']) ? $args['link'] : '/contact';
?>
<a class="btn btn-fill <?= $class ?>" href="<?= $link ?>">
    <?= $text ?>
</a>