function dashboard(idorder) {
//$scope.dashboard = function(detailID){
//var query_parameter = document.getElementById(idorder).value;
var query_parameter=idorder;
var dataString = 'parameter='+query_parameter;

// AJAX code to execute query and get back to same page with table content without reloading the page.
$.ajax({
type: "POST",
url: "DatabaseFiles/execute_query.php",
data: dataString,
cache: false,
success: function(html) {
// alert(dataString);
document.getElementById("table_content").innerHTML=html;
}
});
return false;
}