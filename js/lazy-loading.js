// Lightweight Lazy Loading Implementation
(function() {
    'use strict';
    
    // Check if Intersection Observer is supported
    if ('IntersectionObserver' in window) {
        
        // Lazy loading for images
        const imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    
                    if (src) {
                        img.src = src;
                        img.removeAttribute('data-src');
                        img.classList.remove('lazy');
                        img.classList.add('lazy-loaded');
                    }
                    
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px 0px', // Load images 50px before they enter the viewport
            threshold: 0.01
        });
        
        // Observe all images with lazy class
        document.addEventListener('DOMContentLoaded', function() {
            const lazyImages = document.querySelectorAll('img.lazy');
            lazyImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        });
        
        // Lazy loading for background images
        const bgObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const bgSrc = element.getAttribute('data-bg');
                    
                    if (bgSrc) {
                        element.style.backgroundImage = `url(${bgSrc})`;
                        element.removeAttribute('data-bg');
                        element.classList.remove('lazy-bg');
                        element.classList.add('lazy-bg-loaded');
                    }
                    
                    observer.unobserve(element);
                }
            });
        }, {
            rootMargin: '50px 0px',
            threshold: 0.01
        });
        
        // Observe all elements with lazy-bg class
        document.addEventListener('DOMContentLoaded', function() {
            const lazyBgs = document.querySelectorAll('.lazy-bg');
            lazyBgs.forEach(function(element) {
                bgObserver.observe(element);
            });
        });
        
    } else {
        // Fallback for older browsers
        document.addEventListener('DOMContentLoaded', function() {
            const lazyImages = document.querySelectorAll('img.lazy');
            const lazyBgs = document.querySelectorAll('.lazy-bg');
            
            lazyImages.forEach(function(img) {
                const src = img.getAttribute('data-src');
                if (src) {
                    img.src = src;
                    img.removeAttribute('data-src');
                    img.classList.remove('lazy');
                    img.classList.add('lazy-loaded');
                }
            });
            
            lazyBgs.forEach(function(element) {
                const bgSrc = element.getAttribute('data-bg');
                if (bgSrc) {
                    element.style.backgroundImage = `url(${bgSrc})`;
                    element.removeAttribute('data-bg');
                    element.classList.remove('lazy-bg');
                    element.classList.add('lazy-bg-loaded');
                }
            });
        });
    }
    
    // CSS for smooth loading transition
    if (!document.getElementById('lazy-loading-css')) {
        const css = `
            .lazy {
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }
            .lazy-loaded {
                opacity: 1;
            }
            .lazy-bg {
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }
            .lazy-bg-loaded {
                opacity: 1;
            }
        `;
        const style = document.createElement('style');
        style.id = 'lazy-loading-css';
        style.textContent = css;
        document.head.appendChild(style);
    }
    
})();