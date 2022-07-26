function digit_grouping(nStr) {
    nStr += '';
    x = nStr.split(',');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}

function removeCommas(nStr) {
    return nStr.replace('.', '');
}

function updateHargax(obj, qty, prc, nm) {
    prc.value = qty.value * obj.value;
    nm.value = obj.options[obj.selectedIndex].text;
    var tot = document.getElementById('totalx').value;
    var totali = 0;
    for (i = 1; i <= tot; i++) {
        totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
    }
    document.getElementById('totali').value = totali;
    document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
}

function updateHarga(obj, qty, prc) {
    prc.value = qty.value * obj;
    var tot = document.getElementById('totalx').value;
    var totali = 0;
    for (i = 1; i <= tot; i++) {
        totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
    }
    document.getElementById('totali').value = totali;
    document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
}

function getData() {
    var i, j, k;
    var name, prc, qty;
    name = "";
    prc = "";
    qty = "";
    for (i = 1; i < 41; i++) {
        if (document.getElementById("s" + i).selectedIndex != 0) {
            name = name + "name[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
                .selectedIndex].text + "&";
            qty = qty + "qty[]=" + document.getElementById("q" + i).value + "&";
            prc = prc + "prc[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
                .selectedIndex].id + "&";
        }
        document.getElementById("linker").href = "print.php?" + name + qty + prc;
    }
}