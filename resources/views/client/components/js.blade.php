<!--========= JS Here =========-->
<script src="{{asset('client/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('client/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('client/assets/js/lightcase.js')}}"></script>
<script src="{{asset('client/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('client/assets/js/wow.min.js')}}"></script>
<script src="{{asset('client/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('client/assets/js/scrollwatch.js')}}"></script>
<script src="{{asset('client/assets/js/sticky-header.js')}}"></script>
<script src="{{asset('client/assets/js/waypoint.js')}}"></script>
<script src="{{asset('client/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('client/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
<script src="{{asset('client/assets/js/jquery-ui-slider-range.js')}}"></script>
<script src="{{asset('client/assets/js/main.js')}}"></script>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("image-banner");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000);
    }
</script>
