let secaEl=document.getElementById('slid-seca');
let secbEl=document.getElementById('slid-secb');
let divA=document.querySelector('.seca');
let divB=document.querySelector('.secb');
let clickedA=true;
let clickedB =false;
let colorActive='white';
let colorInactive="rgb(45,141,182)";
let backgroundColorActive="rgb(45,141,182)";
let backgroundColorInactive="rgb(245, 243, 243)";
secaEl.addEventListener('click',() =>{
    divA.style.display='flex';
    divB.style.display='none';
    secaEl.style.backgroundColor=backgroundColorActive;
    secaEl.style.color=colorActive;
    secbEl.style.backgroundColor=backgroundColorInactive;
    secbEl.style.color=colorInactive;
    clickedA=true;
    clickedB=false;
})



secbEl.addEventListener('click',() =>{
    divB.style.display='flex';
    divA.style.display='none';
    secbEl.style.backgroundColor=backgroundColorActive;
    secbEl.style.color=colorActive;
    secaEl.style.backgroundColor=backgroundColorInactive;
    secaEl.style.color=colorInactive;
    clickedB=true;
    clickedA=false;
})
secaEl.addEventListener('mouseover',()=>{
    secaEl.style.backgroundColor=backgroundColorActive;
    secaEl.style.color=colorActive;
})
secaEl.addEventListener('mouseout',()=>{
    if(clickedA==false){
        secaEl.style.backgroundColor=backgroundColorInactive;
    secaEl.style.color=colorInactive;
    }
})
secbEl.addEventListener('mouseover',()=>{
    secbEl.style.backgroundColor=backgroundColorActive;
    secbEl.style.color=colorActive;
})
secbEl.addEventListener('mouseout',()=>{
    
    if(clickedB==false){
        secbEl.style.backgroundColor=backgroundColorInactive;
    secbEl.style.color=colorInactive;
    }
})

let filterEl=document.getElementById('filter');
let filterPallete=document.querySelector('.filter-pallete')
let visible=false;
filterEl.addEventListener('click',()=>{
    if(visible==false){
        filterPallete.style.display='flex';
        visible=true;
    }
    else {
        filterPallete.style.display='none';
        visible=false;
    }


})

//header responsive list
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

const searchbar = document.querySelector(`#search-bar`);
window.addEventListener('focusin', () => {
    searchbar.setAttribute('placeholder', "");
})

window.addEventListener("focusout", () => {
    searchbar.setAttribute('placeholder', "search your books");
})

//smooth scroll
let anchorlinks = document.querySelectorAll('a[href^="#"]')

for (let item of anchorlinks) { // relitere 
    item.addEventListener('click', (e)=> {
    let hashval = item.getAttribute('href')
    let target = document.querySelector(hashval)
    target.scrollIntoView({
      behavior: 'smooth'
    })
    history.pushState(null, null, hashval)
    e.preventDefault()
  })
}

//apply-btn
let apply_btnEl=document.querySelector(".apply-btn");

apply_btnEl.addEventListener('click',()=>{
    filterPallete.style.display='none';
    if(visible==true){
        visible=false;
    }
})