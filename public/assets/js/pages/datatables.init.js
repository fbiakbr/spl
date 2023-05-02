$(document).ready(function () {
    $("#datatable").DataTable(),
        $("#datatable-buttons")
            .DataTable({
                lengthChange: !1,
                buttons: [
                    {
                        extend: "excel",
                        className: "btn btn-success",
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                        },
                    },
                    {
                        extend: "pdf",
                        className: "btn btn-success",
                        orientation: "portrait",
                        pageSize: "A4",
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                        },
                        customize: function (doc) {
                            doc.defaultStyle.fontSize = 7;
                            doc.styles.tableHeader.fontSize = 7;
                            doc.content[1].table.widths = [
                                "5%",
                                "10%",
                                "15%",
                                "10%",
                                "10%",
                                "10%",
                                "10%",
                                "10%",
                                "20%",
                            ];
                            // set alignment to center for table rows
                            doc.content[1].table.body.forEach(function (
                                row,
                                i
                            ) {
                                row.forEach(function (cell, j) {
                                    cell.alignment = "center";
                                });
                            });
                        }
                    },
                    {
                        extend: "print",
                        className: "btn btn-success",
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                        },
                    },
                ],
            })
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm");
});