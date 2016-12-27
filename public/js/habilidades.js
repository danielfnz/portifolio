var colors = [
['#39abf0', '#ffffff'], ['#39abf0', '#ffffff'], ['#39abf0', '#ffffff'], ['#39abf0', '#ffffff'], ['#39abf0', '#ffffff'], ['#39abf0', '#ffffff']
];
for (var i = 1; i <= 7; i++) {
    var child = document.getElementById('circles-' + i),
    percentage = 30 + (i * 10);

    Circles.create({
        id:         child.id,
        percentage: percentage,
        radius:     80,
        width:      10,
        number:     percentage / 1,
        text:       '%',
        colors:     colors[i - 1]
    });
}                        
