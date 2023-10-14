<script src="{{ URL::asset('assets1/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ URL::asset('assets1/js/plugins/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/swiper.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/slick.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/mo.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/photoswipe.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/product360.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.scrollUp.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/scrollax.min.js') }}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="{{ URL::asset('assets1/js/vendor/vendor.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/plugins.min.js') }}"></script>

<!-- Main Activation JS -->
<script src="{{ URL::asset('assets1/js/main.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const manicureQtyInput = document.querySelector("input[name='manicure-qty']");
    const priceLabel = document.querySelector("label[for='price']");
    const totalPriceElement = document.getElementById('total-price');

    // Function to calculate and update the total price
    function updateTotalPrice() {
        const manicureQty = parseInt(manicureQtyInput.value);
        const price = parseFloat(priceLabel.textContent.split(':')[1].trim());
        const totalPrice = manicureQty * price;
        totalPriceElement.textContent = totalPrice + ' JD';
    }

    // Add an event listener to update the total price when the quantity input changes
    manicureQtyInput.addEventListener('input', updateTotalPrice);

    // Initial calculation and update of the total price
    updateTotalPrice();
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get a reference to the "Place Order" button
        var placeOrderBtn = document.getElementById('placeOrderBtn');

        // Add a click event listener to the button
        placeOrderBtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Trigger the form submission using AJAX
            var form = document.querySelector('.checkout-form');
            var formData = new FormData(form);

            fetch('{{ route('checkout') }}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Data saved successfully, show the modal
                console.log('Data saved successfully.');
                $('#orderSuccessModal').modal('show');

                // Set a timeout to hide the modal after 5 minutes (300,000 milliseconds)
                setTimeout(function() {
                    console.log('Hiding modal.');
                    $('#orderSuccessModal').modal('hide');
                }, 300000); // 5 minutes delay
            })
            .catch(error => {
                // Handle errors if the data couldn't be saved
                console.error('Error:', error);
            });
        });
    });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
