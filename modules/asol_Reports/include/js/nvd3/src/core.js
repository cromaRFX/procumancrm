
var nv = window.nv || {};


nvReports.version = '1.1.14b';
nvReports.dev = true //set false when in production

window.nv = nv;

nvReports.tooltip = nvReports.tooltip || {}; // For the tooltip system
nvReports.utils = nvReports.utils || {}; // Utility subsystem
nvReports.models = nvReports.models || {}; //stores all the possible models/components
nvReports.charts = {}; //stores all the ready to use charts
nvReports.graphs = []; //stores all the graphs currently on the page
nvReports.logs = {}; //stores some statistics and potential error messages

nvReports.dispatch = d3Reports.dispatch('render_start', 'render_end');

// *************************************************************************
//  Development render timers - disabled if dev = false

if (nvReports.dev) {
  nvReports.dispatch.on('render_start', function(e) {
    nvReports.logs.startTime = +new Date();
  });

  nvReports.dispatch.on('render_end', function(e) {
    nvReports.logs.endTime = +new Date();
    nvReports.logs.totalTime = nvReports.logs.endTime - nvReports.logs.startTime;
    nvReports.log('total', nvReports.logs.totalTime); // used for development, to keep track of graph generation times
  });
}

// ********************************************
//  Public Core NV functions

// Logs all arguments, and returns the last so you can test things in place
// Note: in IE8 console.log is an object not a function, and if modernizr is used
// then calling Function.prototype.bind with with anything other than a function
// causes a TypeError to be thrown.
nvReports.log = function() {
  if (nvReports.dev && console.log && console.log.apply)
    console.log.apply(console, arguments)
  else if (nvReports.dev && typeof console.log == "function" && Function.prototype.bind) {
    var log = Function.prototype.bind.call(console.log, console);
    log.apply(console, arguments);
  }
  return arguments[arguments.length - 1];
};


nvReports.render = function render(step) {
  step = step || 1; // number of graphs to generate in each timeout loop

  nvReports.render.active = true;
  nvReports.dispatch.render_start();

  setTimeout(function() {
    var chart, graph;

    for (var i = 0; i < step && (graph = nvReports.render.queue[i]); i++) {
      chart = graph.generate();
      if (typeof graph.callback == typeof(Function)) graph.callback(chart);
      nvReports.graphs.push(chart);
    }

    nvReports.render.queue.splice(0, i);

    if (nvReports.render.queue.length) setTimeout(arguments.callee, 0);
    else { nvReports.render.active = false; nvReports.dispatch.render_end(); }
  }, 0);
};

nvReports.render.active = false;
nvReports.render.queue = [];

nvReports.addGraph = function(obj) {
  if (typeof arguments[0] === typeof(Function))
    obj = {generate: arguments[0], callback: arguments[1]};

  nvReports.render.queue.push(obj);

  if (!nvReports.render.active) nvReports.render();
};

nvReports.identity = function(d) { return d; };

nvReports.strip = function(s) { return s.replace(/(\s|&)/g,''); };

function daysInMonth(month,year) {
  return (new Date(year, month+1, 0)).getDate();
}

function d3_time_range(floor, step, number) {
  return function(t0, t1, dt) {
    var time = floor(t0), times = [];
    if (time < t0) step(time);
    if (dt > 1) {
      while (time < t1) {
        var date = new Date(+time);
        if ((number(date) % dt === 0)) times.push(date);
        step(time);
      }
    } else {
      while (time < t1) { times.push(new Date(+time)); step(time); }
    }
    return times;
  };
}

d3Reports.time.monthEnd = function(date) {
  return new Date(date.getFullYear(), date.getMonth(), 0);
};

d3Reports.time.monthEnds = d3_time_range(d3Reports.time.monthEnd, function(date) {
    date.setUTCDate(date.getUTCDate() + 1);
    date.setDate(daysInMonth(date.getMonth() + 1, date.getFullYear()));
  }, function(date) {
    return date.getMonth();
  }
);

