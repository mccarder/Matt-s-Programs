<?php

function magic8Ball() {
  echo "What question do you most want answered.\n Enter in the format of a yes or no question only: \n";
  $question =  readline(">>" );
  echo "\nAre you ure you want to know the answer\n to {$question}. You may not like the answer.\n";

  $magicNumber = rand(1, 20);

  switch ($magicNumber) {
    case 1:
      return "I don't think so.\n";
    case 2: 
      return "Probably not. \n";
    case 3:
      return "HAHAHAHA..... oh you're serious.\n";
    case 4:
      return "I mean, your chances aren't zero.\n";
    case 5:
      return "Better odds than getting struck by lightning.\n";
    case 6:
      return "With this type of luck you should buy a lottery ticket. You won't win but it's good for the economy.\n";
    case 7:
      return "Looks unpromising.\n";
    case 8:
      return "No.\n";
    case 9: 
      return "Noo but with two o's.\n";
    case 10:
      return "I'm running out of ways to say no.\n";
    case 11:
      return "Negative ghost rider.\n";
    case 12:
      return "I'm saying there's a chance.\n";
    case 13:
      return "How do I put this lightly...\n";
    case 14:
      return "Low probability.\n";
    case 15:
      return "Nope.\n";
    case 16:
      return "Nada chance.\n";
    case 17:
      return "Slim to none are your chances.\n";
    case 18:
      return "0.000000000001% possibility.\n";
    case 19: 
      return "Unclear.\n";
    case 20:
      return "Hey, this one's 50/50.\n";


  }

}


echo magic8Ball();