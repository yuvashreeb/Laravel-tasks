$(document).ready(function () {
    $('#timezone').DataTable({
        "processing": true,
        "serverSide": true,
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
                    return "<a href='edit" + data.Id + "'><button class='one'>EDIT</button></a>" + " <a href='delete" + data.Id + "'><button class='one'>DELETE</button></a>" + " <a href='view" + data.Id + "'><button class='view' value='" + JSON.stringify(data) + "'>VIEW</button></a>";

                }
            }
        ]


    });
});

