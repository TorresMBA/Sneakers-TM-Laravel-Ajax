<!-- js -->
    <script type="text/javascript" src="{{ asset("assests/$theme/js/jquery-2.1.4.min.js") }}"></script>
<!-- //js -->

<!-- /nav -->
    <script src="{{ asset("assests/$theme/js/modernizr-2.6.2.min.js") }}"></script>
    <script src="{{ asset("assests/$theme/js/classie.js") }}"></script>
    <script src="{{ asset("assests/$theme/js/demo1.js") }}"></script>
<!-- //nav --> <!-- Puede ir debajo de cart-js -->

<!--search-bar-->
<script src="{{ asset("assests/$theme/js/search.js") }}"></script>
<!--//search-bar-->

<!-- cart-js -->
<script src="{{ asset("assests/$theme/js/minicart.js") }}"></script>
<script>
    shoe.render();
    shoe.cart.on('shoe_checkout', function (evt) {
        var items, len, i;
        if (this.subtotal() > 0) {
            items = this.items();
            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->

@yield('js')

<script src="{{ asset("assests/$theme/js/responsiveslides.min.js") }}"></script>
<script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- js for portfolio lightbox -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset("assests/$theme/js/move-top.js") }}"></script>
<script type="text/javascript" src="{{ asset("assests/$theme/js/easing.js") }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smoth-scrolling -->

<!-- jquery-validation -->
<script src="{{ asset("assests/js/jquery-validation/jquery.validate.min.js") }}"></script>
<script src="{{ asset("assests/js/jquery-validation/localization/messages_es.min.js") }}"></script>
<!-- //jquery-validation -->

<script src="{{asset("assests/js/scripts.js")}}"></script>

<!-- funciones javascript -->
<script src="{{ asset("assests/js/funciones.js") }}"></script>
<!-- //funciones javascript -->

<!-- CDN Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- //CDN Sweet Alert -->

<!-- Cdn Toast -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
<!-- //Cdn Toast  -->

<!-- js -->
<script type="text/javascript" src="{{ asset("assests/$theme/js/bootstrap-3.1.1.min.js") }}"></script>
<!-- //js -->
@yield('scripts-plugins')