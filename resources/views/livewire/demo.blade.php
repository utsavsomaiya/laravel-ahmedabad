<div
    wire:keydown.left.prevent.document="prev"
    wire:keydown.right.prevent.document="next"
    wire:keydown.page-up.prevent.document="prev"
    wire:keydown.page-down.prevent.document="next"
>
    @if ($slide === 1)
        <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-200 flex flex-col items-center justify-center py-12">
            <img
                src="{{ asset('images/utsav.png') }}"
                alt="Utsav Photo"
                class="w-56 h-56 md:w-72 md:h-72 rounded-full object-cover border-8 border-blue-500 shadow-xl mb-8"
            >

            <h1 class="text-4xl md:text-6xl font-extrabold text-blue-800 mb-2 drop-shadow-lg text-center">
                Utsav Somaiya
            </h1>

            <a
                href="https://utsav-somaiya.vercel.app"
                target="_blank"
            `   class="text-lg md:text-2xl text-blue-600 underline mb-6 text-center block"
            >
                utsav-somaiya.vercel.app
            </a>

            <h2 class="text-2xl md:text-4xl font-semibold text-gray-900 mb-4 text-center">
                Rebase Like a Pro: <span class="text-blue-600">Clean Git for Laravel Developers</span>
            </h2>

            <p class="text-lg md:text-2xl text-blue-700 font-medium mb-8 text-center max-w-2xl">
                Master advanced Git workflows to keep your Laravel projects clean, collaborative, and efficient.
                Learn how to rebase, squash, and maintain a readable commit history.
            </p>
        </div>
    @elseif ($slide === 2)
        <div class="min-h-screen bg-gradient-to-br from-green-50 to-green-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-3xl md:text-5xl font-bold text-green-800 mb-8 text-center">
                Quick Poll!
            </h2>

            <ul class="space-y-6 text-xl md:text-2xl text-green-900 font-medium mb-8">
                <li class="flex items-center">
                    <span class="inline-block w-4 h-4 bg-green-500 rounded-full mr-4"></span>
                    How many are using <span class="font-bold text-green-700 ml-1">Git</span>? Or still using <span class="font-bold text-green-700 ml-1">C Panel</span>?
                </li>
                <li class="flex items-center">
                    <span class="inline-block w-4 h-4 bg-green-500 rounded-full mr-4"></span>
                    How many are using <span class="font-bold text-green-700 ml-1 mr-1">rebase</span> instead of <span class="font-bold text-green-700 ml-1">merge</span>?
                </li>
            </ul>

            <p class="text-lg md:text-2xl text-green-700 text-center max-w-xl">
                (Raise your hand or shout out your answer!)
            </p>
        </div>
    @endif
</div>
