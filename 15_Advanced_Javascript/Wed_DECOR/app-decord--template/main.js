import Navigo from "navigo" ; 

const router = new Navigo("/") ;


router.on({
    "/": () => {
        console.log("home page")
    },
    "/about": () => {
        console.log("about page")
    },

});

//kich hoat router

router.resolve();


