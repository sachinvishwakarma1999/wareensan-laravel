            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <footer class="footer">
                © 2020 Constructor Dashboard
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
<div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- chartist chart -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- <script src="assets/extra-libs/echarts/echarts-all.js"></script> -->
    <script src="assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/custom-datatable.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <!-- Vector map JavaScript -->
<!--     <script src="assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script> -->
    <!-- Chart JS -->
    <!-- <script src="dist/js/pages/dashboards/dashboard4.js"></script> -->

    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <!-- <script src="dist/js/pages/chartjs/chartjs.init.js"></script> -->
    
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="dist/js/pages/chartist/chartist-plugin-tooltip.js"></script>
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="dist/js/pages/c3-chart/data/c3-category-data.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>
    <!-- <script src="dist/js/pages/chartist/chartist-init.js"></script> -->
    <script src="assets/libs/raphael/raphael.min.js"></script>
    <script src="assets/libs/morris.js/morris.min.js"></script>
</body>
    <script>
        $('.theme_table_widthout_pagination').DataTable({
            "paging": false,
            "searching": false,
            "info": false
        });

        $(document).ready(function(){
            $(".left-sidebar .sidebar-menu .menu-link a").click(function(event){
                if($(this).hasClass('submenu-link')){
                    event.preventDefault();
                    $(this).parent('.menu-link').parent('li').find('.submenu').slideToggle();
                    $(this).parent('.menu-link').parent('li').toggleClass('openMenu');
                    $(this).parent('.menu-link').parent('li').siblings('li').find('.submenu').slideUp();
                    $(this).parent('.menu-link').parent('li').siblings('li').removeClass('openMenu');
                }
            });

            var windowUrl = window.location.href;
            windowUrl = windowUrl.substr(windowUrl.lastIndexOf('/') + 1,windowUrl.length);
            $(".left-sidebar .sidebar-menu .menu-link a").each(function(){
                var Href = $(this).attr('href');
                if(windowUrl == Href){
                    $(".left-sidebar .sidebar-menu > li").removeClass('active');
                    $(this).parent('.menu-link').parent('li').addClass('active');                    
                }
            });

            $(".left-sidebar .sidebar-menu .submenu li a").each(function(){
                var Href = $(this).attr('href');
                if(windowUrl == Href){
                    $(".left-sidebar .sidebar-menu .submenu li").removeClass('active');
                    $(this).parent('li').addClass('active');
                    $(this).parent('li').parent('.submenu').parent('li').addClass('openMenu');
                }
            });
        });
    </script>
</html>