const menuList = ["menu1", "menu2" , "menu 3" ];

const menuElement = document.querySelector("#menu");

// for 
if(menuElement){
    // for(let i = 0 ; i < 4 ; i++){
    //         console.log(i);
    // }
    // for in và in trả Về index
    for(let i in menuList){
        // console.log(i);
        menuElement.innerHTML += `<li>${menuList[i]}</li>`
    }
    // for of trả về giá trị
    for(let item of menuList){
        menuElement.innerHTML += `<li>${item}</li>`
    }
    // forEach
    menuList.forEach(function(item){
        menuElement.innerHTML += `<li>${item}</li>`
    });
    // map
    const result = menuList.map(function(item){
        return `<li>${item}</li>`

    }).join("");
    menuElement.innerHTML = result ;
}
// product
const productList = [
    {
        id:1, 
        name: " product A",
        price:200,
        img: "https://picsum.photos/300/300",
    },
    {
        id:2, 
        name: " product B",
        price:200,
        img: "https://picsum.photos/300/300",
    },
    {
        id:3, 
        name: " product C",
        price:200,
        img: "https://picsum.photos/300/300",
    },
    {
        id:4, 
        name: " product D",
        price:200,
        img: "https://picsum.photos/300/300",
    }
]
const productElement = document.querySelector("#products");
// neu product ton tai
if(productElement){
    const result = productList.map(function(product){
        return ` <div class="border p-4 rounded shadow">
        <img src="${product.img}" alt="" >
        <h3><a href="" class="font-bold block my-3">${product.name}</a></h3>
        <span class="text-red-500">${product.price}</span>

    </div>`;
    }).join("");//join để nối chuổi ; 
    productElement.innerHTML = result ; 

}
// const state = {
//     product : []
// };
// function productList(){
//     state.product = productList ;

// };
// function template(){

// };
// function render(){
//     productList();
//     productElement.innerHTML = template();      

// }
// render();
const result = {
    success : ["max-length", "no-amd" , "prefer-arrow-functions"],
    failure: ["no-var", "var-no-top", "linebreak"],
    skipped: ["no-extrasemi", "no-dup-key"]
};
const element = document.querySelector(#result);
function makeList(arr){
    const failureItem = [];
    // var li = (obj) => `<li class"text-warning">${obj.failure}</li>`;

    console.log(failureItem);
    return failureItem ; 

}
const failuresList = makeList(result.failure);