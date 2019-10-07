</div> <!-- container -->

</div> <!-- content -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                2018 © SAFETY
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- App js -->
<script src="assets/js/app.min.js"></script>
<script src="modules/js/fileUpload.js"></script>

<!-- third party js -->
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<!-- third party js ends -->

<!-- third party js -->
<script src="assets/js/vendor/Chart.bundle.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="assets/js/pages/demo.dashboard.js"></script>
<!-- end demo js-->

<script>
    $(document).ready(function () {
        $('[data-single-date-picker="true"],[data-reset-val=true]').not('[data-reset-val=false]').val('');

        // Modal over modal fix
        $(document).on('hidden.bs.modal', function (event) {
            if ($('.modal:visible').length) {
                $('body').addClass('modal-open');
            }
        });
    });

    enableInp = (sel, index, inpType, multi = false, contId = null) => {
        if (!multi) {
            let cont = sel.parent().next(),
                inp = cont.find(inpType);
            if(contId)
                cont = $('#'+contId);
            if (sel.prop('selectedIndex') === index || !index) {
                cont.removeClass('d-none');
                inp.prop('disabled', false);
            } else {
                cont.addClass('d-none');
                inp.prop('disabled', true);
            }
        } else {
            let cont = '';
            if(contId)
                cont = $('#'+contId);
            else
                cont = sel.parent().parent().next();

            if (sel.prop('selectedIndex') === index || !index) {
                cont.removeClass('d-none');
                cont.find('[disabled]').addClass('not-dis').prop('disabled', false);
            } else {
                cont.addClass('d-none');
                cont.find('.not-dis').removeClass('not-dis').prop('disabled', true);
            }
        }
    }
</script>

</body>
</html>
