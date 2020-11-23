<script src="{{ asset('frontend/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script>
<!--scrollTop-->
<script>
      var mybutton = document.getElementById("myBtn");
      
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
</script>


@stack('scripts')

