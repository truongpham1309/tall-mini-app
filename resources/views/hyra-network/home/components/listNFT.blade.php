<section class="py-[34px] space-y-2">
    @foreach ($listNft as $items)
        <div class="flex flex-nowrap justify-between gap-6 items-center">
            @foreach ($items as $_item)
                @if ($_item['type'] === 'image')
                    <div>
                        <img src={{ $_item['content'] }} alt="">
                    </div>
                @elseif ($_item['type'] === 'button')
                    <div>
                        <button class="{{ $_item['background'] }} shadow-[2px_2px_0px_0px_#000000] py-[17px] px-4 rounded-[17px] tracking-[2px] font-extrabold -rotate-6 uppercase">
                            {{ $_item['content'] }}
                        </button>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach
</section>
