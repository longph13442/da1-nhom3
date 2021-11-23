function check_reset() {
    var mat_khau_cu = document.getElementById("mat_khau_cu").value;
    var new_mat_khau = document.getElementById("new_mat_khau").value;
    var new_mat_khau_2 = document.getElementById("new_mat_khau_2").value;
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
    if (mat_khau_cu == "") {
        error1.innerHTML = "Mật khẩu cũ không được để trống";
        return false;
    } else if (mat_khau_cu.length < 6) {
        error1.innerHTML = "Mật khẩu cũ phải có ít nhất 6 ký tự";

        return false;
    } else {
        error1.innerHTML = "";
    }
    if (new_mat_khau == "") {
        error2.innerHTML = "Mật khẩu mới không được để trống";

        return false;
    } else if (new_mat_khau.length < 6) {
        error2.innerHTML = "Mật khẩu mới phải có ít nhất 6 ký tự";

    }
    else {
        error2.innerHTML = "";
    }
    if (new_mat_khau_2 == "") {
        error3.innerHTML = "Mật khẩu xác nhận không được để trống";

        return false;
    } else if (new_mat_khau_2.length < 6) {
        error3.innerHTML = "Mật khẩu xác nhận phải có ít nhất 6 ký tự";

    }
    else {
        error3.innerHTML = "";
    }
    if (new_mat_khau != new_mat_khau_2) {
        error3.innerHTML = "Mật khẩu xác nhận không trùng khớp";
        return false;
    }
    else {
        error3.innerHTML = "";
    }
    return true;
}