require('dotenv').config();
const express = require('express');
// const router = express.Router();
const expressLayouts = require('express-ejs-layouts');
const route = require('./route/route');

const app = express();


app.use(express.static("/public"));

app.use(expressLayouts);
app.set('view engine', 'ejs');


// router.get('/', (req, res) =>
//     res.render('index.ejs')
// );
app.get('', (req, res) => {
    res.render('index')
})

// server lister 
const PORT = process.env.PORT || 5050;

app.listen(PORT, console.log(`Server running on localhost:${PORT}`));
