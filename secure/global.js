function video() {
    // Check if the browser supports the necessary APIs
    // if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    //   // Get the video element and result element
    //   var videoElement = document.getElementById('videoqr');
    //   var resultElement = document.getElementById('addres');
      
    //   var constraints = { video: { facingMode: 'environment' } };
    
    //   // Request access to the camera
    // //   navigator.mediaDevices.getUserMedia({ video: true })
    //   navigator.mediaDevices.getUserMedia(constraints)
    //     .then(function(stream) {
    //       // Set the video source to the camera stream
    //       videoElement.srcObject = stream;
    
    //       // Create a code reader instance from ZXing library
    //       var codeReader = new ZXing.BrowserQRCodeReader();
    
    //       // Start scanning for QR codes
    //       codeReader.decodeFromVideoElement(videoElement, function(result) {
    //         // Display the QR code result
    //         resultElement.textContent = result.text;
    //         alert('scanned');
    //       });
    //     })
    //     .catch(function(error) {
    //       console.log('Error accessing the camera:', error);
    //     });
    // } else {
    //   console.log('getUserMedia() is not supported by your browser');
    // }
    
    // function docReady(fn) {
    //     // see if DOM is already available
    //     if (document.readyState === "complete"
    //         || document.readyState === "interactive") {
    //         // call on next available tick
    //         setTimeout(fn, 1);
    //     } else {
    //         document.addEventListener("DOMContentLoaded", fn);
    //     }
    // }

    // docReady(function () {
    //     var resultContainer = document.getElementById('qr-reader-results');
    //     var lastResult, countResults = 0;
    //     function onScanSuccess(decodedText, decodedResult) {
    //         if (decodedText !== lastResult) {
    //             ++countResults;
    //             lastResult = decodedText;
    //             // Handle on success condition with the decoded message.
    //             console.log(`Scan result ${decodedText}`, decodedResult);
    //         }
    //     }

    //     var html5QrcodeScanner = new Html5QrcodeScanner(
    //         "qr-reader", { fps: 10, qrbox: 250 });
    //     html5QrcodeScanner.render(onScanSuccess);
    // });
}

function netwroks() {
    var x = document.getElementById("netwroks");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function accountz() {
    var x = document.getElementById("accountz");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function settingz() {
    var x = document.getElementById("settingz");
    var y = document.getElementById("maint");
    var z = document.getElementById("accountz");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
    }
}
function settingz1() {
    var x = document.getElementById("settingz");
    var y = document.getElementById("maint");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}
function assetc(coin, amount, logo, value) {
    var x = document.getElementById("maint");
    var y = document.getElementById("assetcon");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "block";

        document.getElementById("con").innerHTML = coin;
        document.getElementById("con1").innerHTML = coin;
        document.getElementById("amot").innerHTML = amount;
        document.getElementById("valt").innerHTML = value;
        document.getElementById("logoc").src = logo;
    }
}

function copy(copy, cpybtn) {
    /* Get the text field */
    var copyText = document.getElementById(copy).innerHTML.trim();
    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText);

    const element = document.getElementById(cpybtn);
    element.title = "copied!";
}

function copy1(copy) {
    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copy);
}

function receve() {
    var x = document.getElementById("receve");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function sendt(amt, coin, logo) {
    var x = document.getElementById("sendt");
    var y = document.getElementById("maint");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";

        document.getElementById("sendcoin").innerHTML = coin;
        document.getElementById("sendcoin1").innerHTML = coin;
        document.getElementById("sendcoin2").innerHTML = coin;
        document.getElementById("sendbal").innerHTML = amt;
        document.getElementById("sendlogo").src = logo;
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}
function clearsendt() {
    var x = document.getElementById("sendt");
    var y = document.getElementById("maint");
    
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";

    } else {
        x.style.display = "none";
        y.style.display = "block";
        
        document.getElementById("dolval").value = "";
        document.getElementById("addres").value = "";
        document.getElementById("amt").innerHTML = "";
        document.getElementById("pregasdol").innerHTML = "";
        document.getElementById("pregas").innerHTML = "";
        document.getElementById("pregas1").innerHTML = "";
        document.getElementById("gastot").innerHTML = "";
        document.getElementById("amt1").innerHTML = "";
        document.getElementById("amt2").innerHTML = "";
        
        document.getElementById("actmsg").style.display = "none";
        document.getElementById("fstbtn").removeAttribute('disabled');
        
        var a = document.getElementById("pgcont");
        var b = document.getElementById("pgcon");
        
        var w = document.getElementById("ensinput");
        var x1 = document.getElementById("pgfoot");
    
        if (b.style.display === "block") {
            w.style.display = "flex";
            a.style.display = "block";
            x1.style.display = "block";
            b.style.display = "none";
            
            document.getElementById("doltxt").innerHTML = "";
            document.getElementById("amtext").innerHTML = "";
            document.getElementById("dolgas").innerHTML = "";
            document.getElementById("gasfee").innerHTML = "";
            document.getElementById("gasfee1").innerHTML = "";
            document.getElementById("dolgas1").innerHTML = "";
            document.getElementById("gasfee2").innerHTML = "";
            document.getElementById("gasfee3").innerHTML = "";
            document.getElementById("amt2").innerHTML = "";
        }
    }
}

