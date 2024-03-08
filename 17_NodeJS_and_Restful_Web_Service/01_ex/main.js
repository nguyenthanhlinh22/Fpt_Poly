

const express = require('express');
const bodyParser = require('body-parser');


const app = express();
const port = 3000;


app.use(bodyParser.json());
app.use(express.urlencoded({
  extended: true
}));

app.get('/', (req, res) => {
  res.send('Hello World!');
});


app.get('/users', (req, res) => {
  console.log(req.query);
  let q = req.query.q;
    res.send(`
    <h1>user</h1>
    <input value=${q}><button>tìm kiếm </button>
    `);
  });







//   const inventors = [ 
//     { id:1, first: 'Albert', last: 'Einstein', year: 1879, passed: 1955 }, 
//     { id:2, first: 'Isaac', last: 'Newton', year: 1643, passed: 1727 }, 
//     { id:3, first: 'Galileo', last: 'Galilei', year: 1564, passed: 1642 }, 
//     { id:4, first: 'Marie', last: 'Curie', year: 1867, passed: 1934 }, 
//     { id:5, first: 'Johannes', last: 'Kepler', year: 1571, passed: 1630 }, 
//     { id:6, first: 'Nicolaus', last: 'Copernicus', year: 1473, passed: 1543 } 
//   ];

//   app.get('/inventors', (req, res) => { 
//     let list='<h2>Danh sách nhà khoa học<ul>'; 
//       inventors.forEach(e => { 
//       list+=`<li><a style="text-decoration:none;color:green;" href="/inventor/${e.id}">${e.last}</a></li>`; 
//       }); 
//       list+='</ul></h2>'; 
//     res.send(list); 
//     }); 
 

// app.get('/inventor/:id', (req, res) => { 
//     let id=req.params.id; 
//     inventor=inventors.find(e=>e.id==id); 
//     info=`<h2>Thông tin chi tiết nhà khoa học:Full name: ${inventor.first} ${inventor.last}, Year: ${inventor.year}, 
//     Passed: ${inventor.passed}</h2>`; 
//     res.send(info); 
//   }); 



const people = [
      { id:1, Name: "Nguyễn Thành Linh" , age: "19" , school : "Fpt " },
      { id:2, Name: "Nguyễn Văn Thanh" , age: "19" , school : "Fpt " },
      { id:3, Name: "Nguyễn Thành Long" , age: "19" , school : "Fpt " },
      { id:4, Name: "Võ Thị thư" , age: "19" , school : "Fpt " },
      { id:5, Name: "Nguyễn Thùy Linh" , age: "19" , school : "Fpt " },
  
];




app.get('/add-people', (req,res)=>{
  res.send('  <h2>thêm sinh viên</h2><form action="add-people" method="post"><input type="text" name="Name" placeholder="nhập tên"> <br><input type="text" name="age" placeholder="nhập tuổi"> <br><input type="text" name="school" placeholder="nhập trường của bạn "> <br><input type="submit" value="thêm sinh viên "></form>');

});
app.post('/add-people', (req,res)=>{
    // let people = new Object();
    // people = people.length+1 ;
    // people.Name =req.body.Name ;
    // people.age =req.body.age ;
    // people.school =req.body.school ;
    // peoples.push(people);
    // res.redirect('/peoples');
    const newPerson ={
      id: people.length+1,
      Name: req.body.Name,
      age: req.body.age,
      school: req.body.school,
    };
    people.push(newPerson);
    res.redirect('/peoples');

})

app.get('/peoples', (req,res) =>{
  let list = '<h1>Danh sách học sinh <ul>';
  people.forEach(e => {
    list += `<li><a style="text-decoration:none; color:red; " href="/people/${e.id}" >${e.Name}</a></li>`;
  });
  list += '</ul></h2>';
  res.send(list);
});

app.get('/people/:id', (req,res) => {
  let id = req.params.id;
  let person = people.find(e=>e.id==id);
  if(person){
    info = `<h2> Thông tin về sinh viên trường Fpt:Name:${person.Name}, age:${person.age}, school:${person.school}`;
    res.send(info);
  }else{
    res.send("không tìm thấy id");
  };
});




app.get('/findToBienso', (req,res)=>{
    
})





