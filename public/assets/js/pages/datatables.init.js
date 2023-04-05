$(document).ready(function () {
  $("#datatable").DataTable(),
    $("#datatable-buttons")
      .DataTable({
        lengthChange: !1,
        buttons: [
            {
                extend: "excel",
                className: "btn btn-success",
                // export options
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6 ,7],
                }
            },
            {
                extend: "pdf",
                className: "btn btn-success",
                orientation: "portrait",
                pageSize: "A4",
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6 ,7],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*", "*", "*", "*", "*", "*"];
                }
            },
            {
                extend: "print",
                className: "btn btn-success",
            },
        ],
      })
      .buttons()
      .container()
      .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
    $(".dataTables_length select").addClass("form-select form-select-sm");
});