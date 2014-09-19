$(document).ready(function () {
    var file = "data/Robots/robot01.dat";
    loadFile(file);
    $(".dis-msg").append('test');
});

function loadFile(file) {
    $.get(file, function (content) {
        var lines = content.split("\n");
        for (var i = 0, len = lines.length; i < len; i++) {
            console.log(lines[i]);
            $(".dis-msg").append(lines[i]);
        }
    });
}