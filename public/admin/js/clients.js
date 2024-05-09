$(document).ready(function () {
    $("#clientsTable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#clientsTable_wrapper .col-md-6:eq(0)');
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
    //Date picker
    $('#termSentDate').datetimepicker({
        format: 'L'
    });
    $('#termReceivedDate').datetimepicker({
        format: 'L'
    });
});