import './bootstrap';
import Alpine from 'alpinejs';
import 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
});

window.Alpine = Alpine;
Alpine.start();
