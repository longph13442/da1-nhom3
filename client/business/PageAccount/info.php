<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/info.css">
<div class="info">
    <div class="categorys">
        <nav class="menu_info">
            <ul>
                <li><a name="" href="?info">
                        <ion-icon name="person-circle-outline"></ion-icon> Thông Tin Tài Khoản
                    </a></li>
                <li><a name="" href="?address">
                        <ion-icon name="location-outline"></ion-icon>Địa Chỉ
                    </a></li>
                <li><a name="" href="?cart">
                        <ion-icon name="cart-outline"></ion-icon>Đơn Hàng
                    </a></li>
                <li><a name="" href="?resestpass">
                        <ion-icon name="refresh-circle-outline"></ion-icon>Đổi Mật Khẩu
                    </a></li>
                <li><a name="" href="?logout">
                        <ion-icon name="log-out-outline"></ion-icon>Đăng Xuất
                    </a></li>
            </ul>
        </nav>
    </div>
    <div class="info-detail">
        <?php
        include_once  $VIEW;
        ?>
    </div>
</div>