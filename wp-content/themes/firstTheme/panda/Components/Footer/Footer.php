<?php use Components\SchemaGenerator\SchemaGenerator; ?>

</main>

<footer class="main-footer container pt-2 mb-2">
        Copyright © <?= date("Y"); ?> WordPress academy powered by <a href="https://www.brilo.cz/" target="_blank">Brilo</a>
</footer>

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/kt-functions.min.js"></script>
<?php
wp_footer();
SchemaGenerator::render(); ?>

</body>

</html>