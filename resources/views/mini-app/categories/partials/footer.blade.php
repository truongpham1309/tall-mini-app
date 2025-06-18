@vite('resources/css/mini-app/footer.css')
<footer class="footer__categories">
    <div class="shopping">
        <img src="/images/mini-app/shopping_basket.svg" alt="">
        <div class="quantity">
            1
        </div>
    </div>

     <div class="payment">
        <div class="payment__info">
            <p>Purchase</p>
            <div class="price">
                <span>1.000.000.000</span>
                <img src="/images/mini-app/hyra-coin.svg" alt="">
            </div>
        </div>
        <div class="payment__btn">
            <button onclick="document.querySelector('#popup__cart').hidden = false">
                Thanh toán
            </button>
        </div>
     </div>
</footer>