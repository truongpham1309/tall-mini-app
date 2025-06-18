@vite('resources/css/mini-app/header.css')
<header>
    <div class="header">
        <ul class="breakcrumb">
            <li>Gift Card</li>
        </ul>

        <div class="options">
            <button><img src="/images/mini-app/MenuIcon.svg" alt=""></button>
            <div></div>
            <button><img src="/images/mini-app/RemoveIcon.svg" alt=""></button>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Search voucher, brand,...">
        <button><img src="/images/mini-app/search.svg" alt=""></button>
    </div>

    <div class="categories">
        <div class="list">
            <div onclick="window.location.href='{{ route('mini-app.categories') }}'">
                <div>
                    <img src="/images/mini-app/all.svg" alt="">
                </div>
                <span>Tất cả</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/coffee.svg" alt="">
                </div>
                <span>Ẩm thực</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/beach.svg" alt="">
                </div>
                <span>Du lịch</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/game.svg" alt="">
                </div>
                <span>Giải trí</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/heart-beat.svg" alt="">
                </div>
                <span>Sức khỏe</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/coffee.svg" alt="">
                </div>
                <span>Ẩm thực</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/beach.svg" alt="">
                </div>
                <span>Du lịch</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/game.svg" alt="">
                </div>
                <span>Giải trí</span>
            </div>
            <div>
                <div>
                    <img src="/images/mini-app/heart-beat.svg" alt="">
                </div>
                <span>Sức khỏe</span>
            </div>
        </div>
        <div class="slide">
            <div class="slide-item">
            </div>
        </div>
    </div>

    <div class="banner">
        <img src="/images/mini-app/banner.png" alt="">
        <div class="slides">
            <div class="slide__items active"></div>
            <div class="slide__items"></div>
            <div class="slide__items"></div>
            <div class="slide__items"></div>
        </div>
    </div>
</header>
