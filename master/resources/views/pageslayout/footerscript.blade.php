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
