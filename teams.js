const team = {
    _players: [
      {
        firstName: 'Pete', 
        lastName: 'Wheeler', 
        age: 54
      }, {
        firstName: 'Pablo',
        lastName: 'Sanchez',
        age: 11
      },{
        firstName: 'Fuq',
        lastName: 'Boi',
        age: 69
      }
    ],
    _games: [
      {
        opponent: 'Broncos',
        teamPoints: 42,
        opponentPoints: 27
      }, {
        opponent: 'Sharks',
        teamPoints: 57,
        opponentPoints: 7
      }, {
        opponent: 'Wombats',
        teamPoints: 2,
        opponentPoints: 24
      }
    ],
    get players() {
      return this._players;
    },
    get games() {
      return this._games;
    },
    addPlayer(firstName, lastName, age) {
      const player = {
        firstName: firstName,
        lastName: lastName,
        age: age
      }
      this._players.push(player);
    },
    addGame(opponent, teamPoints, opponentPoints) {
      const game = {
        opponent: opponent,
        teamPoints: teamPoints,
        opponentPoints: opponentPoints
      };
      this._games.push(game);
    }
  };