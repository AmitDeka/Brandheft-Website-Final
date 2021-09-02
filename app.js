require('dotenv').config();
const express = require('express');
const path = require('path');

const app = express();

app.use(express.static(path.join(__dirname, './public')));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, './public/index.html'));
})
app.get('/about', (req, res) => {
    res.sendFile(path.join(__dirname, './public/about.html'));
})
app.get('/services', (req, res) => {
    res.sendFile(path.join(__dirname, './public/services.html'));
})
app.get('/testimonial', (req, res) => {
    res.sendFile(path.join(__dirname, './public/testimonial.html'));
})
app.get('/digitalNE', (req, res) => {
    res.sendFile(path.join(__dirname, './public/digitalne.html'));
})
// blog
app.get('/digitalNE', (req, res) => {
    res.sendFile(path.join(__dirname, './public/digitalne.html'));
})
app.get('/contact', (req, res) => {
    res.sendFile(path.join(__dirname, './public/contactus.html'));
})

// listen to port 
const port = process.env.PORT || 5000;
app.listen(port, () =>
    console.log(`Server running on localhost:${port}`)
)
