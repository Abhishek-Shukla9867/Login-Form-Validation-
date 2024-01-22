function validation() {
    let username = document.myform.username.value;
    let password = document.myform.password.value;

     if(username==="")
     {
        alert("Please enter username");
        return false;
     }

     else if (password ==="")
     {
        alert("Please enter Password");
        return false;
     }
}

 