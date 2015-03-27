var deleteLog = false;

$(document).ready(function() {
	$('#pagepiling').pagepiling({
		menu: '#menu',
		anchors: ['home', 'facebook_clone', 'chat_app', 'mini_trello', 'awkyo', 'about', 'contact'],
		navigation: {
          'textColor': '#f2f2f2',
          'bulletsColor': '#ccc',
          'position': 'right',
          // 'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4']
    }
	});
});