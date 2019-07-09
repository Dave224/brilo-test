<?php
use Utils\Util;
use Components\SchemaGenerator\SchemaGenerator;
use Components\ContactForm\ContactFormFactory;

SchemaGenerator::addSite();

 ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part(COMPONENTS_PATH . "Header/HeaderHead"); ?>

<body <?php body_class(); ?>>

    <?php Util::renderAnalyticsBodyCode(); ?>

    <?php get_template_part(COMPONENTS_PATH . "Header/HeaderMain"); ?>

    <main>

        <?php get_template_part(COMPONENTS_PATH . "ProjectNotices/ProjectNotices"); ?>

        <?php get_template_part(COMPONENTS_PATH . "Breadcrumbs/Breadcrumbs"); ?>