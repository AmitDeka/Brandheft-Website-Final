// require('dotenv').config();
// const express = require('express');
// const expressLayouts = require('express-ejs-layouts');
// const route = require('./route/route'); nbb                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           

// const app = express();

// app.use(express.static('public'));

// app.use(expressLayouts);
// app.set('view engine', 'ejs');


// app.use('/', route);

// // server lister 
// const PORT = process.env.PORT || 5050;

// app.listen(PORT, console.log(`Server running on 127.0.0.1:${PORT}`));

require('dotenv').config();
const express = require('express');
const expressLayouts = require('express-ejs-layouts');


const app = express();

// static folder 
app.use(express.static('public'));
app.use('/css', express.static(__dirname + 'public/dist/css'));

// set view engine
app.use(expressLayouts);
app.set('view engine', 'ejs');

// parser 
app.use(express.urlencoded({ extended: true }));

// Router 
app.use('/', require('./route/route'));
// app.use('/auth', require('./route/auth'));
// app.use('/dashboard', require('./route/dashboard'));

// Passport

// listen to port 
const port = process.env.PORT || 5000;
app.listen(port, () =>
    console.log(`Server running on localhost:${port}`)
)