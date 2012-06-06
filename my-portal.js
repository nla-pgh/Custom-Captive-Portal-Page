// Copyright (c) 2003-2009 Untangle, Inc.
// All rights reserved.

function customAuthenticate()
{
    var req = false;

    var e = document.getElementById("accept-agreement");
    if (e) {
        e.disabled = true;
    }


    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
        if (req.overrideMimeType) {
            req.overrideMimeType("text/xml");
        }
    } else if (window.ActiveXObject) {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (exn) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (exn) {}
        }
    }

    req.onreadystatechange = function()
    {
        if (req.readyState == 4) {
            if ( req.responseText.indexOf( "<success/>" ) >= 0 ) {
                alert( "You have been authenticated." );
                window.location.href = "http://www.untangle.com";
                return;
            }

            var e = document.getElementById("accept-agreement");
            if (e) {
                e.disabled = false;
            }
            
            alert( "Unable to authenticate you, please try again." );
        }
    };
    
    alert( "boom" );
    req.open("POST", "authenticate.php", true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send("username=" + escape( "test" ) + "&password=" + escape( "test" ));
};
