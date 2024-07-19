<x-layout>
    <div class="prodotti-custom"></div>
    <h1 class="text-center">I nostri prodotti:</h1>
   
<!-- Bottone per le Informazioni sulla Pallettizzazione con Immagine -->
<div class="d-flex justify-content-center align-items-center mb-4 my-5" id="palletInfoButtonContainer">
    <img src="/img/pallettizzazione.png" alt="Pallet Icon" class="pallet-icon">
    <a href="{{ route('pallettizzazione') }}" class="btn pallet-info-btn d-flex align-items-center" id="palletInfoButton">
        <span>Informazioni sulla <br> pallettizzazione</span>
    </a>
</div>

    <!-- Selector -->
    <div class="d-flex justify-content-center mb-4 my-5">
        <div class="btn-group" role="group" aria-label="Product selector">
            <button type="button" class="btn btn-outline-secondary active" id="productBtn" onclick="showSection('product')">Per Prodotti</button>
            <button type="button" class="btn btn-outline-secondary" id="packageBtn" onclick="showSection('package')">Per Contenitori</button>
        </div>
    </div>

   

<!-- Package Type Selector -->
<div id="packageTypeSelector" class="d-none">
    <div class="btn-group my-5 mt-5" role="group" aria-label="Package type selector">
        <button type="button" class="btn btn-outline-secondary active" id="allPackagesBtn" onclick="filterPackages('all')">All</button>
        <button type="button" class="btn btn-outline-secondary" id="barattoloBtn" onclick="filterPackages('barattolo')">Barattolo di vetro</button>
        <button type="button" class="btn btn-outline-secondary" id="pkg-1_5kgBtn" onclick="filterPackages('pkg-1_5kg')">Confezione 1,5 kg</button>
        <a href="/contatti" class="btn btn-outline-secondary ml-auto">Altre confezioni disponibili:3kg-5kg-10kg-20kg</a>
    </div>
</div>

   
    <div class="row justify-content-center">
        <!-- Product cards -->
        @foreach($products as $product)
        <div class="col-12 col-md-6 col-lg-3 mb-4 product-card">
            <div class="card">
                <a href="{{ route('products.show', $product['id']) }}">
                    <div class="imgbx">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    </div>
                    <div class="details">
                        <h3>{{ $product['name'] }}</h3>
                        <p>{{ $product['span'] }}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach

        <!-- Package cards -->
        @foreach($packages as $package)
        <div class="col-12 col-md-6 col-lg-3 mb-4 package-card {{ $package['type'] }}" style="display: none;">
            <div class="card">
                <a href="{{ route('products.show', $package['id']) }}">
                    <div class="imgbx">
                        <img src="{{ $package['image'] }}" alt="{{ $package['name'] }}">
                    </div>
                    <div class="details">
                        <h3>{{ $package['name'] }}</h3>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <script>
        function showSection(type) {
            var productBtn = document.getElementById('productBtn');
            var packageBtn = document.getElementById('packageBtn');
            var packageTypeSelector = document.getElementById('packageTypeSelector');
            var productCards = document.querySelectorAll('.product-card');
            var packageCards = document.querySelectorAll('.package-card');
            var palletInfoButtonContainer = document.getElementById('palletInfoButtonContainer');

            productBtn.classList.remove('active');
            packageBtn.classList.remove('active');
            
            if (type === 'product') {
                productBtn.classList.add('active');
                productCards.forEach(card => card.style.display = 'block');
                packageCards.forEach(card => card.style.display = 'none');
                packageTypeSelector.classList.add('d-none');  // Nascondi i bottoni
                palletInfoButtonContainer.classList.add('d-none'); // Nascondi il pulsante "Informazioni sulla pallettizzazione"
            } else if (type === 'package') {
                packageBtn.classList.add('active');
                productCards.forEach(card => card.style.display = 'none');
                packageCards.forEach(card => card.style.display = 'block');
                packageTypeSelector.classList.remove('d-none');  // Mostra i bottoni
                palletInfoButtonContainer.classList.remove('d-none'); // Mostra il pulsante "Informazioni sulla pallettizzazione"
                filterPackages('all');
            }
        }

        function filterPackages(type) {
            var allPackagesBtn = document.getElementById('allPackagesBtn');
            var barattoloBtn = document.getElementById('barattoloBtn');
            var package1_5kgBtn = document.getElementById('pkg-1_5kgBtn'); // Nuovo bottone
            var packageCards = document.querySelectorAll('.package-card');

            allPackagesBtn.classList.remove('active');
            barattoloBtn.classList.remove('active');
            package1_5kgBtn.classList.remove('active'); // Nuovo bottone
            
            if (type === 'all') {
                allPackagesBtn.classList.add('active');
                packageCards.forEach(card => card.style.display = 'block');
            } else {
                document.getElementById(type + 'Btn').classList.add('active');
                packageCards.forEach(card => card.style.display = 'none');
                document.querySelectorAll('.' + type).forEach(card => card.style.display = 'block');
            }
        }

        function showPalletInfo() {
            alert('Mostra le informazioni sulla pallettizzazione qui.');
        }

        // Set default view
        document.addEventListener('DOMContentLoaded', function() {
            showSection('product');
        });
    </script>
  
</x-layout>