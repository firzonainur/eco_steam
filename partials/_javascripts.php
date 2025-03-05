        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="assets/libs/air-datepicker/js/datepicker.min.js"></script>
        <script src="assets/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <!-- Jq vector map -->
        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>

        <!-- Drop Zone -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <script src="assets/js/app.js"></script>

         <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- demo js-->
        <script src="assets/js/pages/chartist.init.js"></script>

        <!-- Plugin Js-->
        <script src="assets/libs/chartist/chartist.min.js"></script>
        <script src="assets/libs/chartist-plugin-tooltips-updated/chartist-plugin-tooltip.min.js"></script>
        <!-- demo js-->
        <script src="assets/js/pages/chartist.init.js"></script>

        <script src="assets/js/app.js"></script>

        <script>
        new Chartist.Bar('#stacked-bar-chart', {
            labels: ["Modal", "Konsumsi", "Produksi", "Perlengkapan", "Keluarga", "Gadget"],
            series: [
                [900000, 0, 0, 0, 0, 0],  /* Q1 */
                [0, 1200000, 0, 0, 0, 0], /* Q2 */
                [0, 0, 1400000, 0, 0, 0], /* Q3 */
                [0, 0, 0, 1300000, 0, 0], /* Q4 */
                [0, 0, 0, 0, 1520000, 0], /* Q5 */
                [0, 0, 0, 0, 0, 1400000]  /* Q6 */
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return value / 1000 + 'k';
                }
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        }).on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 30px'
                });
            }
        });
        </script>

        <!-- flot plugins -->
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="assets/libs/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- flot init -->
        <script src="assets/js/pages/flot.init.js"></script>

        <script>
        $(function() {
            var data = [
                { label: "Modal", data: 25, color: "#3051d3" },
                { label: "Konsumsi", data: 20, color: "#7c8a96" },
                { label: "Produksi", data: 15, color: "#3ddc97" },
                { label: "Perlengkapan", data: 10, color: "#e4cc37" },
                { label: "Keluarga", data: 20, color: "#00a7e1" },
                { label: "Gadget", data: 10, color: "#f06543" }
            ];

            $.plot("#flot-pie-chart", data, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: function(label, series) {
                                return "<div style='font-size:10pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
                            },
                            threshold: 0.1
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                legend: {
                    show: false
                }
            });
        });
    </script>




        