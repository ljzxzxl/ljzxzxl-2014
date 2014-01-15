
/**
 * Module dependencies.
 */

var express = require('express');
var routes = require('./routes');
var user = require('./routes/user');
var http = require('http');
var path = require('path');
var socketio = require('socket.io');

var app = express();

// all environments
app.set('port', process.env.PORT || 3000);
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(express.favicon());
app.use(express.logger('dev'));
app.use(express.json());
app.use(express.urlencoded());
app.use(express.methodOverride());
app.use(app.router);
app.use(express.static(path.join(__dirname, 'public')));

// development only
if ('development' == app.get('env')) {
  app.use(express.errorHandler());
}

var userlist=[];
app.get('/', routes.index);
app.get('/users', user.list);
app.post('/',function(req,res){
	userlist.push(req.body.nickname);
	res.render('main',{title:'你画我猜'});
});


var server=http.createServer(app).listen(app.get('port'), function(){
  console.log('Express server listening on port ' + app.get('port'));
});


socketio.listen(server).on('connection',function(socket){
	console.log('123');

	socket.on('draw',function(data){
		socket.broadcast.emit("show",data);
	});
});
