<?php
$class = $args['class'];
$text = isset($args['text']) ? $args['text'] : 'Get a Demo';
$link = isset($args['link']) ? $args['link'] : '/contact';
$target = isset($args['target']) ? $args['target'] : '';
$rel = isset($args['rel']) ? $args['rel'] : '';
?>

<a href="<?= $link; ?>" class="inline-flex items-center px-6 py-2.5 bg-[#172740] text-white rounded-sm border border-[#2387FF] hover:bg-[#000000] transition-colors text-base gap-3 font-medium<?= $class ?>"
    <?php if ($target) {
        echo 'target="' . esc_attr($target) . '"';
    } ?>
    <?php if ($rel) {
        echo 'rel="' . esc_attr($rel) . '"';
    } ?>>
    <?= $text ?>
    <svg width=" 24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect y="0.5" width="24" height="24" fill="url(#pattern0_362_177)" />
        <defs>
            <pattern id="pattern0_362_177" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_362_177" transform="scale(0.0111111)" />
            </pattern>
            <image id="image0_362_177" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADnElEQVR4nO2dz0tVQRSAz6qiH9YqlepPSSqUWhdF9EckRaC10WXbwqI2UkJEW61FRaSV1qKM2gvtRbOdVvTFwVn44l3RfHPmzL3zgZv3vHfO+Zh337yZueeKFAqFQqFQKDQWYB9wBrgBPAQ+AAvAMrAW/pbDa/reA+A6cFqPTR2/a4Be4CrwDvjJ/6PHvgWuAD2p83IDcBJ4Bvym8+g5nwInpKkA/cAsdugn5ZQ07BIxQTqmgGNSZ4CLwA/SswKcl7oB7AHu4Y87wG6pA8B+4AV+eQ0clJwBDgOf8c+8xio5AnQBnyJIGQGGIpz3K3BIMrwm60ey04xuaGM0wvlfZXXNBu5HkDDSpp0YPXtMcgC4YCE5suxL4hngSIRx8ugW2h2NMM7uFa8AT6x6skHPfiSO5y5Me7JBz/Y3GRUmbcx7cuSePScOpzqTS44ku0+8EOaToyLVbcdmSjwAdAO/Ymcr1e3HRnPrtrXaPtFrBsmySfsWDNpajf8lWMkm7VswY2u1/Wq1rkhHR6pjsGAt6ep6WN43QapjsGLA1m5rkrrvwgSpjsGKIVu7rUnq5hYTpDoGK8Zt7bYmqbuETJDqGKxI9ysR+GaVpVTHYMWCrd3WJJesspTqGKxYtLXbmqTJ0E7ZJAYrVm3tpkkSzzFEx0OSOIghOh6SxEEM0fGQJA5iiI6HJHEQQ3Q8JImDGKITKZ+bHYgrxi6m2onekexYkpXO2tteUniSTUTJShyLW0sML7KJLFmJa3Pz5PAgGwPJio3V9gmSWjZGkhVbu61JklI2hpKVpohukW0tuWmiCYLNJTdRdDKKaCOK6AaINlvKcsBqIxZnHbDYiO0GDki63eA9zWG2EVvCHDDeiE2ODhhqxLZdB/SnFL23IUO8Nc01meggW0uf1Z3ppJKDaK1VV3cuN+b2t4T4uP1NCUX86sqkeEFvTqe+HBdP1PRLcVq8oeUoqRd/XN1wvxHgMfVhQpzXHdUyObnz3X1JZK35Sf6ckxwA7pIvtyQXtEhfKNaXGy+BXZITwIFIJTNj8SXbYrChCOw8/vmYbRHYf8oaP8cveonrkjrA+jV7DH/czu6avI2h34qTcfJZqTNAT3iYgv7ETfUwhaPSFFif8XtjKHjG7dyFBUBf6GUxFg/0nJPupjodDAUHQ89b3YFcPXZal5+yH7IZra4PAMO6cUXL7IQHkC1teCjZUnhtLvzPcDgm7Wp1oVAoFAqFgqTkL2/65zIN9aFsAAAAAElFTkSuQmCC" />
        </defs>
    </svg>
</a>