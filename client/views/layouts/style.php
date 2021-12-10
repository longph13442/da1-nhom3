<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

<link href="./css/style.css" rel="stylesheet">

<link rel="stylesheet" href="<?= ADMIN_ASSET ?>./index.css">
<!-- boostrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<!-- slider -->
<link rel="stylesheet" href="<?= CLIENT_ASSET ?>dist/css/rating.css">

<!-- font-icon -->
<!-- https://material.io/resources/icons/?style=baseline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<!-- https://material.io/resources/icons/?style=outline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

<!-- https://material.io/resources/icons/?style=round -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

<!-- https://material.io/resources/icons/?style=sharp -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="<?= CLIENT_ASSET ?>dist/css/cart_dt.css">
<!-- https://material.io/resources/icons/?style=twotone -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }

    /* list */
    /* .tophead{
        margin: 0 0 100px 0;
    } */
    header {
        /* position: fixed;
        z-index: 2; */

        top: 0;
        left: 0;
        right: 0;
        padding: 0 20px;
    }

    nav {
        width: 100%;
        font-size: 12pt;
    }

    nav ul {
        list-style: none;
        text-align: center;
    }

    nav ul li {
        display: inline-block;
    }

    nav ul li a {
        display: block;
        text-decoration: none;
        color: rgb(83, 83, 83);
    }

    nav ul li a,
    nav ul li a:after,
    nav ul li a:before {
        transition: all .5s;
    }

    nav ul li a:hover {
        color: rgb(27, 27, 27);
    }


    /* stroke */
    nav.stroke ul li a,
    nav.fill ul li a {
        position: relative;
    }

    nav.stroke ul li a:after,
    nav.fill ul li a:after {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 0%;
        content: '.';
        color: transparent;
        background: #fcc100;
        height: 2px;
    }

    nav.stroke ul li a:hover:after {
        width: 100%;
    }

    nav.fill ul li a {
        transition: all 2s;
    }

    nav.fill ul li a:after {
        text-align: left;
        content: '.';
        margin: 0;
        opacity: 0;
    }

    nav.fill ul li a:hover {
        color: rgb(255, 1, 1);
        z-index: 1;
    }

    nav.fill ul li a:hover:after {
        z-index: -10;
        animation: fill 1s forwards;
        -webkit-animation: fill 1s forwards;
        -moz-animation: fill 1s forwards;
        opacity: 1;
    }

    /* menu */
    .viewcart {
        position: absolute !important;
        display: none;
        right: 20px;
        width: 350px;
    }

    .cart li:hover ul.viewcart {
        display: block !important;
    }

    .list-group-item:hover {
        background-color: #fcc100;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .material-icons-outlined {
        color: black;
    }

    .cart {
        z-index: 2;
    }

    /* cart */
    #backtop {
        width: 50px;
        height: 50px;
        background-color: #d3a329;
        border-radius: 50%;
        align-items: center;
        text-align: center;
        position: fixed;
        bottom: 40px;
        left: 20px;
        cursor: pointer;

    }

    .row {
        --bs-gutter-x: 0;
    }
   
</style>