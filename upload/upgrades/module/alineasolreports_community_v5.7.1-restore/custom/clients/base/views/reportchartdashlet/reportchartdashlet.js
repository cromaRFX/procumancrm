({
    plugins: ['Dashlet'],
    initDashlet: function () {
        if (this.meta.config) {
            var reportId = this.settings.get("reportId");
            this.settings.set("reportId", reportId);
        }
    },
    
    loadData: function (options) {
        if (_.isUndefined(this.model)) {
            return;
        }
        reportId = this.settings.get('reportId');
        getLibraries = (typeof window['asolLoadedReportsLibraries'] === 'undefined' ? '&getLibraries=true' : '&getLibraries=false');
        
        arg= '';
        purl = parent.location.href;
		baseurl = purl.substring(0,purl.indexOf('#'));
        arg='/asol/GetReportData?reportId='+reportId+getLibraries;
    	
		var self = this;
		app.api.call('GET', app.api.buildURL(arg), null, 
		{ 
            success: function (data) {

            	window['asolLoadedReportsLibraries'] = true;
            	
            	setTimeout(function()
            	{ 
            		$("#detailContainer"+data.dashletId).closest("li.dashlet-container").find("a.dropdown-toggle i").removeClass("icon-refresh icon-spin").addClass("icon-cog"); 
            	}, 2000);
            	
                if (this.disposed) {
                    return;
                }

                _.extend(self, data);
                self.render();
                
            },
		}
		);
    },
    
})
