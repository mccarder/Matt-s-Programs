<?php
function eatSoup(){
  global $has_soup, $is_hungry;

  if (!$has_soup && $is_hungry) {
    echo "You don't have any cooked food to eat!\n";
  } else if (!$is_hungry) {
    echo "You're not even hungry ya lard ass.\n";
  } else {
    echo "You have eaten the soup.\n";
    $has_soup = false;
    $is_hungry = false;
  }
}