let listMahasiswa = document.getElementsByTagName("ul");
listMahasiswa[0].addEventListener("click",tampilkan);

function tampilkan(event){
    alert("Cek data "+event.target.innerHTML);
}

// tampilan popover bootstrap
new bootstrap.Popover(document.getElementById('myPopover'))
