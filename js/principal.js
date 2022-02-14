function preview(e){
    const url =e.target.files[0];
    const name_tmp= URL.createObjectURL(url);
    document.getElementById("img-preview").src= name_tmp;
    document.getElementById("icon-imagen").classList.add("d-none");
    document.getElementById("icon-cerrar").innerHTML=`<button class="btn btn-danger" onclick="deleteImg(event)"><i class="fas fa-times"></i></button>${url['name']}`;
}
function deleteImg(e){
    document.getElementById("icon-cerrar").innerHTML= '';
    document.getElementById("icon-imagen").classList.remove("d-none");
    document.getElementById("img-preview").src='';
}
