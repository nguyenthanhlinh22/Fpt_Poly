const result = {
    success : ["max-length", "no-amd" , "prefer-arrow-functions"],
    failure: ["no-var", "var-no-top", "linebreak"],
    skipped: ["no-extrasemi", "no-dup-key"]
};

function makeList(arr){
    const failureItem = [];
    for (const  element of arr){
        failureItem.push(`<li class"text-warning">${element}</li>`);
    }


    // console.log(failureItem);
    return failureItem ;
}
const failuresItem = makeList(result.failure);
console.log(failuresItem.join("\n"));