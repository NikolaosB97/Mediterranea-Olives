<x-layout>
    <div class="contact-custom" id="contactSection">
        <div class="contact-overlay">
            <div class="blur-box">
                <h1 class="my-5">CONTATTACI</h1>
                <p>Contatta Mediterranea Olives. Puoi lasciare le tue informazioni di contatto e ti risponderemo al più presto</p>
                <a href="tel:+391234567890" class="contact-icon">
                    <i class="fas fa-phone my-5"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="contact-details">
        <div class="detail-box">
            <i class="fas fa-home detail-icon"></i>
            <h2>VISITATECI</h2>
            <p>Venite a trovarci e date un'occhiata alla nostra struttura.</p>
            <p><strong>Corso Francesco Crispi, 151</strong></p>
            <p><strong>92020 San Giovanni Gemini AG</strong></p>
        </div>
        <div class="detail-box">
            <i class="fas fa-phone-alt detail-icon"></i>
            <h2>CHIAMACI</h2>
            <p>Per maggiori informazioni contattateci telefonicamente</p>
            <p><strong>(+39) 3533944239</strong></p>
        </div>
        <div class="detail-box">
            <i class="fas fa-envelope detail-icon"></i>
            <h2>MANDARE UN MESSAGGIO</h2>
            <p>Per supporto o qualsiasi domanda contattateci via email:</p>
            <p><a href="mailto:Mediterraneagroup@virgilio.it" class="text-reset">Mediterraneagroup@virgilio.it</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const icons = document.querySelectorAll('.detail-icon');

            icons.forEach((icon, index) => {
                setInterval(() => {
                    icon.classList.add('bounce');
                    setTimeout(() => {
                        icon.classList.remove('bounce');
                    }, 1000); // Rimuove la classe dopo la durata dell'animazione
                }, 2000 + (index * 500)); // Ritardo iniziale diverso per ogni icona per non farle saltare insieme
            });
        });

        // CSS per l'animazione
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-20px);
                }
                60% {
                    transform: translateY(-10px);
                }
            }

            .bounce {
                animation: bounce 1s;
            }
        `;
        document.head.appendChild(style);
    </script>
</x-layout>