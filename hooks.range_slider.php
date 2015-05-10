<?php
/**
 * Hooks_range_slider
 * HTML5 Range Slider field type
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff/range_slider
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.1       Fixed min and increments, added styling
 * 1.0.0       Initial release
 */

class Hooks_range_slider extends Hooks {

  public $meta = array(
     'name'       => 'HTML5 Range Slider Field Type',
     'version'    => '1.0.1',
     'author'     => 'Rudy Affandi',
     'author_url' => 'https://github.com/lesaff/range_slider'
   );

  /**
   *  We'll add our CSS styles to the head here.
   */
  public function control_panel__add_to_head() {
    // If we're not on the /pages page, then don't load the CSS.
    if ( URL::getCurrent(false) != '/publish' ) { return ""; }

    return $this->css->link('range_slider.min.css');
  }
}