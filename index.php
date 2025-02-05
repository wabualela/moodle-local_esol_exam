<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * TODO describe file index
 *
 * @package    local_esol_exam
 * @copyright  2025 Wail Abualela wailabualela@gmail.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');

require_login();

$url        = new moodle_url('/local/esol_exam/index.php', []);
$titlstr    = get_string('pluginname', 'local_esol_exam');
$headingstr = get_string('pluginname', 'local_esol_exam');

$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());
$PAGE->set_title($titlstr);
$PAGE->set_heading($headingstr);
$PAGE->set_pagelayout('standard');


// Prepare template data
$templatecontext = [
    'exam_booking' => get_string('exam_booking', 'local_esol_exam'),
    'browse_exams' => get_string('browse_exams', 'local_esol_exam'),
    'session_type' => get_string('session_type', 'local_esol_exam'),
    'all' => get_string('all', 'local_esol_exam'),
    'online' => get_string('online', 'local_esol_exam'),
    'on_place' => get_string('on_place', 'local_esol_exam'),
    'exam_date' => get_string('exam_date', 'local_esol_exam'),
    'exam_name' => get_string('exam_name', 'local_esol_exam'),
    'date' => get_string('date', 'local_esol_exam'),
    'price' => get_string('price', 'local_esol_exam'),
    'action' => get_string('action', 'local_esol_exam'),
    'book_now' => get_string('book_now', 'local_esol_exam'),
    'filter' => get_string('filter', 'local_esol_exam'),
    'no_sessions' => get_string('no_sessions', 'local_esol_exam'),
    'sessions' => $sessions
];

// Include necessary CSS
$PAGE->requires->css(new moodle_url('/local/esol_exam/styles.css'));

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_esol_exam/exam_sessions', [
    'exam_booking' => get_string('exam_booking', 'local_esol_exam'),
    'browse_exams' => get_string('browse_exams', 'local_esol_exam'),
    'session_type' => get_string('session_type', 'local_esol_exam'),
    'all' => get_string('all', 'local_esol_exam'),
    'online' => get_string('online', 'local_esol_exam'),
    'on_place' => get_string('on_place', 'local_esol_exam'),
    'exam_date' => get_string('exam_date', 'local_esol_exam'),
    'exam_name' => get_string('exam_name', 'local_esol_exam'),
    'date' => get_string('date', 'local_esol_exam'),
    'price' => get_string('price', 'local_esol_exam'),
    'action' => get_string('action', 'local_esol_exam'),
    'book_now' => get_string('book_now', 'local_esol_exam'),
    'filter' => get_string('filter', 'local_esol_exam'),
    'no_sessions' => get_string('no_sessions', 'local_esol_exam'),
    'sessions' => $sessions
]);
echo $OUTPUT->footer();
