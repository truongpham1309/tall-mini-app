<section class="relative bg-[url('/public/images/bg-hero.png')] bg-cover bg-no-repeat px-[120px] pb-24 bg-[position:center_-30px]">
    <div class="flex justify-between pt-[57px] gap-[100px]">
        <div class="w-[60%]">
            <div class="">
                <img class="w-full rounded-[12px]" src="images/hero-image.gif" alt="banner">
            </div>
            <div class="grid grid-cols-3 gap-x-4 mt-3">
                <div class="shadow-[4px_4px_0px_0px_#000000] rounded-[12px] border border-[#000000] flex justify-center h-[140px] py-[0px]">
                    <img class="object-cover w-full rounded-xl border-[2px] border-[#EC008C]" src="images/hero-image.gif" alt="">
                </div>
                <div class="shadow-[4px_4px_0px_0px_#000000] rounded-[12px] border border-[#000000] flex justify-center h-[140px] py-[0px]">
                    <img class="object-cover" src="images/Sticker.svg" alt="">
                </div>
                <div class="shadow-[4px_4px_0px_0px_#000000] rounded-[12px] border border-[#000000] flex justify-center h-[140px] py-[0px]">
                    <img class="object-cover" src="images/Sticker.svg" alt="">
                </div>
            </div>
        </div>
        <div>
            <h1 class="font-extrabold text-[44px] text-[#000000]">
                Hyra Wira NFT Campaign
            </h1>

            <p class="mt-3 mb-6 text-[#222222] font-medium text-base">
                The first NFT mint campaign marks your journey to 'Be Hyrasapiens' - join the pioneers of decentralized AI!
            </p>

            <div class="bg-[#FFFFFF] shadow-[4px_4px_0px_0px_#000000] p-6 border border-[#000000] rounded-[32px]">
                <div class="mb-4 flex justify-between items-center">
                    <button
                        class="font-extrabold bg-[linear-gradient(93.74deg,_#FFD21E_2.18%,_#FFFFFF_99.55%)] px-3 py-[10px] rounded-[12px] shadow-[2px_2px_0px_0px_#000000] flex gap-2">
                        <img src="/images/Status.svg" alt="">
                        COMING SOON
                    </button>
                    <p class="font-semibold text-base">Mint Date: <span>10/05/2025</span></p>
                </div>
                <div class="p-[24px] bg-[#FDE3F2] border border-[#000000] rounded-[16px] ">
                    <div class="mb-10">
                        <div class=" flex justify-between items-center">
                            <p class="mb-3 font-semibold text-[18px] text-[#000000]">Total Minted</p>
                            <p class="font-semibold text-[18px] text-[#000000]">
                                12.60% <span class="text-[#00000066]">(603/5000)</span>
                            </p>
                        </div>
                        <div class="h-[10px] border border-[#000000] rounded-full">
                            <div class="h-full bg-[#EC008C] w-[12.6%]"></div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center flex-nowrap border border-black py-3 px-3 bg-white rounded-[12px] mb-[12px]">
                        <div class="flex">
                            <img src="{{ asset('images/Wallet.svg') }}" class="mr-2" alt="">
                            <span class="text-nowrap font-bold">Eligible to Mint</span>
                        </div>
                        <div class="px-2 py-[5px] border border-black shadow-[2px_2px_0px_0px_#000000] rounded-[8px]">
                            <span class="font-bold">01</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center flex-nowrap border border-black py-3 px-3 bg-white rounded-[12px]">
                        <div class="flex">
                            <img src="{{ asset('images/timer-flash-fill.svg') }}" class="mr-2" alt="">
                            <span class="text-nowrap font-bold">Start In</span>
                            <div class="relative group inline-block ml-2">
                                <!-- Icon -->
                                <img src="{{ asset('images/info_icon.svg') }}" alt="" class="cursor-pointer" />

                                <div
                                    class="absolute bottom-full left-0 mb-2 z-10 hidden group-hover:block w-80 p-3 text-sm text-black bg-white border border-gray-300 rounded-lg shadow-md">
                                    <p>
                                        This NFT mint campaign marks your journey to <strong>'Be Hyrasapiens'</strong> – join the pioneers of decentralized AI!
                                    </p>
                                    <div class="absolute bottom-[-8px] left-4 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-white">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="px-2 py-[5px] border border-black shadow-[2px_2px_0px_0px_#000000] rounded-[8px]">
                            <span class="font-bold">12d : 08h : 42m : 16s</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between mt-[24px] gap-[12px]">
                <button
                    class="w-[20%] flex justify-center py-4 bg-[linear-gradient(93.74deg,_#2DDDFF_2.18%,_#FFFFFF_99.55%)] rounded-[12px] border border-black shadow-[2px_2px_0px_0px_#000000]">
                    <img src="{{ asset('images/image-2-fill.svg') }}" class="mr-2" alt="">
                    <span class="font-bold">My NFTs</span>
                </button>
                <button disabled
                    class="w-[80%] flex justify-center py-4 rounded-[12px] text-[#000000] opacity-50 bg-white border border-[#0000000] shadow-[2px_2px_0px_0px_#000000]">
                    <img src="{{ asset('images/Lock_icon.svg') }}" class="mr-[10px]" alt="">
                    <span class="font-bold">Mint Coming Soon</span>
                </button>
            </div>
        </div>

    </div>

</section>
