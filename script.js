
setInterval(() => {
      
      demo1 = document.getElementById("demo1");
      var datenow = new Date();
      dateonly = datenow.toLocaleDateString();
      demo1.innerHTML ="Date:"+ dateonly;
      
      
      demo1 = document.getElementById("demo2");
      var datenow = new Date();
      dateonly = datenow.toLocaleTimeString();
      demo1.innerHTML ="Time:"+ dateonly+" ";
      
      }, 1000);
      
      
      // Set the date we're counting down to
      var countDownDate = new Date("dec 31, 2024 15:37:25").getTime();
      
      
      var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
      
      // this is customise countdown 
      var distance1 = 1000*6*10*1;
      var y = setInterval(function() {
      var minutes = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance1 % (1000 * 60)) / 1000);
        document.getElementById("demo3").innerHTML = minutes + "m " + seconds + "s ";
        distance1 -= 1000;
        if (distance1 < 0) {
          clearInterval(y);
          document.getElementById("demo3").innerHTML = "EXPIRED";
          document.getElementById("demo3").style.color = "red";
        }
      }, 1000);