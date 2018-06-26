<?php
// namespace ciid/html

function element($element, $attributes, $content) {
$attribute_string = " ";
if (is_array($attributes)) {
    foreach($attributes as $value) {
        $attribute_string .= $value;
    } elseif (is_string($attributes)) {
        $attribute_string .= $attributes;
    }
}

return "<$element$attributes>$content</$element>";

?>
