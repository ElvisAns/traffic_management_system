function pinger() {
	var pinging, ad, timer, suc, total, loc, holder;
	var times = [];
	$('#terminal').terminal(function(command, term) {
		var cmd = $.terminal.parse_command(command);
		var address = cmd.args[0];

		if (cmd.name == 'ping' && address != undefined) {
			times = [];
			loc = address;
			if(address.substring(0,7) != 'http://' && address.substring(0,8) != 'https://')
			{
				ad = "http://" + address;
			}
			else{
				ad = address;
			}
			term.echo("PINGING " + address);
            var i = 0;
            total = 0;
            suc = 0;
            var output = "";
            var p = new Ping();
            pinging = true;

            (function loop() {
                p.ping(ad, function(err, data) {
  					// Also display error if err is returned.
  					if (err || data >= 1500) {
    					output = "Request timeout for ping_seq " + i;
  					}
  					else{
  						holder = data;
  						output = "Transmission to " + address + ": ping_seq=" + i + " time=" + data + " ms";
  					}
				});

				if(output)
				{
					term.echo(output);
					total = i + 1;
					i++;
					if(output.substring(0,1) == 'T')
					{
						suc++;
						times.push(holder);
					}
				}

				term.set_prompt("");
				p = new Ping();
				timer = setTimeout(loop, 1000);
            })();
        }
        else if (cmd.name == 'ping' && address == undefined) {
    		term.echo("ping: no address to ping");
        }
        else if (cmd.name){
        	term.echo(cmd.name + ": command not found");
        }
	},
	{
    greetings: 'Connection to https://www.jqueryscript.net [[;green;]success]\n'+ 'Login time: ' + new Date() + '\n----------------------------\nThe program pings every second\nIf the response time is over 1.5 s, the ping times out\nStart by typing the ping command and the address as the argument \nStop the pinging by hitting CTRL and C at the same time\n----------------------------',
    width: 600,
    height: 350,
	prompt: "[[;white;]jqueryscript.net:projects visitor$ ]",
	keydown: function(e, term) {
        if (pinging) {
            if (e.which == 67 && e.ctrlKey) { // CTRL+c
            	term.echo("^C");
            	clearTimeout(timer);
            	pinging = false;

            	term.echo("--- " + loc + " ping statistics ---");
            	var ploss = (total - suc) * 100.0 / total;
            	var round = ploss.toFixed(1);
            	term.echo(total + " pings transmitted, " + suc + " successful pings, " + round + "% loss");

            	var min = Math.min(...times);
            	var max = Math.max(...times);
            	var avg = (times.reduce((a,b) => a + b, 0) / times.length).toFixed(1);
            	var sqrs = times.map(function(value){
  					var diff = value - avg;
  					var sqr = diff * diff;
  					return sqr;
				});
				var sqrAvg = sqrs.reduce((a,b) => a + b, 0) / sqrs.length;
            	var std = (Math.sqrt(sqrAvg)).toFixed(1);
            	term.echo("Time data: min/max/avg/stddev = " + min + "/" + max + "/" + avg + "/" + std);

            	term.set_prompt("[[;white;]jqueryscript.net:projects visitor$ ]");
            }
            return false;
        }
    	}
	});
}
