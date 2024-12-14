<style>
    body,
    html {
        background: linear-gradient(to bottom, #0d0d2b, #000000);
    }

    .particles {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .particle {
        position: absolute;
        width: 1px;
        height: 1px;
        background: white;
        border-radius: 50%;
        opacity: 0;
        box-shadow: 0 0 5px 1px white;
        animation: float 20s infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0) translateX(0);
            opacity: 0.7;
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh) translateX(calc(-50vw + 100%));
            opacity: 0;
        }
    }

    @keyframes twinkle {

        0%,
        100% {
            opacity: 1.8;
        }

        50% {
            opacity: 0.2;
        }
    }


    /* Small stars background */
    .star-background {
        position: fixed;
        /* Changed to fixed */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        z-index: 0;
        /* Ensure star background is below everything */
    }

    .star {
        position: absolute;
        width: 1px;
        height: 1px;
        background: white;
        opacity: 0.8;
    }

    .star {
        position: absolute;
        width: 1px;
        height: 1px;
        background: white;
        opacity: 0.8;
        border-radius: 50%;
        animation: twinkle 1.4s infinite ease-in-out;
        /* box-shadow: 0 0 1px 1px white; */
        /* Warna default */
    }
</style>

<!-- Jquery -->
<script type="module">
    const particleContainer = document.querySelector('.particles');
    const starBackground = document.querySelector('.star-background');

    for (let i = 0; i < 100; i++) {
    const particle = document.createElement('div');
    particle.classList.add('particle');
    particle.style.top = `${Math.random() * 100}vh`;
    particle.style.left = `${Math.random() * 100}vw`;
    particle.style.animationDelay = `${Math.random() * 20}s`;
    particleContainer.appendChild(particle);
    }

    // for (let i = 0; i < 800; i++) {
    // const star = document.createElement('div');
    // star.classList.add('star');
    // star.style.top = `${Math.random() * 100}vh`;
    // star.style.left = `${Math.random() * 100}vw`;
    // star.style.animationDuration = `${Math.random() * 3 + 2}s`; // Durasi 2-5 detik
    // starBackground.appendChild(star);
    // }

    for (let i = 0; i < Math.random() * (1200 - 600) + 600; i++) {
    const star = document.createElement('div');
    star.classList.add('star');
    star.style.top = `${Math.random() * 100}vh`;
    star.style.left = `${Math.random() * 100}vw`;

    // Generate warna acak
    const randomColor = `hsl(${Math.random() * 360}, 70%, 80%)`; // Warna cerah
    star.style.backgroundColor = randomColor;
    star.style.boxShadow = `0 0 0.2px 0.2px ${randomColor}`; // Shadow dengan warna bintang

    // Durasi animasi kelap-kelip acak antara 0.4s hingga 2s
    const randomDuration = (Math.random() * 2.6 + 1.4).toFixed(2); // Durasi antara 0.4s dan 2s
    star.style.animationDuration = `${randomDuration}s`;

    // Variasi delay animasi untuk kelap-kelip yang lebih alami
    const randomDelay = (Math.random() * 2).toFixed(2); // Delay acak
    star.style.animationDelay = `${randomDelay}s`;

    starBackground.appendChild(star);
}



    // window.onscroll = function() {stickNavbar()};

    // const navbar = document.getElementById("navbar");
    // const sticky = navbar.offsetTop;

    // function stickNavbar() {
    // if (window.pageYOffset > sticky) {
    //     navbar.classList.add("sticky");
    // } else {
    //     navbar.classList.remove("sticky");
    // }
    // }
</script>
