/**
 * Created by ZachPrinz on 3/19/2016.
 */
var el = document.getElementById('overview_text');
Ps.initialize(el, {
    wheelSpeed: 1,
        wheelPropagation: true,
        minScrollbarLength: 20
});

var el2 = document.getElementById('content_viewer_column');
Ps.initialize(el2, {
        wheelSpeed: 1,
        wheelPropagation: true,
        minScrollbarLength: 20
});