function tabs() {
    var x = document.getElementById("tab1");
    var y = document.getElementById("tab2");
    var element1 = document.getElementById("tb1");
    var element2 = document.getElementById("tb2");
    if (x.style.display === "none") {
        x.style.display = 'block';
        element2.classList.remove("tab--active");
        element2.classList.remove("home__tab--active");
        element1.classList.add("tab--active");
        element1.classList.add("home__tab--active");
        y.style.display = 'none';
    } else {
        x.style.display = "none";
        element1.classList.remove("tab--active");
        element1.classList.remove("home__tab--active");
        element2.classList.add("tab--active");
        element2.classList.add("home__tab--active");
        y.style.display = 'block';
    }
}

function receipt(popover,amt,coin,dolval,gasfee,addr,time,lastupdate) {
    var x = document.getElementById(popover);
    if (x.style.display === "none") {
        x.style.display = "block";
        if(popover == 'popover3'){
            document.getElementById("rcptamt").innerHTML = amt;
            document.getElementById("rcptamt1").innerHTML = amt;
            document.getElementById("rcptcoin").innerHTML = coin;
            document.getElementById("rcptcoin1").innerHTML = coin;
            document.getElementById("rcptcoin2").innerHTML = coin;
            document.getElementById("rcpttotal").innerHTML = (parseFloat(amt) + parseFloat(gasfee)).toFixed(6) ;
            document.getElementById("rcptgas").innerHTML = gasfee;
            document.getElementById("rcpttime").innerHTML =  new Date(parseInt(time)*1000);
            document.getElementById("rcptwlt").innerHTML = addr.substr(0, 5) + "..." + addr.substr(38, 4);
        }else if(popover == 'popover2'){
            document.getElementById("rcptamt2").innerHTML = amt;
            document.getElementById("rcptamt21").innerHTML = amt;
            document.getElementById("rcptcoin2").innerHTML = coin;
            document.getElementById("rcptcoin21").innerHTML = coin;
            document.getElementById("rcptcoin22").innerHTML = coin;
            document.getElementById("rcpttotal2").innerHTML = (parseFloat(amt) + parseFloat(gasfee)).toFixed(6) ;
            document.getElementById("rcptgas2").innerHTML = gasfee;
            document.getElementById("rcpttime2").innerHTML =  new Date(parseInt(time)*1000);
            document.getElementById("rcpttime1").innerHTML =  new Date(parseInt(lastupdate)*1000);
            document.getElementById("rcptwlt2").innerHTML = addr.substr(0, 5) + "..." + addr.substr(38, 4);
        }
                                                    
    } else {
        x.style.display = "none";
    }
}

function sendt1(amt, coin, logo) {
    var x = document.getElementById("sendt");
    var y = document.getElementById("assetcon");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";

        document.getElementById("sendcoin").innerHTML = coin;
        document.getElementById("sendcoin1").innerHTML = coin;
        document.getElementById("sendcoin2").innerHTML = coin;
        document.getElementById("sendbal").innerHTML = amt;
        document.getElementById("sendlogo").src = logo;
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}

