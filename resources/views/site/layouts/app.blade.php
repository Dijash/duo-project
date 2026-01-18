<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Blog | Write & Share Ideas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Ripple Effect */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Loading Bar */
        .loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(90deg, #6366f1, #a855f7, #ec4899);
            width: 0%;
            z-index: 9999;
            transition: width 0.3s ease, opacity 0.5s ease;
        }

        .loading-bar.completed {
            opacity: 0;
        }

        /* Button Styles */
        .btn-primary {
            position: relative;
            overflow: hidden;
        }

        .btn-secondary {
            position: relative;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 text-gray-900 dark:text-gray-50 transition-colors">
    <!-- Loading Bar -->
    <div class="loading-bar"></div>

    <!-- Navigation -->
    @include('includes.navbar')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
   @include('includes.footer')

 <script>
       
        // Loading Bar
        const loadingBar = document.querySelector('.loading-bar');
        window.addEventListener('load', () => {
            loadingBar.style.width = '100%';
            setTimeout(() => {
                loadingBar.classList.add('completed');
            }, 500);
        });

        // Ripple Effect
        function createRipple(event) {
            const button = event.currentTarget;
            const existingRipple = button.querySelector('.ripple');
            if (existingRipple) {
                existingRipple.remove();
            }

            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            ripple.classList.add('ripple');

            button.appendChild(ripple);
        }

        document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
            button.addEventListener('click', createRipple);
        });

        // Counter Animation
        const counterElements = document.querySelectorAll('.counter');
        const animateCounter = (element) => {
            const target = parseInt(element.getAttribute('data-target'));
            let current = 0;
            const increment = target / 30;

            const interval = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target.toLocaleString();
                    clearInterval(interval);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, 30);
        };

        const observerOptions = {
            threshold: 0.5,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counterElements.forEach(element => {
            observer.observe(element);
        });
    </script>