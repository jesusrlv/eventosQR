
// tipo de sangre
$(document).ready(function () {
    $("#myInput1").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

// semestre
$(document).ready(function () {
    $("#myInput2").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

// unidad académica
$(document).ready(function () {
    $("#myInput3").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable3 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

// programa
$(document).ready(function () {
    $("#myInput4").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable4 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});