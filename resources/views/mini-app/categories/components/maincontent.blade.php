<section class="categories__main">
    <div class="categories__list">
        <button class="active">Tất cả</button>
        <button>Ẩm thực</button>
        <button>Du lịch</button>
        <button>Giải trí</button>
        <button>Sức khỏe</button>
        <button>Giáo dục</button>
    </div>

    <div class="action">
        <div class="action__search">
            <input type="text" placeholder="Tìm kiếm...">
            <img src="/images/mini-app/search.svg" alt="">
        </div>
        <button onclick="document.querySelector('#popup__categories').hidden = false" class="action__filter">
            <img src="/images/mini-app/filter.svg" alt="">
        </button>
    </div>

    <div class="list__services">
        <div class="content__list--item" onclick="window.location.href='{{ route('mini-app.detail') }}'">
            <div class="thumbnail">
                <img src="/images/mini-app/thumb.png" alt="">
                <button class="add added">1</button>
            </div>
            <div class="brandName">
                <img src="/images/mini-app/brand.svg" alt="">
                <span>
                    Starbucks
                </span>
            </div>
            <div class="title">
                Mua KFC với giá chỉ từ 19.000đ
            </div>
            <div class="price">
                20.000đ
            </div>
        </div>

        <div class="content__list--item">
            <div class="thumbnail">
                <img src="/images/mini-app/thumb.png" alt="">
                <button class="add"><img src="/images/mini-app/plus.svg" alt=""></button>
            </div>
            <div class="brandName">
                <img src="/images/mini-app/brand.svg" alt="">
                <span>
                    Starbucks
                </span>
            </div>
            <div class="title">
                Mua KFC với giá chỉ từ 19.000đ
            </div>
            <div class="price">
                20.000đ
            </div>
        </div>

        <div class="content__list--item">
            <div class="thumbnail">
                <img src="/images/mini-app/thumb.png" alt="">
                <button class="add"><img src="/images/mini-app/plus.svg" alt=""></button>
            </div>
            <div class="brandName">
                <img src="/images/mini-app/brand.svg" alt="">
                <span>
                    Starbucks
                </span>
            </div>
            <div class="title">
                Mua KFC với giá chỉ từ 19.000đ
            </div>
            <div class="price">
                20.000đ
            </div>
        </div>

        <div class="content__list--item">
            <div class="thumbnail">
                <img src="/images/mini-app/thumb.png" alt="">
                <button class="add"><img src="/images/mini-app/plus.svg" alt=""></button>
            </div>
            <div class="brandName">
                <img src="/images/mini-app/brand.svg" alt="">
                <span>
                    Starbucks
                </span>
            </div>
            <div class="title">
                Mua KFC với giá chỉ từ 19.000đ
            </div>
            <div class="price">
                20.000đ
            </div>
        </div>
    </div>
</section>