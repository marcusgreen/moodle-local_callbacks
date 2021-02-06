<?php
require_once(__DIR__ . '/../../config.php');
$PAGE->navbar->add(get_string('callbacks', 'local_callbacks'));

$PAGE->set_context(context_system::instance());
$output = $PAGE->get_renderer('admin');
$PAGE->set_url('/local/index.php');

echo $OUTPUT->header();

?>


<html>
    <head>
        <p>This plugin shows how the editing forms of activity
            modules can be modified without changing core code.
            Go to a course and start the editing form of the assignment
            module and you will see a new field (Examplefield) at the bottom.
        </p>
    </head>
</html>
<?php
echo $OUTPUT->footer();
?>