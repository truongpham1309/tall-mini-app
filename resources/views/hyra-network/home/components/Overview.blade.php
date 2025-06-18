<section class="text-center mt-[35px] mx-[222px] pb-[128px]">
    <button class="bg-[linear-gradient(93.74deg,#1DDBFF_2.18%,#FFFFFF_99.55%)] shadow-[2px_2px_0px_0px_#000000] py-2 px-3 rounded-[12px] font-extrabold">Mint Overview</button>
    <h3 class="font-extrabold text-[36px] leading-[44px] tracking-[0] text-center mt-6 mb-3">Everything You Need to Know</h3>
    <p class="text-base font-normal text-[#222222]">Get the full picture before you mint</p>
    <div class="flex flex-wrap justify-center gap-5 mt-12">
        @foreach ($listOverview as $item)
            <div class="flex items-center gap-5 justify-between p-4 shadow-[4px_4px_0px_0px_#000000] border-[#000000] border rounded-2xl w-[calc(33.333%-13.33px)]">
                <div class="rounded-full p-[10px] {{$item['background']}}">
                    <img src={{ $item['icon'] }} alt={{ $item['title'] }}>
                </div>
                <div class="text-left">
                    <h4 class="font-bold text-xl">{{ $item['title'] }}</h4>
                    <span class="font-medium text-base text-[#222222] mt-[10px]">{{ $item['description'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</section>
