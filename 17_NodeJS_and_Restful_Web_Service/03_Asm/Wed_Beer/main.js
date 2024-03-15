const express = require("express");
const bodyParser = require('body-parser');
const multer = require('multer');


const app = express(); 

app.set("view engine" , "ejs");
app.set("views", "./views");

app.use(express.static("public"));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true 
}));

app.use("/css" , express.static(__dirname+ "/public"));
app.use("/js" , express.static(__dirname+ "/public"));

app.get("/" , (req,res) => {
    res.render("index");
});




app.listen(3000, () => {
    console.log("server started!!!");
  });
