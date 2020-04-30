$('#page_content').ready(function() {
  $('#page_content').load('./frontend/view_dashboard.php');

  // ajax page content loader
  $('a.link-page').click(function() {
    var page = $(this).attr('name');
    $('#page_content').load('./frontend/view_'+page+'.php');
  });

});
	