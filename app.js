// file: app.js
function checkMark(element) {
    var value = element.value;
    var rowNo = parseInt(element.getAttribute('data-row'));
    var currentTotalMark = parseInt(document.getElementById('totalMark_' + rowNo).value);
    if (value == 'P') {
        document.getElementById('totalMark_' + rowNo).value = currentTotalMark + 1;
    } else {
        if (currentTotalMark > 0) {
            document.getElementById('totalMark_' + rowNo).value = currentTotalMark - 1;
        }
    }
}

function removeRow(element) {
    if (confirm('Are you sure?')) {
        // var rowNumber = element.getAttribute('id');
        // document.getElementById("students").deleteRow(rowNumber);
        var tbl = element.parentNode.parentNode.parentNode;
        var row = element.parentNode.parentNode.rowIndex;

        tbl.deleteRow(row);
    };
}