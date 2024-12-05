function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");

      // Bloquear/desbloquear scroll
  body.style.overflow = menu.classList.contains('open') ? 'hidden' : '';
}


    // JavaScript para manejar la navegación de tabs
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
        });
    });

    let currentSlides = {
        'image-carousel': 0,
        'testimonial-carousel': 0
    };
    
    function moveSlide(n, carouselId) {
        const carousel = document.getElementById(carouselId);
        const slides = carousel.querySelectorAll('.carousel-slide > *');
        const totalSlides = slides.length;
        
        // Actualiza el índice actual del carrusel específico
        currentSlides[carouselId] += n;
        
        // Verifica los límites para el carrusel específico
        if (currentSlides[carouselId] >= totalSlides) {
            currentSlides[carouselId] = 0; // Vuelve al inicio
        } else if (currentSlides[carouselId] < 0) {
            currentSlides[carouselId] = totalSlides - 1; // Va al último slide
        }
        
        // Mueve el carrusel específico
        const offset = currentSlides[carouselId] * 100;
        carousel.querySelector('.carousel-slide').style.transform = `translateX(-${offset}%)`;


        // galería
    }
    let slideIndex = 1;

    function openModal() {
        document.getElementById("myModal").style.display = "block";
        showSlides(slideIndex);
    }
    
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    

    
    
