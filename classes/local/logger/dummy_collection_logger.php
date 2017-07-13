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
 * Collection logger.
 *
 * @package    block_xp
 * @copyright  2017 Branch Up Pty Ltd
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_xp\local\logger;
defined('MOODLE_INTERNAL') || die();

use DateTime;
use block_xp\local\reason\reason;


/**
 * Dummy collection logger.
 *
 * This thing does nothing.
 *
 * @package    block_xp
 * @copyright  2017 Branch Up Pty Ltd
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class dummy_collection_logger implements collection_logger, reason_collection_logger {

    /**
     * Delete logs older than a certain date.
     *
     * @param \DateTime $dt The date.
     * @return void
     */
    public function delete_older_than(DateTime $dt) {
    }

    /**
     * Log a thing.
     *
     * @param int $id The target.
     * @param int $points The points.
     * @param string $signature A signature.
     * @param DateTime|null $time When that happened.
     * @return void
     */
    public function log($id, $points, $signature, DateTime $time = null){
    }

    /**
     * Log a thing.
     *
     * @param int $id The target.
     * @param int $points The points.
     * @param reason $reason The reason.
     * @param DateTime|null $time When that happened.
     * @return void
     */
    public function log_reason($id, $points, reason $reason, DateTime $time = null){
    }


    /**
     * Purge all logs.
     *
     * @return void
     */
    public function reset() {
    }

}
