<x-layout>
    
     
    <div class="container-product description-container mt-5">
        <a href="/prodotti" class="btn btn-olive btn-align-left mb-4 my-5">
            <i class="fas fa-arrow-left"></i> Torna ai Prodotti
        </a>
        <h1 class="text-start mb-4 fade-in-left btn-align-left">{{ $product['name'] }}</h1>
        <div class="row">
            <div class="col-12 col-md-6  fade-in-left text">
                <p>{{ $product['description'] }}</p>
            </div>
            <div class="col-12 col-md-6 fade-in-right">
                <img class="img-fluid image" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
            </div>
        </div>
    </div>
        <div class="row justify-content-center cointainer-nutrition">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUTRIZIONE</th>
                            <th>PER 100G</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product['nutrition'] as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fadeInLeftElements = document.querySelectorAll('.fade-in-left');
            const fadeInRightElements = document.querySelectorAll('.fade-in-right');

            function handleScroll() {
                fadeInLeftElements.forEach(element => {
                    if (element.getBoundingClientRect().top < window.innerHeight) {
                        element.classList.add('visible');
                    }
                });

                fadeInRightElements.forEach(element => {
                    if (element.getBoundingClientRect().top < window.innerHeight) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);

            // Trigger the scroll handler on load to check the initial positions
            setTimeout(handleScroll, 100);
        });
    </script>
</x-layout>