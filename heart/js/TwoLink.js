window.TwoLink = window.TwoLink || {
    CurrentHour: function() { return new Date().getHours();
    },
    Greet: {
        GetName: function() {
            var names = ["sexy.", "good looking.", "superstar.", "smarty pants.", "gorgeous.", "lovely.", "friend.", "pal.", "classy.", "rockstar.", "you wonderful human."];
            return names[Math.floor(Math.random() * names.length)];
        },
        GetTimeOfDay: function() {
            /* hour is before noon */
            if (TwoLink.CurrentHour() < 12) {
                return ("Morning,");
            } else /* Hour is from noon to 5pm (actually to 5:59 pm) */
                if (12 <= TwoLink.CurrentHour() <= 17) {
                    return ("Afternoon,");
                }
            else /* the hour is after 5pm, so it is between 6pm and midnight */
                if (17 < TwoLink.CurrentHour() <= 24) {
                    return ("Evening,");
                }
            else /* the hour is not between 0 and 24, so something is wrong */ {
                return ("Good day, ");
            }

        },
        Greet: function() {
            return (TwoLink.Greet.GetTimeOfDay() + " " + TwoLink.Greet.GetName());
        }
    },
    GetStyleSheet: function() {
        if ((0 <= TwoLink.CurrentHour() && TwoLink.CurrentHour() < 7) || (19 <= TwoLink.CurrentHour() && TwoLink.CurrentHour() <= 24)) {
            document.write("<link rel='stylesheet' href='/heart/css/main-1.dark' type='text/css'>");
        } else {
            document.write("<link rel='stylesheet' href='/heart/css/main-1.css' type='text/css'>");
        }
    },
  GetClock:  function () {
    	var d = new Date();
    	var nhour = d.getHours(),
    		nmin = d.getMinutes(),
    		ap;
    	if (nhour == 0) {
    		ap = " AM";
    		nhour = 12;
    	} else if (nhour < 12) {
    		ap = " AM";
    	} else if (nhour == 12) {
    		ap = " PM";
    	} else if (nhour > 12) {
    		ap = " PM";
    		nhour -= 12;
    	}
    	if (nmin <= 9) nmin = "0" + nmin;
    	document.getElementById('clockbox').innerHTML = "" + nhour + ":" + nmin + ap + "";
      setTimeout("TwoLink.GetClock();",1000);
    },


}
