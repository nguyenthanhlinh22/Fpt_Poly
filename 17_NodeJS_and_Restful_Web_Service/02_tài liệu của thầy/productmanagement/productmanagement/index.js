const express = require("express");
const bodyParser = require("body-parser");
const multer  = require('multer');
 //sử dung module database
 const mysql=require('mysql');
 // create connection to database
 const con = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'promangements'
 });

const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, 'public/image/')
  },
  filename: function (req, file, cb) {
    cb(null, file.fieldname)
  }
});

const upload = multer({ storage });

const app = express();

app.set("view engine", "ejs");
app.set("views", "./views");

app.use(express.static("public"));
app.use(bodyParser.json()); // for parsing application/json
app.use(bodyParser.urlencoded({ extended: true })); // for parsing application/x-www-form-urlencoded

app.use("/css", express.static(__dirname + "/node_modules/bootstrap/dist/css"));
app.use("/js", express.static(__dirname + "/node_modules/bootstrap/dist/js"));



let products  = [];


app.get("/", (req, res) => {
  let q = req.query.q ? req.query.q : "";
  let sql = `SELECT * FROM products where name LIKE '%${q}%'`;
  con.query(sql, (err, data)=>{
    res.render("index",{products:data,q});
  })
  
});

// app.get("/products/:id" , (req, res)=>{
//   let id = req.params.id;
//   let products = products.find(pro => pro.id==id);
//   if(products){
//     info = `thông tin của sản phẩn có tên là ${products.name}, ${products.detail}`
//     res.send(info);
//   }else{
//     res.send("không tìm thấy sp ")
//   }

// })

app.get("/products/:id" , (req, res) => {
  let id = req.params.id;
  let sql = `SELECT * FROM products WHERE id = ${id}`;
  con.query(sql, (err, data) => {
    if (err) {
      res.send("Đã xảy ra lỗi khi truy xuất thông tin sản phẩm.");
    } else {
      if (data.length > 0) {
        let product = data[0];
        let info = `Thông tin của sản phẩm có tên là ${product.name}, ${product.detail}`;
        res.send(info);
      } else {
        res.send("Không tìm thấy sản phẩm");
      }
    }
  });
});


app.get("/newProducts", (req,res) =>{
  res.render("newProduct")

});

app.post("/create",upload.single('image'), (req,res)=>{
  let {name, detail} = req.body;
  let image = 'image/' + req.file.filename;
  let obj= {
    id: products.length+1,
    name, 
    detail,
    image,
  };
  products = [...products, obj];
  res.redirect("/");
})

app.listen(3000, () => {
  console.log("server started!!!");
});
