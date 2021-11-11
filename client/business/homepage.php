<?php 
   include "head.php";
?>
<body class="bg-body">

<link rel="preload" as="script" href="../../bizweb.dktcdn.net/assets/themes_support/api.jquery.js" />
<script src="../../bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>

<section class="bread-crumb margin-bottom-10">
    <div class="container">
        <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../index.html" title="Trang chủ">
                    <span itemprop="name">Trang chủ</span>
                    <meta itemprop="position" content="1" />
                </a>
                <span><i class="fa fa-angle-right"></i></span>
            </li>


            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <strong itemprop="name">Tất cả sản phẩm</strong>
                <meta itemprop="position" content="2" />
            </li>


        </ul>
    </div>
</section>
<div class="container margin-top-20">
    <div class="row">
        <section class="main_container collection col-md-9 col-md-push-3">
            <h1 class="col-title">Tất cả sản phẩm</h1>

            

            <div class="category-products products category-products-grids">

                <div class="sort-cate clearfix margin-bottom-10 hidden-xs">
                    <div class="sort-cate-left hidden-xs">
                        <h3>Xếp theo:</h3>
                        <ul>
                            <li class="btn-quick-sort alpha-asc">
                                <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên
                                    A-Z</a>
                            </li>
                            <li class="btn-quick-sort alpha-desc">
                                <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên
                                    Z-A</a>
                            </li>
                            <li class="btn-quick-sort position-desc">
                                <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng
                                    mới</a>
                            </li>
                            <li class="btn-quick-sort price-asc">
                                <a href="javascript:;" onclick="sortby('price-asc')"
                                    title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                            </li>
                            <li class="btn-quick-sort price-desc">
                                <a href="javascript:;" onclick="sortby('price-desc')"
                                    title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <section class="products-view products-view-grid row">











                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load" href="../san-pham-het-hang.html"
                                    title="S&#7843;n ph&#7849;m h&#7871;t hàng">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif"
                                        alt="S&#7843;n ph&#7849;m h&#7871;t hàng" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif"
                                        alt="S&#7843;n ph&#7849;m h&#7871;t hàng" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14686737">

                                        <button title="Chi tiết" type="button"
                                            onclick="location.href='../san-pham-het-hang.html'"
                                            class="btn btn-button cart-button"><i
                                                class="fa fa-mail-forward"></i></button>

                                    </form>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a href="../san-pham-het-hang.html"
                                        title="sản phẩm còn hàng">S&#7843;n ph&#7849;m h&#7871;t
                                        hàng</a></h3>
                                <div class="product-price">

                                    <span class="new-price">20000000</span>

                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load" href="../san-pham-ko-co-anh.html"
                                    title="S&#7843;n ph&#7849;m ko có &#7843;nh">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif"
                                        alt="S&#7843;n ph&#7849;m ko có &#7843;nh" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif"
                                        alt="S&#7843;n ph&#7849;m ko có &#7843;nh" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14686625">


                                        <button title="Xem tùy chọn" type="button"
                                            onclick="location.href='../san-pham-ko-co-anh.html'"
                                            class="btn btn-button cart-button"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 22% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a href="../san-pham-ko-co-anh.html"
                                        title="S&#7843;n ph&#7849;m ko có &#7843;nh">S&#7843;n ph&#7849;m ko có
                                        &#7843;nh</a></h3>
                                <div class="product-price">


                                    <span class="new-price">700.000₫</span>

                                    <span class="old-price">900.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../nuoc-can-bang-giup-lam-diu-lan-da-nhay-cam-laneige-fresh-calming-balancing-toner-250ml-new.html"
                                    title="Nư&#7899;c cân b&#7857;ng giúp làm d&#7883;u làn da nh&#7841;y c&#7843;m Laneige Fresh Calming Balancing Toner 250ml - NEW">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1960770-l.jpg?v=1559201048937"
                                        alt="Nư&#7899;c cân b&#7857;ng giúp làm d&#7883;u làn da nh&#7841;y c&#7843;m Laneige Fresh Calming Balancing Toner 250ml - NEW" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1960770-l.jpg?v=1559201048937"
                                        alt="Nư&#7899;c cân b&#7857;ng giúp làm d&#7883;u làn da nh&#7841;y c&#7843;m Laneige Fresh Calming Balancing Toner 250ml - NEW" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668686">


                                        <input type="hidden" name="variantId" value="25034695" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../nuoc-can-bang-giup-lam-diu-lan-da-nhay-cam-laneige-fresh-calming-balancing-toner-250ml-new.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 20% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../nuoc-can-bang-giup-lam-diu-lan-da-nhay-cam-laneige-fresh-calming-balancing-toner-250ml-new.html"
                                        title="Nư&#7899;c cân b&#7857;ng giúp làm d&#7883;u làn da nh&#7841;y c&#7843;m Laneige Fresh Calming Balancing Toner 250ml - NEW">Nư&#7899;c
                                        cân b&#7857;ng giúp làm d&#7883;u làn da nh&#7841;y c&#7843;m Laneige Fresh
                                        Calming Balancing Toner 250ml - NEW</a></h3>
                                <div class="product-price">


                                    <span class="new-price">480.000₫</span>

                                    <span class="old-price">600.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../bo-qua-tang-dac-biet-laneige-lan-da-am-muot-cang-min-khoe-manh.html"
                                    title="B&#7897; quà t&#7863;ng đ&#7863;c bi&#7879;t Laneige Làn da &#7849;m mư&#7907;t - căng m&#7883;n- kh&#7887;e m&#7841;nh">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1990877-l.jpg?v=1559200930217"
                                        alt="B&#7897; quà t&#7863;ng đ&#7863;c bi&#7879;t Laneige Làn da &#7849;m mư&#7907;t - căng m&#7883;n- kh&#7887;e m&#7841;nh" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1990877-l.jpg?v=1559200930217"
                                        alt="B&#7897; quà t&#7863;ng đ&#7863;c bi&#7879;t Laneige Làn da &#7849;m mư&#7907;t - căng m&#7883;n- kh&#7887;e m&#7841;nh" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668676">


                                        <input type="hidden" name="variantId" value="25034682" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../bo-qua-tang-dac-biet-laneige-lan-da-am-muot-cang-min-khoe-manh.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 42% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../bo-qua-tang-dac-biet-laneige-lan-da-am-muot-cang-min-khoe-manh.html"
                                        title="B&#7897; quà t&#7863;ng đ&#7863;c bi&#7879;t Laneige Làn da &#7849;m mư&#7907;t - căng m&#7883;n- kh&#7887;e m&#7841;nh">B&#7897;
                                        quà t&#7863;ng đ&#7863;c bi&#7879;t Laneige Làn da &#7849;m mư&#7907;t -
                                        căng m&#7883;n- kh&#7887;e m&#7841;nh</a></h3>
                                <div class="product-price">


                                    <span class="new-price">1.399.000₫</span>

                                    <span class="old-price">2.400.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load" href="../tay-te-bao-chet-tu-hat-mo-50ml-1960275.html"
                                    title="T&#7849;y t&#7871; bào ch&#7871;t t&#7915; h&#7841;t mơ 50ml - 1960275">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1960275-l.png?v=1559200798023"
                                        alt="T&#7849;y t&#7871; bào ch&#7871;t t&#7915; h&#7841;t mơ 50ml - 1960275" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1960275-l.png?v=1559200798023"
                                        alt="T&#7849;y t&#7871; bào ch&#7871;t t&#7915; h&#7841;t mơ 50ml - 1960275" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668655">


                                        <input type="hidden" name="variantId" value="25034649" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../tay-te-bao-chet-tu-hat-mo-50ml-1960275.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 30% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a href="../tay-te-bao-chet-tu-hat-mo-50ml-1960275.html"
                                        title="T&#7849;y t&#7871; bào ch&#7871;t t&#7915; h&#7841;t mơ 50ml - 1960275">T&#7849;y
                                        t&#7871; bào ch&#7871;t t&#7915; h&#7841;t mơ 50ml - 1960275</a></h3>
                                <div class="product-price">


                                    <span class="new-price">209.000₫</span>

                                    <span class="old-price">299.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../kem-duong-am-yves-rocher-48h-non-stop-moisturizing-gel-cream-50ml.html"
                                    title="Kem dư&#7905;ng &#7849;m Yves Rocher 48H Non stop Moisturizing Gel Cream 50ml">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1954952-l.jpg?v=1559200590063"
                                        alt="Kem dư&#7905;ng &#7849;m Yves Rocher 48H Non stop Moisturizing Gel Cream 50ml" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1954952-l.jpg?v=1559200590063"
                                        alt="Kem dư&#7905;ng &#7849;m Yves Rocher 48H Non stop Moisturizing Gel Cream 50ml" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668633">


                                        <input type="hidden" name="variantId" value="25034616" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../kem-duong-am-yves-rocher-48h-non-stop-moisturizing-gel-cream-50ml.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 30% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../kem-duong-am-yves-rocher-48h-non-stop-moisturizing-gel-cream-50ml.html"
                                        title="Kem dư&#7905;ng &#7849;m Yves Rocher 48H Non stop Moisturizing Gel Cream 50ml">Kem
                                        dư&#7905;ng &#7849;m Yves Rocher 48H Non stop Moisturizing Gel Cream
                                        50ml</a></h3>
                                <div class="product-price">


                                    <span class="new-price">454.000₫</span>

                                    <span class="old-price">650.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../set-4-bo-san-pham-danh-cho-da-mun-chiet-xuat-tu-tea-tree-oil.html"
                                    title="[Set 4] B&#7897; s&#7843;n ph&#7849;m dành cho da m&#7909;n chi&#7871;t xu&#7845;t t&#7915; Tea Tree Oil">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/992434-l.jpg?v=1559200494643"
                                        alt="[Set 4] B&#7897; s&#7843;n ph&#7849;m dành cho da m&#7909;n chi&#7871;t xu&#7845;t t&#7915; Tea Tree Oil" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/992434-l.jpg?v=1559200494643"
                                        alt="[Set 4] B&#7897; s&#7843;n ph&#7849;m dành cho da m&#7909;n chi&#7871;t xu&#7845;t t&#7915; Tea Tree Oil" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668626">


                                        <input type="hidden" name="variantId" value="25034601" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../set-4-bo-san-pham-danh-cho-da-mun-chiet-xuat-tu-tea-tree-oil.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 6% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../set-4-bo-san-pham-danh-cho-da-mun-chiet-xuat-tu-tea-tree-oil.html"
                                        title="[Set 4] B&#7897; s&#7843;n ph&#7849;m dành cho da m&#7909;n chi&#7871;t xu&#7845;t t&#7915; Tea Tree Oil">[Set
                                        4] B&#7897; s&#7843;n ph&#7849;m dành cho da m&#7909;n chi&#7871;t
                                        xu&#7845;t t&#7915; Tea Tree Oil</a></h3>
                                <div class="product-price">


                                    <span class="new-price">136.000₫</span>

                                    <span class="old-price">145.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../bo-10-goi-mat-na-duong-da-am-muot-chiet-xuat-lo-hoi-3w-clinic-fresh-aloe-mask-sheet-23ml.html"
                                    title="B&#7897; 10 gói m&#7863;t n&#7841; dư&#7905;ng da &#7849;m mư&#7907;t chi&#7871;t xu&#7845;t lô h&#7897;i 3W Clinic Fresh Aloe Mask Sheet 23ml">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1914903-l.jpg?v=1559200406453"
                                        alt="B&#7897; 10 gói m&#7863;t n&#7841; dư&#7905;ng da &#7849;m mư&#7907;t chi&#7871;t xu&#7845;t lô h&#7897;i 3W Clinic Fresh Aloe Mask Sheet 23ml" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1914903-l.jpg?v=1559200406453"
                                        alt="B&#7897; 10 gói m&#7863;t n&#7841; dư&#7905;ng da &#7849;m mư&#7907;t chi&#7871;t xu&#7845;t lô h&#7897;i 3W Clinic Fresh Aloe Mask Sheet 23ml" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668616">


                                        <input type="hidden" name="variantId" value="25034578" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../bo-10-goi-mat-na-duong-da-am-muot-chiet-xuat-lo-hoi-3w-clinic-fresh-aloe-mask-sheet-23ml.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 61% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../bo-10-goi-mat-na-duong-da-am-muot-chiet-xuat-lo-hoi-3w-clinic-fresh-aloe-mask-sheet-23ml.html"
                                        title="B&#7897; 10 gói m&#7863;t n&#7841; dư&#7905;ng da &#7849;m mư&#7907;t chi&#7871;t xu&#7845;t lô h&#7897;i 3W Clinic Fresh Aloe Mask Sheet 23ml">B&#7897;
                                        10 gói m&#7863;t n&#7841; dư&#7905;ng da &#7849;m mư&#7907;t chi&#7871;t
                                        xu&#7845;t lô h&#7897;i 3W Clinic Fresh Aloe Mask Sheet 23ml</a></h3>
                                <div class="product-price">


                                    <span class="new-price">59.000₫</span>

                                    <span class="old-price">150.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load" href="../combo-trang-diem-duong-da-trang-hong-rang-ro.html"
                                    title="Combo trang đi&#7875;m dư&#7905;ng da tr&#7855;ng h&#7891;ng r&#7841;ng r&#7905;">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/2005421-l.jpg?v=1559200232883"
                                        alt="Combo trang đi&#7875;m dư&#7905;ng da tr&#7855;ng h&#7891;ng r&#7841;ng r&#7905;" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/2005421-l.jpg?v=1559200232883"
                                        alt="Combo trang đi&#7875;m dư&#7905;ng da tr&#7855;ng h&#7891;ng r&#7841;ng r&#7905;" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668595">


                                        <input type="hidden" name="variantId" value="25034538" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../combo-trang-diem-duong-da-trang-hong-rang-ro.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 47% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../combo-trang-diem-duong-da-trang-hong-rang-ro.html"
                                        title="Combo trang đi&#7875;m dư&#7905;ng da tr&#7855;ng h&#7891;ng r&#7841;ng r&#7905;">Combo
                                        trang đi&#7875;m dư&#7905;ng da tr&#7855;ng h&#7891;ng r&#7841;ng
                                        r&#7905;</a></h3>
                                <div class="product-price">


                                    <span class="new-price">585.000₫</span>

                                    <span class="old-price">1.100.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../tinh-chat-duong-va-ngan-ngua-lao-hoa-vung-da-quanh-mat-laneige-time-freeze-eye-serum-ex-20ml.html"
                                    title="Tinh ch&#7845;t dư&#7905;ng và ngăn ng&#7915;a lão hóa vùng da quanh m&#7855;t Laneige Time Freeze Eye Serum EX 20ml">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1989741-l.jpg?v=1559200143640"
                                        alt="Tinh ch&#7845;t dư&#7905;ng và ngăn ng&#7915;a lão hóa vùng da quanh m&#7855;t Laneige Time Freeze Eye Serum EX 20ml" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1989741-l.jpg?v=1559200143640"
                                        alt="Tinh ch&#7845;t dư&#7905;ng và ngăn ng&#7915;a lão hóa vùng da quanh m&#7855;t Laneige Time Freeze Eye Serum EX 20ml" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668585">


                                        <input type="hidden" name="variantId" value="25034509" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../tinh-chat-duong-va-ngan-ngua-lao-hoa-vung-da-quanh-mat-laneige-time-freeze-eye-serum-ex-20ml.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 31% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../tinh-chat-duong-va-ngan-ngua-lao-hoa-vung-da-quanh-mat-laneige-time-freeze-eye-serum-ex-20ml.html"
                                        title="Tinh ch&#7845;t dư&#7905;ng và ngăn ng&#7915;a lão hóa vùng da quanh m&#7855;t Laneige Time Freeze Eye Serum EX 20ml">Tinh
                                        ch&#7845;t dư&#7905;ng và ngăn ng&#7915;a lão hóa vùng da quanh m&#7855;t
                                        Laneige Time Freeze Eye Serum EX 20ml</a></h3>
                                <div class="product-price">


                                    <span class="new-price">960.000₫</span>

                                    <span class="old-price">1.400.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load" href="../bo-san-pham-du-lich-mua-he-laneige-summer-season.html"
                                    title="B&#7897; s&#7843;n ph&#7849;m du l&#7883;ch mùa hè Laneige summer season">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/2003117-l.jpg?v=1559200018347"
                                        alt="B&#7897; s&#7843;n ph&#7849;m du l&#7883;ch mùa hè Laneige summer season" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/2003117-l.jpg?v=1559200018347"
                                        alt="B&#7897; s&#7843;n ph&#7849;m du l&#7883;ch mùa hè Laneige summer season" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668551">


                                        <input type="hidden" name="variantId" value="25034471" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../bo-san-pham-du-lich-mua-he-laneige-summer-season.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 50% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../bo-san-pham-du-lich-mua-he-laneige-summer-season.html"
                                        title="B&#7897; s&#7843;n ph&#7849;m du l&#7883;ch mùa hè Laneige summer season">B&#7897;
                                        s&#7843;n ph&#7849;m du l&#7883;ch mùa hè Laneige summer season</a></h3>
                                <div class="product-price">


                                    <span class="new-price">399.000₫</span>

                                    <span class="old-price">798.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>













                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                        <div class="product-card">
                            <div class="product-img">
                                <a class="evo-load"
                                    href="../bo-kem-duong-san-chac-da-va-ngan-ngua-lao-hoa-laneige-perfect-renew-cream-50ml.html"
                                    title="B&#7897; kem dư&#7905;ng săn ch&#7855;c da và ngăn ng&#7915;a lão hóa Laneige Perfect Renew cream 50ml">
                                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1162415-l.jpg?v=1559199899597"
                                        alt="B&#7897; kem dư&#7905;ng săn ch&#7855;c da và ngăn ng&#7915;a lão hóa Laneige Perfect Renew cream 50ml" />

                                    <img class="lazy hover-pic"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/large/100/356/191/products/1162415-l.jpg?v=1559199899597"
                                        alt="B&#7897; kem dư&#7905;ng săn ch&#7855;c da và ngăn ng&#7915;a lão hóa Laneige Perfect Renew cream 50ml" />

                                </a>
                                <div class="hover-box">
                                    <form action="https://evo-my-pham.mysapo.net/cart/add" method="post"
                                        enctype="multipart/form-data"
                                        class="hidden-md variants form-nut-grid form-ajaxtocart"
                                        data-id="product-actions-14668533">


                                        <input type="hidden" name="variantId" value="25034434" />
                                        <button title="Mua ngay" type="button"
                                            class="add_to_cart btn btn-button cart-button"><i
                                                class="fa fa-shopping-cart"></i></button>
                                        <button type="button" title="Chi tiết"
                                            onclick="location.href='../bo-kem-duong-san-chac-da-va-ngan-ngua-lao-hoa-laneige-perfect-renew-cream-50ml.html'"
                                            class="btn btn-button button-wishlist lagoon-blue-bg"><i
                                                class="fa fa-mail-forward"></i></button>


                                    </form>
                                </div>


                                <div class="lable-sale">- 22% </div>


                            </div>
                            <div class="product-content">
                                <h3 class="product-name"><a
                                        href="../bo-kem-duong-san-chac-da-va-ngan-ngua-lao-hoa-laneige-perfect-renew-cream-50ml.html"
                                        title="B&#7897; kem dư&#7905;ng săn ch&#7855;c da và ngăn ng&#7915;a lão hóa Laneige Perfect Renew cream 50ml">B&#7897;
                                        kem dư&#7905;ng săn ch&#7855;c da và ngăn ng&#7915;a lão hóa Laneige Perfect
                                        Renew cream 50ml</a></h3>
                                <div class="product-price">


                                    <span class="new-price">1.280.000₫</span>

                                    <span class="old-price">1.650.000₫</span>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="text-xs-right">

                        <nav class="text-center">
                            <ul class="pagination clearfix">

                                <li class="page-item disabled"><a class="page-link" href="#" title="«">«</a></li>





                                <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                        title="1">1</a></li>




                                <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;"
                                        title="2">2</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;"
                                        title="3">3</a></li>




                                <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;"
                                        title="»">»</a></li>

                            </ul>
                        </nav>

                    </div>

                </section>


            </div>
        </section>
        <aside class="evo-sidebar sidebar left-content col-md-3 col-md-pull-9">
            <aside class="aside-item collection-category">
                <div class="aside-title">
                    <h3 class="title-head margin-top-0">Danh mục</h3>
                </div>
                <div class="aside-content">
                    <ul class="nav navbar-pills nav-category">


                        <li class="nav-item ">
                            <a class="nav-link" href="../index.html" title="Trang chủ">Trang chủ</a>
                        </li>



                        <li class="nav-item active">
                            <a href="all.html" class="nav-link" title="Sản phẩm">Sản phẩm</a>
                            <span class="Collapsible__Plus"></span>
                            <ul class="dropdown-menu">


                                <li class="dropdown-submenu nav-item ">
                                    <a class="nav-link" href="../suc-khoe-lam-dep.html" title="Sức Khỏe Làm Đẹp">Sức
                                        Khỏe Làm Đẹp</a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../trang-diem.html" title="Trang Điểm">Trang
                                                Điểm</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../trang-diem-mat.html"
                                                        title="Trang điểm mặt">Trang điểm mặt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../trang-diem-moi.html"
                                                        title="Trang điểm môi">Trang điểm môi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-trang.html"
                                                        title="Tẩy trang">Tẩy trang</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../trang-diem-vung-mat.html"
                                                        title="Trang Điểm Vùng Mắt">Trang Điểm Vùng Mắt</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="../cham-soc-co-the.html"
                                                title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../cham-soc-da-mat.html"
                                                title="Chăm sóc da mặt">Chăm sóc da mặt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../kem-duong-da.html"
                                                        title="Kem dưỡng da">Kem dưỡng da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../sua-rua-mat.html"
                                                        title="Sữa rửa mặt">Sữa rửa mặt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-te-bao-chet-mat.html"
                                                        title="Tẩy tế bào chết mặt">Tẩy tế bào chết mặt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../xit-khoang-nuoc-hoa-hong.html"
                                                        title="Xịt khoáng - Nước hoa hồng">Xịt khoáng - Nước hoa
                                                        hồng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../serum-tinh-chat-duong-da.html"
                                                        title="Serum - Tinh chất dưỡng da">Serum - Tinh chất dưỡng
                                                        da</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../cham-soc-vung-da-mat.html"
                                                title="Chăm sóc vùng da mắt">Chăm sóc vùng da mắt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../chong-lao-hoa-vung-mat.html"
                                                        title="Chống lão hóa vùng mắt">Chống lão hóa vùng mắt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../dieu-tri-quang-tham-bong-mat.html"
                                                        title="Điều trị quầng thâm - Bọng mắt">Điều trị quầng thâm -
                                                        Bọng mắt</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../cham-soc-toc.html"
                                                title="Chăm sóc tóc">Chăm sóc tóc</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../dau-goi.html" title="Dầu Gội">Dầu
                                                        Gội</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../duong-toc.html"
                                                        title="Dưỡng Tóc">Dưỡng Tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../thuoc-nhuom-uon-duoi.html"
                                                        title="Thuốc Nhuộm - Uốn - Duỗi">Thuốc Nhuộm - Uốn -
                                                        Duỗi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../dau-xa.html" title="Dầu Xả">Dầu
                                                        Xả</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../nuoc-hoa.html" title="Nước hoa">Nước
                                                hoa</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-nam.html"
                                                        title="Nước hoa Nam">Nước hoa Nam</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-nu.html"
                                                        title="Nước hoa Nữ">Nước hoa Nữ</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-bo.html"
                                                        title="Nước hoa bộ">Nước hoa bộ</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-toan-than.html"
                                                        title="Nước hoa toàn thân">Nước hoa toàn thân</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="dropdown-submenu nav-item ">
                                    <a class="nav-link" href="../trang-diem.html" title="Trang Điểm">Trang Điểm</a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../trang-diem-mat.html"
                                                title="Trang điểm mặt">Trang điểm mặt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../phan-nen.html"
                                                        title="Phấn Nền">Phấn Nền</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../phan-phu.html"
                                                        title="Phấn Phủ">Phấn Phủ</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../phan-ma-hong.html"
                                                        title="Phấn Má Hồng">Phấn Má Hồng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../kem-nen-bb-cream-cc-cream.html"
                                                        title="Kem Nền (BB Cream - CC Cream)">Kem Nền (BB Cream - CC
                                                        Cream)</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../kem-lot.html" title="Kem lót">Kem
                                                        lót</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../che-khuyet-diem.html"
                                                        title="Che Khuyết Điểm">Che Khuyết Điểm</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../trang-diem-moi.html"
                                                title="Trang điểm môi">Trang điểm môi</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../son-li.html" title="Son Lì">Son
                                                        Lì</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../son-bong.html" title="Son Bóng">Son
                                                        Bóng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../son-duong.html"
                                                        title="Son Dưỡng">Son Dưỡng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../son-moi.html" title="Son Môi">Son
                                                        Môi</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../tay-trang.html" title="Tẩy trang">Tẩy
                                                trang</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-trang-mat.html"
                                                        title="Tẩy Trang Mặt">Tẩy Trang Mặt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-trang-mat-moi.html"
                                                        title="Tẩy Trang Mắt, Môi">Tẩy Trang Mắt, Môi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../khan-bong-tay-trang.html"
                                                        title="Khăn, Bông Tẩy Trang">Khăn, Bông Tẩy Trang</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../trang-diem-vung-mat.html"
                                                title="Trang Điểm Vùng Mắt">Trang Điểm Vùng Mắt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../phan-mat.html"
                                                        title="Phấn Mắt">Phấn Mắt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../ke-mat.html" title="Kẻ Mắt">Kẻ
                                                        Mắt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../ke-chan-may.html"
                                                        title="Kẻ Chân Mày">Kẻ Chân Mày</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../mascara.html"
                                                        title="Mascara">Mascara</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="dropdown-submenu nav-item ">
                                    <a class="nav-link" href="../cham-soc-da-mat.html" title="Chăm sóc da mặt">Chăm
                                        sóc da mặt</a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../kem-duong-da.html" title="Kem dưỡng da">Kem
                                                dưỡng da</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../kem-duong-cho-moi-loai-da.html"
                                                        title="Kem Dưỡng Cho Mọi Loai Da">Kem Dưỡng Cho Mọi Loai
                                                        Da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../duong-sang-da-mat.html"
                                                        title="Dưỡng Sáng Da Mặt">Dưỡng Sáng Da Mặt</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../sua-rua-mat.html" title="Sữa rửa mặt">Sữa
                                                rửa mặt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../rua-mat-cho-moi-loai-da.html"
                                                        title="Rửa Mặt Cho Mọi Loại Da">Rửa Mặt Cho Mọi Loại Da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../rua-mat-cho-da-mun.html"
                                                        title="Rửa Mặt Cho Da Mụn">Rửa Mặt Cho Da Mụn</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../tay-te-bao-chet-mat.html"
                                                title="Tẩy tế bào chết mặt">Tẩy tế bào chết mặt</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link"
                                                        href="../tay-te-bao-chet-cho-moi-loai-da.html"
                                                        title="Tẩy Tế Bào Chết Cho Mọi Loại Da">Tẩy Tế Bào Chết Cho
                                                        Mọi Loại Da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-te-bao-chet-cho-da-thuong.html"
                                                        title="Tẩy Tế Bào Chết Cho Da Thường">Tẩy Tế Bào Chết Cho Da
                                                        Thường</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../tay-te-bao-chet-cho-da-mun.html"
                                                        title="Tẩy Tế Bào Chết Cho Da Mụn">Tẩy Tế Bào Chết Cho Da
                                                        Mụn</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../xit-khoang-nuoc-hoa-hong.html"
                                                title="Xịt khoáng - Nước hoa hồng">Xịt khoáng - Nước hoa hồng</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../xit-khoang.html"
                                                        title="Xịt Khoáng">Xịt Khoáng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-hong-cho-moi-loai-da.html"
                                                        title="Nước Hoa Hồng Cho Mọi Loại Da">Nước Hoa Hồng Cho Mọi
                                                        Loại Da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../nuoc-hoa-hong-lam-sang-da.html"
                                                        title="Nước Hoa Hồng Làm Sáng Da">Nước Hoa Hồng Làm Sáng
                                                        Da</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../serum-tinh-chat-duong-da.html"
                                                title="Serum - Tinh chất dưỡng da">Serum - Tinh chất dưỡng da</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../chong-lao-hoa-da.html"
                                                        title="Chống Lão Hóa Da">Chống Lão Hóa Da</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../lam-trang-da.html"
                                                        title="Làm Trắng Da">Làm Trắng Da</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="dropdown-submenu nav-item ">
                                    <a class="nav-link" href="../cham-soc-toc.html" title="Chăm sóc tóc">Chăm sóc
                                        tóc</a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../dau-goi.html" title="Dầu Gội">Dầu Gội</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../ngan-rung-toc.html"
                                                        title="Ngăn Rụng tóc">Ngăn Rụng tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../toc-gau.html" title="Tóc Gàu">Tóc
                                                        Gàu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../duong-toc-bong-dep.html"
                                                        title="Dưỡng Tóc Bóng Đẹp">Dưỡng Tóc Bóng Đẹp</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../toc-nhon.html" title="Tóc Nhờn">Tóc
                                                        Nhờn</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../toc-kho.html" title="Tóc Khô">Tóc
                                                        Khô</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../danh-cho-toc-nhuom.html"
                                                        title="Dành Cho Tóc Nhuộm">Dành Cho Tóc Nhuộm</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item ">
                                            <a class="nav-link" href="../duong-toc.html" title="Dưỡng Tóc">Dưỡng
                                                Tóc</a>
                                            <span class="Collapsible__Plus"></span>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../mat-na-kem-u-toc.html"
                                                        title="Mặt Nạ - Kem Ủ Tóc">Mặt Nạ - Kem Ủ Tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../dau-duong-toc.html"
                                                        title="Dầu Dưỡng Tóc">Dầu Dưỡng Tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item ">
                                                    <a class="nav-link" href="../xit-duong-toc.html"
                                                        title="Xịt Dưỡng Tóc">Xịt Dưỡng Tóc</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="../thuoc-nhuom-uon-duoi.html"
                                                title="Thuốc Nhuộm - Uốn - Duỗi">Thuốc Nhuộm - Uốn - Duỗi</a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="../dau-xa.html" title="Dầu Xả">Dầu Xả</a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="../cham-soc-co-the.html" title="Chăm sóc cơ thể">Chăm
                                        sóc cơ thể</a>
                                </li>



                            </ul>
                        </li>



                        <li class="nav-item ">
                            <a href="../gioi-thieu.html" class="nav-link" title="Giới thiệu">Giới thiệu</a>
                            <span class="Collapsible__Plus"></span>
                            <ul class="dropdown-menu">


                                <li class="nav-item ">
                                    <a class="nav-link" href="../he-thong-cua-hang.html"
                                        title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="../cau-hoi-thuong-gap.html"
                                        title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                                </li>



                            </ul>
                        </li>



                        <li class="nav-item ">
                            <a class="nav-link" href="../san-pham-moi.html" title="Sản phẩm mới">Sản phẩm mới</a>
                        </li>



                        <li class="nav-item ">
                            <a class="nav-link" href="../san-pham-khuyen-mai.html" title="Khuyến mãi">Khuyến mãi</a>
                        </li>



                        <li class="nav-item ">
                            <a class="nav-link" href="../blogs/all.html" title="Tin tức">Tin tức</a>
                        </li>



                        <li class="nav-item ">
                            <a class="nav-link" href="../lien-he.html" title="Liên hệ">Liên hệ</a>
                        </li>


                    </ul>
                </div>
            </aside>
            <script
                src="../../bizweb.dktcdn.net/100/356/191/themes/721185/assets/search_filter6aa2.js?1629466695299"
                type="text/javascript"></script>

            <div class="aside-filter clearfix">
                <div class="heading">
                    Tìm theo
                </div>
                <div class="aside-hidden-mobile">
                    <div class="filter-container">
                        <div class="filter-containers">
                            <div class="filter-container__selected-filter" style="display: none;">
                                <div class="filter-container__selected-filter-header clearfix">
                                    <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                    <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                        class="filter-container__clear-all" title="Bỏ hết">Bỏ hết <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <aside class="aside-item filter-vendor">
                            <div class="aside-title">
                                Thương hiệu
                            </div>
                            <div class="aside-content filter-group">
                                <ul class="filter-vendor">


                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="3w clinic" for="filter-3w-clinic" class="3w-clinic">
                                            <input type="checkbox" id="filter-3w-clinic"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="3W Clinic"
                                                value="(&#34;3W Clinic&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            3W Clinic

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="cushion" for="filter-cushion" class="cushion">
                                            <input type="checkbox" id="filter-cushion" onchange="toggleFilter(this)"
                                                data-group="Hãng" data-field="vendor.filter_key" data-text="Cushion"
                                                value="(&#34;Cushion&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Cushion

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="forencos" for="filter-forencos" class="forencos">
                                            <input type="checkbox" id="filter-forencos"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="Forencos"
                                                value="(&#34;Forencos&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Forencos

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="halio" for="filter-halio" class="halio">
                                            <input type="checkbox" id="filter-halio" onchange="toggleFilter(this)"
                                                data-group="Hãng" data-field="vendor.filter_key" data-text="Halio"
                                                value="(&#34;Halio&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Halio

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="laneige" for="filter-laneige" class="laneige">
                                            <input type="checkbox" id="filter-laneige" onchange="toggleFilter(this)"
                                                data-group="Hãng" data-field="vendor.filter_key" data-text="Laneige"
                                                value="(&#34;Laneige&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Laneige

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="laurelle" for="filter-laurelle" class="laurelle">
                                            <input type="checkbox" id="filter-laurelle"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="Laurelle"
                                                value="(&#34;Laurelle&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Laurelle

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="mersenne beaute" for="filter-mersenne-beaute"
                                            class="mersenne-beaute">
                                            <input type="checkbox" id="filter-mersenne-beaute"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="Mersenne Beaute"
                                                value="(&#34;Mersenne Beaute&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Mersenne Beaute

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="milaganics" for="filter-milaganics" class="milaganics">
                                            <input type="checkbox" id="filter-milaganics"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="Milaganics"
                                                value="(&#34;Milaganics&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Milaganics

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="thefaceshop" for="filter-thefaceshop"
                                            class="thefaceshop">
                                            <input type="checkbox" id="filter-thefaceshop"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="TheFaceShop"
                                                value="(&#34;TheFaceShop&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            TheFaceShop

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="vedette" for="filter-vedette" class="vedette">
                                            <input type="checkbox" id="filter-vedette" onchange="toggleFilter(this)"
                                                data-group="Hãng" data-field="vendor.filter_key" data-text="Vedette"
                                                value="(&#34;Vedette&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Vedette

                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <label data-filter="yves rocher" for="filter-yves-rocher"
                                            class="yves-rocher">
                                            <input type="checkbox" id="filter-yves-rocher"
                                                onchange="toggleFilter(this)" data-group="Hãng"
                                                data-field="vendor.filter_key" data-text="Yves Rocher"
                                                value="(&#34;Yves Rocher&#34;)" data-operator="OR">
                                            <i class="fa"></i>

                                            Yves Rocher

                                        </label>
                                    </li>


                                </ul>
                            </div>
                        </aside>


                        <aside class="aside-item filter-price">
                            <div class="aside-title">
                                Giá sản phẩm
                            </div>
                            <div class="aside-content filter-group">
                                <ul>





                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-duoi-100-000d">
                                                <input type="checkbox" id="filter-duoi-100-000d"
                                                    onchange="toggleFilter(this);" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="Dưới 100.000đ"
                                                    value="(<100000)" data-operator="OR">
                                                <i class="fa"></i>
                                                Giá dưới 100.000đ
                                            </label>
                                        </span>
                                    </li>







                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-100-000d-200-000d">
                                                <input type="checkbox" id="filter-100-000d-200-000d"
                                                    onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="100.000đ - 200.000đ"
                                                    value="(>=100000 AND <=200000)" data-operator="OR">
                                                <i class="fa"></i>
                                                100.000đ - 200.000đ
                                            </label>
                                        </span>
                                    </li>






                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-200-000d-300-000d">
                                                <input type="checkbox" id="filter-200-000d-300-000d"
                                                    onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="200.000đ - 300.000đ"
                                                    value="(>=200000 AND <=300000)" data-operator="OR">
                                                <i class="fa"></i>
                                                200.000đ - 300.000đ
                                            </label>
                                        </span>
                                    </li>






                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-300-000d-500-000d">
                                                <input type="checkbox" id="filter-300-000d-500-000d"
                                                    onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="300.000đ - 500.000đ"
                                                    value="(>=300000 AND <=500000)" data-operator="OR">
                                                <i class="fa"></i>
                                                300.000đ - 500.000đ
                                            </label>
                                        </span>
                                    </li>






                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-500-000d-1-000-000d">
                                                <input type="checkbox" id="filter-500-000d-1-000-000d"
                                                    onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="500.000đ - 1.000.000đ"
                                                    value="(>=500000 AND <=1000000)" data-operator="OR">
                                                <i class="fa"></i>
                                                500.000đ - 1.000.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label for="filter-tren1-000-000d">
                                                <input type="checkbox" id="filter-tren1-000-000d"
                                                    onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                    data-field="price_min" data-text="Trên 1.000.000đ"
                                                    value="(>1000000)" data-operator="OR">
                                                <i class="fa"></i>
                                                Giá trên 1.000.000đ
                                            </label>
                                        </span>
                                    </li>



                                </ul>
                            </div>
                        </aside>


                        <aside class="aside-item filter-type">
                            <div class="aside-title">
                                Loại
                            </div>
                            <div class="aside-content filter-group">
                                <ul class="filter-type">


                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="bộ quà tặng" for="filter-bo-qua-tang">
                                            <input type="checkbox" id="filter-bo-qua-tang"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Bộ quà tặng"
                                                value="(&#34;Bộ quà tặng&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Bộ quà tặng
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="cetaphil" for="filter-cetaphil">
                                            <input type="checkbox" id="filter-cetaphil"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Cetaphil"
                                                value="(&#34;Cetaphil&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Cetaphil
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="dầu gội" for="filter-dau-goi">
                                            <input type="checkbox" id="filter-dau-goi" onchange="toggleFilter(this)"
                                                data-group="Loại" data-field="product_type.filter_key"
                                                data-text="Dầu gội" value="(&#34;Dầu gội&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Dầu gội
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="dưỡng ẩm" for="filter-duong-am">
                                            <input type="checkbox" id="filter-duong-am"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Dưỡng ẩm"
                                                value="(&#34;Dưỡng ẩm&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Dưỡng ẩm
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="gel tắm" for="filter-gel-tam">
                                            <input type="checkbox" id="filter-gel-tam" onchange="toggleFilter(this)"
                                                data-group="Loại" data-field="product_type.filter_key"
                                                data-text="Gel tắm" value="(&#34;Gel tắm&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Gel tắm
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="kem dưỡng" for="filter-kem-duong">
                                            <input type="checkbox" id="filter-kem-duong"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Kem dưỡng"
                                                value="(&#34;Kem dưỡng&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Kem dưỡng
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="kem dưỡng ẩm" for="filter-kem-duong-am">
                                            <input type="checkbox" id="filter-kem-duong-am"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Kem dưỡng ẩm"
                                                value="(&#34;Kem dưỡng ẩm&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Kem dưỡng ẩm
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="mặt nạ" for="filter-mat-na">
                                            <input type="checkbox" id="filter-mat-na" onchange="toggleFilter(this)"
                                                data-group="Loại" data-field="product_type.filter_key"
                                                data-text="Mặt nạ" value="(&#34;Mặt nạ&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Mặt nạ
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="mặt nạ dưỡng da" for="filter-mat-na-duong-da">
                                            <input type="checkbox" id="filter-mat-na-duong-da"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Mặt nạ dưỡng da"
                                                value="(&#34;Mặt nạ dưỡng da&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Mặt nạ dưỡng da
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="mặt nạ ngủ" for="filter-mat-na-ngu">
                                            <input type="checkbox" id="filter-mat-na-ngu"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Mặt nạ ngủ"
                                                value="(&#34;Mặt nạ ngủ&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Mặt nạ ngủ
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="mặt nạ ủ tóc" for="filter-mat-na-u-toc">
                                            <input type="checkbox" id="filter-mat-na-u-toc"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Mặt nạ ủ tóc"
                                                value="(&#34;Mặt nạ ủ tóc&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Mặt nạ ủ tóc
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="máy rửa mặt" for="filter-may-rua-mat">
                                            <input type="checkbox" id="filter-may-rua-mat"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Máy rửa mặt"
                                                value="(&#34;Máy rửa mặt&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Máy rửa mặt
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="nature" for="filter-nature">
                                            <input type="checkbox" id="filter-nature" onchange="toggleFilter(this)"
                                                data-group="Loại" data-field="product_type.filter_key"
                                                data-text="Nature" value="(&#34;Nature&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Nature
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="nước cân bằng" for="filter-nuoc-can-bang">
                                            <input type="checkbox" id="filter-nuoc-can-bang"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Nước cân bằng"
                                                value="(&#34;Nước cân bằng&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Nước cân bằng
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="nước hoa" for="filter-nuoc-hoa">
                                            <input type="checkbox" id="filter-nuoc-hoa"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Nước hoa"
                                                value="(&#34;Nước hoa&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Nước hoa
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="tẩy tế bào chết" for="filter-tay-te-bao-chet">
                                            <input type="checkbox" id="filter-tay-te-bao-chet"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Tẩy tế bào chết"
                                                value="(&#34;Tẩy tế bào chết&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Tẩy tế bào chết
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="tinh chất dưỡng" for="filter-tinh-chat-duong">
                                            <input type="checkbox" id="filter-tinh-chat-duong"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Tinh chất dưỡng"
                                                value="(&#34;Tinh chất dưỡng&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Tinh chất dưỡng
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="trang điểm" for="filter-trang-diem">
                                            <input type="checkbox" id="filter-trang-diem"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Trang điểm"
                                                value="(&#34;Trang điểm&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Trang điểm
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="trị mụn" for="filter-tri-mun">
                                            <input type="checkbox" id="filter-tri-mun" onchange="toggleFilter(this)"
                                                data-group="Loại" data-field="product_type.filter_key"
                                                data-text="Trị mụn" value="(&#34;Trị mụn&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Trị mụn
                                        </label>
                                    </li>



                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <label data-filter="xà phòng" for="filter-xa-phong">
                                            <input type="checkbox" id="filter-xa-phong"
                                                onchange="toggleFilter(this)" data-group="Loại"
                                                data-field="product_type.filter_key" data-text="Xà phòng"
                                                value="(&#34;Xà phòng&#34;)" data-operator="OR">
                                            <i class="fa"></i>
                                            Xà phòng
                                        </label>
                                    </li>


                                </ul>
                            </div>
                        </aside>





                    </div>
                </div>
            </div>

        </aside>
        <div id="open-filters" class="open-filters hidden-lg hidden-md">
            <i class="fa fa-filter" aria-hidden="true"></i>
        </div>
    </div>
</div>


<?php 
   
   include "footer.php";
?>