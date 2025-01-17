<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Abby Army</title>

        <meta content="Bloom Army" property="og:title" />
        <meta content="Bloom Army Stronk" property="og:description" />
        <meta content="https://bloom.army" property="og:url" />
        <meta content="https://bloom.army/abby.png" property="og:image" />
        <meta content="#FC5C00" data-react-helmet="true" name="theme-color" />
        <style>
            body {
                background-image: url("https://bloom.army/abby.png");
                background-repeat: repeat;
                height: 3000px;
            }
            #hidden_coupon {
                display: none;
            }
            dontopenme {
                display: none;
            }
        </style>

        <script src="https://unpkg.com/darkreader@4.9.32/darkreader.js"></script>
    </head>

    <body>
        <div id="hidden_coupon">Click me for coupon code!</div>

        <script>
            DarkReader.disable();

            const body = document.querySelector("body");
            let height = screen.height * 3;
            body.style.height = height;

            window.addEventListener("scroll", () => {
                if (window.scrollY + screen.height > height - screen.height) {
                    height += screen.height * 3;
                    body.style.height = height;
                }
            });

            function couponCode() {
                couponE = getElementByID("hidden_coupon");
                couponE.onclick(window.print("AllStaffRDucks"));
            }
        </script>

        <dontopenme>
            THE SECRET HAS ALREADY BEEN FOUND 
            
            If you see this message, screenshot it in #general on Discord and tag Eagle. I will gift you with $10
            account credit :P P.S. The coupon code above is a ruse, don't believe it, or I mean, could this be a tactic to discourage you from trying
            and possibly getting 50% off? Who knows, but will you try?
        </dontopenme>
    </body>
</html>
