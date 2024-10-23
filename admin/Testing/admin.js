const xValues = [2017,2018,2019,2020,2021,2022,2023,2024];
const yValues = [7,8,8,10,9,6,10,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: " #FFB715",
      borderColor: "#ff7400",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
function opencats() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "block";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("reserv").style.display = "none";
  }

  function opendash() {
    document.getElementById("dashboard").style.display = "block";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("reserv").style.display = "none";
    

  }
  function openmenu() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "block";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("reserv").style.display = "none";
    
  }
  function addnewmenu() {
    document.getElementById("addmenu").style.display = "block";
    document.getElementById("addmenu1").style.display = "block";
  }

function closenewmenu() {
    document.getElementById("addmenu").style.display = "none";
    document.getElementById("addmenu2").style.display = "none";
  }

 function opensettings() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "block";
    document.getElementById("orders").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("reserv").style.display = "none";
  }
  function openorders() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "block";
    document.getElementById("events").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("reserv").style.display = "none";
    
  }
  function openpromo() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("promotions").style.display = "block";
    document.getElementById("reserv").style.display = "none";
  }
  function openevents() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("events").style.display = "block";
    document.getElementById("reserv").style.display = "none";
  }
  function openreserv() {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("categories").style.display = "none";
    document.getElementById("categories1").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("promotions").style.display = "none";
    document.getElementById("events").style.display = "none";
    document.getElementById("reserv").style.display = "block";

  }
  function addnewpromo() {
    document.getElementById("add-promo-1").style.display = "block";
    document.getElementById("add-promo").style.display = "block";
  }

function closenewpromo() {
    document.getElementById("add-promo").style.display = "none";
    document.getElementById("add-promo-1").style.display = "none";
  }

  function addnewevent() {
    document.getElementById("add-event-1").style.display = "block";
    document.getElementById("add-event").style.display = "block";
  }

function closenewevent() {
    document.getElementById("add-event").style.display = "none";
    document.getElementById("add-event-1").style.display = "none";
  }


  function addDarkmodeWidget() {
    const options = {
      bottom: '2.5vmin', 
      right: 'unset', 
      left: '95vw', 
      time: '0.5s', 
      mixColor: '#fff', 
      backgroundColor: '#000000',  
      buttonColorDark: '#fff',  
      buttonColorLight: '#000000', 
      saveInCookies: true, 
      label: '🌓', 
      autoMatchOsTheme: false 
    }
    
    const darkmode = new Darkmode(options);
    darkmode.showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);

  document.addEventListener("keydown",e =>{
    if(e.key.toLowerCase() === "i" && e.metaKey ) 
    {
       addnewmenu();
    }
    if(e.key.toLowerCase() === "d" && e.shiftKey) 
      {
        opendash();
      }
      if(e.key.toLowerCase() === "c" && e.shiftKey) 
        {
          opencats();
        }  
      if(e.key.toLowerCase() === "m" && e.shiftKey) 
          {
            openmenu();
          }  
          if(e.key.toLowerCase() === "f" && e.ctrlKey) 
            {
              document.getElementById("search").focus();
            } 
                
  })
  const d = new Date();
  document.getElementById("date").innerHTML = d;

  function detectBrowser() {
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Edg") > -1) {
        return "Microsoft Edge";
    } else if (userAgent.indexOf("Chrome") > -1) {
        return "Google Chrome";
    } else if (userAgent.indexOf("Firefox") > -1) {
        return "Mozilla Firefox";
    } else if (userAgent.indexOf("Safari") > -1) {
        return "Safari";
    } else if (userAgent.indexOf("Opera") > -1) {
        return "Opera";
    } else if (userAgent.indexOf("Trident") > -1 || userAgent.indexOf("MSIE") > -1) {
        return "Internet Explorer";
    }

    return "Unknown";
}
var browserName = detectBrowser();
document.getElementById("web-ver").innerHTML = browserName;

