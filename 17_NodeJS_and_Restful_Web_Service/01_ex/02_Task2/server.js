const express = require('express');
const bodyParser = require('body-parser');



const app = express();
const port = 3000 ;



app.set('view enine', 'ejs');
app.set('view','./view');
app.use(bodyParser.json());
app.use(express.urlencoded({
    extended: true  
}));




app.get("/home", (req,res)=> {
    



})

app.listen(port, () => {
    console.log(`đã chạy wed ${port} `)
});