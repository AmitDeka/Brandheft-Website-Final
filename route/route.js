const express = require('express')
const router = express.Router();

// index page 

router.get('/', (req, res) => {
    res.render('index');
})

router.get('/about', (req, res) => {
    res.render('about');
})

router.get('/services', (req, res) => {
    res.render('services');
})

router.get('/digitalNE', (req, res) => {
    res.render('digitalne');
})

router.get('/testimonial', (req, res) => {
    res.render('testimonial;');
})

router.get('/blog', (req, res) => {
    res.render('blog');
})

module.exports = router;