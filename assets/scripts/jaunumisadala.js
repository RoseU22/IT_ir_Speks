let currentSlide = 0;

const slides = [
    {
        image: 'assets/images/hiring.jpg',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatum cumque nemo accusamus alias sint suscipit quibusdam ex quas fuga?'
    },
    {
        image: 'assets/images/vacancy.jpg',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatum cumque nemo accusamus alias sint suscipit quibusdam ex quas fuga? 2'
    },
    {
        image: 'assets/images/joinus.png',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatum cumque nemo accusamus alias sint suscipit quibusdam ex quas fuga? 3'
    }
];

function changeSlide(direction) {
    currentSlide += direction;
    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    } else if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    updateSlide();
}

function updateSlide() {
    const carouselImage = document.querySelector('.carousel-image');
    const carouselText = document.querySelector('.carousel-text');

    carouselImage.classList.add('hidden');

    setTimeout(() => {

    carouselImage.src = slides[currentSlide].image;
    carouselText.textContent = slides[currentSlide].text;
    carouselImage.classList.remove('hidden');

    }, 500);
}

document.addEventListener('DOMContentLoaded', updateSlide);


