'use strict';

var express = require('express');
var devices = require('./server/device/deviceRouter');

var app = express();

app.use('/devices', devices);

module.exports = app;
