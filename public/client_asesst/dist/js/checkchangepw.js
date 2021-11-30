function checkchangepw() {
    var idpass1 = document.getElementById("idpass1").value;
    var idpass2 = document.getElementById("idpass2").value;
    var errornewpass = document.getElementById("errornewpass1");
    var errornewpass2 = document.getElementById("errornewpass2");

    if (idpass1 == "") {
        errornewpass.innerHTML = "Bạn vui lòng nhập mật khẩu mới";
        document.getElementById("idpass1").focus();
        return false;
    }
    if (idpass1.length < 6) {
        errornewpass.innerHTML = "Mật khẩu phải lớn hơn 6 ký tự";
        document.getElementById("idpass1").focus();
        return false;
    }
    if (idpass1.length > 20) {
        errornewpass.innerHTML = "Mật khẩu phải nhỏ hơn 20 ký tự";
        document.getElementById("idpass1").focus();
        return false;
    } else {
        errornewpass.innerHTML = "";
    }
    if (idpass2 == "") {
        errornewpass2.innerHTML = "Bạn vui lòng nhập lại mật khẩu mới";
        document.getElementById("idpass2").focus();
        return false;
    }
    if (idpass1 != idpass2) {
        errornewpass2.innerHTML = "Mật khẩu không khớp";
        document.getElementById("idpass2").focus();
        return false;
    } else {
        return true;
    }
}