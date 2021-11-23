function check_profile() {
    var Email = document.getElementById("email").value;
    var sdt = document.getElementById("sdt").value;
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    if (Email == "") {
        error1.innerHTML = "Vui lòng nhập email";
        error1.style.color = "red";
        return false;
    }


    // Số điện thoại không hợp lệ
    if (sdt == "") {
        error2.innerHTML = "Vui lòng nhập số điện thoại";
        error2.style.color = "red";
        return false;
    }
    else if (sdt.length < 10 || sdt.length > 11) {
        error2.innerHTML = "Số điện thoại không hợp lệ";
        error2.style.color = "red";
        return false;
    } else if (isNaN(sdt)) {
        error2.innerHTML = "Số điện thoại không hợp lệ";
        error2.style.color = "red";
        return false;
    }


    return true;

}