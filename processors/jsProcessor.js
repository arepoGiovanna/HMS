// this file is used if different files needs to communicate
// their variables/ functions with some other files

// global variables

function displayNavBar(flag, domObj) {
    let navBarObj = document.getElementById(domObj);

    if(flag == false) {
        return navBarObj.style.display = "none";
    }
    else if(flag == true) {
        return navBarObj.style.display = "block";
    }
    else {
        return false; // if failed, return false
    }
}

function clickedBtn(theBtn) {
    if(theBtn == "login") {
        localStorage.setItem("clickedBtn", theBtn);
        console.log("setItem: " + theBtn);
    }
    else if(theBtn == "register") {
        localStorage.setItem("clickedBtn", theBtn);
        console.log("setItem: " + theBtn);
    }
    else {
        console.log("Error on clicking button!");
    }
}

function getClickedBtn() {
    let getLocalBtn = localStorage.getItem("clickedBtn");

    console.log("getItem: " + getLocalBtn);

    return getLocalBtn;
}