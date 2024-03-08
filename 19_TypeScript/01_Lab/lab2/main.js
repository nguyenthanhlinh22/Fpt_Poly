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
// var person : {
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
var Role;
(function (Role) {
    Role[Role["ADMIN"] = 0] = "ADMIN";
    Role[Role["READ_ONLY"] = 1] = "READ_ONLY";
    Role[Role["AUTHOR"] = 2] = "AUTHOR";
})(Role || (Role = {}));
;
var person = {
    name: 'Nguyễn Thành Linh ',
    age: 19,
    hobbies: ["badminton ", "learn"],
    role: Role.ADMIN,
    roletuple: [2, "AUTHOR", "hih"]
};
var favouriteActivites;
favouriteActivites = [5, "badminton", true];
if (person.role === Role.AUTHOR) {
    console.log("is author ");
}
person.roletuple.push("admin");
person.roletuple[0] = 10;
person.roletuple = [0, "admin ", "user"];
