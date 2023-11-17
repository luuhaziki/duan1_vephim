let listVariant=document.querySelector("#listVariant");
let btnAddVariant=document.querySelector(".addVariant");
btnAddVariant.addEventListener('click',()=>{
    let btn=document.createElement("input");
    btn.value="xoá";
    btn.setAttribute("type","button");
    btn.setAttribute("onclick",'removeElement(this)');
    btn.setAttribute("class","btn btn-outline-danger btn-sm");
    btn.style.marginLeft = "8px"
    let variantElement=document.querySelector(".variant").cloneNode(true);
    let inputs=variantElement.querySelectorAll("input");
    inputs.forEach(function (input){
        input.value="";
    })
    variantElement.appendChild(btn);
    listVariant.appendChild(variantElement);
});
function removeElement(btn){
    btn.parentElement.remove();
}