<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin internal classes, functions and constants are defined here.
 *
 * @package     local_callbacks
 * @copyright   2021 Marcus Green
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * @param moodleform $formwrapper The moodle quickforms wrapper object.
 * @param MoodleQuickForm $mform The actual form object (required to modify the form).
 * https://docs.moodle.org/dev/Callbacks
 */
function local_callbacks_coursemodule_standard_elements($formwrapper, $mform) {
    $modulename = $formwrapper->get_current()->modulename;
    if ($modulename == 'assign') {
        $mform->addElement('header', 'exampleheader', get_string('exampleheader', 'local_callbacks'));
        $mform->addElement('text', 'examplefield', get_string('examplefieldlabel', 'local_callbacks'));
        $mform->setType('examplefield', PARAM_RAW);
    }
}