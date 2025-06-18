@vite('resources/css/mini-app/popup-filter.css')
<div hidden id="popup__categories" class="popup popup__categories">
    <div class="popup__header">
        <div>
            Bộ lọc nâng cao
        </div>
        <div onclick="document.querySelector('#popup__categories').hidden = true">
            <img src="/images/mini-app/close-line.svg" alt="">
        </div>
    </div>

    <main>
        <div class="popup__box">
            <div class="box__header">
                <div class="title">
                    Loại ưu đãi 
                </div>
            </div>
            <div class="box__content type-voucher">
                <button class="active">Tất cả</button>
                <button>Deal Hot</button>
                <button>Ưu đãi độc quyền</button>
                <button>Ưu đãi gần bạn</button>
                <button>Có thể bạn thích</button>
                <button>Flash Sale</button>
            </div>
        </div>

        <div class="popup__box">
            <div class="box__header">
                <div class="title">
                    Danh mục
                </div>
            </div>
            <div class="box__content popup__category">
                <button class="active">Tất cả</button>

                <button>Độc quyền</button>
                <button class="active">Ẩm thực</button>
                <button>Di chuyển</button>
                <button>Làm đẹp</button>
                <button>Viễn thông</button>
                <button>Giải trí</button>
                <button class="active">Giáo dục</button>
                <button>Du lịch</button>
                <button class="active">Mua sắm</button>
                <button>Sức khỏe</button>
                <button>Khách sạn</button>
            </div>
        </div>

        <div class="popup__box">
            <div class="box__header">
                <div class="title">
                    Vị trí
                </div>
                <div class="popup__view-all">
                    Xem thêm
                </div>
            </div>
            <div class="box__content type-voucher">
                <button class="active">Toàn cầu</button>
                <button>VietNam</button>
                <button>Thailand</button>
                <button>American</button>
            </div>
        </div>

        <div class="popup__box">
            <div class="box__header">
                <div class="title">
                    Khoảng giá
                </div>
            </div>
            <div class="box__content popup__range-price">
                <div class="select-nation">
                    <div class="title">
                        United States Dollars ($)
                    </div>
                    <img src="/images/mini-app/chevron-down.svg " alt="">
                </div>
                <div class="range-price">
                    <div class="range"></div>
                    <div class="dot left"></div>
                    <div class="dot right"></div>
                    <div class="result-price">
                        <span>$0</span>
                        <span>$200.000+</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup__box">
            <div class="box__header">
                <div class="title">
                    Sắp xếp
                </div>
            </div>
            <div class="box__content type-voucher">
                <button class="active">Đề xuất</button>
                <button>Mới nhất</button>
                <button>Giá tiền rẻ nhất</button>
                <button>Giá điểm rẻ nhất </button>
                <button>Bán chạy nhất</button>
            </div>
        </div>

        <div class="box__confirm">
            <button class="reset">
                Đặt lại
            </button>
            <button class="confirm">
                Xác nhận
            </button>
        </div>
    </main>
</div>
