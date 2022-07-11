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
