<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $customizedTemplate->page_name ?? 'Memory' }} - Hamro Yaad</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ff5252;
            --accent-color: #ff8fab;
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --border-color: #334155;
            --shadow: rgba(0, 0, 0, 0.3);
            --gradient-1: linear-gradient(135deg, #ff6b6b 0%, #ff5252 100%);
            --gradient-2: linear-gradient(135deg, #ff8fab 0%, #ff6b9d 100%);
            --gradient-3: linear-gradient(135deg, #ff6b6b 0%, #ff8fab 100%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: {{ $customizedTemplate->bg_color ?? 'var(--bg-dark)' }};
            color: var(--text-primary);
            overflow-x: hidden;
            min-height: 100vh;
            scroll-behavior: smooth;
            transition: background-color 0.5s ease;
            position: relative;
        }

        /* Glassy Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 107, 107, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 82, 82, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 143, 171, 0.15) 0%, transparent 50%);
            backdrop-filter: blur(20px) saturate(150%);
            -webkit-backdrop-filter: blur(20px) saturate(150%);
            z-index: -1;
            animation: backgroundShift 20s ease infinite;
        }
        
        /* Additional glassy overlay for depth */
        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: -1;
            pointer-events: none;
        }

        @keyframes backgroundShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Gallery Container */
        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .gallery-header {
            margin-bottom: 3rem;
            padding-top: 5rem; /* Add space for floating audio player */
            animation: fadeInDown 0.8s ease;
        }
        
        @media (max-width: 768px) {
            .gallery-header {
                padding-top: 4rem; /* Less space on mobile */
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .header-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .header-logo img {
            height: 3rem;
            width: auto;
            object-fit: contain;
        }
        
        .header-logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
            background-size: 200% 200%;
            letter-spacing: 0.5px;
        }
        
        @media (min-width: 768px) {
            .header-logo img {
                height: 4rem;
            }
            .header-logo-text {
                font-size: 1.75rem;
            }
        }

        .gallery-title {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .title-main {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .title-subtitle {
            font-size: 1rem;
            color: var(--text-secondary);
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* View Controls */
        .view-controls {
            display: flex;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            padding: 0.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2),
                        inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .view-btn {
            background: transparent;
            border: none;
            color: var(--text-secondary);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .view-btn:hover {
            background: rgba(255, 107, 107, 0.2);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .view-btn.active {
            background: transparent;
            color: var(--primary-color);
        }
        
        .view-btn.active svg {
            filter: drop-shadow(0 0 4px var(--primary-color));
        }

        /* Custom Message Section */
        .custom-message-section {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem;
            background: linear-gradient(135deg, rgba(255, 107, 107, 0.1) 0%, rgba(255, 82, 82, 0.1) 100%);
            border-radius: 20px;
            border: 2px solid rgba(255, 107, 107, 0.2);
            animation: fadeInUp 0.8s ease 0.2s both;
            position: relative;
            overflow: hidden;
        }

        .custom-message-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 107, 107, 0.1) 0%, transparent 70%);
            animation: messageRotate 15s linear infinite;
        }

        @keyframes messageRotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .custom-message-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 0.75rem;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 1;
            animation: titlePulse 3s ease infinite;
        }

        @keyframes titlePulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.02);
            }
        }

        .custom-message-subtitle {
            font-size: clamp(1rem, 2vw, 1.3rem);
            color: var(--text-secondary);
            font-weight: 300;
            position: relative;
            z-index: 1;
            letter-spacing: 1px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Gallery Wrapper */
        .gallery-wrapper {
            position: relative;
            min-height: 400px;
        }

        .gallery-grid {
            display: grid;
            gap: 1.5rem;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 1;
            transform: scale(1);
        }

        /* Grid View */
        .gallery-grid.grid-view {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }

        /* Masonry View */
        .gallery-grid.masonry-view {
            column-count: 4;
            column-gap: 1.5rem;
        }

        @media (max-width: 1200px) {
            .gallery-grid.masonry-view {
                column-count: 3;
            }
        }

        @media (max-width: 768px) {
            .gallery-grid.masonry-view {
                column-count: 2;
            }
        }

        @media (max-width: 480px) {
            .gallery-grid.masonry-view {
                column-count: 1;
            }
        }

        /* Carousel View */
        .gallery-grid.carousel-view {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            gap: 1.5rem;
            padding-bottom: 1rem;
            -webkit-overflow-scrolling: touch;
        }

        .gallery-grid.carousel-view::-webkit-scrollbar {
            height: 8px;
        }

        .gallery-grid.carousel-view::-webkit-scrollbar-track {
            background: var(--bg-card);
            border-radius: 10px;
        }

        .gallery-grid.carousel-view::-webkit-scrollbar-thumb {
            background: var(--gradient-1);
            border-radius: 10px;
        }

        /* Diamond Grid View */
        .gallery-grid.diamond-view {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            perspective: 1200px;
            padding: 2rem 0;
        }

        .gallery-grid.diamond-view .gallery-item {
            aspect-ratio: 1;
            position: relative;
            overflow: visible;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
        }

        .gallery-grid.diamond-view .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            background: var(--gradient-1);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
            filter: blur(20px);
            transform: scale(1.1);
        }

        .gallery-grid.diamond-view .gallery-item img {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-grid.diamond-view .gallery-item:hover {
            transform: translateY(-15px) scale(1.08);
            z-index: 10;
        }

        .gallery-grid.diamond-view .gallery-item:hover::before {
            opacity: 0.6;
        }

        .gallery-grid.diamond-view .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-grid.diamond-view .gallery-item-overlay {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            border-radius: 0;
        }

        .gallery-grid.diamond-view .gallery-item:nth-child(odd) {
            transform: rotate(-2deg);
        }

        .gallery-grid.diamond-view .gallery-item:nth-child(even) {
            transform: rotate(2deg);
        }

        .gallery-grid.diamond-view .gallery-item:nth-child(3n) {
            transform: rotate(-1deg);
        }

        .gallery-grid.diamond-view .gallery-item:hover {
            transform: translateY(-15px) scale(1.08) rotate(0deg) !important;
        }

        /* List View */
        .gallery-grid.list-view {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        /* Gallery Item */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: fadeInScale 0.6s ease both;
            opacity: 0;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2), 
                        inset 0 1px 0 rgba(255, 255, 255, 0.1),
                        0 0 0 1px rgba(255, 255, 255, 0.1);
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .gallery-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--gradient-1);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
            border-radius: 16px;
            mix-blend-mode: overlay;
        }
        
        .gallery-item:hover::before {
            opacity: 0.1;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .gallery-grid.grid-view .gallery-item {
            aspect-ratio: 1;
        }

        .gallery-grid.masonry-view .gallery-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
            display: inline-block;
            width: 100%;
        }

        .gallery-grid.carousel-view .gallery-item {
            flex: 0 0 400px;
            scroll-snap-align: start;
            height: 500px;
        }

        @media (max-width: 768px) {
            .gallery-grid.carousel-view .gallery-item {
                flex: 0 0 300px;
                height: 400px;
            }
        }

        .gallery-grid.list-view .gallery-item {
            display: flex;
            height: 200px;
            gap: 1.5rem;
        }

        .gallery-grid.list-view .gallery-item img {
            width: 300px;
            height: 100%;
            object-fit: cover;
        }

        .gallery-item:hover {
            transform: translateY(-12px) scale(1.05);
            box-shadow: 0 20px 60px rgba(255, 107, 107, 0.5), 0 0 0 1px rgba(255, 107, 107, 0.3);
            border-color: rgba(255, 107, 107, 0.3);
        }

        .gallery-grid.grid-view .gallery-item:hover {
            transform: translateY(-12px) scale(1.08) rotate(2deg);
        }
        
        .gallery-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
            transition: left 0.6s ease;
            z-index: 2;
        }
        
        .gallery-item:hover::after {
            left: 100%;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            display: block;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.2) 50%, transparent 100%);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            opacity: 0;
            transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            pointer-events: none;
            z-index: 3;
            border-radius: 16px;
        }

        .gallery-item:hover .gallery-item-overlay {
            opacity: 1;
        }
        
        .gallery-item-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: white;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            transform: translateY(20px);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .gallery-item:hover .gallery-item-title {
            transform: translateY(0);
        }
        
        .gallery-item-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--gradient-2);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(255, 143, 171, 0.5);
            opacity: 0;
            transform: scale(0.8) translateY(-10px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 4;
        }
        
        .gallery-item:hover .gallery-item-badge {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(30px) saturate(150%);
            -webkit-backdrop-filter: blur(30px) saturate(150%);
            z-index: 10000;
            display: none;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            overflow: hidden;
        }

        .lightbox.active {
            display: flex;
            opacity: 1;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            z-index: 10001;
            animation: lightboxFadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes lightboxFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
            border-radius: 16px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.6);
        }

        .lightbox-close {
            position: absolute;
            top: 2rem;
            right: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 3rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10002;
        }

        .lightbox-close:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: rotate(90deg) scale(1.1);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            font-size: 3rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10002;
        }

        .lightbox-nav:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.2);
        }

        .lightbox-prev {
            left: 2rem;
        }

        .lightbox-next {
            right: 2rem;
        }

        /* Message Section - Premium (Not in Box) */
        .message-section {
            margin: 4rem auto;
            max-width: 900px;
            padding: 0 2rem;
            text-align: center;
            animation: messageFadeIn 1s ease 0.5s both;
        }

        @keyframes messageFadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message-content {
            position: relative;
        }

        .message-text {
            font-size: clamp(1.1rem, 2vw, 1.4rem);
            line-height: 2;
            color: var(--text-primary);
            margin: 0 0 2rem 0;
            white-space: pre-wrap;
            word-wrap: break-word;
            text-align: center;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .from-section {
            margin-top: 3rem;
            text-align: right;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 107, 107, 0.2);
        }

        .from-text {
            font-size: clamp(1.2rem, 2.5vw, 1.6rem);
            font-weight: 500;
            color: var(--primary-color);
            font-style: italic;
            letter-spacing: 1px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .gallery-container {
                padding: 1rem;
            }

            .title-main {
                font-size: 2rem;
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .gallery-grid.grid-view {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 1rem;
            }
        }

        @media (max-width: 768px) {
            .gallery-grid.diamond-view {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }

            .gallery-grid.diamond-view .gallery-item:nth-child(odd),
            .gallery-grid.diamond-view .gallery-item:nth-child(even),
            .gallery-grid.diamond-view .gallery-item:nth-child(3n) {
                transform: rotate(0deg);
            }
        }

        /* Smooth Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        /* YouTube Audio Player - Compact Size */
        .audio-player-container {
            position: fixed;
            top: 1rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            width: auto;
            max-width: 90%;
            min-width: 280px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(40px) saturate(180%);
            -webkit-backdrop-filter: blur(40px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2), 
                        inset 0 1px 0 rgba(255, 255, 255, 0.3);
            padding: 0.5rem 0.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .audio-player-container:hover {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25), 
                        inset 0 1px 0 rgba(255, 255, 255, 0.4);
        }
        
        .audio-player-wrapper {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            width: 100%;
        }
        
        .audio-player-controls {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex: 1;
            min-width: 0;
        }
        
        .audio-play-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 0.875rem;
            flex-shrink: 0;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        
        .audio-play-btn:hover {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        
        .audio-play-btn:active {
            transform: scale(0.95);
        }
        
        .audio-info {
            flex: 1;
            min-width: 0;
            display: flex;
            flex-direction: column;
            gap: 0.125rem;
        }
        
        .audio-title {
            font-size: 0.75rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .audio-subtitle {
            font-size: 0.625rem;
            color: rgba(255, 255, 255, 0.75);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
        }
        
        .audio-progress-container {
            display: none; /* Hide progress on small player */
        }
        
        .audio-player-container.hidden {
            display: none;
        }
        
        body.has-audio-player {
            padding-top: 0; /* No padding needed for floating player */
        }
        
        @media (min-width: 640px) {
            .audio-player-container {
                min-width: 320px;
                padding: 0.625rem 1rem;
            }
            
            .audio-play-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .audio-title {
                font-size: 0.8125rem;
            }
            
            .audio-subtitle {
                font-size: 0.6875rem;
            }
        }
        
        @media (min-width: 1024px) {
            .audio-progress-container {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                min-width: 0;
                max-width: 200px;
            }
            
            .audio-progress-time {
                font-size: 0.625rem;
                color: rgba(255, 255, 255, 0.8);
                font-variant-numeric: tabular-nums;
                flex-shrink: 0;
                min-width: 30px;
                text-align: right;
            }
            
            .audio-progress-bar-wrapper {
                flex: 1;
                height: 3px;
                background: rgba(255, 255, 255, 0.25);
                border-radius: 2px;
                cursor: pointer;
                position: relative;
                transition: height 0.2s ease;
            }
            
            .audio-progress-bar-wrapper:hover {
                height: 4px;
            }
            
            .audio-progress-bar {
                height: 100%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 2px;
                width: 0%;
                transition: width 0.1s linear;
                position: relative;
            }
            
            .audio-progress-bar::after {
                content: '';
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 8px;
                height: 8px;
                background: white;
                border-radius: 50%;
                opacity: 0;
                transition: opacity 0.2s ease;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            }
            
            .audio-progress-bar-wrapper:hover .audio-progress-bar::after {
                opacity: 1;
            }
        }
        
        /* Premium Message Section - Not in Box */
        .message-section {
            margin: 4rem auto;
            max-width: 900px;
            padding: 0 2rem;
            text-align: center;
        }
        
        .message-text {
            font-size: clamp(1.1rem, 2vw, 1.4rem);
            line-height: 2;
            color: var(--text-primary);
            margin: 0 0 2rem 0;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-weight: 300;
            letter-spacing: 0.5px;
        }
        
        .from-section {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 107, 107, 0.2);
        }
        
        .from-text {
            font-size: clamp(1.2rem, 2.5vw, 1.6rem);
            font-weight: 500;
            color: var(--primary-color);
            font-style: italic;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="{{ $customizedTemplate->youtube_url ? 'has-audio-player' : '' }}">
    <!-- YouTube Audio Player - Fixed at Top (Spotify Style) -->
    @if($customizedTemplate->youtube_url)
    <div class="audio-player-container" id="audioPlayerContainer">
        <div class="audio-player-wrapper">
            <div class="audio-player-controls">
                <button class="audio-play-btn" id="audioPlayBtn" aria-label="Play/Pause">
                    <span id="playIcon">▶</span>
                </button>
                <div class="audio-info">
                    <div class="audio-title">Background Music</div>
                    <div class="audio-subtitle">YouTube</div>
                </div>
                <div class="audio-progress-container">
                    <span class="audio-progress-time" id="currentTime">0:00</span>
                    <div class="audio-progress-bar-wrapper" id="progressBarWrapper">
                        <div class="audio-progress-bar" id="progressBar"></div>
                    </div>
                    <span class="audio-progress-time" id="totalTime">0:00</span>
                </div>
            </div>
        </div>
        <div id="youtubeAudioFrame" style="position: absolute; width: 1px; height: 1px; opacity: 0; pointer-events: none; overflow: hidden;"></div>
    </div>
    @endif
    
    <div class="gallery-container">
        <!-- Header -->
        <header class="gallery-header">
            <div class="header-content">
                <div class="header-logo">
                    <img src="{{ asset('assets/logo.png') }}" alt="Hamro Yaad" class="h-12 md:h-16 w-auto">
                    <span class="header-logo-text">Hamro Yaad</span>
                </div>
                <div class="view-controls">
                    <button class="view-btn active" data-view="grid" title="Grid View">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <rect x="2" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                            <rect x="12" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                            <rect x="2" y="12" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                            <rect x="12" y="12" width="6" height="6" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </button>
                    <button class="view-btn" data-view="masonry" title="Masonry View">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <rect x="2" y="2" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                            <rect x="11" y="2" width="7" height="4" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                            <rect x="11" y="8" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </button>
                    <button class="view-btn" data-view="carousel" title="Carousel View">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="6" cy="10" r="1.5" fill="currentColor"/>
                            <circle cx="10" cy="10" r="1.5" fill="currentColor"/>
                            <circle cx="14" cy="10" r="1.5" fill="currentColor"/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Custom Message Title -->
        @if($customizedTemplate->heading || $customizedTemplate->subheading)
        <div class="custom-message-section">
            <h2 class="custom-message-title">{{ $customizedTemplate->heading ?? 'Hamro Yaad' }}</h2>
            @if($customizedTemplate->subheading)
            <p class="custom-message-subtitle">{{ $customizedTemplate->subheading }}</p>
            @endif
        </div>
        @endif

        <!-- Gallery Grid -->
        <div class="gallery-wrapper" id="galleryWrapper">
            <div class="gallery-grid grid-view" id="galleryGrid">
                @php
                    $allImages = [];
                    // Add heading images
                    if ($customizedTemplate->heading_images && count($customizedTemplate->heading_images) > 0) {
                        foreach ($customizedTemplate->heading_images as $img) {
                            $allImages[] = $img;
                        }
                    }
                    // Add additional images
                    if ($customizedTemplate->images && isset($customizedTemplate->images['memories']) && count($customizedTemplate->images['memories']) > 0) {
                        foreach ($customizedTemplate->images['memories'] as $img) {
                            $allImages[] = $img;
                        }
                    }
                @endphp
                
                @foreach($allImages as $index => $imagePath)
                    @php
                        $imageUrl = $imagePath;
                        if (str_starts_with($imagePath, 'http')) {
                            $imageUrl = $imagePath;
                        } elseif (str_starts_with($imagePath, '/storage')) {
                            $imageUrl = asset($imagePath);
                        } elseif (str_starts_with($imagePath, 'storage/')) {
                            $imageUrl = asset('/' . $imagePath);
                        } else {
                            $imageUrl = asset('storage/' . $imagePath);
                        }
                    @endphp
                    <div class="gallery-item" data-index="{{ $index }}" style="animation-delay: {{ $index * 0.05 }}s;">
                        <img src="{{ $imageUrl }}" alt="Memory Image {{ $index + 1 }}" 
                             onerror="this.style.display='none';" loading="lazy">
                        <div class="gallery-item-badge">Memory {{ $index + 1 }}</div>
                        <div class="gallery-item-overlay">
                            <div class="gallery-item-title">Memory {{ $index + 1 }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" id="lightboxClose">&times;</button>
            <button class="lightbox-nav lightbox-prev" id="lightboxPrev">&#8249;</button>
            <button class="lightbox-nav lightbox-next" id="lightboxNext">&#8250;</button>
            <div class="lightbox-content">
                <img src="" alt="" id="lightboxImage">
            </div>
        </div>

        <!-- Message Section -->
        @if($customizedTemplate->message || $customizedTemplate->from)
        <section class="message-section">
            <div class="message-content">
                @if($customizedTemplate->message)
                <div class="message-display">
                    <p class="message-text">{{ $customizedTemplate->message }}</p>
                </div>
                @endif
                
                @if($customizedTemplate->from)
                <div class="from-section">
                    <p class="from-text">— {{ $customizedTemplate->from }}</p>
                </div>
                @endif
            </div>
        </section>
        @endif
    </div>

    <script>
        // Gallery Data
        const galleryData = [
            @foreach($allImages as $index => $imagePath)
                @php
                    $imageUrl = $imagePath;
                    if (str_starts_with($imagePath, 'http')) {
                        $imageUrl = $imagePath;
                    } elseif (str_starts_with($imagePath, '/storage')) {
                        $imageUrl = asset($imagePath);
                    } elseif (str_starts_with($imagePath, 'storage/')) {
                        $imageUrl = asset('/' . $imagePath);
                    } else {
                        $imageUrl = asset('storage/' . $imagePath);
                    }
                @endphp
                {
                    id: {{ $index + 1 }},
                    image: "{{ $imageUrl }}",
                    title: "Memory {{ $index + 1 }}"
                }{{ $index < count($allImages) - 1 ? ',' : '' }}
            @endforeach
        ];

        // State Management
        let currentView = 'grid';
        let currentImageIndex = 0;

        // DOM Elements
        const galleryGrid = document.getElementById('galleryGrid');
        const viewButtons = document.querySelectorAll('.view-btn');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');

        // Switch View
        function switchView(view) {
            currentView = view;
            
            viewButtons.forEach(btn => {
                btn.classList.toggle('active', btn.dataset.view === view);
            });
            
            galleryGrid.className = `gallery-grid ${view}-view`;
            galleryGrid.style.opacity = '0';
            galleryGrid.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                galleryGrid.style.opacity = '1';
                galleryGrid.style.transform = 'scale(1)';
            }, 300);
        }

        // View buttons - only grid, masonry, carousel
        viewButtons.forEach(btn => {
            const view = btn.dataset.view;
            if (['grid', 'masonry', 'carousel'].includes(view)) {
                btn.addEventListener('click', () => {
                    switchView(view);
                });
            }
        });

        // Open Lightbox
        function openLightbox(index) {
            if (index < 0 || index >= galleryData.length) return;
            
            currentImageIndex = index;
            const item = galleryData[index];
            
            lightboxImage.src = item.image;
            lightboxImage.alt = item.title;
            
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                lightbox.classList.add('active');
            }, 10);
        }

        // Close Lightbox
        function closeLightbox() {
            lightbox.classList.remove('active');
            setTimeout(() => {
                lightbox.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }

        // Navigate Lightbox
        function navigateLightbox(direction) {
            currentImageIndex += direction;
            
            if (currentImageIndex < 0) {
                currentImageIndex = galleryData.length - 1;
            } else if (currentImageIndex >= galleryData.length) {
                currentImageIndex = 0;
            }
            
            const item = galleryData[currentImageIndex];
            lightboxImage.src = item.image;
            lightboxImage.alt = item.title;
        }

        // Gallery item clicks
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            item.addEventListener('click', () => {
                openLightbox(index);
            });
        });

        // Lightbox controls
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxPrev.addEventListener('click', () => navigateLightbox(-1));
        lightboxNext.addEventListener('click', () => navigateLightbox(1));

        // Close on background click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('active')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') navigateLightbox(-1);
                if (e.key === 'ArrowRight') navigateLightbox(1);
            }
        });

        // Animate items on load
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = '1';
            }, index * 50);
        });
        
        // YouTube Audio Player using IFrame API for reliable autoplay
        @if($customizedTemplate->youtube_url)
        (function() {
            const youtubeUrl = "{{ $customizedTemplate->youtube_url }}";
            const audioPlayBtn = document.getElementById('audioPlayBtn');
            const playIcon = document.getElementById('playIcon');
            const youtubeFrame = document.getElementById('youtubeAudioFrame');
            const progressBar = document.getElementById('progressBar');
            const progressBarWrapper = document.getElementById('progressBarWrapper');
            const currentTimeEl = document.getElementById('currentTime');
            const totalTimeEl = document.getElementById('totalTime');
            let isPlaying = false;
            let youtubeVideoId = '';
            let player = null;
            let playerReady = false;
            let progressInterval = null;
            let videoDuration = 0;
            
            // Extract video ID from YouTube URL
            function extractVideoId(url) {
                const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
                const match = url.match(regExp);
                return (match && match[2].length === 11) ? match[2] : null;
            }
            
            youtubeVideoId = extractVideoId(youtubeUrl);
            
            if (!youtubeVideoId) {
                console.error('Invalid YouTube URL:', youtubeUrl);
                if (playIcon) playIcon.textContent = '⚠';
                return;
            }
            
            // Load YouTube IFrame API
            function loadYouTubeAPI() {
                if (window.YT && window.YT.Player) {
                    initPlayer();
                    return;
                }
                
                if (!document.querySelector('script[src*="youtube.com/iframe_api"]')) {
                    const tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    tag.async = true;
                    const firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                }
                
                window.onYouTubeIframeAPIReady = function() {
                    if (window.YT && window.YT.Player) {
                        initPlayer();
                    }
                };
            }
            
            function initPlayer() {
                try {
                    if (!youtubeFrame) {
                        console.error('YouTube container not found');
                        return;
                    }
                    
                    player = new YT.Player('youtubeAudioFrame', {
                        videoId: youtubeVideoId,
                        width: '1',
                        height: '1',
                        playerVars: {
                            'autoplay': 1,
                            'mute': 1,  // Start muted for autoplay
                            'loop': 1,
                            'playlist': youtubeVideoId,
                            'controls': 0,
                            'disablekb': 1,
                            'enablejsapi': 1,
                            'fs': 0,
                            'modestbranding': 1,
                            'playsinline': 1,
                            'rel': 0
                        },
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange,
                            'onError': onPlayerError
                        }
                    });
                } catch (error) {
                    console.error('Error initializing YouTube player:', error);
                    if (playIcon) playIcon.textContent = '⚠';
                }
            }
            
            // Format time helper
            function formatTime(seconds) {
                if (isNaN(seconds) || !isFinite(seconds)) return '0:00';
                const mins = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${mins}:${secs.toString().padStart(2, '0')}`;
            }
            
            // Update progress bar
            function updateProgress() {
                if (!player || !playerReady) return;
                
                try {
                    const currentTime = player.getCurrentTime();
                    const duration = player.getDuration();
                    
                    if (duration && duration > 0) {
                        videoDuration = duration;
                        const progress = (currentTime / duration) * 100;
                        if (progressBar) {
                            progressBar.style.width = progress + '%';
                        }
                        if (currentTimeEl) {
                            currentTimeEl.textContent = formatTime(currentTime);
                        }
                        if (totalTimeEl) {
                            totalTimeEl.textContent = formatTime(duration);
                        }
                    }
                } catch (e) {
                    console.warn('Error updating progress:', e);
                }
            }
            
            // Start progress updates
            function startProgressUpdates() {
                if (progressInterval) clearInterval(progressInterval);
                progressInterval = setInterval(updateProgress, 200);
            }
            
            // Stop progress updates
            function stopProgressUpdates() {
                if (progressInterval) {
                    clearInterval(progressInterval);
                    progressInterval = null;
                }
            }
            
            function onPlayerReady(event) {
                playerReady = true;
                console.log('YouTube player ready, starting playback...');
                
                try {
                    // Set volume to 100
                    event.target.setVolume(100);
                    
                    // Start playing (muted autoplay should work)
                    event.target.playVideo();
                    
                    // Check if it's actually playing after a short delay
                    setTimeout(() => {
                        try {
                            const state = event.target.getPlayerState();
                            console.log('Initial player state:', state);
                            
                            if (state === YT.PlayerState.PLAYING) {
                                isPlaying = true;
                                if (playIcon) playIcon.textContent = '⏸';
                                console.log('Audio is playing (muted)! Unmuting automatically...');
                                startProgressUpdates();
                                // Get duration
                                try {
                                    const duration = event.target.getDuration();
                                    if (duration && duration > 0) {
                                        videoDuration = duration;
                                        if (totalTimeEl) {
                                            totalTimeEl.textContent = formatTime(duration);
                                        }
                                    }
                                } catch (e) {
                                    console.warn('Could not get duration:', e);
                                }
                                // Unmute automatically after a short delay to ensure playback is stable
                                setTimeout(() => {
                                    try {
                                        event.target.unMute();
                                        console.log('Audio unmuted automatically!');
                                    } catch (e) {
                                        console.warn('Could not unmute:', e);
                                    }
                                }, 1500);
                            } else if (state === YT.PlayerState.CUED || state === YT.PlayerState.BUFFERING) {
                                // Video is cued/buffering, try to play it multiple times
                                console.log('Player is cued/buffering, attempting to play...');
                                let attempts = 0;
                                const maxAttempts = 5;
                                
                                const tryPlay = setInterval(() => {
                                    attempts++;
                                    try {
                                        event.target.playVideo();
                                        const currentState = event.target.getPlayerState();
                                        
                                        if (currentState === YT.PlayerState.PLAYING) {
                                            clearInterval(tryPlay);
                                            isPlaying = true;
                                            if (playIcon) playIcon.textContent = '⏸';
                                            console.log('Audio started playing after', attempts, 'attempts');
                                            // Unmute automatically
                                            setTimeout(() => {
                                                try {
                                                    event.target.unMute();
                                                    console.log('Audio unmuted automatically!');
                                                } catch (e) {
                                                    console.warn('Could not unmute:', e);
                                                }
                                            }, 1500);
                                        } else if (attempts >= maxAttempts) {
                                            clearInterval(tryPlay);
                                            // Autoplay blocked, show play button but keep trying
                                            isPlaying = false;
                                            if (playIcon) playIcon.textContent = '▶';
                                            console.log('Autoplay blocked after', maxAttempts, 'attempts');
                                        }
                                    } catch (e) {
                                        console.error('Error in play attempt:', e);
                                        if (attempts >= maxAttempts) {
                                            clearInterval(tryPlay);
                                        }
                                    }
                                }, 300);
                            } else {
                                // PAUSED or other state
                                console.log('Player state:', state, '- trying to play...');
                                event.target.playVideo();
                                
                                setTimeout(() => {
                                    const newState = event.target.getPlayerState();
                                    if (newState === YT.PlayerState.PLAYING) {
                                        isPlaying = true;
                                        if (playIcon) playIcon.textContent = '⏸';
                                        console.log('Audio is playing (muted)! Unmuting automatically...');
                                        // Unmute automatically
                                        setTimeout(() => {
                                            try {
                                                event.target.unMute();
                                                console.log('Audio unmuted automatically!');
                                            } catch (e) {
                                                console.warn('Could not unmute:', e);
                                            }
                                        }, 1500);
                                    } else {
                                        // Autoplay blocked, show play button
                                        isPlaying = false;
                                        if (playIcon) playIcon.textContent = '▶';
                                        console.log('Autoplay blocked, user needs to click play');
                                    }
                                }, 1000);
                            }
                        } catch (e) {
                            console.error('Error checking player state:', e);
                            // Assume playing if no error
                            isPlaying = true;
                            if (playIcon) playIcon.textContent = '⏸';
                        }
                    }, 500);
                } catch (error) {
                    console.error('Error in onPlayerReady:', error);
                    if (playIcon) playIcon.textContent = '▶';
                }
            }
            
            function onPlayerStateChange(event) {
                console.log('Player state changed:', event.data);
                if (event.data === YT.PlayerState.PLAYING) {
                    isPlaying = true;
                    if (playIcon) playIcon.textContent = '⏸';
                    // Automatically unmute when playing starts
                    setTimeout(() => {
                        try {
                            if (player && player.getPlayerState() === YT.PlayerState.PLAYING) {
                                player.unMute();
                                console.log('Audio unmuted automatically on state change!');
                            }
                        } catch (e) {
                            console.warn('Could not unmute on state change:', e);
                        }
                    }, 1000);
                } else if (event.data === YT.PlayerState.PAUSED) {
                    // Only update UI if user manually paused, not if autoplay was blocked
                    // Check if this is a real pause or just initial state
                    setTimeout(() => {
                        if (player && player.getPlayerState() === YT.PlayerState.PAUSED) {
                            isPlaying = false;
                            if (playIcon) playIcon.textContent = '▶';
                        }
                    }, 100);
                } else if (event.data === YT.PlayerState.CUED) {
                    // Video is cued, try to play it
                    console.log('Player cued, attempting to play...');
                    setTimeout(() => {
                        if (player && !isPlaying) {
                            try {
                                player.playVideo();
                            } catch (e) {
                                console.warn('Could not play cued video:', e);
                            }
                        }
                    }, 200);
                } else if (event.data === YT.PlayerState.ENDED) {
                    stopProgressUpdates();
                    // Restart if ended
                    if (player) {
                        player.playVideo();
                    }
                } else if (event.data === YT.PlayerState.CUED) {
                    stopProgressUpdates();
                }
            }
            
            // Seek functionality
            if (progressBarWrapper) {
                progressBarWrapper.addEventListener('click', function(e) {
                    if (!player || !playerReady || !videoDuration) return;
                    
                    const rect = this.getBoundingClientRect();
                    const clickX = e.clientX - rect.left;
                    const percentage = clickX / rect.width;
                    const newTime = percentage * videoDuration;
                    
                    try {
                        player.seekTo(newTime, true);
                        updateProgress();
                    } catch (error) {
                        console.error('Error seeking:', error);
                    }
                });
            }
            
            function onPlayerError(event) {
                console.error('YouTube player error:', event.data);
                if (playIcon) playIcon.textContent = '⚠';
            }
            
            // Play/Pause button handler
            function togglePlayPause() {
                if (!player || !playerReady) {
                    console.warn('Player not ready');
                    return;
                }
                
                try {
                    const state = player.getPlayerState();
                    
                    if (state === YT.PlayerState.PLAYING) {
                        player.pauseVideo();
                        isPlaying = false;
                        if (playIcon) playIcon.textContent = '▶';
                        console.log('Audio paused');
                    } else {
                        player.unMute();
                        player.setVolume(100);
                        player.playVideo();
                        isPlaying = true;
                        if (playIcon) playIcon.textContent = '⏸';
                        console.log('Audio playing');
                    }
                } catch (error) {
                    console.error('Error toggling play/pause:', error);
                }
            }
            
            // Attach click handler
            if (audioPlayBtn) {
                audioPlayBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    togglePlayPause();
                });
                
                audioPlayBtn.addEventListener('touchend', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    togglePlayPause();
                });
            }
            
            // User interaction handler - only needed if autoplay was blocked
            // Audio will unmute automatically when playing, so this is just a fallback
            let userInteracted = false;
            function handleUserInteraction() {
                if (player && playerReady && !userInteracted) {
                    userInteracted = true;
                    try {
                        const state = player.getPlayerState();
                        
                        // If not playing, start playing
                        if (state !== YT.PlayerState.PLAYING) {
                            player.unMute();
                            player.playVideo();
                            isPlaying = true;
                            if (playIcon) playIcon.textContent = '⏸';
                            console.log('Audio started on user interaction');
                        } else {
                            // Already playing, just ensure unmuted
                            player.unMute();
                            console.log('Ensured audio is unmuted on user interaction');
                        }
                    } catch (error) {
                        console.error('Error handling user interaction:', error);
                    }
                }
            }
            
            // Only use user interaction as fallback if autoplay fails
            // The automatic unmute should handle most cases
            
            // Prevent pausing when page visibility changes
            document.addEventListener('visibilitychange', function() {
                if (!document.hidden && player && playerReady) {
                    // Page became visible, ensure it's playing
                    try {
                        const state = player.getPlayerState();
                        if (state === YT.PlayerState.PAUSED || state === YT.PlayerState.CUED) {
                            console.log('Page visible again, resuming playback...');
                            player.playVideo();
                            isPlaying = true;
                            if (playIcon) playIcon.textContent = '⏸';
                        }
                    } catch (e) {
                        console.warn('Error resuming on visibility change:', e);
                    }
                }
            });
            
            // Initialize
            loadYouTubeAPI();
            console.log('YouTube audio player initializing with video ID:', youtubeVideoId);
        })();
        @endif
    </script>
</body>
</html>
