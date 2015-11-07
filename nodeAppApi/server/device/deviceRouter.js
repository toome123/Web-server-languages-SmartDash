'use strict';

var express = require('express');
var router = express.Router();

/* GET /Devices listing. */
router.get('/', function(req, res, next) {
    
  res.json({
    "devices":
        [
            {
              "name":"Температура",
              "value": randomInt(-24,55)
            },
            {
              "name":"Влажност",
              "value": randomInt(0,256)
            },
            {
              "name":"Светлина",
              "value": randomInt(0,1024)
            }
        ] 
    });

});

function randomInt (low, high) {
    return Math.floor(Math.random() * (high - low) + low);
}



module.exports = router;
