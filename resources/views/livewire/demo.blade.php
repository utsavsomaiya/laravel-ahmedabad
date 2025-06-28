<div
    wire:keydown.left.prevent.document="prev"
    wire:keydown.right.prevent.document="next"
    wire:keydown.page-up.prevent.document="prev"
    wire:keydown.page-down.prevent.document="next"
>
    <div
        x-data="fullscreen"
        class="absolute top-4 right-4 z-50"
    >
        <button
            type="button"
            x-on:click="toggleFullScreen"
            class="bg-white/80 hover:bg-blue-200 text-blue-800 font-bold py-2 px-4 rounded-full shadow-lg border border-blue-300 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400 flex items-center gap-2"
            title="Toggle Full Screen"
        >
            <svg id="fullscreen-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path id="fullscreen-enter" d="M4 4h6M4 4v6M20 4h-6M20 4v6M4 20h6M4 20v-6M20 20h-6M20 20v-6" />
            </svg>
        </button>
    </div>
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
        <div class="min-h-screen bg-gradient-to-br from-orange-50 to-orange-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-orange-900 mb-8 text-center drop-shadow-lg">
                What Actually Happens: Rebase vs Merge
            </h2>

            <div class="flex flex-col md:flex-row gap-10 w-full max-w-5xl mb-10">
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-orange-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-orange-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        Merge: The Classic Way
                    </h3>
                    <ul class="list-disc list-inside text-orange-900 text-lg space-y-3 text-left mb-4">
                        <li>Git finds the common ancestor of both branches.</li>
                        <li>It creates a new <span class="font-bold">merge commit</span> that combines the changes from both branches.</li>
                        <li>All commits from both branches are preserved, including the "merge commit".</li>
                        <li>History can become tangled, especially with many merges.</li>
                    </ul>
                    <p class="text-orange-700 text-base text-center">
                        <span class="font-bold">Result:</span> All changes are combined, but the commit history can look messy.
                    </p>
                </div>
                <div class="bg-white/90 rounded-2xl shadow-xl p-8 flex-1 border-2 border-orange-200 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-orange-700 mb-4 flex items-center gap-2">
                        <svg class="w-7 h-7 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                        Rebase: The Clean Way
                    </h3>
                    <ul class="list-disc list-inside text-orange-900 text-lg space-y-3 text-left mb-4">
                        <li>Git finds the common ancestor of both branches.</li>
                        <li>It <span class="font-bold">removes</span> your branch's commits temporarily.</li>
                        <li>It <span class="font-bold">reapplies</span> your commits one by one on top of the latest main branch.</li>
                        <li>No merge commit is created—history is linear and clean.</li>
                    </ul>
                    <p class="text-orange-700 text-base text-center">
                        <span class="font-bold">Result:</span> Your changes appear as if they were made after the latest main branch commits—super clean history!
                    </p>
                </div>
            </div>

            <p class="text-xl md:text-2xl text-orange-800 text-center max-w-2xl mt-4">
                <span class="font-bold text-orange-700">Summary:</span> <span class="font-mono bg-orange-100 px-2 py-1 rounded">merge</span> preserves all history (including merges), while <span class="font-mono bg-orange-100 px-2 py-1 rounded">rebase</span> rewrites history for clarity.
            </p>
        </div>
    @elseif ($slide === 5)
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
    @elseif ($slide === 6)
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
    @elseif ($slide === 7)
        <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-8 text-center drop-shadow-lg">
                Supercharge Your Workflow: Git Aliases
            </h2>

            <div class="w-full max-w-2xl bg-white/90 rounded-2xl shadow-xl p-8 mb-8">
                <h3 class="text-2xl font-bold text-gray-700 mb-4 flex items-center gap-2">
                    <svg class="size-7 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                    .gitconfig Aliases for Rebasing
                </h3>
                <p class="text-gray-800 text-lg mb-4">
                    Add these to your <span class="font-mono bg-gray-200 px-2 py-1 rounded">~/.gitconfig</span> for faster commands:
                </p>
                <pre class="bg-gray-900 text-green-200 rounded-lg px-4 py-3 text-base font-mono mb-2 overflow-x-auto">
