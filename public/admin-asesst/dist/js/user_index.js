function confrim_remove(url, name) {
    Swal.fire({
        title: `Bạn có muốn xóa tài khoản này  "${name}"?`,
        showDenyButton: true,
        confirmButtonText: 'Đồng ý',
        denyButtonText: `Hủy bỏ`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location.href = url;
        }
    })
}
function confrim_lock(url, name) {
    Swal.fire({
        title: `Bạn có muốn khóa tài khoản này  "${name}"?`,
        showDenyButton: true,
        confirmButtonText: 'Đồng ý',
        denyButtonText: `Hủy bỏ`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location.href = url;
        }
    })
}
function confrim_unlock(url, name) {
    Swal.fire({
        title: `Bạn có muốn mở khóa tài khoản này  "${name}"?`,
        showDenyButton: true,
        confirmButtonText: 'Đồng ý',
        denyButtonText: `Hủy bỏ`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location.href = url;
        }
    })
}