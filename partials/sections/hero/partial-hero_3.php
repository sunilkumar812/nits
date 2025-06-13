<?php
$background_image = get_field('background_image');
$heading = get_field('heading');
$subheading = get_field('subheading');
$facebook_link = get_field('facebook_link');
$linkedin_link = get_field('linkedin_link');
$x_link = get_field('x_link');
$class_container = $args['class_container'] ?? 'text-white pt-30 pb-15 lg:pt-55 lg:pb-50 ';
?>

<div class="<?= $class_container ?>relative overflow-hidden"
    style="background-image: url('<?php echo esc_url($background_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="main-width">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center relative z-10">

            <div class="lg:w-2/3 text-center lg:text-left mb-12 lg:mb-0">
                <?php if (!empty($subheading)): ?>
                    <p class="text-nitsLightBlue text-sm lg:text-base uppercase tracking-wider mb-3 font-type2">
                        <?php echo esc_html($subheading); ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($heading)): ?>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight font-type1">
                        <?php echo esc_html($heading); ?>
                    </h1>
                <?php endif; ?>
            </div>

            <div class="flex lg:flex-col gap-4 space-y-4">
                <?php if (!empty($facebook_link)): ?>
                    <a href="<?php echo esc_url($facebook_link); ?>" aria-label="Facebook"
                        class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 lg:h-6 lg:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if (!empty($linkedin_link)): ?>
                    <a href="<?php echo esc_url($linkedin_link); ?>" aria-label="LinkedIn"
                        class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 lg:h-6 lg:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.594-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if (!empty($x_link)): ?>
                    <a href="<?php echo esc_url($x_link); ?>" aria-label="X"
                        class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 lg:h-6 lg:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.979 3H17.7l-5.154 6.798L7.58 3H3.021l7.05 9.502L2.4 21h3.258l5.544-7.308L16.433 21h4.546l-7.905-10.674L20.979 3z" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>