function dropdownList(str) {
    let headEl = document.getElementById(`${str}`);

    headEl.addEventListener('mouseover', () => {
        document.querySelector(`#${str} .sublist`).style.display = "flex";
    })
    headEl.addEventListener('mouseout', () => {
        document.querySelector(`#${str} .sublist`).style.display = "none";
    })
}

dropdownList("genreli");
dropdownList("langLi");

//overlay box -start
//catch book links


const cross_button = document.querySelector(".cros-button");
const overlayBoxEl = document.querySelector(".overlay");
cross_button.addEventListener('click', () => {
    overlayBoxEl.style.display = "none";
});



//overlay box -end
function a(){
    overlayBoxEl.style.display="flex";
}
let pel=document.querySelector("#prof_c");
pel.addEventListener("click",a);



