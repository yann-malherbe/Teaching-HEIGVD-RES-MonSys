var http = require('http');
function requestHandler(req, res) {
    res.writeHead(200, {'Content-Type': 'application/json'});

	var sensors = [
		{
			'name' : 'P-001',
			'description' : 'Epson Printer',
			'currentLoadLevel' : Math.random() * 100
		},
		{
			'name' : 'P-002',
			'description' : 'Canon Printer',
			'currentLoadLevel' : Math.random() * 100
		},
		{
			'name' : 'P-003',
			'description' : 'HP Printer',
			'currentLoadLevel' : Math.random() * 100
		}
	];
	
	res.write(JSON.stringify(sensors));
	res.end();
	
	
}
http.createServer(requestHandler).listen(80);