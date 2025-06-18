<header class="py-4 bg-[#F3ECF0] px-[120px] flex items-center justify-between">
        <!-- Logo + Menu -->
        <div class="flex items-center justify-between">
            <div onclick="window.location.href='{{ route('/mini-app') }}'" class="logo mr-10">
                <img src="images/Logo.svg" alt="Logo" class="h-8">
            </div>
            <ul class="flex text-sm font-medium text-black">
                <li class="px-4"><a href="#">Task</a></li>
                <li class="px-4"><a href="#">Mint Info</a></li>
                <li class="px-4"><a href="#">Benefits</a></li>
                <li class="px-4"><a href="#">Partners</a></li>
            </ul>
        </div>

        <!-- Buttons -->
        <div class="flex items-center space-x-4">
            <button
                class="flex items-center px-4 py-2 text-[#1A1A1A] rounded-xl font-extrabold text-base bg-gradient-to-br from-[#EC008C] to-[#FFFFFF] shadow-[2px_2px_0_0_#000000]">
                <img src="images/Wallet.svg" alt="Wallet" class="w-4 h-4 mr-2">
                Connect Wallet
            </button>
            <button class="flex items-center px-4 py-2 text-[#1A1A1A] rounded-xl font-bold text-base border shadow-[2px_2px_0_0_#000000] bg-white">
                <img src="images/login-box-fill.svg" alt="Login" class="w-4 h-4 mr-2">
                Login Via Web2
            </button>
        </div>
</header>
