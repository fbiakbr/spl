$(document).ready(function () {
  $("#datatable").DataTable(),
    $("#datatable-buttons")
      .DataTable({
        lengthChange: !1,
        buttons: [
            {
                extend: "excel",
                className: "btn btn-success",
            },
            {
                extend: "pdf",
                className: "btn btn-success",
            },
            {
                extend: "print",
                className: "btn btn-success",
            },
            {
                extend: "colvis",
                className: "btn btn-success",
            }
        ],
      })
      .buttons()
      .container()
      .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
    $(".dataTables_length select").addClass("form-select form-select-sm");
});