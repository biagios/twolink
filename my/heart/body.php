<!DOCTYPE html>
<!-- This is the body. This page will be usefull later on. -->

<html>
<!-- Head -->
<head>
    <title>Linker | Body</title>
    <meta name="google-site-verification" content="KnKB_zfVVHCBL4IDZoHiHRrNQqYWquEztdVNSrbjemo" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">
    <meta name="theme-color" content="#ecf0f1">
    <link href="//twolink.co.uk/css/bootstrap.css" rel="stylesheet">
    <link href="//twolink.co.uk/css/styles-2.0.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,500' rel='stylesheet' type='text/css'>
    <script src="//twolink.co.uk/js/jquery.min.js"></script>
</head>

<!-- BG start -->
<div id="background">

<!-- Title -->
    <div class=title>

      <!-- Clock -->
             <h1><div id="clockbox"><script type="text/javascript">
              function GetClock(){var d=new Date();var nhour=d.getHours(),nmin=d.getMinutes(),ap;if(nhour==0){ap=" AM";nhour=12;}else if(nhour<12){ap=" AM";}else if(nhour==12){ap=" PM";}else if(nhour>12){ap=" PM";nhour-=12;}if(nmin<=9) nmin="0"+nmin;document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+ap+"";}window.onload=function(){GetClock();setInterval(GetClock,1000);}

      </script></div></h1>

      <!-- what to say -->
              <h2><script language="JavaScript">

      var myDate = new Date();





      /* hour is before noon */

      if ( myDate.getHours() < 12 )

      {

          document.write("Morning,");

      }

      else  /* Hour is from noon to 5pm (actually to 5:59 pm) */

      if ( myDate.getHours() >= 12 && myDate.getHours() <= 17 )

      {

          document.write("Afternoon,");

      }

      else  /* the hour is after 5pm, so it is between 6pm and midnight */

      if ( myDate.getHours() > 17 && myDate.getHours() <= 24 )

      {

          document.write("Evening,");

      }

      else  /* the hour is not between 0 and 24, so something is wrong */

      {

          document.write("Mhh, something seems to be wrong... email us at admin@twolink.co.uk");

      }



      </script>

      <!-- Names it calls you -->
      <div id="myQuote"><script>var names = new Array();
      var names = ["sexy.", "good looking.", "superstar.", "smarty pants.", "gorgeous.", "lovely.", "friend.", "pal.", "classy.", "rockstar.", "you wonderful human."];
      var myRandom = Math.floor(Math.random()*names.length);
                  document.getElementById('myQuote').innerHTML= names[myRandom];</script></div></h2>
          </div>

<!-- Links -->
<div class="logos">

				<a name="Google" onmouseenter="hoverLinks(event)" onmouseleave="hoverLinks(event, true)" href="http://www.twolink.co.uk/links/google">

                  <img src="/img/icons/google.png"></a>

            <a name="YouTube" onmouseenter="hoverLinks(event)" onmouseleave="hoverLinks(event, true)" href="http://www.twolink.co.uk/links/ytube">

                  <img src="/img/icons/youtube.png"></a>

        <a name="Twitter" onmouseenter="hoverLinks(event)" onmouseleave="hoverLinks(event, true)" href="http://www.twolink.co.uk/links/tweete">

                  <img src="/img/icons/twitter.png"></a>

    <a name="Facebook" onmouseenter="hoverLinks(event)" onmouseleave="hoverLinks(event, true)" href="http://www.twolink.co.uk/links/face">

                  <img src="/img/icons/facebook.png"></a>

			</div>
