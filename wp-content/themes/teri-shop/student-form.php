<?php
/* Template Name: student-form */

if (!defined('ABSPATH')) exit;
get_header();
?>

<?php
global $wpdb;
$table_name = $wpdb->prefix . 'students';

$name = '';
$email = '';

if (isset($_POST['submit_student_form'])) {
    $name = sanitize_text_field($_POST['student_name']);
    $email = sanitize_email($_POST['student_email']);

    if (empty($name) || empty($email)) {
        echo '<div style="color:red;">Please enter both Name and Email!</div>';
    } else {
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email
            ),
            array('%s', '%s')
        );

        if ($wpdb->last_error) {
            echo '<div style="color:red;">Database Error: ' . $wpdb->last_error . '</div>';
        } else {
            echo '<div style="color:green;">Data saved successfully! ID: ' . $wpdb->insert_id . '</div>';
            $name = '';
            $email = '';
        }
    }

}

?>

<form method="post">
    <input type="text" name="student_name" placeholder="Name" value="<?php echo esc_attr($name); ?>">
    <input type="email" name="student_email" placeholder="Email" value="<?php echo esc_attr($email); ?>">
    <input type="submit" name="submit_student_form" value="Submit">
</form>

<?php

$students = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

if ($students) {
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';

    foreach ($students as $student) {
        echo '<tr>';
        echo '<td>' . esc_html($student->id) . '</td>';
        echo '<td>' . esc_html($student->name) . '</td>';
        echo '<td>' . esc_html($student->email) . '</td>';
        echo '<td><button >delete</button></td>';
        echo '<td><button>update</button></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No students found.';
}



get_footer();
?>