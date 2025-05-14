<?php
$section_stack_cards = get_field($args['section_stack_cards']);
?>

<?php if ($section_stack_cards): ?>
    <!--Heading -->
    <?= get_template_part('partials/core/partial', 'section_heading_1', [
        'class_container' => 'mb-24',
        'icon' => $section_stack_cards['icon']['url'],
        'icon_heading' => $section_stack_cards['icon_heading'],
        'heading' => $section_stack_cards['heading'],
        'heading_desc' => $section_stack_cards['heading_desc'],
    ]); ?>

    <!-- <div class="main-width">
        <div id="stackcards-containerId" class="stackcards-container max-w-[1395px] mx-auto relative box-border">
            <div class="stackcard flex flex-row py-12 px-24 gap-28 items-center top-[45px] box-border">
                <div class="stackcard-image max-w-[400px]">
                    <img src="http://localhost/nits/wp-content/uploads/2025/05/stack-img-1.png" alt="Stack Card 1">
                </div>
                <div class="stackcard-content flex">
                    <div class="stackcard-content-warper">
                        <div class="stackcard-title text-5xl text-nitsDarkBlue">AftersalesIQ</div>
                        <div class="stackcard-text">Transforming Dealership Operations with Advanced Aftersales IQ</div>
                    </div>
                    <div class="stackcard-button">
                        <a href="#" class="button">-></a>
                    </div>
                </div>
            </div>
            <div class="stackcard flex flex-row py-12 px-24 gap-28 items-center top-[65px] box-border">
                <div class="stackcard-image max-w-[400px]">
                    <img src="http://localhost/nits/wp-content/uploads/2025/05/stack-img-1.png" alt="Stack Card 1">
                </div>
                <div class="stackcard-content flex">
                    <div class="stackcard-content-warper">
                        <div class="stackcard-title text-5xl text-nitsDarkBlue">AftersalesIQ</div>
                        <div class="stackcard-text">Transforming Dealership Operations with Advanced Aftersales IQ</div>
                    </div>
                    <div class="stackcard-button">
                        <a href="#" class="button">-></a>
                    </div>
                </div>
            </div>
            <div class="stackcard stackcard-final flex flex-row py-12 px-24 gap-28 items-center top-[85px] box-border">
                <div class="stackcard-image max-w-[400px]">
                    <img src="http://localhost/nits/wp-content/uploads/2025/05/stack-img-1.png" alt="Stack Card 1">
                </div>
                <div class="stackcard-content flex">
                    <div class="stackcard-content-warper">
                        <div class="stackcard-title text-5xl text-nitsDarkBlue">AftersalesIQ</div>
                        <div class="stackcard-text">Transforming Dealership Operations with Advanced Aftersales IQ</div>
                    </div>
                    <div class="stackcard-button">
                        <a href="#" class="button">-></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cpnf mt-20 w-100% h-[450px]">
    </div>
    <div class="cpnf mt-20 w-100% h-[450px]">
    </div> -->
<?php endif; ?>