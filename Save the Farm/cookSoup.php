<?php
  
function cookSoup(){
  global $location, $has_mushrooms, $has_soup;

  if ($location !== "kitchen" && $has_mushrooms !== true) {
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
  } else if ($location === "kitchen" && $has_mushrooms !== true) {
    echo "You need another ingredient like mushrooms to make soup.\n";
  } else if ($location !== "kitchen" && $has_mushrooms === true) {
    echo "You have the ingredients but need to be in the kitchen to cook soup.\n";
  } else {
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
    $has_mushrooms = false;
    $has_soup = true;
  } 
}