<?php
use Components\SchemaGenerator\SchemaGenerator;

get_template_part(COMPONENTS_PATH . "Header/Header");


SchemaGenerator::addOrganization();

get_template_part(COMPONENTS_PATH . "PageTheme/ContactPerson");

get_template_part(COMPONENTS_PATH . "Footer/Footer");
