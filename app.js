require('dotenv').config();
const express = require('express');
const path = require('path');

const app = express();

app.use(express.static(path.join(__dirname, './public')));

app.get('/', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/index.html'));
})
app.get('/about', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/about.html'));
})
app.get('/services', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/services.html'));
})
app.get('/works', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/works.html'));
})
app.get('/digitalNE', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/digitalne.html'));
})
// blog
app.get('/digitalNE', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/digitalne.html'));
})
app.get('/contact', (req, res) => {
    res.status(200).sendFile(path.join(__dirname, './public/contactus.html'));
})
app.get('*', (req, res) => {
    res.status(404).sendFile(path.join(__dirname, './public/404.html'));
})

// listen to port 
const port = process.env.PORT || 5000;
app.listen(port, () =>
    console.log(`Server running on localhost:${port}`)
)
