<style>
    .animated-content {
        text-align: center;
    }

    .product-title a:hover {
        color: #e55472;
    }

    .btn-wrapper a {
        background: #565656;
        padding: 13px 40px;
        border-radius: 30px;
        color: #fff;
    }

    a {
        color: #000;
    }

    .animated,
    .animated_01,
    .animated_02 {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s, transform 1s;
    }

    .show {
        opacity: 1;
        transform: translateY(0);

    }

    .banner {
        background-image: url(View/Img/Banner.jpg);
        width: 100%;
        height: 700px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .banner__content {
        text-align: center;
        color: #fff;
    }

    .banner__title h6 {
        font-size: 25px;
        color: #fff;

    }

    .banner__title-desc h1 {
        font-size: 72px;
        font-weight: bold;
        color: #fff;

    }

    .banner__button {
        margin-top: 30px;
        color: #fff;
    }

    .banner__button button {
        background: #e55472;
        color: #fff;
        border: none;
        padding: 13px 40px;
        border-radius: 30px;
        font-size: 16px;
    }

    #countdown ul {
        display: flex;
        list-style: none;
        gap: 30px;
        padding: 0;
    }

    #countdown li {
        text-align: center;
        background: #e55472;
        color: #fff;
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 100;
    }

    .product-badge li {
        padding: 0 15px;
    }

    #countdown span {
        font-weight: 600;
    }

    .product-hover-action li {
        height: 50px;
        width: 86px;
        line-height: 50px;
        font-size: 14px;
        text-align: center;
        float: left;
        margin-right: 0px;
        margin-top: 0;
        list-style: none;
        border-right: 1px solid var(--border-color-7);
    }

    .input_add {
        background-color: #666666;
        color: #fff;
        border: none;
        padding: 0 25px;
    }

    .input_add:hover {
        background-color: #e55472;
    }

</style>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="banner__content animated">
                <div class="banner__title">
                    <h6 class="animated">Flower & Gift</h6>
                </div>
                <div class="banner__title-desc">
                    <h1 class="animated_01">Perfect Bunch <br> For Every Occasion</h1>
                </div>
                <div class="banner__button" style="display: flex; justify-content: center;">
                    <a href="index.php?act=Product">
                        <button class="animated_02">Shop Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
<div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border" style="margin-top: 50px;">Sản Phẩm Nổi Bật</h1>
                </div>
            </div>
        </div>
    <div class="row">
        <?php foreach ($renderTopProduct as $products) {
            extract($products);
            $linkProduct = "index.php?act=ProductDetail&idpro=" . $ProductID;
            echo '
    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
        <div class="ltn__product-item text-center">
            <div class="product-img">
                <a href="' . $linkProduct . '"><img src="View/Img/' . $ProductImage . '" alt="#"></a>
                <div class="product-badge">
                    <ul>
                        <li class="badge-2">' . $ProductStatus . '</li>
                    </ul>
                </div>
                <div class="product-hover-action product-hover-action-2">
                    <ul>
                        <li>
                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                        <form action="index.php?act=addToCart" method="post">
                        <input type="hidden" name="ProductID" value="' . $ProductID . '">
                        <input type="hidden" name="ProductName" value="' . $ProductName . '">
                        <input type="hidden" name="Price" value="' . $Price . '">
                        <input type="hidden" name="ProductImage" value="' . $ProductImage . '">
                        <input type="hidden" name="quantity" value="' . $quantity . '">
                        <li class="add-to-cart">
                            <input type="submit" style=  background: #666666;
                            border: none;
                            color: #fff;" name="addToCart" class="input_add" value="Add to Cart">
                            <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                    </li>
                    <li>
                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                            <i class="fa-solid fa-shuffle"></i>
                        </a>
                    </li>
                       </form>
                     
                    </ul>
                </div>
            </div>
            <div class="product-info">
                <h2 class="product-title"><a href="' . $linkProduct . '">' . $ProductName . '</a></h2>
                <div class="product-price">
                    <span>' . number_format($Price) . 'đ</span>';

            // Kiểm tra nếu OldPrice khác 0
            if ($OldPrice != 0) {
                echo '<del>' . number_format($OldPrice) . 'đ</del>';
            }

            echo '</div>
            </div>
        </div>
    </div>';
        } ?>
    </div>
