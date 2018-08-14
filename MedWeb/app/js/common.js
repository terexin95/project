$(function() {
	jQuery('ul.sf-menu').superfish();

var tables = document.getElementsByTagName("table");
for ( var t = 0; t < tables.length; t++ ) {
  var rows = tables[t].getElementsByTagName("tr");
  for ( var i = 1; i < rows.length; i += 2 )
    if ( !/(^|s)odd(s|$)/.test( rows[i].className ) )
      rows[i].className += " odd";
}


});
