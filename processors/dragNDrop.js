// implementation codes for drag and drop functions

// global variable
var isInside; // by default, i want to make it false

// select the item to be dragged
const item = document.querySelector(".square");

// add the dragStart event listener
item.addEventListener("dragstart", dragStart);


// select all elements for dragOver
const boxes = document.querySelectorAll(".box");
boxes.forEach(box => {
    box.addEventListener("dragenter", dragEnter);
    box.addEventListener("dragover", dragOver);
    box.addEventListener("dragleave", dragLeave);
    box.addEventListener("drop", dropHandler);
});

// handle the dragstart
// what happens once dragstart occurs
function dragStart(ev) {
    console.log("drag starts...");

    // window.alert(ev.target);

    ev.dataTransfer.setData('text/plain', ev.target.id);
    
    // ev.target.classList.add("hide");
    // setTimeout(() => {
    //     ev.target.classList.add("hide");
    // }, 0);

    // console.log("getData: " + ev.dataTransfer.getData('text'));
}

function dragEnter(ev) {
    console.log("drag enter...");
    ev.preventDefault();
    ev.target.classList.add("drag-over"); // utk tukar box border once drag masuk

    isInside = true;
}

function dragOver(ev) {
    console.log("drag over...");
    ev.preventDefault();
    ev.target.classList.add("drag-over");
}

function dragLeave(ev) {
    console.log("drag leave...");
    ev.target.classList.remove("drag-over");

    isInside = false;
}

function dropHandler(ev) {
    console.log("drop...");
    ev.preventDefault(); // to disable data loading
    ev.target.classList.remove("drag-over");

    // get the draggable element
    const data = ev.dataTransfer.getData("text/plain");
    const draggable = document.getElementById(data);

    // console.log("id: " + id);
    // console.log("draggable: " + draggable);

    // add to the drop target
    // if item is placed inside box, then place,
    // else, put it back to original place if dropped outside of boxes
    if(isInside === true) {
        console.log("yes");
        ev.target.appendChild(draggable);
    }
    else {
        console.log("no :(");
    }

    // remove the red border
    draggable.classList.remove("drag-over");

    // display the draggable element
    draggable.classList.remove("hide");
}

// TRY TO FIGURE OUT MACAM MANA NAK BUAT KALAU USER DROPPED SQUARE DI LUAR BOX