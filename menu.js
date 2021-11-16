const menu = {
    _courses: {
      _appetizers: [],
      _mains: [],
      _desserts: [],
      get appetizers() {
        return this._appetizers
      },
      get mains() {
        return this._mains
      },
      get desserts() {
        return this._desserts
      },
      set appetizers(newApp) {
        return newApp = this._appetizers
      },
      set mains(newMain) {
        return newMain = this._mains
      },
      set desserts(newDessert) {
        return newDessert = this._desserts
      }
    },
    get courses() {
      return {
        newApp: this._appetizers,
        newMain: this._mains,
        newDessert: this._desserts
      }
    },
    addDishToCourse(courseName, dishName, dishPrice) {
      const dish = {
        name: dishName,
        price: dishPrice
      };
      this._courses[courseName].push(dish)
    },
    getRandomDishFromCourse(courseName) {
      const dishes = this._courses[courseName];
      const randomNum = Math.floor(Math.random() * dishes.length);
      return dishes[randomNum];
    },
    generateRandomMeal() {
      const appetizer = this.getRandomDishFromCourse('_appetizers');
      const main = this.getRandomDishFromCourse('_mains');
      const dessert = this.getRandomDishFromCourse('_desserts');
      const totalPrice = appetizer.price + main.price + dessert.price;
      return `Your meal is ${appetizer.name}, ${main.name}, and ${dessert.name}. Your price comes out to ${totalPrice}.`;
    }
  };
  