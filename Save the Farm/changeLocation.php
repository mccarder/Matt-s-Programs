<?php
  // Change player location
function changeLocation(){	
  global $location;
  echo "Where do you want to go?\n";
  $go_where = readline(">> ");
  $go_where = strtolower($go_where);
  
  if ($go_where === "bathroom" && $location === "kitchen") {
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  } else if ($go_where === "woods" && $location === "kitchen") {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = "woods";
  } else if ($go_where === "kitchen" && ($location === "bathroom" || $location === "woods") {
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  }
}