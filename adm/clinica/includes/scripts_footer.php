<script src="<?php echo $base_dist;?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $base_dist;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $base_dist;?>dist/js/adminlte.min.js"></script>

<!-- ChartJS -->
<script src="<?php echo $base_dist;?>bower_components/chart.js/Chart.js"></script>

<!-- DataTables -->
<script src="<?php echo $base_dist;?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_dist;?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "language": {
                "url": "pt-BR.json"
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.apaga').on('click', function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })
            swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não podera desfazer essa ação!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, apague!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    var id = $('.apaga').attr('data-id');
                    var id2 = $(this).attr('data-id');
                    console.log(id2);
                    $.post('bd/delete/delete_prestador.php', {
                        id: id2
                    }, function(data) {
                        $('#resposta').html(data);
                        //console.log(data);
                        window.location.reload();
                    });
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelado',
                        'Nada foi apagado',
                        'error'
                    )
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.apaga_c').on('click', function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })
            swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não podera desfazer essa ação!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, apague!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    var id = $('.apaga_c').attr('data-id');
                    var id2 = $(this).attr('data-id');
                    console.log(id2);
                    $.post('bd/delete/delete_cliente.php', {
                        id: id2
                    }, function(data) {
                        $('#resposta').html(data);
                        //console.log(data);
                        window.location.reload();
                    });
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelado',
                        'Nada foi apagado',
                        'error'
                    )
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#form').on('submit', function(e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                target: '#resposta'
            }).clearForm();
        });
    });
</script>