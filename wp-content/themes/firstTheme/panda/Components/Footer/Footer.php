<?php use Components\SchemaGenerator\SchemaGenerator; ?>

</main>

<footer class="main-footer container pt-2 mb-2">
        Copyright © <?= date("Y"); ?> WordPress academy powered by <a href="https://www.brilo.cz/" target="_blank">Brilo</a>
</footer>

<?php
wp_footer();
SchemaGenerator::render(); ?>

</body>

</html>