function sett4() {
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var e = document.getElementById("settingz");
    var dah = document.getElementById("sett6");
    e.classList.remove("settings-page--selected");
    a.classList.remove("tab-bar__tab--active");
    c.classList.remove("tab-bar__tab--active");
    d.classList.remove("tab-bar__tab--active");
    da.classList.remove("tab-bar__tab--active");
    dah.classList.remove("tab-bar__tab--active");
}
function sett() {
    var y = document.getElementById("gener");
    var xy = document.getElementById("secpri");
    var z = document.getElementById("abut");
    var za = document.getElementById("nets");
    var zah = document.getElementById("notify");
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var e = document.getElementById("settingz");
    var dah = document.getElementById("sett6");
    if (y.style.display === "none") {
        y.style.display = "block";
        e.classList.add("settings-page--selected");
        a.classList.add("tab-bar__tab--active");
        xy.style.display = "none";
        z.style.display = "none";
        za.style.display = "none";
        zah.style.display = "none";
        c.classList.remove("tab-bar__tab--active");
        d.classList.remove("tab-bar__tab--active");
        da.classList.remove("tab-bar__tab--active");
        dah.classList.remove("tab-bar__tab--active");
    }
}
function sett2() {
    var y = document.getElementById("gener");
    var xy = document.getElementById("secpri");
    var z = document.getElementById("abut");
    var za = document.getElementById("nets");
    var zah = document.getElementById("notify");
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var e = document.getElementById("settingz");
    var dah = document.getElementById("sett6");
    if (xy.style.display === "none") {
        xy.style.display = "block";
        e.classList.add("settings-page--selected");
        c.classList.add("tab-bar__tab--active");
        y.style.display = "none";
        z.style.display = "none";
        za.style.display = "none";
        zah.style.display = "none";
        a.classList.remove("tab-bar__tab--active");
        d.classList.remove("tab-bar__tab--active");
        da.classList.remove("tab-bar__tab--active");
        dah.classList.remove("tab-bar__tab--active");
    }
}
function sett3() {
    var y = document.getElementById("gener");
    var xy = document.getElementById("secpri");
    var z = document.getElementById("abut");
    var za = document.getElementById("nets");
    var zah = document.getElementById("notify");
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var e = document.getElementById("settingz");
    var dah = document.getElementById("sett6");
    if (z.style.display === "none") {
        z.style.display = "block";
        e.classList.add("settings-page--selected");
        d.classList.add("tab-bar__tab--active");
        y.style.display = "none";
        xy.style.display = "none";
        za.style.display = "none";
        zah.style.display = "none";
        a.classList.remove("tab-bar__tab--active");
        c.classList.remove("tab-bar__tab--active");
        da.classList.remove("tab-bar__tab--active");
        dah.classList.remove("tab-bar__tab--active");
    }
}
function sett5() {
    var y = document.getElementById("gener");
    var xy = document.getElementById("secpri");
    var z = document.getElementById("abut");
    var za = document.getElementById("nets");
    var zah = document.getElementById("notify");
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var e = document.getElementById("settingz");
    var dah = document.getElementById("sett6");
    if (za.style.display === "none") {
        za.style.display = "block";
        e.classList.add("settings-page--selected");
        da.classList.add("tab-bar__tab--active");
        y.style.display = "none";
        xy.style.display = "none";
        z.style.display = "none";
        zah.style.display = "none";
        a.classList.remove("tab-bar__tab--active");
        c.classList.remove("tab-bar__tab--active");
        d.classList.remove("tab-bar__tab--active");
        dah.classList.remove("tab-bar__tab--active");
        
    }
}
function set6() {
    var y = document.getElementById("gener");
    var xy = document.getElementById("secpri");
    var z = document.getElementById("abut");
    var za = document.getElementById("nets");
    var zah = document.getElementById("notify");
    var a = document.getElementById("sett");
    var c = document.getElementById("sett2");
    var d = document.getElementById("sett3");
    var da = document.getElementById("sett5");
    var dah = document.getElementById("sett6");
    var e = document.getElementById("settingz");
    if (zah.style.display === "none") {
        zah.style.display = "block";
        e.classList.add("settings-page--selected");
        dah.classList.add("tab-bar__tab--active");
        y.style.display = "none";
        xy.style.display = "none";
        z.style.display = "none";
        za.style.display = "none";
        a.classList.remove("tab-bar__tab--active");
        c.classList.remove("tab-bar__tab--active");
        d.classList.remove("tab-bar__tab--active");
        da.classList.remove("tab-bar__tab--active");
    }
}

