var express = require('express');
var path = require('path');
var bodyParser = require('body-parser');

var PORT = 3000;
var app = express();

app.use(bodyParser.urlencoded({extended : true}));
app.use(bodyParser.json());

app.get('/', function(request, response) {
	response.sendFile(path.join(__dirname + '/login_page.html'));
});

app.post('/auth', function(request, response) {
    console.log(request);
	var username = request.body.username;
    var password = request.body.password;
    console.log(username);
	if (username && password) {
		// connection.query('SELECT * FROM accounts WHERE username = ? AND password = ?', [username, password], function(error, results, fields) {
		// 	if (results.length > 0) {
		// 		request.session.loggedin = true;
		// 		request.session.username = username;
		// 		response.redirect('/home');
		// 	} else {
		// 		response.send('Incorrect Username and/or Password!');
		// 	}			
		// 	response.end();
        // });
        if(username == "umang" && password=="umang"){
            response.sendFile(path.join(__dirname+'/dashboard.html'))
        }
        else{
            response.sendFile(path.join(__dirname+'/login_page.html'));
            response.end(JSON.stringify({
                error : true
            }))
        }
	} else {
		response.send('Please enter Username and Password!');
		response.end();
	}
});

app.listen(PORT,function(err){
    if (err) console.log(err);
    console.log("Server started");
});