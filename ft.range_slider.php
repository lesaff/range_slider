<?php
/**
 * Fieldtype_range_slider
 * HTML5 Range Slider field type
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 */

class Fieldtype_range_slider extends Fieldtype
{
  public function render()
  {
    $html = '';

    $min = $this->field_config['min'];
    $max = $this->field_config['max'];
    $step = $this->field_config['step'];
    $value = $this->field_config['default_value'];

    // Allow setting custom values and labels
    $current_selection = ($this->field_data === $value);

    $html .= "<div class='range_slider-block'>";

    $attributes = array(
      'name' => $this->fieldname,
      'tabindex' => $this->tabindex,
      'class' => 'range_slider',
      'id' => $this->field_id . '-range_slider',
      'min' => $min,
      'max' => $max,
      'value' => $value,
      'step' => $step,
      'list' => $this->fieldname,
      'oninput' => $this->field_id.'(this.value)'
    );

    $html .= HTML::makeInput('range', $attributes);
    $html .= " <output for='{$this->field_id}-range_slider' id='{$this->field_id}-width'>{$value}</output>";

    $html .= "<label class='range_slider-label' for='{$this->field_id}-range_slider'></label>";
    $html .= "<datalist id='{$this->fieldname}'>";
    $i = 1;
    while($i <= $this->field_config['max']) {
      $html .= "<option>{$i}</option>";
      $i++;
    }      
    $html .= "</datalist>";
    $html .= "<script>function {$this->field_id}(width){document.querySelector('#{$this->field_id}-width').innerHTML = width};</script>";
    $html .= "</div>";

    return $html;
  }
}