function thme() {
    var x = document.getElementById("thme").value;
    document.documentElement.setAttribute("data-theme", x)
}

function scanqr() {
    var x = document.getElementById("scanqr");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function lastpy() {
    var w = document.getElementById("ensinput");
    var x = document.getElementById("pgcont");
    var x1 = document.getElementById("pgfoot");
    var y = document.getElementById("pgcon");
    if (x.style.display === "none") {
        w.style.display = "flex";
        x.style.display = "block";
        x1.style.display = "block";
        y.style.display = "none";
    } else {
        w.style.display = "none";
        x.style.display = "none";
        x1.style.display = "none";
        y.style.display = "block";
    }
}
function rlyfd() {
    /////////////select details from form
    var dolval = document.getElementById("dolval").value;
    var addr = document.getElementById("addres").value;
    var coin = document.getElementById("sendcoin").innerHTML;
    var amt = document.getElementById("amt").innerHTML;
    var gasdol = document.getElementById("pregasdol").innerHTML
    var gas = document.getElementById("pregas").innerHTML
    var tot = document.getElementById("amt2").innerHTML;
    var gastot = document.getElementById("gastot").innerHTML;
    
    /////////// select details from modal
    var w = document.getElementById("ensinput");
    var x = document.getElementById("pgcont");
    var x1 = document.getElementById("pgfoot");
    var y = document.getElementById("pgcon");
    
    ///////////form validation
    if (addr.length === 0) {
        toastr.info("Input Wallet Address!!!", "Note",{
            positionClass: "toast-top-center",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
        return;
    }
    if (dolval.length === 0) {
        toastr.info("Input Amount!!!", "Note",{
            positionClass: "toast-top-center",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
        return;
    }
    
    //////////change modal from form to confirmation
    if (x.style.display === "none") {
        w.style.display = "flex";
        x.style.display = "block";
        x1.style.display = "block";
        y.style.display = "none";
    } else {
        w.style.display = "none";
        x.style.display = "none";
        x1.style.display = "none";
        y.style.display = "block";
    }
    
    ////////////set figures in confirm modal
    document.getElementById("recipe").innerHTML = addr.substr(0, 8) + "..." + addr.substr(35, 7);
    document.getElementById("addre").innerHTML = addr
    document.getElementById("amtext").innerHTML = amt;
    document.getElementById("doltxt").innerHTML = dolval;
    document.getElementById("sencoin").innerHTML = "Sending " + coin;
    document.getElementById("sencoin1").innerHTML = coin;
    document.getElementById("sencoin2").innerHTML = coin;
    document.getElementById("sencoin3").innerHTML = coin;
    document.getElementById("sencoin4").innerHTML = coin;
    document.getElementById("gasfee").innerHTML = gas;
    document.getElementById("gasfee1").innerHTML = gas;
    document.getElementById("gasfee2").innerHTML = tot;
    document.getElementById("gasfee3").innerHTML = tot;
    
    document.getElementById("dolgas").innerHTML = gasdol;
    document.getElementById("dolgas1").innerHTML = gastot;
    
}

function popover(popover) {
    var x = document.getElementById(popover);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function buy(net) {
    var x = document.getElementById("popover4");
    var a = document.getElementById('buyspan');
    var b = document.getElementById('buyspan1');
    var c = document.getElementById('buyspan2');
    if (x.style.display === "none") {
        x.style.display = "block";
        a.innerHTML = net;
        b.innerHTML = net;
        c.innerHTML = net;
    } else {
        x.style.display = "none";
    }
}

function receve1() {
    var x = document.getElementById("receve");
    var y = document.getElementById("popover1");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        y.style.display = "block";
        x.style.display = "none";
    }
}

function coinamt() {
    var x = document.getElementById("dolval").value;
    var w = document.getElementById("amt");
    var w1 = document.getElementById("amt1");
    var w2 = document.getElementById("amt2");
    var z = document.getElementById("sendcoin2").innerHTML;
    var sendbal = document.getElementById("sendbal").innerHTML;
    var btn = document.getElementById("fstbtn");
    
    if(z == "BTC"){
        
        fetch('../data/rates.json')
        .then(r => r.json().then(
        j =>{
            var we = j.BTC;
            chuckrate(we)}));
    }else if(z == "ETH"){
        fetch('../data/rates.json')
        .then(r => r.json().then(
        j =>{
            var we = j.ETH;
            chuckrate(we)}));
    }else if(z == "BCH"){
        fetch('../data/rates.json')
        .then(r => r.json().then(
        j =>{
            var we = j.BCH;
            chuckrate(we)}));
    }else if(z == "LTC"){
        fetch('../data/rates.json')
        .then(r => r.json().then(
        j =>{
            var we = j.LTC;
            chuckrate(we)}));
    }else if(z == "BNB"){
        fetch('../data/rates1.json')
        .then(r => r.json().then(
        j =>{
            var we = j.BNB;
            chuckrate(we)}));
        
    }else if(z == "SHIBA"){
        fetch('../data/rates1.json')
        .then(r => r.json().then(
        j =>{
            var we = j.SIHBA;
            chuckrate(we)}));
        
    }else if(z == "DOGE"){
        fetch('../data/rates1.json')
        .then(r => r.json().then(
        j =>{
            var we = j.DOGE;
            chuckrate(we)}));
        
    }else if(z == "ADA"){
        fetch('../data/rates1.json')
        .then(r => r.json().then(
        j =>{
            var we = j.ADA;
            chuckrate(we)}));
        
    }else if(z == "SOL"){
        fetch('../data/rates2.json')
        .then(r => r.json().then(
        j =>{
            var we = j.ETH;
            chuckrate(we)}));
        
    }else if(z == "USDT" || "BUSD"){
        w.innerHTML = x;
        var gasdol = x / 166;
        var gas = x / 166;
        var tot = parseFloat(x) + parseFloat(gas);
        var gastot = parseFloat(x) + parseFloat(gasdol);
        
        // w.innerHTML = x.toFixed(2);
        w1.innerHTML = tot.toFixed(2);
        w2.innerHTML = tot.toFixed(2);
        
        document.getElementById("pregasdol").innerHTML = gasdol.toFixed(2);
        document.getElementById("pregas").innerHTML = gas.toFixed(2);
        document.getElementById("pregas1").innerHTML = gas.toFixed(2);
        
        document.getElementById("precoin").innerHTML = z;
        document.getElementById("precoin1").innerHTML = z;
        document.getElementById("precoin2").innerHTML = z;
        document.getElementById("precoin4").innerHTML = z;
        
        document.getElementById("gastot").innerHTML = gastot.toFixed(2);
        
        if (tot > sendbal) {
            document.getElementById("errcoin").innerHTML = z;
            document.getElementById("errcoin1").innerHTML = z;
            document.getElementById("errbuy").addEventListener("click", function() {
              buy(z);
            });
            
            document.getElementById("actmsg").style.display = "block";
            btn.setAttribute('disabled', '');
            // return;
        }else{
            document.getElementById("actmsg").style.display = "none";
            btn.removeAttribute('disabled');
        }
    }
    
    function chuckrate(we){
        var curval = x/we;
        
        var gasdol = x / 166;
        var gas = curval / 166;
        var tot = parseFloat(curval) + parseFloat(gas);
        var gastot = parseFloat(x) + parseFloat(gasdol);
        
        w.innerHTML = curval.toFixed(8);
        w1.innerHTML = tot.toFixed(8);
        w2.innerHTML = tot.toFixed(8);
        
        document.getElementById("pregasdol").innerHTML = gasdol.toFixed(2);
        document.getElementById("pregas").innerHTML = gas.toFixed(8);
        document.getElementById("pregas1").innerHTML = gas.toFixed(8);
        
        document.getElementById("precoin").innerHTML = z;
        document.getElementById("precoin1").innerHTML = z;
        document.getElementById("precoin2").innerHTML = z;
        document.getElementById("precoin4").innerHTML = z;
        
        document.getElementById("gastot").innerHTML = gastot.toFixed(2);
        
        if (tot > sendbal) {
            document.getElementById("errcoin").innerHTML = z;
            document.getElementById("errcoin1").innerHTML = z;
            document.getElementById("errbuy").addEventListener("click", function() {
              buy(z);
            });
            
            document.getElementById("actmsg").style.display = "block";
            btn.setAttribute('disabled', '');
            // return;
        }else{
            document.getElementById("actmsg").style.display = "none";
            btn.removeAttribute('disabled');
        }
    }   
} 