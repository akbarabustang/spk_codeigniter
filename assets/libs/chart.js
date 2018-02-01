

// Chart
	jQuery(document).ready(function($) 
	{
		
		
		// Line Charts
		var line_chart_demo = $("#line-chart-demo");
		
		var line_chart = Morris.Line({
			element: 'line-chart-demo',
			data: [
				{ y: '2006', a: 100, b: 90 },
				{ y: '2007', a: 75,  b: 65 },
				{ y: '2008', a: 50,  b: 40 },
				{ y: '2009', a: 75,  b: 65 },
				{ y: '2010', a: 50,  b: 40 },
				{ y: '2011', a: 75,  b: 65 },
				{ y: '2012', a: 100, b: 90 }
			],
			xkey: 'y',
			ykeys: ['a', 'b'],
			labels: ['October 2013', 'November 2013'],
			redraw: true
		});
		
		line_chart_demo.parent().attr('style', '');
	});