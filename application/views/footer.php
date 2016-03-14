<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Vieta</h3>
                    <p>Panevėžio Juozo Balčikonio gimnazijos alumnų asociacija<br>Respublikos g. 47<br>Panevėžys 35170
                    </p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Sek mus!</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/groups/48368176046/" target="_blank"
                               class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Kilo nesklandumų ?</h3>
                    <p>Kilo nesklandumų ar turi pasiūlymų?<br><a href="mailto:k.vycius@gmail.com">Susisiek!</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Quickly baked by <a href="https://www.linkedin.com/in/vycius">Karolis Vyčius</a> with
                    <a href="http://getbootstrap.com/">
                        Bootstrap 3
                    </a>
                    ,
                    <a href="https://www.google.lt/maps/">
                        Google maps
                    </a>
                    and
                    <a href="http://startbootstrap.com/template-overviews/freelancer/">
                        Freelancer theme
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="public/js/classie.js"></script>
<script src="public/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="public/js/jqBootstrapValidation.js"></script>

<!-- Custom Theme JavaScript -->
<script src="public/js/freelancer.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#alumnitable').DataTable({
            "lengthMenu": [[15, 50, 100, 250], [15, 50, 100, 250]]
        });
    });
</script>
</body>

</html>