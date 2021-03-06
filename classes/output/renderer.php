<?php 

namespace block_clist\output;

defined('MOODLE_INTERNAL') || die();

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    public function render_main($block) {
        $data = $block->export_for_template($this);
        return parent::render_from_template('block_clist/main', $data);
    }
}
