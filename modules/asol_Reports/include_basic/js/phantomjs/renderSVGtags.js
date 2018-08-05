var page = require('webpage').create(),
	system = require('system');

svgdata = system.args[1];

page.content = svgdata;
console.log(page.renderBase64('PNG'));

phantom.exit();