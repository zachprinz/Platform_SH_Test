/**
 * Created by ZachPrinz on 3/19/2016.
 */
document.getElementById('overview_text').setAttribute("style", "max-height: " + (window.innerHeight * 0.2) + "px");
document.getElementById('overview').setAttribute("style", "height: " + (document.getElementById('overview_text').clientHeight * 1.2) + "px");
document.getElementById('body').setAttribute("style", "height:" + (window.innerHeight - (document.getElementById('overview').clientHeight + 20 + 50)) + "px");
var el = document.getElementById('overview_text');
Ps.update(el);
var el2 = document.getElementById('content_viewer_column');
Ps.update(el2);
window.onresize = function(event){
    document.getElementById('overview_text').setAttribute("style", "max-height: " + (window.innerHeight * 0.2) + "px");
    document.getElementById('overview').setAttribute("style", "height: " + (document.getElementById('overview_text').clientHeight * 1.2) + "px");
    document.getElementById('body').setAttribute("style", "height:" + (window.innerHeight - (document.getElementById('overview').clientHeight + 20 + 50)) + "px");
    var el = document.getElementById('overview_text');
    Ps.update(el);
    var el2 = document.getElementById('content_viewer_column');
    Ps.update(el2);
}