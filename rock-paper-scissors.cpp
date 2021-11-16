#include <iostream>
#include <stdlib.h>

int main() {
  srand(time(NULL));
  int computer = rand() % 5 + 1;
  int user = 0;
  std::string name;

  std::cout << "====================\n";
  std::cout << "rock paper scissors!\n";  
  std::cout << "====================\n\n";
  std::cout << "Please enter name: ";
  std::cin >> name;
  std::cout << "\n\n";
 
  std::cout << "1) Rock\n";
  std::cout << "2) Paper\n";
  std::cout << "3) Scissors\n";
  std::cout << "4) Spock\n";
  std::cout << "5) Lizard\n";
  std::cout << "shoot! ";

  std::cin >> user;
  std::cout << "\n\n";

  if (computer == 1) {
    std::cout << "Computer chose Rock\n";
  } else if (computer == 2) {
    std::cout << "Computer chose Paper\n";
  } else if ( computer == 3) {
    std::cout << "Computer chose Scissors\n";
  } else if (computer == 4) {
    std::cout << "Computer chose Spock\n";
  } else if (computer == 5) {
    std::cout << "Computer chose Lizard\n";
  }

   if (user == 1) {
    std::cout << name << " chose Rock\n";
  } else if (user == 2) {
    std::cout << name << " chose Paper\n";
  } else if ( user == 3) {
    std::cout << name << " chose Scissors\n";
  } else if (user == 4) {
    std::cout << name << " chose Spock\n";
  } else if (user == 5) {
    std::cout << name << " chose Lizard\n\n";
  }

  if (user == computer) {
    std::cout << "It's a tie\n";
  } else if (user == 1 && (computer == 2 || computer == 4)) {
    std::cout << "Computer wins\n";
  } else if (user == 1 && (computer == 3 || computer == 5)) {
    std::cout << name << " wins!!\n";
  } else if (user == 2 && (computer == 1 || computer == 4)) {
    std::cout << name << " wins!!\n";
  } else if (user == 2 && (computer == 3 || computer == 5)) {
    std::cout << "Computer wins\n";
  } else if (user == 3 && (computer == 2 || computer == 5)) {
    std::cout << name << " wins!!\n";
  } else if (user == 3 && (computer == 1 || computer == 4)) {
    std::cout << "Computer wins\n";
  } else if (user == 4 && (computer == 2 || computer == 3)) {
    std::cout << name << " wins!!\n";
  } else if (user == 4 && (computer == 1 || computer == 5)) {
    std::cout << "Computer wins\n";
  } else if (user == 5 && (computer == 2 || computer == 4)) {
    std::cout << name << " wins!!\n";
  } else if (user == 5 && (computer == 1 || computer == 3)) {
    std::cout << "Computer wins\n";
  }

}