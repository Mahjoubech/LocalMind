<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawlni - Email Verification</title>
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
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .pulse {
            animation: pulse 2s infinite;
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
        <div class="max-w-xl w-full bg-glass p-8 rounded-2xl shadow-2xl border border-gray-700/50">
            <!-- Logo and Branding -->
            <div class="text-center mb-8">
                <div class="floating inline-block mb-4">
                    <svg viewBox="0 0 100 100" class="w-20 h-20">
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
                <h1 class="text-4xl font-bold gradient-text mb-2">Verify Your Email</h1>
                <p class="text-gray-400">We've sent a verification code to your email</p>
            </div>

            <!-- Verification Form -->
            <div class="space-y-6">
                <!-- Email Display -->
                <div class="text-center">
                    <p class="text-gray-400">Code sent to</p>
                    <div class="flex items-center justify-center space-x-2 mt-1">
                        <i data-lucide="mail" class="w-5 h-5 text-blue-400"></i>
                        <p class="text-gray-200 font-medium">example@email.com</p>
                    </div>
                </div>

                <!-- Verification Code Input -->
                <form class="space-y-6">
                    <div class="flex justify-center space-x-4">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-gray-800/50 border border-gray-700 rounded-lg text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-gray-800/50 border border-gray-700 rounded-lg text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-gray-800/50 border border-gray-700 rounded-lg text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-bold bg-gray-800/50 border border-gray-700 rounded-lg text-gray-100 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all">
                    </div>

                    <!-- Timer -->
                    <div class="text-center text-gray-400">
                        <p>Code expires in: <span class="text-blue-400 font-medium" id="timer">04:59</span></p>
                    </div>

                    <!-- Verify Button -->
                    <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500/20 transform transition-all hover:-translate-y-0.5">
                        Verify Email
                    </button>
                </form>

                <!-- Resend Option -->
                <div class="text-center space-y-4">
                    <p class="text-gray-400">
                        Didn't receive the code?
                        <button id="resendButton" class="text-blue-400 hover:text-blue-300 font-medium ml-1">
                            Resend Code
                        </button>
                    </p>
                </div>

                <!-- Help Section -->
                <div class="pt-6 border-t border-gray-700/50">
                    <div class="flex items-center justify-center space-x-2 text-gray-400">
                        <i data-lucide="help-circle" class="w-5 h-5"></i>
                        <span>Need help? <a href="#" class="text-blue-400 hover:text-blue-300">Contact Support</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="hidden fixed inset-0 bg-black/75 backdrop-blur-sm flex items-center justify-center">
        <div class="bg-glass p-8 rounded-2xl max-w-md w-full m-4 border border-gray-700/50">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 p-5 pulse">
                    <i data-lucide="check" class="w-full h-full text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-100 mb-3">Email Verified!</h2>
                <p class="text-gray-400 mb-6">Your email has been successfully verified. You can now proceed to your account.</p>
                <button id="continueButton" class="w-full py-3 px-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-lg font-medium hover:from-green-600 hover:to-emerald-600 focus:outline-none focus:ring-2 focus:ring-green-500/20 transform transition-all hover:-translate-y-0.5">
                    Continue to Dashboard
                </button>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Timer functionality
        function startTimer(duration, display) {
            let timer = duration, minutes, seconds;
            let countdown = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdown);
                    display.textContent = "00:00";
                }
            }, 1000);
        }

        // Start timer
        window.onload = function () {
            let fiveMinutes = 60 * 5,
                display = document.querySelector('#timer');
            startTimer(fiveMinutes, display);
        };

        // Code input handling
        const inputs = document.querySelectorAll('input[type="text"]');
        inputs.forEach((input, index) => {
            input.addEventListener('input', function() {
                if (this.value.length === 1) {
                    if (index < inputs.length - 1) inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && !this.value) {
                    if (index > 0) inputs[index - 1].focus();
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('successModal').classList.remove('hidden');
        });

        // Modal handling
        document.getElementById('continueButton').addEventListener('click', function() {
            // Redirect to dashboard or close modal
            document.getElementById('successModal').classList.add('hidden');
        });

        // Resend button
        document.getElementById('resendButton').addEventListener('click', function() {
            this.textContent = 'Code Sent!';
            this.disabled = true;
            setTimeout(() => {
                this.textContent = 'Resend Code';
                this.disabled = false;
            }, 30000);
        });
    </script>
</body>
</html>
