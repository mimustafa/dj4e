<?php

global $assignment_type, $title_singular, $lookup_lower, $lookup_article;
global $lookup_lower_plural, $main_lower, $main_article, $main_lower_plural, $fields;
global $assignment_type_lower, $reference_implementation, $assignment_url;

$assignment_url = "02spec.php?assn=20auto.php";
$assignment_url_text = "Specification";
$reference_implementation = "https://chucklist.dj4e.com/autos";
$particular = 'menu, owner, and comments';
$base_project = 'adlist';

$assignment_type = 'Assignment';
$assignment_type_lower = 'assignment';
// $assignment_type = 'Exam';
// $assignment_type = "Sample Exam";

$assignment_examples = "(i.e. Ford, Subaru, Dodge, Kia, Tata, etc.)";
$main_lower = 'auto';
$main_article = 'a';

$title_singular = ucfirst($main_lower);
$title_plural = $title_singular . 's';

// The logical key for lookup is always 'name'
// The logical key for main is always 'nickname'
$fields = array(
    array('name' => 'detail', 'type' => 's'),
    array('name' => 'mileage', 'type' => 'i'),
);

$lookup_lower_plural = $lookup_lower . 's';
$lookup_title = ucfirst($lookup_lower);
$lookup_title_plural = ucfirst($lookup_lower_plural);
$main_lower_plural = $main_lower . 's';
$main_title = ucfirst($main_lower);
$main_title_plural = ucfirst($main_lower_plural);

if ( !isset($SPEC_ONLY) ) require_once("02crud.php");