var express = require('express');
const request = require('request');
var app = express();

app.get('/', function(req, res) {
  request.get(
    'https://jsonplaceholder.typicode.com/users',
    (error, response, body) => {
      const json = JSON.parse(body);
      res.send(json);
    }
  );
});

app.listen(3000, function() {
  console.log('Userservice listening on port 3000!');
});
