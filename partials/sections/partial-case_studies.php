<div class="">
    <div class="main-width">
        <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
            'class_container' => 'mb-24 lg:mb-32',
            'heading3' => $args['case_studies']['heading3'] ?? 'Heading 3',
            'class_heading3' => 'text-3xl lg:text-4xl 3xl:text-5xl/15 font-bold text-nitsDarkBlue mb-[17px] font-type1',
            'heading2' => $args['case_studies']['heading2'] ?? 'Heading 2',
            'class_heading2' => 'text-3xl lg:text-4xl 3xl:text-5xl/15 font-bold text-nitsDarkBlue mb-[17px] font-type1',
            'paragraph' => $args['case_studies']['paragraph'] ?? 'Paragraph',
            'class_paragraph' => 'text-sm lg:text-base 3xl:text-lg/7 text-black font-roboto mb-11',
        ]);
        ?>
    </div>
</div>

<div class="main-width">
    <!-- Category Navigation -->
    <div class="flex justify-center items-center gap-4 mt-12">
        <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600">Automotive Analytics</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-blue-50 rounded-md">Performance Metrics</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600">Client Testimonials</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600">Case Studies</button>
    </div>
</div>