function login_check() {
    var tendangnhap = document.getElementById("tendangnhap").value;
    var matkhau = document.getElementById("matkhau").value;
    var errorname = document.getElementById("errorname");
    var errormk = document.getElementById("errormk");
    if (tendangnhap == "") {
        errorname.innerHTML = "Bạn vui lòng nhập tên đăng nhập";
        errorname.style.color = "red";
        return false;
    }
    if (matkhau == "") {
        errormk.innerHTML = "Vui lòng nhập mật khẩu";
        errormk.style.color = "red";
        return false;
    }

}