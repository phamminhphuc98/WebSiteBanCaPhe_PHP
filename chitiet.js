var SL = 1;
function Tru() {
    SL = document.getElementById("txtSL").value;
    if (isNaN(SL) == true) {
        SL = 1;
    }
    SL--;
    if (SL < 1) {
        SL = 1;
    }
    document.getElementById("txtSL").value = SL;
};
function Cong() {
    SL = document.getElementById("txtSL").value;
    if (isNaN(SL) == true) {
        SL = 1;
    }
    SL++;
    document.getElementById("txtSL").value = SL;
};

$(document).ready(function () {
    $('#Tab-R').click(function () {
        if ($('.Tab-Review').is(":hidden") == true) {
            $('.Tab-Review').css("display", "block")
            $('#Tab-R').css({ "background-color": "#fff", "padding-bottom": "13px" })
            $('.Tab-Description').css("display", "none");
            $('#Tab-L').css({ "background-color": "#eee", "padding-bottom": "11px" })
        }
    });
    $('#Tab-L').click(function () {
        if ($('.Tab-Description').is(":hidden") == true) {
            $('.Tab-Description').css("display", "block")
            $('#Tab-L').css({ "background-color": "#fff", "padding-bottom": "13px" })
            $('.Tab-Review').css("display", "none");
            $('#Tab-R').css({ "background-color": "#eee", "padding-bottom": "11px" })
        }
    });
});
