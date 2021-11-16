<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  if ($wearing_contacts === true && $wearing_glasses === true) {
    echo " You can't see because you have both contacts and glasses on.\n";
  }if ($wearing_contacts === true && $wearing_glasses === false) {
    echo "You are wearing contacts.\n";
  } else if ($wearing_glasses === true && $wearing_contacts === false) {
    echo "You are wearing glasses.\n";
  } else if ($wearing_glasses === false && $wearing_contacts === false) {
    echo "You are wearing neither contacts nor glasses.\n";
  }

  if ($has_mushrooms === true && $has_soup === false) {
    echo "You are holding mushrooms.\n";
  } else if ($has_soup === true && $has_soup === true) {
    echo "You are holding a scalding-hot bowl of mushroom soup.\n";
  }
  if ($needs_to_pee === true) {
    echo "You need to pee!\n";
  }
  if ($is_hungry === true) {
    echo "You are hungry.\n";
  } else {
    echo "You are well fed and energetic.\n";
  }
}
