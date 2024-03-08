import './style.css'
import javascriptLogo from './javascript.svg'
import viteLogo from '/vite.svg'
import { setupCounter } from './counter.js'
import navigo from "navigo";

const router = new navigo("/");

router.on({
    "/": () => {
        console.log("home page");
    },
    "/about": () => {
        console.log("About page");  
    }
});

router.resolve();