[alias]
    lg = log --graph --abbrev-commit --decorate --date=relative --all --pretty=format:'%C(yellow)%h%Creset - %Cgreen%ad%Creset %C(bold magenta)<%an>%Creset %C(auto)%d%Creset %s'
    last = log -1 HEAD
    r = rebase
    ri = rebase -i
    rs = "!f() { git rebase -i HEAD~$1; }; f"
    rebase-main = "!git fetch origin main && git rebase origin/main"
    pf = push --force-with-lease
    fixup = "!f() { git commit --fixup=$1 && git rebase -i --autosquash $1~1; }; f"
    squash = "!f() { git rebase -i HEAD~$1; }; f"
    wip = "!git add -A && git commit -m 'wip'"
    undo = reset --soft HEAD~1
    st = stash
    co = checkout
    cb = "!git checkout -b"
    up = "!git pull --rebase origin $(git rev-parse --abbrev-ref HEAD)"
    sync-main = "!git fetch origin && git rebase origin/main"
    sync-master = "!git fetch origin && git rebase origin/master"
                </pre>
                <p class="text-gray-700 text-base mt-2">
                    <span class="font-bold">Tip:</span> Now you can run <span class="font-mono bg-gray-200 px-2 py-1 rounded">git rbi HEAD~5</span> or <span class="font-mono bg-gray-200 px-2 py-1 rounded">git squash HEAD~5</span>!
                </p>
            </div>

            <p class="text-xl md:text-2xl text-gray-800 text-center max-w-2xl mt-4">
                <span class="font-bold text-gray-700">Pro Tip:</span> Aliases save time and reduce mistakes. Make your git workflow lightning fast!
            </p>
        </div>
    @elseif ($slide === 8)
        <div class="min-h-screen bg-gradient-to-br from-fuchsia-100 via-sky-100 to-lime-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-fuchsia-700 mb-8 text-center drop-shadow-lg">
                Git Hooks That Save Your Bacon (and Your Repo)
            </h2>

            <div class="w-full max-w-2xl bg-gradient-to-r from-fuchsia-200 via-sky-100 to-lime-100 rounded-2xl shadow-2xl p-8 mb-8 flex flex-col items-center border-4 border-dashed border-fuchsia-300">
                <h3 class="text-2xl font-bold text-lime-700 mb-4 flex items-center gap-2">
                    <svg class="w-7 h-7 text-fuchsia-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                    Pre-push: "Not Today, <span class='font-mono bg-lime-200 px-2 py-1 rounded'>main</span>!"
                </h3>
                <pre class="bg-gray-900 text-fuchsia-200 rounded-lg px-4 py-3 text-base font-mono mb-2 overflow-x-auto">
#!/bin/sh
branch="$(git rev-parse --abbrev-ref HEAD)"
if [ "$branch" = "main" ] || [ "$branch" = "master" ]; then
    echo "🛑 Whoa there, Code Cowboy! No direct pushes to main/master. Make a PR and earn your merge badge! 🤠"
    exit 1
fi
                </pre>
                <p class="text-lime-700 text-base mt-2 text-center">
                    <span class="font-bold">Tip:</span> Drop this in <span class="font-mono bg-lime-200 px-2 py-1 rounded">.git/hooks/pre-push</span> and never be the villain in your team's git history!
                </p>
            </div>

            <div class="w-full max-w-2xl bg-gradient-to-r from-lime-200 via-sky-100 to-fuchsia-100 rounded-2xl shadow-2xl p-8 mb-8 flex flex-col items-center border-4 border-dashed border-lime-300">
                <h3 class="text-2xl font-bold text-fuchsia-700 mb-4 flex items-center gap-2">
                    <svg class="w-7 h-7 text-lime-400 animate-pulse" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                    Pre-commit: "Tests or Tears, Your Choice!"
                </h3>
                <pre class="bg-gray-900 text-lime-200 rounded-lg px-4 py-3 text-base font-mono mb-2 overflow-x-auto">
#!/bin/sh
echo "🧪 Running Laravel tests before you commit... fingers crossed! 🤞"
./vendor/bin/phpunit
status=$?
if [ $status -ne 0 ]; then
    echo "💥 Tests failed! Step away from the keyboard and fix them first. 🚑"
    exit 1
