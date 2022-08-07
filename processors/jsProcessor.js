// this file is used if different files needs to communicate
// their variables/ functions with some other files

// global variables

function displayNavBar(flag, domObjId) {
    let navBarObj = document.getElementById(domObjId);

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
        console.log("Error on clicking button on index!");
    }
}

function getClickedBtn() {
    let getLocalBtn = localStorage.getItem("clickedBtn");

    console.log("getItem: " + getLocalBtn);

    return getLocalBtn;
}

function showHidePassLogin() {
    var pass1 = document.getElementById("psw1");
    var theBtn = document.getElementById("showHideBtn1");

    if (pass1.type === "password") {
        pass1.type = "text";

        theBtn.innerHTML = "Hide";
    }
    else {
        pass1.type = "password";

        theBtn.innerHTML = "Show";
    }
}

function showHidePassReg() {
    var pass2 = document.getElementById("psw2");
    var passRep = document.getElementById("psw-repeat");
    var theBtn = document.getElementById("showHideBtn2");

    if (pass2.type === "password" && passRep.type === "password") {
        pass2.type = "text";
        passRep.type = "text";

        theBtn.innerHTML = "Hide";
    }
    else {
        pass2.type = "password";
        passRep.type = "password";

        theBtn.innerHTML = "Show";
    }
}

function areaBtnClicked(theEle) {
    let theEleIdObj = document.getElementById(theEle);
    let loginArea = document.getElementById("loginAreaId");
    let regArea = document.getElementById("regAreaId");

    // console.log("theEle: " + theEle);

    // alert("theEleIdObj: " + theEleIdObj.id);

    if(theEleIdObj.id == "loginAreaId") {
        // change color for login
        loginArea.style.opacity = "1.0";
        loginArea.style.backgroundColor = "rgb(249, 225, 126)";
        
        // change color for unchosen area
        regArea.style.opacity = "0.4";
        regArea.style.backgroundColor = "rgb(191, 191, 191)";
    }
    else if(theEleIdObj.id == "regAreaId") {
        // change color for register
        regArea.style.opacity = "1.0";
        regArea.style.backgroundColor = "rgb(249, 225, 126)";

        // change color for unchosen area
        loginArea.style.opacity = "0.4";
        loginArea.style.backgroundColor = "rgb(191, 191, 191)";
    }
    else {
        console.log("Error on clicking area!");
    }
}