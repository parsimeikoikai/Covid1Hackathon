</div>
</div>


<script src="<?php echo base_url() ?>assets/node_modules/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/moment/min/moment.min.js"></script>


<script src="<?php echo base_url()?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/node_modules/multiselect/js/jquery.multi-select.js"></script>

<script src="<?php echo base_url() ?>assets/node_modules/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(function () {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });

    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<script src="<?php echo base_url() ?>assets/node_modules/icheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/icheck/icheck.init.js"></script>

<script src="<?php echo base_url() ?>assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?php echo base_url() ;?>assets/ui-date/ui.js"></script>
<script src="<?php echo base_url(); ?>assets/external/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/external/printme.min.js"></script>

<script src="<?php echo base_url(); ?>assets/external/html2canvas.min.js"></script>
<script src="<?php echo base_url(); ?>assets/external/jspdf.min.js"></script>

<script type="text/javascript">
    function download_card(name)
    {
        html2canvas($('#members_card_body')[0],
            {
                onrendered:function(canvas)
                {

                    var img=canvas.toDataURL("image/png");
                    var doc = new jsPDF();
                    doc.addImage(img,'JPEG',20,20);
                    doc.save(name);
                }
            });

    }
</script>

<script>
    function download_card2(name) {
        var pdf = new jsPDF('p', 'pt', 'letter');

        source = $('#members_card_body')[0];

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 40,
            bottom: 40,
            left: 40,
            width: 522
        };
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {

                pdf.save(name);
            }, margins);
    }
</script>

</body>

</html>
