let listMahasiswa = document.getElementsByTagName("ul");
listMahasiswa[0].addEventListener("click",tampilkan);

function tampilkan(event){
    alert("Cek data mahasiswa"+event.target.innerHTML);
}