<style>
    body,
    html {
        background: linear-gradient(to bottom, #0d0d2b, #000000);
        scroll-behavior: smooth;
        overflow: hidden;
        font-family: 'Montserrat';
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
        opacity: 0.8;
        animation: twinkle 1s infinite alternate, fall 2s forwards;
        animation-delay: 1s;
    }

    @keyframes fall {
        0% {
            transform: translate(0, 0);
            opacity: 1;
        }

        100% {
            transform: translate(100vw, 100vh);
            opacity: 0;
        }
    }

    @keyframes twinkle {

        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }

        100% {
            opacity: 1;
        }
    }


    .star-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        z-index: 0;
    }

    .star {
        position: absolute;
        width: 1px;
        height: 1px;
        opacity: 0.8;
    }

    .star {
        position: absolute;
        width: 1px;
        height: 1px;
        opacity: 0.8;
        animation: twinkle 1.4s infinite ease-in-out;
    }
</style>

<!-- Jquery -->
<script type="module">
    const particleContainer = document.querySelector('.particles');
    const starBackground = document.querySelector('.star-background');

    function spawnParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        particle.style.top = `${Math.random() * 80}vh`;
        particle.style.left = `${Math.random() * 80}vw`;
        const randomDuration = (Math.random() * 4 + 6).toFixed(2);
        particle.style.animationDuration = `${randomDuration}s`;
        const randomColor = `hsl(${Math.random() * 360}, 70%, 80%)`;
        particle.style.backgroundColor = randomColor;
        particleContainer.appendChild(particle);
        setTimeout(() => {
            particle.remove();
        }, randomDuration * 200);
    }
    setInterval(spawnParticle, 1000);

    for (let i = 0; i < Math.random() * (1200 - 600) + 600; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.top = `${Math.random() * 100}vh`;
        star.style.left = `${Math.random() * 100}vw`;

        const randomColor = `hsl(${Math.random() * 360}, 70%, 80%)`;
        star.style.backgroundColor = randomColor;
        star.style.boxShadow = `0 0 0.2px 0.2px ${randomColor}`;

        const randomDuration = (Math.random() * 2.6 + 1.4).toFixed(2);
        star.style.animationDuration = `${randomDuration}s`;

        const randomDelay = (Math.random() * 2).toFixed(2);
        star.style.animationDelay = `${randomDelay}s`;

        starBackground.appendChild(star);
    }
</script>
