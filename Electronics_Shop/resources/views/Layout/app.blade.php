<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Anvogue - About Us</title>
        <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
        <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />
        <link rel="stylesheet" href="./dist/output-scss.css" />
        <link rel="stylesheet" href="./dist/output-tailwind.css" />
    </head>

    <body>

    @include('Layout.header')
    @yield('conent')
    @include('Layout.footer')
    <div class="modal-quickview-block">
            <div class="modal-quickview-main py-6">
                <div class="flex h-full max-md:flex-col-reverse gap-y-6">
                    <div class="left lg:w-[388px] md:w-[300px] flex-shrink-0 px-6">
                        <div class="list-img max-md:flex items-center gap-4">
                            <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                                <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                            </div>
                            <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                                <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                            </div>
                            <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                                <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                            </div>
                            <div class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                                <img src="./assets/images/product/1000x1000.png" alt="item" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                    <div class="right w-full px-6">
                        <div class="heading pb-6 flex items-center justify-between relative">
                            <div class="heading5">Quick View</div>
                            <div class="close-btn absolute right-0 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                                <i class="ph ph-x text-sm"></i>
                            </div>
                        </div>
                        <div class="product-infor">
                            <div class="flex justify-between">
                                <div>
                                    <div class="category caption2 text-secondary font-semibold uppercase">fashion</div>
                                    <div class="name heading4 mt-1">Off-the-Shoulder Blouse</div>
                                </div>
                                <div class="add-wishlist-btn w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-lg duration-300 hover:bg-black hover:text-white">
                                    <i class="ph ph-heart text-xl"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="rate flex">
                                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                                    <i class="ph-fill ph-star text-sm text-yellow"></i>
                                    <i class="ph-fill ph-star text-sm text-yellow"></i><i class="ph-fill ph-star text-sm text-yellow"></i>
                                </div>
                                <span class="caption1 text-secondary">(1.234 reviews)</span>
                            </div>
                            <div class="flex items-center gap-1 gap-y-3 flex-wrap mt-3">
                                <div class="text-xs font-semibold bg-black text-white uppercase py-1 px-3 rounded-full">best seller</div>
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-lightning text-red text-xl"></i>
                                    <div class="caption1 text-secondary">Selling fast! 22 people have this in their carts.</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                                <div class="product-price heading5">$20.00</div>
                                <div class="w-px h-4 bg-line"></div>
                                <div class="product-origin-price font-normal text-secondary2">
                                    <del>$32.00</del>
                                </div>
                                <div class="product-sale caption2 font-semibold bg-green px-3 py-0.5 inline-block rounded-full">-19%</div>
                                <div class="desc text-secondary mt-3">Keep your clothes organized, yet elegant with storage cabinets by Onita Patio Furniture. Traditionally designed, they are perfect to be used in the any place where you need to store.</div>
                            </div>
                            <div class="list-action mt-6">
                                <div class="choose-color">
                                    <div class="text-title">Colors: <span class="text-title color"></span></div>
                                    <div class="list-color flex items-center gap-2 flex-wrap mt-3">
                                        <div class="color-item w-12 h-12 rounded-xl duration-300 relative active">
                                            <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">blue</div>
                                        </div>
                                        <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                            <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">red</div>
                                        </div>
                                        <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                            <img src="./assets/images/product/color/48x48.png" alt="color" class="rounded-xl" />
                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">black</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose-size mt-5">
                                    <div class="heading flex items-center justify-between">
                                        <div class="text-title">Size: <span class="text-title size"></span></div>
                                        <div class="caption1 size-guide text-red underline">Size Guide</div>
                                    </div>
                                    <div class="list-size flex items-center gap-2 flex-wrap mt-3">
                                        <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">S</div>
                                        <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line active">M</div>
                                        <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">L</div>
                                        <div class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">XL</div>
                                    </div>
                                </div>
                                <div class="text-title mt-5">Quantity:</div>
                                <div class="choose-quantity flex items-center flex-wrap lg:justify-between gap-5 mt-3">
                                    <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[180px] w-[120px] flex-shrink-0">
                                        <i class="ph-bold ph-minus cursor-pointer body1"></i>
                                        <div class="quantity body1 font-semibold">1</div>
                                        <i class="ph-bold ph-plus cursor-pointer body1"></i>
                                    </div>
                                    <div class="add-cart-btn button-main w-full text-center bg-white text-black border border-black">Add To Cart</div>
                                </div>
                                <div class="button-block mt-5">
                                    <a href="checkout.html" class="button-main w-full text-center">Buy It Now</a>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap lg:gap-20 gap-8 gap-y-4 mt-5">
                                <div class="compare flex items-center gap-3 cursor-pointer">
                                    <div class="compare-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                        <i class="ph-fill ph-arrows-counter-clockwise cursor-pointer heading6"></i>
                                    </div>
                                    <span>Compare</span>
                                </div>
                                <div class="share flex items-center gap-3 cursor-pointer">
                                    <div class="share-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                        <i class="ph-fill ph-share-network cursor-pointer heading6"></i>
                                    </div>
                                    <span>Share Products</span>
                                </div>
                            </div>
                            <div class="more-infor mt-6">
                                <div class="flex items-center gap-4 flex-wrap">
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-arrow-clockwise cursor-pointer body1"></i>
                                        <div class="text-title">Delivery & Return</div>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <i class="ph ph-question cursor-pointer body1"></i>
                                        <div class="text-title">Ask A Question</div>
                                    </div>
                                </div>
                                <div class="flex items-center flex-wrap gap-1 mt-3">
                                    <i class="ph ph-timer cursor-pointer body1"></i>
                                    <span class="text-title">Estimated Delivery:</span>
                                    <span class="text-secondary">14 January - 18 January</span>
                                </div>
                                <div class="flex items-center flex-wrap gap-1 mt-3">
                                    <i class="ph ph-eye cursor-pointer body1"></i>
                                    <span class="text-title">38</span>
                                    <span class="text-secondary">people viewing this product right now!</span>
                                </div>
                                <div class="flex items-center gap-1 mt-3">
                                    <div class="text-title">SKU:</div>
                                    <div class="text-secondary">53453412</div>
                                </div>
                                <div class="flex items-center gap-1 mt-3">
                                    <div class="text-title">Categories:</div>
                                    <div class="list-category text-secondary">fashion, women</div>
                                </div>
                                <div class="flex items-center gap-1 mt-3">
                                    <div class="text-title">Tag:</div>
                                    <div class="list-tag text-secondary">dress</div>
                                </div>
                            </div>
                            <div class="list-payment mt-7">
                                <div class="main-content lg:pt-8 pt-6 lg:pb-6 pb-4 sm:px-4 px-3 border border-line rounded-xl relative max-md:w-2/3 max-sm:w-full">
                                    <div class="heading6 px-5 bg-white absolute -top-[14px] left-1/2 -translate-x-1/2 whitespace-nowrap">Guranteed safe checkout</div>
                                    <div class="list grid grid-cols-6">
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-0.png" alt="payment" class="w-full" />
                                        </div>
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-1.png" alt="payment" class="w-full" />
                                        </div>
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-2.png" alt="payment" class="w-full" />
                                        </div>
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-3.png" alt="payment" class="w-full" />
                                        </div>
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-4.png" alt="payment" class="w-full" />
                                        </div>
                                        <div class="item flex items-center justify-center lg:px-3 px-1">
                                            <img src="./assets/images/payment/Frame-5.png" alt="payment" class="w-full" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./assets/js/phosphor-icons.js"></script>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/main.js"></script>
    </body>
</html>
