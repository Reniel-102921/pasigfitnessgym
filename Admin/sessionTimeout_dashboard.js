//login timeout
    $(function(){
        function timeChecker()
        {
          setInterval(function(){
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
            timeCompare(storedTimeStamp);
          },3000);
        }

        function timeCompare(timeString){
          var currentTime = new Date();
          var pastTime = new Date(timeString);
          var timeDiff = currentTime - pastTime;
          var secPast = Math.floor( (timeDiff/1000) );//seconds

          if( secPast > 30) {
            sessionStorage.removeItem("lastTimeStamp");
            window.location= "sessionKiller_dashboard.php";
            return false;
          }else {
            console.log(currentTime + " - "+ pastTime+" - "+secPast+ " sec past");
          }
        }

      $(document).mousemove(function(){
        var timeStamp = new Date();
        sessionStorage.setItem("lastTimeStamp",timeStamp);
      });

        timeChecker();

    });
