var page = require('webpage').create(),
    system = require('system'),
    address, output, size;

if (system.args.length !== 2) {
    console.log('Usage: rasterizeBase64.js URL');
    phantom.exit(1);
} else {
    address = system.args[1];
    
    page.open(address, function (status) {
        if (status !== 'success') {
            console.log('Unable to load the address!');
            phantom.exit();
        } else {
            window.setTimeout(function () {
            	console.log(page.renderBase64('PNG'));
                phantom.exit();
            }, 100);
        }
    });
}
