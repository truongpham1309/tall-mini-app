@vite('resources/css/mini-app/detail.css')
@extends('mini-app.detail.layouts.layout')

@section('content')
<section class="box-detail">
        @include('mini-app.detail.components.popup-global')
        @include('mini-app.detail.components.popup-cart')
        <div class="header">
            <div class="back" onclick="window.location.href='{{ route('mini-app.home') }}'">
                <img src="/images/mini-app/arrow-icon.svg" alt="">
            </div>

            <div class="options">
                <button><img src="/images/mini-app/MenuIcon.svg" alt=""></button>
                <div></div>
                <button><img src="/images/mini-app/RemoveIcon.svg" alt=""></button>
            </div>
        </div>

        <div class="box__content">
            <div class="box__voucher">
                <div class="dot left"></div>
                <div class="dot right"></div>
                <div class="box__voucher--info">
                    <div class="brandName">
                        <img src="/images/mini-app/brand.svg" alt="">
                        <span>KFC</span>
                    </div>
                    <div class="description">
                        🔥 Voucher hot giảm 40k cho hóa đơn từ 120k chỉ trong hôm nay 🔥 [KFC]
                    </div>
                    <div class="price">
                        20.000đ
                    </div>
                </div>
                <div class="add-to-cart">
                    <div class="nation">
                        <div class="title">
                            Quốc gia áp dụng: <span>123 quốc gia</span>
                        </div>
                        <div class="flag--list">
                            <img src="/images/mini-app/vn.svg" alt="">
                            <img src="/images/mini-app/vn.svg" alt="">
                            <img src="/images/mini-app/vn.svg" alt="">
                            <div class="view-all" onclick="document.querySelector('#popup__nation').hidden = false">+99</div>
                        </div>
                    </div>
                    <div>
                        <button>Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>

            <div class="detail-info">
                <div class="tabs">
                    <div class="tab-items ">Điều khoản</div>
                    <div class="tab-items active">Hướng dẫn</div>
                    <div class="tab-items ">Mô tả</div>
                </div>

                <div class="detail-content">
                    <div class="title">
                        Hướng dẫn sử dụng
                    </div>
                    <div class="description">
                        Thanh toán dịch vụ online bằng mã code trên website hoặc ứng dụng của nhãn hàng
                    </div>

                    <div class="steps">
                        <div class="step__items">
                            <div class="icon">
                                <img src="/images/mini-app/step-1-icon.svg" alt="">
                            </div>
                            <div class="title">
                                <span>Bước 1:</span> Chọn voucher ưu đãi muốn sử dụng, ấn <span>“Sử dụng ngay”</span> để xem chi tiết mã Code giảm giá
                            </div>
                        </div>

                        <div class="step__items">
                            <div class="icon">
                                <img src="/images/mini-app/step-2-icon.svg" alt="">
                            </div>
                            <div class="title">
                                <span>Bước 2:</span> Chọn <span>Sao chép</span> mã khuyến mãi
                            </div>
                        </div>

                        <div class="step__items">
                            <div class="icon">
                                <img src="/images/mini-app/step-3-icon.svg" alt="">
                            </div>
                            <div class="title">
                                <span>Bước 3:</span> Dán mã tại trang thanh toán trên website hoặc ứng dụng của nhãn hàng/thương hiệu để áp dụng ưu đãi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
