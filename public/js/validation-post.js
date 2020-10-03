// Lấy tất cả các trường cần validate
var namePost = document.getElementById('name');
var description = document.getElementById('description');

// Lấy tất cả các lỗi khi nhập
var namePost_error = document.getElementById("name_error");
var description_error = document.getElementById("description_error");

// Set tất cả event
namePost.addEventListener("blur", namePostVerify, true);
description.addEventListener("blur", descriptionVerify, true);

function ValidateAdd(){
    // name validation
    if (namePost.value == "") {
        namePost.style.border = "1px solid red";
        namePost_error.textContent = "Enter name!";
        namePost.focus();
        return false;
    }
    //description validate
    if (description.value == "") {
        description.style.border = "1px solid red";
        description_error.textContent = "Enter description!";
        description.focus();
        return false;
    }
}
function ValidateEdit(){
    // name validation
    if (namePost.value == "") {
        namePost.style.border = "1px solid red";
        namePost_error.textContent = "Enter name!";
        namePost.focus();
        return false;
    }
    //description validate
    if (description.value == "") {
        description.style.border = "1px solid red";
        description_error.textContent = "Enter description!";
        description.focus();
        return false;
    }
}
//event handle function
function namePostVerify(){
    if (namePost.value != "") {
        namePost.style.border = "1px solid #008000";
        namePost_error.innerHTML = "";
        return true;
    }
}
function descriptionVerify(){
    if (description.value != "") {
        description.style.border = "1px solid #008000";
        description_error.innerHTML = "";
        return true;
    }
}