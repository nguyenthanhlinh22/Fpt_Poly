// var num1: number = 5 ;
// var num2: number = 2.8 ;
// var phease: string = " result is ";
// var permit: boolean = true ; 

// var result= num1 + num2 ; 

// if(permit){
    
//     console.log(phease + result);

// }else{
//     console.log("bạn đã làm sai");
// }





// function add(x=5){
//     let phrase = " trả về " ; 
//     phrase = '10';
//     x = 20 ;

//     return phrase + x ;
// }
// var result = add() ;






//
// let person : {
//     name :string ,
//     lop : number,
//     school : string
// };

// person = {
//     name : "nguyễn thành linh ",
//     lop : 10 ,
//     school : "fpt",
// }
// console.log(person.name)


// enum Role {ADMIN, READ_ONLY, AUTHOR};
// const person :{
//     name: string ,
//     age: number,
//     hobbies : string[],
//     role: Role ,
//     roletuple: [number, string, string]
// } = {
//     name: 'Nguyễn Thành Linh ',
//     age : 19 ,
//     hobbies : ["badminton " , "learn"],
//     role: Role.ADMIN ,
//     roletuple: [2,"AUTHOR" ,"hih"]
// }
//
// var favouriteActivites: any[];
// favouriteActivites = [5 , "badminton" , true] ;
//
// if(person.role === Role.AUTHOR){
//     console.log("is author ");
// }
// person.roletuple.push("admin");
// person.roletuple[0] = 10 ;
// person.roletuple = [0, "admin " , "user" ]







// type Combinable = number | string;
// function combine(input1: Combinable, input2: number | string, resultConvesion: 'as-number' | 'as-text') {
//     let result;
//     if (typeof input1 === 'number' && typeof input2 === 'number' || resultConvesion === 'as-number') {
//         result = +input1 + +input2; // +biến -> chuyển string thành number
//     } else {
//         result = input1.toString() + input2.toString();
//     }
//     return result;
// }
// const combineNumber = combine(30, 26, 'as-number');
// console.log(combineNumber);
// const combineStringNumber = combine('30', '26', 'as-number');
// console.log(combineStringNumber);
// const combineText = combine('Typescript Vs ', 'Javascript', 'as-text');
// console.log(combineText);
//





// var a = null;
// console.log(a);
// console.log(typeof(a));
// var b, undeclareVar;
// console.log(b);
// console.log(typeof(a));
// // console.log(undeclareVar); // biến chưa được gọi




// var userInput;
// var userName;
// userInput = 5;
// userInput = 'Typescript';
// // userName = userInput; // biến có kiểu dữ liệu uknown không thể gán cho biến có kiểu dữ liệu khác
// userName = userInput;
// if (typeof userInput === 'string') {
//     userName = userInput;
// }