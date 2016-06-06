$(document).ready(function () {
    $('#timezone').DataTable({
        "processing": true,
        "serverSide": true,
        "sPaginationType":"full_numbers",
        "ajax": "ajaxcall",
        "columns": [
            {"data": "Id"},
            {"data": "Name"},
            {"data": "Offset"},
            {
                "bSortable": false, "aTargets": [0],
                "targets": -1,
                "data": null,
                "render": function (data, type, full, meta) {
                    return "<a href='edit/" + data.Id + "'><button class='one glyphicon glyphicon-edit'></button></a>" + " <a href='delete/" + data.Id + "'><button class='one glyphicon glyphicon-trash'></button></a>" + " <a href='view/" + data.Id + "'><button class='view glyphicon glyphicon-eye-open' value='" + JSON.stringify(data) + "'></button></a>";

                }
            }
        ]


    });
});

