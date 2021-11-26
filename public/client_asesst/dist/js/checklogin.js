function login_check() {
    var tendangnhap = document.getElementById("tendangnhap").value;
    var matkhau = document.getElementById("matkhau").value;
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    if (tendangnhap == "") {
        error1.innerHTML = "Bạn vui lòng nhập tên đăng nhập";
        error1.style.color = "red";
        return false;
    }
    if (matkhau == "") {
        error2.innerHTML = "Vui lòng nhập mật khẩu";
        error2.style.color = "red";
        return false;
    }

}