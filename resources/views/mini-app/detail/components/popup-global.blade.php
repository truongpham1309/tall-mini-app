@php
    $countries = [
        ['name' => 'Việt Nam', 'code' => 'vi', 'flag' => 'vn.svg'],
        ['name' => 'English', 'code' => 'en', 'flag' => 'vn.svg'],
        ['name' => 'Deutsch', 'code' => 'de', 'flag' => 'vn.svg'],
        ['name' => 'India', 'code' => 'in', 'flag' => 'vn.svg'],
        ['name' => 'Korea', 'code' => 'ko', 'flag' => 'vn.svg'],
        ['name' => 'Japan', 'code' => 'ja', 'flag' => 'vn.svg'],
        ['name' => 'ThaiLand', 'code' => 'th', 'flag' => 'vn.svg'],
        ['name' => 'Indonesia', 'code' => 'id', 'flag' => 'vn.svg'],
        ['name' => 'Singapor', 'code' => 'sg', 'flag' => 'vn.svg'],
        ['name' => 'Français', 'code' => 'fr', 'flag' => 'vn.svg'],
        ['name' => 'Nederlands', 'code' => 'nl', 'flag' => 'vn.svg'],
        ['name' => 'Ελληνικά', 'code' => 'el', 'flag' => 'vn.svg'],
        ['name' => 'Turk', 'code' => 'tr', 'flag' => 'vn.svg'],
        ['name' => 'China', 'code' => 'zh', 'flag' => 'vn.svg'],
        ['name' => 'China', 'code' => 'zh', 'flag' => 'vn.svg'],
        ['name' => 'China', 'code' => 'zh', 'flag' => 'vn.svg'],
    ];
@endphp

@vite('resources/css/mini-app/popup-filter.css')
<div hidden id="popup__nation" class="popup popup__categories">
    <div class="popup__header">
        <div>
            KFC
            <div class="description">
                Các quốc gia được áp dụng
            </div>
        </div>
        <div onclick="document.querySelector('#popup__nation').hidden = true">
            <img src="/images/mini-app/close-line.svg" alt="">
        </div>
    </div>

    <main>
        <div class="search--countries">
            <input type="text" placeholder="Nhập tên nước">
            <img src="/images/mini-app/search.svg" alt="">
        </div>

        <ul class="nation__list">
            @foreach ($countries as $country)
                <li class="nation--items">
                    <div>
                        <img src="/images/mini-app/{{ $country['flag'] }}" width="20" height="20" alt="">
                        <span>{{ $country['name'] }}</span>
                    </div>
                </li>
            @endforeach

        </ul>
    </main>
</div>
