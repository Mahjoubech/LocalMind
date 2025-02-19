<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawalni - Ask & Learn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Left Sidebar -->
        <div class="w-72 fixed h-screen bg-white border-r border-gray-200">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="p-6">
                    <div class="flex items-center gap-3">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-blue-700">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent">Sawalni</span>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 space-y-2 py-4">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 text-blue-600 bg-blue-50 rounded-xl">
                        <i class="fas fa-home text-xl"></i>
                        <span class="font-medium">Home</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl transition">
                        <i class="fas fa-comments text-xl"></i>
                        <span class="font-medium">Chat</span>
                        <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl transition">
                        <i class="fas fa-heart text-xl"></i>
                        <span class="font-medium">Favorites</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl transition">
                        <i class="fas fa-user text-xl"></i>
                        <span class="font-medium">Profile</span>
                    </a>
                </nav>

                <!-- User Profile -->
                <div class="p-4 border-t">
                    <button class="flex items-center gap-3 p-3 w-full hover:bg-gray-50 rounded-xl transition">
                        <img class="w-10 h-10 rounded-full object-cover" src="https://api.dicebear.com/6.x/avataaars/svg?seed=John" alt="Profile">
                        <div class="flex-1 text-left">
                            <div class="font-medium text-gray-900">John Doe</div>
                            <div class="text-sm text-gray-500">@johndoe</div>
                        </div>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="ml-72 flex-1 min-h-screen">
            <!-- Header -->
            <header class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-8 py-4">
                    <h1 class="text-xl font-bold text-gray-900">Home Feed</h1>

                    <!-- Search -->
                    <div class="flex-1 max-w-2xl px-8">
                        <div class="relative">
                            <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                            <input
                                type="text"
                                placeholder="Search discussions..."
                                class="w-full bg-gray-100 rounded-xl pl-12 pr-4 py-3 focus:bg-white focus:ring-2 focus:ring-blue-500 border-none"
                            >
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center gap-4">
                        <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-xl">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <button onclick="togglePublishForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-medium transition">
                            Publish
                        </button>
                    </div>
                </div>
            </header>

            <!-- Publish Form -->
            <div id="publishForm" class="hidden px-8 py-6 max-w-3xl">
                <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                    <h3 class="text-lg font-bold mb-4">Create a New Post</h3>
                    <textarea
                        id="postContent"
                        placeholder="What's on your mind?"
                        class="w-full h-32 p-4 border rounded-xl resize-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    ></textarea>
                    <div class="flex justify-end mt-4">
                        <button onclick="submitPost()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-medium transition">
                            Post
                        </button>
                    </div>
                </div>
            </div>

            <!-- Feed -->
            <div id="feedContainer" class="px-8 py-6 max-w-3xl">
                <!-- Posts will be dynamically inserted here -->
            </div>

            <!-- Answer Form Template -->
            <template id="answerFormTemplate">
                <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                    <h3 class="text-lg font-bold mb-4">Your Answer</h3>
                    <textarea
                        class="answer-content w-full h-32 p-4 border rounded-xl resize-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Write your answer here..."
                    ></textarea>
                    <div class="flex justify-end mt-4">
                        <button onclick="submitAnswer(this)" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-medium transition">
                            Submit Answer
                        </button>
                    </div>
                </div>
            </template>
        </main>

        <!-- Right Sidebar -->
        <div class="w-80 fixed right-0 h-screen border-l border-gray-200 bg-white px-6 py-8">
            <div class="space-y-8">
                <!-- Topics -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Trending Topics</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">#WebDev</span>
                        <span class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">#JavaScript</span>
                        <span class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">#UI/UX</span>
                        <span class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">#React</span>
                    </div>
                </div>

                <!-- Top Contributors -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Top Contributors</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <img class="w-10 h-10 rounded-xl" src="https://api.dicebear.com/6.x/avataaars/svg?seed=Alex" alt="Profile">
                            <div>
                                <div class="font-medium text-gray-900">Alex Johnson</div>
                                <div class="text-sm text-gray-500">1.2k answers</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <img class="w-10 h-10 rounded-xl" src="https://api.dicebear.com/6.x/avataaars/svg?seed=Maria" alt="Profile">
                            <div>
                                <div class="font-medium text-gray-900">Maria Garcia</div>
                                <div class="text-sm text-gray-500">943 answers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample post data
        let posts = [
            {
                id: 1,
                author: 'Sarah Chen',
                username: '@sarahchen',
                avatar: 'https://api.dicebear.com/6.x/avataaars/svg?seed=Sarah',
                content: "What's the best way to learn Tailwind CSS? I'm new to Tailwind and wondering what resources you'd recommend for someone just starting out. Any tips or learning paths you found helpful?",
                time: '2 hours ago',
                answers: [],
                likes: 45
            }
        ];

        // Initialize feed
        function initializeFeed() {
            renderPosts();
        }

        // Toggle publish form
        function togglePublishForm() {
            const form = document.getElementById('publishForm');
            form.classList.toggle('hidden');
        }

        // Submit new post
        function submitPost() {
            const content = document.getElementById('postContent').value;
            if (content.trim()) {
                const newPost = {
                    id: posts.length + 1,
                    author: 'John Doe',
                    username: '@johndoe',
                    avatar: 'https://api.dicebear.com/6.x/avataaars/svg?seed=John',
                    content: content,
                    time: 'Just now',
                    answers: [],
                    likes: 0
                };
                posts.unshift(newPost);
                renderPosts();
                document.getElementById('postContent').value = '';
                togglePublishForm();
            }
        }

        // Toggle answer form
        function toggleAnswerForm(postId) {
            const post = document.querySelector(`[data-post-id="${postId}"]`);
            const existingForm = post.querySelector('.answer-form');

            if (existingForm) {
                existingForm.remove();
            } else {
                const template = document.getElementById('answerFormTemplate');
                const form = template.content.cloneNode(true);
                form.firstElementChild.classList.add('answer-form');
                form.firstElementChild.setAttribute('data-post-id', postId);
                post.appendChild(form);
            }
        }

        // Submit answer
        function submitAnswer(button) {
            const form = button.closest('.answer-form');
            const postId = parseInt(form.getAttribute('data-post-id'));
            const content = form.querySelector('textarea').value;

            if (content.trim()) {
                const post = posts.find(p => p.id === postId);
                if (post) {
                    post.answers.push({
                        author: 'John Doe',
                        content: content,
                        time: 'Just now'
                    });
                    renderPosts();
                }
            }
        }

        // Render all posts
        function renderPosts() {
            const container = document.getElementById('feedContainer');
            container.innerHTML = posts.map(post => `
                <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6" data-post-id="${post.id}">
                    <div class="flex items-start gap-4">
                        <img class="w-12 h-12 rounded-xl" src="${post.avatar}" alt="Profile">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="font-medium text-gray-900">${post.author}</span>
                                    <span class="text-gray-500 text-sm ml-2">${post.username}</span>
                                </div>
                                <span class="text-gray-500 text-sm">${post.time}</span>
                            </div>

                            <p class="text-gray-600 mt-2">${post.content}</p>

                            <div class="flex items-center gap-6 mt-4">
                                <button onclick="toggleAnswerForm(${post.id})" class="flex items-center gap-2 text-gray-500 hover:text-blue-600">
                                    <i class="far fa-comment"></i>
                                    <span>${post.answers.length} Answers</span>
                                </button>
                                <button class="flex items-center gap-2 text-gray-500 hover:text-red-500">
                                    <i class="far fa-heart"></i>
                                    <span>${post.likes}</span>
                                </button>
                                <button class="flex items-center gap-2 text-gray-500 hover:text-blue-600">
                                   <i class="far fa-bookmark"></i>
                                </button>
                            </div>

                            ${renderAnswers(post.answers)}
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Render answers for a post
        function renderAnswers(answers) {
            if (!answers.length) return '';

            return `
                <div class="mt-6 space-y-4">
                    ${answers.map(answer => `
                        <div class="pl-4 border-l-2 border-gray-200">
                            <div class="flex items-start gap-3">
                                <img class="w-8 h-8 rounded-lg" src="https://api.dicebear.com/6.x/avataaars/svg?seed=John" alt="Profile">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="font-medium text-gray-900">${answer.author}</span>
                                            <span class="text-gray-500 text-sm ml-2">${answer.time}</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mt-1">${answer.content}</p>
                                </div>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
        }

        // Like post functionality
        function likePost(postId) {
            const post = posts.find(p => p.id === postId);
            if (post) {
                post.likes++;
                renderPosts();
            }
        }

        // Search functionality
        document.querySelector('input[type="text"]').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filteredPosts = posts.filter(post =>
                post.content.toLowerCase().includes(searchTerm) ||
                post.author.toLowerCase().includes(searchTerm) ||
                post.username.toLowerCase().includes(searchTerm)
            );

            const container = document.getElementById('feedContainer');
            if (searchTerm) {
                container.innerHTML = filteredPosts.map(post => `
                    <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6" data-post-id="${post.id}">
                        <!-- Same post template as in renderPosts -->
                    </div>
                `).join('');
            } else {
                renderPosts();
            }
        });

        // Initialize the feed when the page loads
        document.addEventListener('DOMContentLoaded', initializeFeed);
    </script>
</body>
</html>