fi
                </pre>
                <p class="text-fuchsia-700 text-base mt-2 text-center">
                    <span class="font-bold">Tip:</span> Save yourself from future facepalms! Put this in <span class="font-mono bg-fuchsia-200 px-2 py-1 rounded">.git/hooks/pre-commit</span>.
                </p>
            </div>

            <p class="text-xl md:text-2xl text-sky-800 text-center max-w-2xl mt-4 font-bold">
                <span class="font-bold text-fuchsia-700">Remember:</span> Friends don't let friends push to <span class="underline decoration-wavy decoration-lime-500">main</span> or break the build.<br>
                <span class="italic text-lime-700">Be a Git Hero, not a Git Horror Story!</span> 🦸‍♂️🦸‍♀️
            </p>
        </div>
    @elseif ($slide === 9)
        <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-sky-100 to-cyan-200 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-indigo-800 mb-8 text-center drop-shadow-lg animate-fade-in">
                Level Up: Real-World Git Rebase Scenarios
            </h2>

            <div class="w-full max-w-4xl bg-white/90 rounded-3xl shadow-2xl p-8 mb-10 flex flex-col gap-8">
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-cyan-700 mb-2 flex items-center gap-2">
                        <svg class="size-7 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
                        Scenario 1: Feature Branch Gone Stale
                    </h3>
                    <p class="text-cyan-900 text-lg mb-2">
                        Your feature branch is weeks behind <span class="font-mono bg-cyan-100 px-1 rounded">main</span>. Instead of merging, rebase to keep your history clean and avoid merge commits!
                    </p>
                    <code class="block bg-gray-900 text-cyan-200 rounded-lg px-4 py-3 text-base font-mono mb-2 w-full text-left overflow-x-auto">
                        git fetch origin<br>
                        git checkout feature-branch<br>
                        git rebase origin/main
                    </code>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-indigo-700 mb-2 flex items-center gap-2">
                        <svg class="size-7 text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                        Scenario 2: Squash Before You Share
                    </h3>
                    <p class="text-indigo-900 text-lg mb-2">
                        Clean up your commit history before opening a PR. Squash those "fix typo" and "wip" commits into meaningful ones!
                    </p>
                    <code class="block bg-gray-900 text-indigo-200 rounded-lg px-4 py-3 text-base font-mono mb-2 w-full text-left overflow-x-auto">
                        git rebase -i HEAD~5
                    </code>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-1">
                <h3 class="text-2xl font-bold text-sky-700 mb-2 flex items-center gap-2">
                    <svg class="size-7 text-cyan-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 12H8m4-4v8"/></svg>
                    Scenario 3: Oops! Fixup & Autosquash
                </h3>
                <p class="text-sky-900 text-lg mb-2">
                    Forgot to add something to an old commit? Use <span class="font-mono bg-sky-100 px-1 rounded">--fixup</span> and <span class="font-mono bg-sky-100 px-1 rounded">--autosquash</span> for a quick, clean fix!
                </p>
                <code class="block bg-gray-900 text-sky-200 rounded-lg px-4 py-3 text-base font-mono mb-2 w-full text-left overflow-x-auto">
                    git commit --fixup &lt;commit-hash&gt;<br>
                    git rebase -i --autosquash HEAD~5
                </code>
                </div>
            </div>
            </div>

            <div class="w-full max-w-2xl bg-gradient-to-r from-cyan-100 via-indigo-100 to-sky-100 rounded-2xl shadow-xl p-6 mb-8 flex flex-col items-center border-2 border-dashed border-cyan-300">
                <h3 class="text-xl font-bold text-indigo-700 mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16m0 0H3"></path></svg>
                    Takeaway
                </h3>
                <p class="text-indigo-900 text-lg text-center">
                    <span class="font-bold text-cyan-700">Rebase</span> isn't just a command—it's a superpower for clean, readable, and professional Git history.<br>
                    <span class="italic text-sky-700">Practice these scenarios and you'll never fear rebasing again!</span>
                </p>
            </div>

            <p class="text-xl md:text-2xl text-cyan-800 text-center max-w-2xl mt-4 font-bold animate-pulse">
                <span class="font-bold text-indigo-700">Ready to rebase like a pro?</span> Try these in your next Laravel project!
            </p>

            <div class="mt-10 w-full max-w-xl bg-white/80 rounded-xl shadow-lg p-6 flex flex-col items-center">
                <h3 class="text-xl font-bold text-indigo-700 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16m0 0H3"></path></svg>
                    Should I do the live coding?
                </h3>
                <p class="text-indigo-900 text-lg text-center">
                    If you're ready, let's jump into a live coding demo and see these commands in action!
                </p>
            </div>
        </div>
    @elseif ($slide === 10)
        <div class="min-h-screen bg-gradient-to-br from-amber-50 via-fuchsia-50 to-sky-100 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-amber-900 mb-8 text-center drop-shadow-lg animate-fade-in">
                Special Thanks: Laravel Ahmedabad Community ❤️
            </h2>
            <div class="flex flex-col md:flex-row gap-8 items-center mb-8">
                <div class="flex flex-col items-center">
                    <img
                        src="{{ asset('images/bhavdip.jpg') }}"
                        alt="Bhavdip"
                        class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-4 border-amber-400 shadow-lg mb-4"
                    >
                    <p class="text-xl md:text-2xl font-bold text-amber-800 text-center">Bhavdip Pambhar</p>
                    <p class="text-base text-amber-700 text-center">Community Lead</p>
                </div>
                <div class="flex flex-col items-center">
                    <img
                        src="{{ asset('images/punyapal.jpg') }}"
                        alt="Punyapal"
                        class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-4 border-fuchsia-400 shadow-lg mb-4"
                    >
                    <p class="text-xl md:text-2xl font-bold text-fuchsia-800 text-center">Punyapal Shah</p>
                    <p class="text-base text-fuchsia-700 text-center">Co-Organizer</p>
                </div>
            </div>
            <p class="text-xl md:text-2xl text-sky-900 font-semibold text-center mb-8 max-w-2xl">
                Huge thanks to Bhavdip, Punyapal, and every member of the Laravel Ahmedabad community for making this event possible and for your amazing support!
            </p>
            <div class="flex flex-col items-center">
                <img
                    src="{{ asset('images/community.jpeg') }}"
                    alt="Laravel Ahmedabad Community Group Photo"
                    class="w-full max-w-2xl h-64 md:h-96 object-cover rounded-2xl border-4 border-sky-200 shadow-2xl mb-4"
                >
                <p class="text-lg md:text-xl text-sky-800 text-center font-medium">
                    Thank you, Laravel Ahmedabad Community! 🚀
                </p>
            </div>
        </div>
    @elseif ($slide === 11)
        <div class="min-h-screen bg-gradient-to-br from-blue-50 via-fuchsia-100 to-yellow-100 flex flex-col items-center justify-center py-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-blue-900 mb-8 text-center drop-shadow-lg animate-fade-in">
                Thank You! 🚀
            </h2>
            <img
                src="{{ asset('images/utsav.png') }}"
                alt="Utsav Somaiya"
                class="w-40 h-40 md:w-56 md:h-56 rounded-full object-cover border-8 border-blue-400 shadow-xl mb-8"
            >
            <p class="text-2xl md:text-3xl text-blue-800 font-semibold mb-6 text-center max-w-2xl">
                Questions? Ideas? Want to connect?
            </p>
            <div class="flex flex-col md:flex-row gap-6 items-center mb-8">
            <a href="https://twitter.com/SomaiyaUtsav" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl flex items-center gap-2">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.47.69a4.3 4.3 0 0 0 1.88-2.37 8.59 8.59 0 0 1-2.72 1.04A4.28 4.28 0 0 0 16.11 4c-2.37 0-4.29 1.92-4.29 4.29 0 .34.04.67.11.99C7.69 9.13 4.07 7.38 1.64 4.7c-.37.64-.58 1.38-.58 2.17 0 1.5.76 2.82 1.92 3.6a4.28 4.28 0 0 1-1.94-.54v.05c0 2.1 1.5 3.85 3.5 4.25-.36.1-.74.16-1.13.16-.28 0-.54-.03-.8-.08.54 1.7 2.1 2.94 3.95 2.97A8.6 8.6 0 0 1 2 19.54c-.29 0-.57-.02-.85-.05A12.13 12.13 0 0 0 8.29 21.5c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.36-.02-.54A8.36 8.36 0 0 0 24 4.59a8.5 8.5 0 0 1-2.54.7z"/></svg>
                @SomaiyaUtsav
            </a>
            <a href="mailto:utsav.infyno@gmail.com" class="text-blue-500 hover:text-blue-700 text-xl flex items-center gap-2">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M2 4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4zm2 0v.01L12 13l8-8.99V4H4zm16 2.41l-7.29 7.3a1 1 0 0 1-1.42 0L4 6.41V20h16V6.41z"/></svg>
                utsav.infyno@gmail.com
            </a>
            </div>
            <div class="flex flex-col items-center mb-4">
            <p class="text-lg md:text-xl text-blue-700 text-center mb-2">
                Slides &amp; resources:
            </p>
            <img
                src="{{ asset('images/qr-code.jpeg') }}"
                alt="QR code for slides and resources"
                class="w-36 h-36 md:w-44 md:h-44 rounded-lg border-4 border-blue-200 shadow-lg mb-2"
            >
            </div>
            <p class="text-xl md:text-2xl text-blue-900 text-center font-bold mt-6">
                Happy Rebasing! 🎉
            </p>
        </div>
    @endif
</div>

@script
    <script>
        Alpine.data('fullscreen', () => {
            return {
                toggleFullScreen() {
                    const doc = document.documentElement
                    if (
                        !document.fullscreenElement &&
                        !document.webkitFullscreenElement &&
                        !document.mozFullScreenElement &&
                        !document.msFullscreenElement
                    ) {
                        switch (true) {
                            case !!doc.requestFullscreen:
                                doc.requestFullscreen()
                                break
                            case !!doc.webkitRequestFullscreen:
                                doc.webkitRequestFullscreen()
                                break
                            case !!doc.mozRequestFullScreen:
                                doc.mozRequestFullScreen()
                                break
                            case !!doc.msRequestFullscreen:
                                doc.msRequestFullscreen()
                                break
                        }
                    } else {
                        switch (true) {
                            case !!document.exitFullscreen:
                                document.exitFullscreen()
                                break
                            case !!document.webkitExitFullscreen:
                                document.webkitExitFullscreen()
                                break
                            case !!document.mozCancelFullScreen:
                                document.mozCancelFullScreen()
                                break
                            case !!document.msExitFullscreen:
                                document.msExitFullscreen()
                                break
                        }
                    }
                }
            }
        })
    </script>
@endscript