const bienso =[
  {
    "city": "Hà Nội",
    "plate_no": "29,30,31,32,33,40"
  },
  {
    "city": "Thái Nguyên",
    "plate_no": "20"
  },
  {
    "city": "Phú Thọ",
    "plate_no": "19"
  },
  {
    "city": "Bắc Giang",
    "plate_no": "98"
  },
  {
    "city": "Hòa bình",
    "plate_no": "28"
  },
  {
    "city": "Bắc Ninh",
    "plate_no": "99"
  },
  {
    "city": "Hà Nam",
    "plate_no": "90"
  },
  {
    "city": "Hải Dương",
    "plate_no": "34"
  },
  {
    "city": "Hưng Yên",
    "plate_no": "89"
  },
  {
    "city": "Vĩnh Phúc",
    "plate_no": "88"
  },
  {
    "city": "Quảng Ninh",
    "plate_no": "14"
  },
  {
    "city": "Hải Phòng",
    "plate_no": "15, 16"
  },
  {
    "city": "Nam Định",
    "plate_no": "18"
  },
  {
    "city": "Ninh Bình",
    "plate_no": "35"
  },
  {
    "city": "Thái Bình",
    "plate_no": "17"
  },
  {
    "city": "Hà Giang",
    "plate_no": "23"
  },
  {
    "city": "Cao Bằng",
    "plate_no": "11"
  },
  {
    "city": "Lào Cai",
    "plate_no": "24"
  },
  {
    "city": "Bắc Cạn",
    "plate_no": "97"
  },
  {
    "city": "Lạng Sơn",
    "plate_no": "12"
  },
  {
    "city": "Tuyên Quang",
    "plate_no": "22"
  },
  {
    "city": "Yên Bái",
    "plate_no": "21"
  },
  {
    "city": "Điện Biên",
    "plate_no": "27"
  },
  {
    "city": "Lai Châu",
    "plate_no": "25"
  },
  {
    "city": "Sơn La",
    "plate_no": "26"
  },
  {
    "city": "Thanh Hóa",
    "plate_no": "36"
  },
  {
    "city": "Nghệ An",
    "plate_no": "37"
  },
  {
    "city": "Hà Tĩnh",
    "plate_no": "38"
  },
  {
    "city": "Quảng Bình",
    "plate_no": "73"
  },
  {
    "city": "Quảng Trị",
    "plate_no": "74"
  },
  {
    "city": "Thừa Thiên Huế",
    "plate_no": "75"
  },
  {
    "city": "Đà Nẵng",
    "plate_no": "43"
  },
  {
    "city": "Quảng Nam",
    "plate_no": "92"
  },
  {
    "city": "Quảng Ngãi",
    "plate_no": "76"
  },
  {
    "city": "Bình Định",
    "plate_no": "77"
  },
  {
    "city": "Phú Yên",
    "plate_no": "78"
  },
  {
    "city": "Khánh Hòa",
    "plate_no": "79"
  },
  {
    "city": "Ninh Thuận",
    "plate_no": "85"
  },
  {
    "city": "Bình Thuận",
    "plate_no": "86"
  },
  {
    "city": "Kon Tum",
    "plate_no": "82"
  },
  {
    "city": "Gia Lai",
    "plate_no": "81"
  },
  {
    "city": "Dak Lak",
    "plate_no": "47"
  },
  {
    "city": "Đắc Nông",
    "plate_no": "48"
  },
  {
    "city": "Lâm Đồng",
    "plate_no": "49"
  },
  {
    "city": "Hồ Chí Minh",
    "plate_no": "41,50,51,52,53,54,55,56,57,58,59"
  },
  {
    "city": "Bình Phước",
    "plate_no": "93"
  },
  {
    "city": "Bình Dương",
    "plate_no": "61"
  },
  {
    "city": "Đồng Nai",
    "plate_no": "38,60"
  },
  {
    "city": "Tây Ninh",
    "plate_no": "70"
  },
  {
    "city": "Bà Rịa Vũng Tàu",
    "plate_no": "72"
  },
  {
    "city": "Cần Thơ",
    "plate_no": "65"
  },
  {
    "city": "Long An",
    "plate_no": "62"
  },
  {
    "city": "Đồng Tháp",
    "plate_no": "66"
  },
  {
    "city": "Tiền Giang",
    "plate_no": "63"
  },
  {
    "city": "An Giang",
    "plate_no": "67"
  },
  {
    "city": "Bến Tre",
    "plate_no": "71"
  },
  {
    "city": "Vĩnh Long",
    "plate_no": "64"
  },
  {
    "city": "Hậu Giang",
    "plate_no": "95"
  },
  {
    "city": "Kiên Giang",
    "plate_no": "68"
  },
  {
    "city": "Sóc Trăng",
    "plate_no": "83"
  },
  {
    "city": "Bạc Liêu",
    "plate_no": "94"
  },
  {
    "city": "Cà Mau",
    "plate_no": "69"
  }
 ];


 app.get("/find", (req, res) => {
  let dropdownOptions = '';
  bienso.forEach(item => {
      dropdownOptions += `<option value="${item.city}">${item.city}</option>`  ;
      
  });
  const selectElement = `<select name="city" id="">${dropdownOptions}</select> 
  
  
  `;
  
  res.send(selectElement);
  
});




app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
});

