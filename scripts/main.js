// Clear form before unload
window.onbeforeunload=()=>{
   for(const form of document.getElementsByTagName("form")) {
    form.reset();
   }
};

//fungsi validasi
function validateform(event){
   let form=document.forms('formku');
   let nama=form('nama').value;
   let alamat=form('alamat').value;
   let nomor=form('nomor').value;
   let email=form('email').value;
   let message=form('message').value;

   if(nama.trim()===""){
      alert("Nama Harus Diisi.");
      return false;
   }

   if(alamat.trim()===""){
      alert("Alamat Harus Diisi.");
      return false;
   }

   let phonePattern=/^d{12}$/;
   if(!phonePattern.test(nomor)){
      alert("Format Nomer Telepon Harus 12 Digit Angka.");
      return false;
   }

   let emailPattern= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
   if(!emailPattern.test(email)){
      alert("Format Email Tidak Valid.");
      return false;
   }

   if(message.trim()===""){
      alert("Pesan Harus Diisi.");
      return false;
   }

   alert("Form Berhasil Disubmit!");

   clearForm();

   event.preventDefault();

   return false;
}