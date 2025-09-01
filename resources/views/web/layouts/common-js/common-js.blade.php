    <script>
        // select2 

        $(document).ready(function () {
            $('#langselect').select2({
                placeholder: "english",
                allowClear: true
            });

        });
        // header responsive jquery
        $(".nav-show").on("click", function () {
            $(".collapse.navbar-collapse").toggleClass("show");
            if ($('.collapse.navbar-collapse').hasClass("show")) {
                $(".collapse.navbar-collapse").animate({
                    right: "0px"
                });
            } else {
                $(".collapse.navbar-collapse").animate({
                    right: "-300px"
                });
            }
        })

        // scroll up ==============

        $(window).scroll(function () {
            a = $(window).scrollTop()
            if (a > 400) {
                $(".scroll-up").css("opacity", "1")
            }
            else {
                $(".scroll-up").css("opacity", "0")
            }
        })
        $(".scroll-up").on("click", function () {
            $(window).scrollTop(0)
        })

    </script>
