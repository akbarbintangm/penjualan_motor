$(document).ready(function () {
    /* SB Admin 2 Jquery */

    // Back to Top or Scroll to() Script
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 75
    });

    /* External Plugins */

    // dataTables
    $('#dataTable').DataTable();

    //counterup
    $('.counter').counterUp({
        delay: 10,
        time: 500
    });

    // Waves
    Waves.init();
    Waves.attach('.btn', ['waves-float']);
    Waves.attach('.img-fluid', ['waves-float']);
    Waves.attach('.toast', ['waves-float']);

    // Toasts
    if($('.toast')) {
        $('.toast').toast('show');
    }
    else {
        $('.toast').toast('hide');
    }

    // Toast Sweetalert
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
});