</div>

<div class="ltn__banner-area mt-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="index.php?act=Product"><img src="View/Img/Banner_Home.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="index.php?act=Product"><img src="View/Img/Banner_Home01.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="index.php?act=Product"><img src="View/Img/Banner_Home02.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__countdown-area section-bg-1 bg-image-right mt-70" data-bs-bg="View/Img/Background.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="ltn__countdown-info ltn__countdown-4-info text-center--- pt-100 pb-100">
                    <div class="section-title-area ltn__section-title-2--- mb-0---">
                        <h6 class="ltn__secondary-color">Deal of the day</h6>
                        <h1 class="section-title">Shop Your Flower <br>
                            Best Offer- $12</span></h1>
                    </div>
                    <div id="countdown">
                        <ul>
                            <li><span id="days"></span><br>Ngày</li>
                            <li><span id="hours"></span><br>Giờ</li>
                            <li><span id="minutes"></span><br>Phút</li>
                            <li><span id="seconds"></span><br>Giây</li>
                        </ul>
                    </div>
                    <div class="btn-wrapper animated">
                        <a href="index.php?act=Product" class="theme-btn-2 btn btn-round">Shop now</a>
                    </div>
                    <div class="countdown-img d-none d-xl-block">
                        <img src="View/Img/Background_Home.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__blog-area card-slider pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">Sản Phẩm Mới Nhất</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($renderTop as $products) {
                extract($products);
                $linkProduct = "index.php?act=ProductDetail&idpro=" . $ProductID;
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item text-center">
                        <div class="product-img">
                            <a href="' . $linkProduct . '"><img src="View/Img/' . $ProductImage . '" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="badge-2">' . $ProductStatus . '</li>
                                </ul>
                            </div>
                            <div class="product-hover-action product-hover-action-2">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </li>
                                    <form action="index.php?act=addToCart" method="post">
                                    <input type="hidden" name="ProductID" value="' . $ProductID . '">
                                    <input type="hidden" name="ProductName" value="' . $ProductName . '">
                                    <input type="hidden" name="Price" value="' . $Price . '">
                                    <input type="hidden" name="ProductImage" value="' . $ProductImage . '">
                                    <input type="hidden" name="quantity" value="' . $quantity . '">
                                    <li class="add-to-cart">
                                        <input type="submit" style=  background: #666666;
                                        border: none;
                                        color: #fff;" name="addToCart" class="input_add" value="Add to Cart">
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="fa-solid fa-shuffle"></i>
                                    </a>
                                </li>
                                   </form>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="' . $linkProduct . '">' . $ProductName . '</a></h2>
                            <div class="product-price">
                                <span>' . number_format($Price) . 'đ</span>';
            
                        // Kiểm tra nếu OldPrice khác 0
                        if ($OldPrice != 0) {
                            echo '<del>' . number_format($OldPrice) . 'đ</del>';
                        }
            
                        echo '</div>
                        </div>
                    </div>
                </div>';
            } ?>
        </div>
    </div>

</div>

