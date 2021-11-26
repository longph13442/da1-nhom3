function checkregister() {
    var name = document.getElementById("name");
    var ten_dang_nhap = document.getElementById("username");
    var email = document.getElementById("email");
    var address = document.getElementById("address");
    var sdt = document.getElementById("phone");
    var password = document.getElementById("password");
    var date = document.getElementById("date");
    var password2 = document.getElementById("password2");
    var check = document.getElementById("check");
    var error1 = document.getElementById('error1');
    var error2 = document.getElementById('error2');
    var error3 = document.getElementById('error3');
    var error4 = document.getElementById('error4');
    var error5 = document.getElementById('error5');
    var error6 = document.getElementById('error6');
    var error7 = document.getElementById('error7');
    var error9 = document.getElementById('error9');
    var error_mk = document.getElementById('error_mk');
    var error_10 = document.getElementById('error_10');
    if (name.value.length == 0) {
        error1.innerHTML = "Vui lòng nhập họ tên";
        name.focus();
        return false;
    } else {
        error1.innerHTML = "";
    }
    if (address.value.length == 0) {
        error4.innerHTML = "Vui lòng nhập địa chỉ";
        address.focus();
        return false;
    }
    else {
        error4.innerHTML = "";
    }

    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    if (sdt.value.length == 0) {
        error5.innerHTML = "Vui lòng nhập số điện thoại";
        sdt.focus();
        return false;
    }
    if (vnf_regex.test(sdt.value) == false) {
        error5.innerHTML = "Số điện thoại không hợp lệ";
        sdt.focus();
        return false;
    }
    else {
        error5.innerHTML = "";
    }
    var re = new RegExp("\\w+@\\w+(\\.\\w+){1,2}", "g");
    if (email.value.length == 0) {
        error3.innerHTML = "Vui lòng nhập email";
        email.focus();
        return false;
    } else if (!re.test(email.value)) {
        error3.innerHTML = "Email không hợp lệ";
        email.focus();
        return false;
    } else {
        error3.innerHTML = "";
    }
    if (ten_dang_nhap.value.length == '') {
        error2.innerHTML = "Vui lòng nhập tên đăng nhập";
        ten_dang_nhap.focus();
        return false;
    } else {
        error2.innerHTML = "";
    }
    if (password.value.length == 0) {
        error6.innerHTML = "Vui lòng nhập mật khẩu";
        return false;

    }
    if (password.value.length < 6) {
        error6.innerHTML = "Mật khẩu phải có ít nhất 6 ký tự";
        return false;

    }
    if (password.value != password2.value) {
        error_mk.innerHTML = "Mật khẩu không trùng khớp";
        return false;
    }
    else {
        error_mk.innerHTML = "";
    }
    if (date.value.length == 0) {
        error7.innerHTML = "Vui lòng nhập ngày sinh";
        date.focus();
        return false;
    }
    else {
        error7.innerHTML = "";
    }

    if (date.value.length == '') {
        error7.innerHTML = "Vui lòng nhập ngày sinh";
        date.focus();
        return false;
    }
    else {
        error7.innerHTML = "";
    }
    if (check.checked == false) {
        error10.innerHTML = "Vui lòng đồng ý điều khoản";
        return false;
    } else {
        error10.innerHTML = "";
    }
}
