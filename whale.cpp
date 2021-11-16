#include <iostream>
#include <vector>
#include <string>

int main() {

  
  std::string phrase;
  std::cout << "Please enter your desired sentence to be converted to whale speak: \n";
  std::getline(std::cin, phrase);
  std::vector<char> vowels = {'a', 'e', 'i', 'o', 'u'};
  std::vector<char> result;

  for (int i = 0; i < phrase.size(); i++) {
    for (int x = 0; x < vowels.size(); x++) {
      if (phrase[i] == vowels[x]) {
        result.push_back(phrase[i]);
        if (phrase[i] == 'e' || phrase[i] == 'u') {
          result.push_back(phrase[i]);
        }
      }
    }
  }

  for (int j = 0; j < result.size(); j++) {
    std::cout << result[j];
  }
  std::cout << "\n";

}