<div class="ltn__feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="https://www.svgviewer.dev/static-svgs/397705/luggage-trolley.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            <p>On all orders over $49.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M316.209,117.615h0.598C316.808,117.615,316.342,116.445,316.209,117.615z" />
                                            <path d="M171.747,117.615h0.598C172.212,116.445,171.747,117.615,171.747,117.615z" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M460.496,154.447c-3.357-5.359-8.599-9.09-14.761-10.506l-32.457-7.458l14.986-4.195    c12.417-3.475,19.898-16.737,16.417-29.177c-3.476-12.417-16.736-19.896-29.178-16.417l-69.876,19.557    c-1.819-3.31-4.406-6.143-7.522-8.251c14.181-26.391,34.612-71.176,34.612-90.443c0-4.699-4.442-8.335-9.051-7.406    c-27.731,5.602-53.586,8.187-79.011,7.91c-26.134-0.287-58.659-3.533-79.095-7.893c-6.318-1.348-11.388,5.722-8.056,11.276    c4.98,8.3,8.031,17.076,9.708,25.921c-25.649,0.786-52.248-2.322-72.38-12.389c-5.423-2.712-11.824,2.033-10.832,8    c6.332,37.987,19.106,60.259,31.913,77.086h-0.284c-13.053,0-23.673,10.62-23.673,23.673c0,12.005,8.985,21.944,20.581,23.465    c-8.453,14.158-20.525,27.591-33.209,41.687c-26.973,29.976-57.546,63.952-67.832,118.811c-4.922,26.249-4.758,50.81,0.489,73.002    c4.898,20.718,14.227,39.471,27.726,55.737c17.919,21.592,42.538,38.345,73.172,49.797c27.595,10.315,59.198,15.767,91.394,15.767    c32.196,0,63.8-5.452,91.394-15.767c30.634-11.452,55.253-28.206,73.172-49.797c13.499-16.266,22.828-35.018,27.726-55.737    c5.246-22.192,5.411-46.754,0.489-73.002c-10.286-54.858-40.858-88.834-67.831-118.81c-9.157-10.177-17.869-19.88-25.173-29.728    l91.079,20.926c9.649,2.217,19.931-2.004,25.261-10.342C465.272,172.11,465.301,162.115,460.496,154.447z M284.489,23.17    c23.263,0.254,46.807-1.78,71.676-6.212c-4.56,18.643-19.203,51.801-33.092,77.06c-9.625,0.725-17.659,7.227-20.637,16.043H281.46    c-0.474-1.021-0.999-2.14-1.584-3.383C273.39,92.89,259.892,64.2,259.892,39.792c0-4.692-4.431-8.33-9.037-7.408    c-8.792,1.759-18.465,3.182-28.53,4.074c-1.055-6.304-2.692-12.618-5.072-18.828C237.553,20.772,263.124,22.935,284.489,23.17z     M333.429,117.615v32.236c0,4.721-3.841,8.563-8.563,8.563s-8.563-3.841-8.563-8.563v-32.236c0-4.722,3.841-8.563,8.563-8.563    S333.429,112.894,333.429,117.615z M141.612,44.107c18.888,6.447,42.123,9.306,67.216,8.424l14.974-0.946    c7.063-0.648,14.229-1.581,21.448-2.802c2.356,23.374,13.034,47.392,19.522,61.278h-50.307h-15.894h-23.376    c-0.169-0.265-0.351-0.525-0.556-0.773C162.002,94.085,149.179,76.5,141.612,44.107z M357.994,208.993    c25.645,28.498,54.708,60.798,64.214,111.487c8.747,46.652,0.338,85.782-24.993,116.303    c-31.234,37.635-88.407,60.105-152.937,60.105S122.574,474.419,91.34,436.784c-25.331-30.521-33.739-69.651-24.993-116.303    c9.505-50.69,38.57-82.991,64.214-111.488c15.333-17.041,29.819-33.159,39.103-51.586h18.452c4.174,0,7.555-3.383,7.555-7.555    c0-4.173-3.382-7.555-7.555-7.555h-32.488c-4.722,0-8.563-3.841-8.563-8.563c0-4.722,3.841-8.563,8.563-8.563h145.564v17.125    h-77.064c-4.174,0-7.555,3.383-7.555,7.555c0,4.172,3.382,7.555,7.555,7.555h78.307c3.161,9.358,12.018,16.118,22.43,16.118    c1.203,0,2.383-0.092,3.539-0.265C336.836,185.456,347.114,196.903,357.994,208.993z M348.54,121.127l71.035-19.881    c4.498-1.261,9.298,1.449,10.554,5.938c1.258,4.499-1.447,9.297-5.938,10.553l-40.596,11.362    c-0.331,0.093-0.647,0.213-0.954,0.346l-34.101-7.835V121.127z M448.779,168.929c-1.058,4.602-5.654,7.487-10.263,6.428    l-90.451-20.782c0.31-1.527,0.474-3.107,0.474-4.725v-12.738l93.811,21.554C446.897,159.711,449.824,164.378,448.779,168.929z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M292.631,310.526c10.831,0,19.644-8.812,19.644-19.644v-12.088c0-28.268-21.084-51.702-48.354-55.4v-13.101    c0-10.831-8.812-19.644-19.644-19.644c-10.831,0-19.644,8.812-19.644,19.644v14.101c-27.997,6.245-48.354,31.134-48.354,60.444    c0,34.161,27.792,61.953,61.953,61.953h12.088c12.497,0,22.666,10.167,22.666,22.666s-10.168,22.666-22.666,22.666h-18.133    c-9.166,0-16.622-7.457-16.622-16.622c0-10.831-8.812-19.644-19.644-19.644c-10.831,0-19.644,8.812-19.644,19.644    c0,28.268,21.084,51.702,48.354,55.4v13.101c0,10.831,8.812,19.644,19.644,19.644c10.831,0,19.644-8.812,19.644-19.644v-14.101    c27.997-6.245,48.354-31.134,48.354-60.444c0-34.161-27.792-61.953-61.953-61.953h-12.088c-12.497,0-22.666-10.167-22.666-22.666    s10.168-22.666,22.666-22.666h18.133c9.166,0,16.622,7.457,16.622,16.622v12.088C272.987,301.713,281.8,310.526,292.631,310.526z     M256.366,247.062h-18.133c-20.83,0-37.776,16.946-37.776,37.776c0,20.83,16.946,37.776,37.776,37.776h12.088    c25.83,0,46.843,21.014,46.843,46.843c0,23.899-17.899,43.908-41.632,46.545c-3.826,0.425-6.721,3.659-6.721,7.509v20.491    c0,2.499-2.034,4.533-4.533,4.533s-4.533-2.034-4.533-4.533v-20.147c0-4.173-3.382-7.555-7.555-7.555    c-22.497,0-40.798-18.302-40.798-40.798c0-2.499,2.034-4.533,4.533-4.533s4.533,2.034,4.533,4.533    c0,17.497,14.235,31.732,31.732,31.732h18.133c20.83,0,37.776-16.946,37.776-37.776s-16.946-37.776-37.776-37.776h-12.088    c-25.83,0-46.843-21.014-46.843-46.843c0-23.899,17.899-43.908,41.632-46.545c3.826-0.425,6.721-3.659,6.721-7.509v-20.491    c0-2.499,2.034-4.533,4.533-4.533s4.533,2.034,4.533,4.533v20.147c0,4.173,3.382,7.555,7.555,7.555    c22.497,0,40.798,18.302,40.798,40.798v12.088c0,2.499-2.034,4.533-4.533,4.533s-4.533-2.034-4.533-4.533v-12.088    C288.098,261.297,273.863,247.062,256.366,247.062z" />
                                    </g>

                            </svg>
                        </div>
                        <div class="ltn__feature-info">
                            <h4>15 days returns</h4>
                            <p>Moneyback guarantee</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 478.984 478.984" style="enable-background:new 0 0 478.984 478.984;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <rect x="344" y="319.492" width="48" height="16" />
                                            <rect x="280" y="319.492" width="48" height="16" />
                                            <rect x="216" y="319.492" width="48" height="16" />
                                            <path d="M471.896,165.916L313.6,7.596c-4.495-4.538-10.62-7.088-17.008-7.08h-0.072c-6.346,0.003-12.424,2.554-16.872,7.08     l-167.92,167.896H24c-13.255,0-24,10.745-24,24v224c0,13.255,10.745,24,24,24h118.528l23.872,23.896     c4.495,4.538,10.62,7.088,17.008,7.08h0.064c6.348-0.002,12.43-2.553,16.88-7.08l23.92-23.896H408c13.255,0,24-10.745,24-24     V239.764l39.856-39.856c4.549-4.453,7.117-10.547,7.128-16.912C479.008,176.582,476.454,170.428,471.896,165.916z      M370.128,86.772l-88.72,88.72h-67.936L336.16,52.804L370.128,86.772z M290.976,18.876c3.043-3.117,8.037-3.177,11.155-0.133     c0.045,0.044,0.09,0.088,0.133,0.133l22.584,22.616l-134.008,134h-56.488L290.976,18.876z M189.024,460.108     c-1.463,1.528-3.485,2.394-5.6,2.4c-2.144-0.005-4.196-0.869-5.696-2.4l-12.568-12.616h36.488L189.024,460.108z M416,423.492     c0,4.418-3.582,8-8,8H24c-4.418,0-8-3.582-8-8v-112h400V423.492z M416,295.492H16v-48h400V295.492z M416,231.492H16v-32     c0-4.418,3.582-8,8-8h384c4.418,0,8,3.582,8,8V231.492z M460.584,188.556L460.584,188.556L432,217.14v-17.648     c0-13.255-10.745-24-24-24H304l77.408-77.408l79.144,79.144c1.537,1.506,2.402,3.568,2.4,5.72     C462.95,185.06,462.096,187.082,460.584,188.556z" />
                                            <path d="M76.728,415.708c1.168-1.01,2.262-2.104,3.272-3.272c10.579,12.322,28.756,14.663,42.112,5.424     c8.62-6.027,13.794-15.85,13.888-26.368c0-17.673-14.327-32-32-32c-1.588-0.022-3.174,0.112-4.736,0.4l-0.208,0.056     c-0.08,0-0.16,0-0.232,0c-7.329,1.218-13.994,4.979-18.824,10.624c-11.56-13.368-31.769-14.833-45.136-3.272     c-13.368,11.56-14.833,31.769-3.272,45.136C43.152,425.804,63.36,427.269,76.728,415.708z M101.976,375.66     c0.667-0.127,1.345-0.183,2.024-0.168c8.837,0,16,7.163,16,16c-0.008,3.385-1.111,6.677-3.144,9.384     c-0.288,0.392-0.512,0.8-0.84,1.208c-0.056,0.064-0.136,0.104-0.2,0.168c-3.022,3.337-7.314,5.241-11.816,5.24     c-8.835-0.151-15.876-7.435-15.725-16.27C88.409,383.377,94.211,376.786,101.976,375.66z M56,375.492c8.837,0,16,7.163,16,16     s-7.163,16-16,16s-16-7.163-16-16S47.163,375.492,56,375.492z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Secure checkout</h4>
                            <p>Protected by Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Ic_wallet_giftcard_48px.svg/2048px-Ic_wallet_giftcard_48px.svg.png" alt="">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Offer & gift here</h4>
                            <p>On all orders over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__team-area pt-110--- pb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">our team</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-4">
                    <div class="team-img">
                        <img src="View/Img/Team.jpg" alt="Image">
                    </div>
                    <div class="team-info">
                        <h5>Nguyễn Văn Khôi</h5>
                        <h6>Trưởng Nhóm</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-4">
                    <div class="team-img">
                        <img src="View/Img/Team.jpg" alt="Image">
                    </div>
                    <div class="team-info">
                        <h5>Trần Mai Hương</h5>
                        <h6>Thành Viên</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-4">
                    <div class="team-img">
                        <img src="View/Img/Team.jpg" alt="Image">
                    </div>
                    <div class="team-info">
                        <h5>Phí Thị Bích Liên</h5>
                        <h6>Thành Viên</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__newsletter-area section-bg-1 bg-overlay-black-10 bg-image pt-110 pb-90" data-bs-bg="img/bg/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="ltn__newsletter-inner ltn__newsletter-inner-4 text-color-white text-center">
                    <h1 style="color: #000;">Get The Latest Deals</h1>
                    <h5 style="color: #000;">$30 coupon for first shopping</h5>
                    <form action="#" class="ltn__form-box">
                        <input type="email" name="email" placeholder="Email*">
                        <div class="btn-wrapper">
                            <button style=" background: #e55472; color: #fff; padding: 0 35px; font-weight: 500;" class="theme-btn-1 btn text-uppercase" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.animated').addClass('show');
        }, 500);

        setTimeout(function() {
            $('.animated_01').addClass('show');
        }, 1000);

        setTimeout(function() {
            $('.animated_02').addClass('show');
        }, 1500);
    });

    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "09/30/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                if (distance < 0) {
                    document.getElementById("headline").innerText = "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
            }, 0)
    }());
</script>