var page = require('webpage').create(),
    system = require('system'),
    address, output, size, zoom=1;

if (system.args.length < 3 || system.args.length > 6) {
    console.log('Usage: rasterize.js URL filename [paperwidth*paperheight|paperformat] [landscape | portrait] ');
    console.log('  paper (pdf output) examples: "5in*7.5in", "10cm*20cm", "A4", "Letter"  ' );
    phantom.exit(1);
} else {

    

    address = system.args[1];
    output = system.args[2];
    page.viewportSize = { width: 600, height: 600 };

    
    
    if (system.args.length > 5) {
        zoom = system.args[5];
    }
            
    page.open(address, function (status) {
        if (status !== 'success') {
            console.log('Unable to load the address!');
            phantom.exit();
        } else {

            window["header"] = page.evaluate(function(){
                    return document.getElementById("pdfheader").innerHTML;
             });

            if (system.args.length > 3 && system.args[2].substr(-4) === ".pdf") {
    
                format=system.args[3];
                page.paperSize =  { format: system.args[3], orientation: system.args[4], margin: {top: '0cm', left: '1cm',bottom: '0.5cm',right:'1cm'},header:{height: "2.5cm",
                                                        contents: phantom.callback(function(pageNum, numPages) {return window["header"];})
                                                      },footer:{height: "1cm",
                                                        contents: phantom.callback(function(pageNum, numPages) {return "<span style='float:right'>" + pageNum + " / " + numPages + "</span>";})
                                                      } };
            
            }


            page.evaluate(function(zoom) {
                                      
                    max=document.body.offsetWidth;
                    [].forEach.call(document.getElementsByTagName("table"), function(est){if(est.offsetWidth>max)max=est.offsetWidth;console.log(est.offsetWidth)});
                    
                    if(zoom!==1)
                        document.body.style.zoom=zoom;
                    else   
                        document.body.style.zoom=(document.body.offsetWidth/max).toFixed(2);

             },zoom);

            window.setTimeout(function () {
                page.render(output);
                phantom.exit();
            }, 200);
        }
    });
}