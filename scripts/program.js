// Clear form before unload
window.onbeforeunload=()=>{
    for(const form of document.getElementsByTagName("form")) {
     form.reset();
    }
 };
 
 //fungsi validasi
 function validateform(event){
    let form=document.forms('formpro');
    let program=form('program').value;
    let lunak=form('lunak').value;
    let bahasa=form('bahasa').value;
    let lama=form('lama').value;
    let lain=form('lain').value;
 
    if(program.trim()===""){
       alert("Data ini Harus Diisi.");
       return false;
    }
 
    if(lunak.trim()===""){
       alert("Data ini Harus Diisi.");
       return false;
    }
    if(bahasa.trim()===""){
       alert("Data ini Harus Diisi.");
       return false;
    }
    if(lama.trim()===""){
       alert("Data ini Harus Diisi.");
       return false;
    }
    if(lain.trim()===""){
       alert("Data ini Harus Diisi.");
       return false;
    }
 
    alert("Form Berhasil Disubmit!");
 
    clearForm();
 
    event.preventDefault();
 
    return false;
 }