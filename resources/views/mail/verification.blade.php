<head>
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: Helvetica, Georgia, Arial, sans-serif;
        }
        .block {
            display: block;
        }
        .inline-block {
            display: inline-block;
        }
        .bg-background {
            background-color: #F2F7F8;
        }
        .bg-accent {
            background-color: #00A8E8;
        }
        .bg-white {
            background-color: #ffffff;
        }
        .w-full {
            width: 100%;
        }
        .px-24 {
            padding-left: 6rem;
            padding-right: 6rem;
        }
        .px-11 {
            padding-left: 2.75rem;
            padding-right: 2.75rem;
        }
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .py-6 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
        .m-auto {
            margin: 0 auto;
        }
        .rounded-xl {
            border-radius: 0.75rem;
        }
        .font-clash-reg {
            font-family: Helvetica, sans-serif;
            font-weight: 400;
        }
        .font-clash-med {
            font-family: Helvetica, sans-serif;
            font-weight: 600;
        }
        .font-clash-sbol {
            font-family: Helvetica, sans-serif;
            font-weight: 700;
        }
        .text-clamp-2xl {
            font-size: clamp(1rem, 0.4286rem + 0.8929vw, 1.5rem);
        }
        .text-clamp-xl {
            font-size: clamp(0.875rem, 0.8rem + 0.375vw, 1.25rem);
        }
        .text-text {
            color: #64748B;
        }
        .text-black {
            color: #000000;
        }
        .mt-10 {
            margin-top: 2.5rem;
        }
        .max-w-75ch {
            max-width: 75ch;
        }
        .indent-4 {
            text-indent: 1rem;
        }
        .border-3px {
            border: solid 3px #000;
        }
        .shadow-neubrutal {
            box-shadow: 5px 5px 0 0 #000000;
        }
        .decoration-0 {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="height: 100% !important;margin: 0;padding: 0;width: 100% !important;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;border-spacing: 0;height: 100%!important;margin: 0;padding: 0;width: 100% !important;word-break: break-word">
            <tbody>
                <tr>
                    <td align="center" valign="top" width="100%" style="min-width: 100%;max-width: 100%;width: 100%">
                        <table class="bg-accent" border="0" cellpadding="16" cellspacing="0" width="600" style="border-collapse: collapse;border-spacing: 0;word-break: break-word">
                            <tbody>
                                <tr>
                                    <td align="center" valign="top" style="border-bottom:0;border-left:1px solid #e9eaee;border-right:1px solid #e9eaee;border-top:0;display:block;padding-left:40px;padding-right:40px;padding-top:40px">
                                        <img src="{{asset('assets/logo.png')}}" alt="logo">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="block m-auto px-8 py-6 bg-white rounded-xl">
            <h4 class="font-clash-med text-clamp-2xl text-black">
                Profila verifikācija
            </h4>
            <p class="text-text decoration-0 font-clash-reg text-clamp-xl mt-10 max-w-75ch indent-4">
                Paldies, ka izvēlējies SS.LV! Lūdzu apstiprini savu e-pasta adresi, nospiežot uz linka apakšā. Jaunumus par
                sava sludinājuma statusu saņemsi šajā e-pastā, tāpēc ir svarīgi izmantot sev ērtu e-pasta adresi.
            </p>
            <p class="text-text font-clash-reg text-clamp-xl mt-10 max-w-[75ch] indent-4">
                * Ja nesaproti, kāpēc saņem šo e-pastu, nespied uz norādīto linku!
            </p>
            <a href="http://localhost:8000" class="text-black mt-10 font-clash-sbol text-clamp-2xl py-4 px-11 bg-accent rounded-xl border-3px shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">
                Verificēt profilu
            </a>
        </div>
    </div>
</body>
