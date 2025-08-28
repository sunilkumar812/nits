<?php
$jobs = get_field($args['field_name']);
$sidebar_bottom_text = $jobs['sidebar_bottom_text'] ?? '';
$apply_button_url = $jobs['apply_button_url'] ?? '';
$class_container = $args['class_container'] ?? '';
$count = wp_count_posts('jobs');
$total_jobs = $count->publish; // Only published posts
?>

<div class="<?= esc_attr($class_container); ?>">
    <div class="max-w-5xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-semibold">We have <span id="job-count"><?= $total_jobs; ?></span> open positions now!</h2>
    </div>

    <div class="block md:flex gap-8 max-w-6xl mx-auto">
        <div class="w-full md:w-1/4">
            <ul class="space-y-2 mb-9">
                <li class=""><button class="bg-white job-filter font-semibold text-blue-700 border-l-4 border-blue-700 py-3 px-5 cursor-pointer text-left w-full" data-category="">All positions</button></li>
                <?php
                $job_terms = get_terms('job_category');
                foreach ($job_terms as $job_term) {
                    echo '<li>
                        <button class="job-filter py-3 px-5 cursor-pointer text-left w-full" data-id="' . esc_attr($job_term->slug) . '">'
                        . esc_html($job_term->name) .
                        ' <span class="text-sm">(' . intval($job_term->count) . ')</span>
                        </button>
                    </li>';
                }
                ?>
            </ul>
            <?php if ($sidebar_bottom_text): ?>
                <p class="text-[#53648B] text-sm p-3 hidden md:block">
                    <?= esc_html($sidebar_bottom_text); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="w-full md:w-3/4">
            <div id="casestudy-loader" class="w-full text-center mb-4 hidden">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/src/images/blue_loading.gif'); ?>" alt="Loading..." class="inline-block w-30 h-30" />
            </div>
            <div id="jobs-contanier">
                <?php job_listing($apply_button_url); ?>
            </div>
            <div class="text-center mt-8">
                <button id="load-more-jobs" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded cursor-pointer">Load More</button>
            </div>
        </div>
    </div>
</div>