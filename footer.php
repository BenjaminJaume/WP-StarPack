</main>

<div class="bg-light border-top">
    <footer class="container py-5">
        <div class="row mb-3">
            <div class="col-12">
                <h1 class="text-center text-uppercase text-success font-weight-bold">
                    <?php echo get_bloginfo('name'); ?>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo get_permalink(37); ?>" class="btn btn-outline-success rounded-0 hvr-grow">Contact</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 text-center">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-dark text-uppercase">
                    &copy; 2021 <?php echo get_bloginfo('name'); ?> - All Rights Reserved
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="">
                    Web Designer: Benjamin Jaume -
                    <a href="http://www.benjaminjau.me" alt="" class="text-brand" target="_blank">
                        www.benjaminjau.me
                    </a>
                </p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>

</html>