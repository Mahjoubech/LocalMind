<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Sawlni - Sign Up</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/umd/lucide.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        .gradient-text {
            background: linear-gradient(135deg, #60A5FA, #A78BFA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-glass {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="min-h-screen bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black">
    <!-- Decorative Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-48 -left-48 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20"></div>
        <div class="absolute -bottom-48 -right-48 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20"></div>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-4xl w-full bg-glass p-8 rounded-2xl shadow-2xl border border-gray-700/50">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Left Side - Branding -->
                <div class="flex flex-col justify-center items-center md:items-start space-y-6 p-4">
                    <div class="floating">
                        <svg viewBox="0 0 100 100" class="w-24 h-24">
                            <circle cx="50" cy="50" r="45" fill="none" stroke="url(#grad)" stroke-width="2"/>
                            <path d="M30 50 L70 50 M50 30 L50 70" stroke="url(#grad)" stroke-width="2"/>
                            <defs>
                                <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#60A5FA"/>
                                    <stop offset="100%" style="stop-color:#A78BFA"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-center md:text-left">
                        <h1 class="text-5xl font-bold gradient-text mb-4">Sawlni</h1>
                        <p class="text-gray-300 text-lg">Start your journey with us</p>
                    </div>
                    <div class="hidden md:block space-y-4 text-gray-400">
                        <div class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-blue-400"></i>
                            <span>Secure & encrypted data</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i data-lucide="shield" class="w-5 h-5 text-purple-400"></i>
                            <span>24/7 dedicated support</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i data-lucide="zap" class="w-5 h-5 text-yellow-400"></i>
                            <span>Lightning fast experience</span>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="space-y-6">
                    <form id="signupForm" class="grid grid-cols-1 gap-5">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">Full Name</label>
                            <div class="relative">
                                <i data-lucide="user" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                                <input type="text" required class="w-full pl-10 pr-4 py-3 bg-gray-800/50 rounded-lg border border-gray-700 text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">Email Address</label>
                            <div class="relative">
                                <i data-lucide="mail" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                                <input type="email" required class="w-full pl-10 pr-4 py-3 bg-gray-800/50 rounded-lg border border-gray-700 text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">Password</label>
                            <div class="relative">
                                <i data-lucide="lock" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                                <input type="password" id="password" required class="w-full pl-10 pr-12 py-3 bg-gray-800/50 rounded-lg border border-gray-700 text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                                <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2">
                                    <i data-lucide="eye" class="w-5 h-5 text-gray-400 hover:text-gray-300"></i>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300">Confirm Password</label>
                            <div class="relative">
                                <i data-lucide="lock" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                                <input type="Cpassword" id="password" required class="w-full pl-10 pr-12 py-3 bg-gray-800/50 rounded-lg border border-gray-700 text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                                <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2">
                                    <i data-lucide="eye" class="w-5 h-5 text-gray-400 hover:text-gray-300"></i>
                                </button>
                            </div>
                        </div>


                        <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500/20 transform transition-all hover:-translate-y-0.5">
                            Create Account
                        </button>

                        <p class="text-center text-gray-400">
                            Already have an account?
                            <a href="#" class="text-blue-400 hover:text-blue-300 font-medium">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Verification Modal -->
    <div id="verificationModal" class="hidden fixed inset-0 bg-black/75 backdrop-blur-sm flex items-center justify-center">
        <div class="bg-glass p-8 rounded-2xl max-w-md w-full m-4 border border-gray-700/50">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 p-5">
                    <i data-lucide="mail" class="w-full h-full text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-100 mb-3">Verify your email</h2>
                <p class="text-gray-400 mb-6">We've sent a verification link to your email address. Please check your inbox and click the link to complete your registration.</p>
                <button id="closeModal" class="text-blue-400 hover:text-blue-300 font-medium">
                    Close this window
                </button>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Form elements
        const form = document.getElementById('signupForm');
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const verificationModal = document.getElementById('verificationModal');
        const closeModal = document.getElementById('closeModal');

        // Password visibility toggle
        togglePassword.addEventListener('click', () => {
            const input = passwordInput;
            const icon = togglePassword.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.setAttribute('data-lucide', 'eye-off');
            } else {
                input.type = 'password';
                icon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        });

        // Password validation
        function validatePassword(password) {
            const criteria = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password)
            };

            Object.entries(criteria).forEach(([criterion, isValid]) => {
                const element = document.querySelector(`[data-criterion="${criterion}"]`);
                const icon = element.querySelector('i');
                element.classList.toggle('text-green-400', isValid);
                element.classList.toggle('text-gray-400', !isValid);
                icon.setAttribute('data-lucide', isValid ? 'check-circle' : 'circle');
                lucide.createIcons();
            });

            return Object.values(criteria).every(Boolean);
        }

        passwordInput.addEventListener('input', () => validatePassword(passwordInput.value));

        // Form submission
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (!validatePassword(passwordInput.value)) {
                alert('Please meet all password requirements!');
                return;
            }
            verificationModal.classList.remove('hidden');
        });

        // Close modal
        closeModal.addEventListener('click', () => {
            verificationModal.classList.add('hidden');
        });

        // Close modal when clicking outside
        verificationModal.addEventListener('click', (e) => {
            if (e.target === verificationModal) {
                verificationModal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
