var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  var section = req.query.section;
  console.log(section);
  res.render('cafe', { title: 'Express' });
});

module.exports = router;
