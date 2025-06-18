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
    @elseif ($slide === 3)
        <div class="min-h-screen bg-gradient-to-br from-purple-50 to-purple-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-purple-900 mb-10 text-center drop-shadow-lg">
                Before & After: What You'll Learn
            </h2>

            <div class="flex flex-col md:flex-row gap-10 mb-12 w-full max-w-6xl">
                <div class="bg-white/80 rounded-3xl shadow-2xl p-8 flex-1 flex flex-col items-center border-2 border-purple-200 hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-purple-700 mb-4 text-center flex items-center gap-2">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16m0 0H3"></path></svg>
                        Before This Session
                    </h3>
                    <ul class="list-disc list-inside text-purple-900 text-lg space-y-3 text-left">
                        <li>Confused about <span class="font-bold">rebase</span> vs <span class="font-bold">merge</span></li>
                        <li>Commit history looks like spaghetti</li>
                        <li>Merge conflicts = instant panic</li>
                    </ul>
                </div>
                <div class="bg-white/80 rounded-3xl shadow-2xl p-8 flex-1 flex flex-col items-center border-2 border-purple-200 hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-purple-700 mb-4 text-center flex items-center gap-2">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        After This Session
                    </h3>
                    <ul class="list-disc list-inside text-purple-900 text-lg space-y-3 text-left">
                        <li>Crystal clear on <span class="font-bold">rebase</span> vs <span class="font-bold">merge</span></li>
                        <li>Commit history so clean, you'll want to frame it</li>
                        <li>Merge conflicts? Bring 'em on</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-10 w-full max-w-6xl">
                <div class="flex flex-col items-center bg-purple-100/80 rounded-2xl p-8 shadow-xl flex-1 border border-purple-300">
                    <h3 class="text-2xl font-extrabold text-purple-800 mb-4 flex items-center gap-2">
                        <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
                        Merge Example
                    </h3>
                    <img src="{{ asset('images/merge.svg') }}" alt="Git Merge Graph" class="w-96 h-56 object-contain mb-4 drop-shadow-lg">
                    <p class="text-purple-900 text-center text-lg">
                        <span class="font-bold text-purple-700">Merge</span> keeps all commit history and creates merge commits.<br>
                        <span class="italic text-purple-500">"Why is my git log a family tree?"</span>
                    </p>
                </div>
                <div class="flex flex-col items-center bg-purple-100/80 rounded-2xl p-8 shadow-xl flex-1 border border-purple-300">
                    <h3 class="text-2xl font-extrabold text-purple-800 mb-4 flex items-center gap-2">
                        <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                        Rebase Example
                    </h3>
                    <img src="{{ asset('images/rebase.svg') }}" alt="Git Rebase Graph" class="w-96 h-56 object-contain mb-4 drop-shadow-lg">
                    <p class="text-purple-900 text-center text-lg">
                        <span class="font-bold text-purple-700">Rebase</span> creates a linear, cleaner history by moving your changes on top.<br>
                        <span class="italic text-purple-500">"Like a Laravel migration for your commits!"</span>
                    </p>
                </div>
            </div>
        </div>
    @elseif ($slide === 4)
        <div class="min-h-screen bg-gradient-to-br from-yellow-50 to-yellow-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-yellow-900 mb-8 text-center drop-shadow-lg">
                Rebase vs Merge: The Commands
            </h2>

            <div class="flex flex-col md:flex-row gap-10 w-full max-w-5xl mb-10">
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-yellow-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        Merge
                    </h3>
                    <p class="text-yellow-900 text-lg mb-4 text-center">
                        Combines histories and creates a merge commit.
                    </p>
                    <code class="block bg-gray-900 text-green-200 rounded-lg px-4 py-3 text-lg font-mono mb-2 w-full text-left">
                        git checkout main<br>
                        git merge feature-branch
                    </code>
                </div>
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-yellow-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                        Rebase
                    </h3>
                    <p class="text-yellow-900 text-lg mb-4 text-center">
                        Moves your changes on top for a linear history.
                    </p>
                    <code class="block bg-gray-900 text-blue-200 rounded-lg px-4 py-3 text-lg font-mono mb-2 w-full text-left">
                        git checkout feature-branch<br>
                        git rebase main
                    </code>
                </div>
            </div>

            <p class="text-xl md:text-2xl text-yellow-800 text-center max-w-2xl mt-4">
                <span class="font-bold text-yellow-700">Tip:</span> Use <code class="bg-gray-200 px-2 py-1 rounded font-mono text-base">merge</code> for preserving history, <code class="bg-gray-200 px-2 py-1 rounded font-mono text-base">rebase</code> for a clean, linear commit log!
            </p>
        </div>
    @elseif ($slide === 5)
        <div class="min-h-screen bg-gradient-to-br from-pink-50 to-pink-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-pink-900 mb-8 text-center drop-shadow-lg">
                Pro Level: Advanced Rebase Commands & Tips
            </h2>

            <div class="w-full max-w-3xl bg-white/80 rounded-2xl shadow-xl p-6 mb-8 flex flex-col items-center">
                <h3 class="text-xl font-bold text-pink-800 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                    Visual: Interactive Rebase Flow
                </h3>
                <div x-data="{ showDiagram: false }" class="w-full flex flex-col items-center">
                    <button
                        type="button"
                        x-on:click="showDiagram = !showDiagram"
                        class="cursor-pointer mb-4 px-6 py-2 bg-pink-500 text-white font-semibold rounded-full shadow-lg hover:bg-pink-600 transition text-lg focus:outline-none focus:ring-2 focus:ring-pink-300"
                    >
                        <span x-show="!showDiagram">Show Interactive Rebase Diagram</span>
                        <span x-show="showDiagram">Hide Interactive Rebase Diagram</span>
                    </button>
                    <div x-show="showDiagram" x-collapse class="overflow-x-auto w-full flex justify-center mb-4">
                        <img
                            src="{{ asset('images/rebase-i.svg') }}"
                            alt="Interactive Rebase Flow"
                            class="w-full max-w-xl object-contain drop-shadow-lg rounded-lg border border-pink-200"
                        >
                    </div>
                </div>
                <p class="text-pink-700 text-base mt-2 text-center">
                    <span class="font-bold">Tip:</span> This Mermaid diagram shows the interactive rebase flow. Try it with <span class="font-mono bg-gray-200 px-2 py-1 rounded">git rebase -i</span>!
                </p>
            </div>

            <div class="flex flex-col md:flex-row gap-10 w-full max-w-5xl mb-10">
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-pink-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-pink-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        Interactive Rebase
                    </h3>
                    <p class="text-pink-900 text-lg mb-4 text-center">
                        Edit, squash, or reorder commits for a perfect history.
                    </p>
                    <code class="block bg-gray-900 text-pink-200 rounded-lg px-4 py-3 text-lg font-mono mb-2 w-full text-left overflow-x-auto">
                        git rebase -i HEAD~5
                    </code>
                    <p class="text-pink-700 text-base mt-2 text-center">
                        <span class="font-bold">Tip:</span> Use <span class="bg-gray-200 px-2 py-1 rounded font-mono text-base">pick</span>, <span class="bg-gray-200 px-2 py-1 rounded font-mono text-base">squash</span>, <span class="bg-gray-200 px-2 py-1 rounded font-mono text-base">edit</span> in the editor!
                    </p>
                </div>
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-pink-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-pink-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                        Autosquash & Fixup
                    </h3>
                    <p class="text-pink-900 text-lg mb-4 text-center">
                        Clean up fixup commits automatically.
                    </p>
                    <code class="block bg-gray-900 text-pink-200 rounded-lg px-4 py-3 text-lg font-mono mb-2 w-full text-left overflow-x-auto">
                        git commit --fixup &lt;commit&gt;<br>
                        git rebase -i --autosquash HEAD~5
                    </code>
                    <p class="text-pink-700 text-base mt-2 text-center">
                        <span class="font-bold">Tip:</span> Use <span class="bg-gray-200 px-2 py-1 rounded font-mono text-base">--autosquash</span> to speed up rebasing!
                    </p>
                </div>
            </div>

            <div class="w-full max-w-3xl bg-white/80 rounded-2xl shadow-xl p-6 mb-8">
                <h3 class="text-xl font-bold text-pink-800 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16m0 0H3"></path></svg>
                    Pro Tip: Abort or Continue
                </h3>
                <div class="flex flex-col md:flex-row gap-4">
                    <code class="bg-gray-900 text-pink-200 rounded-lg px-4 py-2 text-base font-mono w-full mb-2 overflow-x-auto">
                        git rebase --abort
                    </code>
                    <code class="bg-gray-900 text-pink-200 rounded-lg px-4 py-2 text-base font-mono w-full mb-2 overflow-x-auto">
                        git rebase --continue
                    </code>
                </div>
                <p class="text-pink-700 text-base mt-2">
                    <span class="font-bold">Abort</span> to stop and undo a rebase, <span class="font-bold">Continue</span> after resolving conflicts.
                </p>
            </div>
        </div>
    @endif
</div>
