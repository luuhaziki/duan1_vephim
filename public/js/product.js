let btnAddLC=document.querySelector(".btnAddLc");
let listLC=document.querySelector(".list_lichChieu");
btnAddLC.onclick=function (e){
    let input=document.createElement('input');
    let div=document.createElement('div');
    let btn=document.createElement('input');
    btn.setAttribute('onclick','deleteLc(this)');
    btn.type='button';
    btn.className='btn btn-sm btn-danger'
    btn.value='Xoá';
    div.className='lichChieu d-flex';
    input.className='form-control';
    input.type='datetime-local';
    input.name='lich_chieu[]';
    div.appendChild(input);
    div.appendChild(btn);
    listLC.appendChild(div);
}
function deleteLc(element){
    element.parentElement.remove();
}