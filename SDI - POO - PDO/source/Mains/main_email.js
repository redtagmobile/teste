function sendEmail(infor_clientes, nome_hotel,
     valor_hotel, nome_agencia, dia_viagem,
      destino, total, entrada, restante, email, contato, email_cliente, apartamento, ponto_encontro, cnpj, endereco, site) {

    corpo_email = `<!doctype html>
    <html ⚡4email data-css-strict>
    
    <head>
        <meta charset="utf-8">
        <style amp4email-boilerplate>
            body {
                visibility: hidden
            }
        </style>
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <style amp-custom>
            .es-desk-hidden {
                display: none;
                float: left;
                overflow: hidden;
                width: 0;
                max-height: 0;
                line-height: 0;
            }
    
            s {
                text-decoration: line-through;
            }
    
            body {
                width: 100%;
                font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
            }
    
            table {
                border-collapse: collapse;
                border-spacing: 0px;
            }
    
            table td,
            html,
            body,
            .es-wrapper {
                padding: 0;
                Margin: 0;
            }
    
            .es-content,
            .es-header,
            .es-footer {
                table-layout: fixed;
                width: 100%;
            }
    
            p,
            hr {
                Margin: 0;
            }
    
            h1,
            h2,
            h3,
            h4,
            h5 {
                Margin: 0;
                line-height: 120%;
                font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
            }
    
            .es-left {
                float: left;
            }
    
            .es-right {
                float: right;
            }
    
            .es-p5 {
                padding: 5px;
            }
    
            .es-p5t {
                padding-top: 5px;
            }
    
            .es-p5b {
                padding-bottom: 5px;
            }
    
            .es-p5l {
                padding-left: 5px;
            }
    
            .es-p5r {
                padding-right: 5px;
            }
    
            .es-p10 {
                padding: 10px;
            }
    
            .es-p10t {
                padding-top: 10px;
            }
    
            .es-p10b {
                padding-bottom: 10px;
            }
    
            .es-p10l {
                padding-left: 10px;
            }
    
            .es-p10r {
                padding-right: 10px;
            }
    
            .es-p15 {
                padding: 15px;
            }
    
            .es-p15t {
                padding-top: 15px;
            }
    
            .es-p15b {
                padding-bottom: 15px;
            }
    
            .es-p15l {
                padding-left: 15px;
            }
    
            .es-p15r {
                padding-right: 15px;
            }
    
            .es-p20 {
                padding: 20px;
            }
    
            .es-p20t {
                padding-top: 20px;
            }
    
            .es-p20b {
                padding-bottom: 20px;
            }
    
            .es-p20l {
                padding-left: 20px;
            }
    
            .es-p20r {
                padding-right: 20px;
            }
    
            .es-p25 {
                padding: 25px;
            }
    
            .es-p25t {
                padding-top: 25px;
            }
    
            .es-p25b {
                padding-bottom: 25px;
            }
    
            .es-p25l {
                padding-left: 25px;
            }
    
            .es-p25r {
                padding-right: 25px;
            }
    
            .es-p30 {
                padding: 30px;
            }
    
            .es-p30t {
                padding-top: 30px;
            }
    
            .es-p30b {
                padding-bottom: 30px;
            }
    
            .es-p30l {
                padding-left: 30px;
            }
    
            .es-p30r {
                padding-right: 30px;
            }
    
            .es-p35 {
                padding: 35px;
            }
    
            .es-p35t {
                padding-top: 35px;
            }
    
            .es-p35b {
                padding-bottom: 35px;
            }
    
            .es-p35l {
                padding-left: 35px;
            }
    
            .es-p35r {
                padding-right: 35px;
            }
    
            .es-p40 {
                padding: 40px;
            }
    
            .es-p40t {
                padding-top: 40px;
            }
    
            .es-p40b {
                padding-bottom: 40px;
            }
    
            .es-p40l {
                padding-left: 40px;
            }
    
            .es-p40r {
                padding-right: 40px;
            }
    
            .es-menu td {
                border: 0;
            }
    
            a {
                text-decoration: none;
            }
    
            p,
            ul li,
            ol li {
                font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
                line-height: 150%;
            }
    
            ul li,
            ol li {
                Margin-bottom: 15px;
            }
    
            .es-menu td a {
                text-decoration: none;
                display: block;
            }
    
            .es-menu amp-img,
            .es-button amp-img {
                vertical-align: middle;
            }
    
            .es-wrapper {
                width: 100%;
                height: 100%;
            }
    
            .es-wrapper-color {
                background-color: #EEEEEE;
            }
    
            .es-header {
                background-color: transparent;
            }
    
            .es-header-body {
                background-color: #044767;
            }
    
            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li {
                color: #FFFFFF;
                font-size: 14px;
            }
    
            .es-header-body a {
                color: #FFFFFF;
                font-size: 14px;
            }
    
            .es-content-body {
                background-color: #FFFFFF;
            }
    
            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li {
                color: #333333;
                font-size: 16px;
            }
    
            .es-content-body a {
                color: #ED8E20;
                font-size: 16px;
            }
    
            .es-footer {
                background-color: transparent;
            }
    
            .es-footer-body {
                background-color: #FFFFFF;
            }
    
            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li {
                color: #333333;
                font-size: 14px;
            }
    
            .es-footer-body a {
                color: #333333;
                font-size: 14px;
            }
    
            .es-infoblock,
            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li {
                line-height: 120%;
                font-size: 12px;
                color: #CCCCCC;
            }
    
            .es-infoblock a {
                font-size: 12px;
                color: #CCCCCC;
            }
    
            h1 {
                font-size: 36px;
                font-style: normal;
                font-weight: bold;
                color: #333333;
            }
    
            h2 {
                font-size: 30px;
                font-style: normal;
                font-weight: bold;
                color: #333333;
            }
    
            h3 {
                font-size: 18px;
                font-style: normal;
                font-weight: normal;
                color: #333333;
            }
    
            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 36px;
            }
    
            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 30px;
            }
    
            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 18px;
            }
    
            a.es-button,
            button.es-button {
                border-style: solid;
                border-color: #66B3B7;
                border-width: 15px 30px 15px 30px;
                display: inline-block;
                background: #66B3B7;
                border-radius: 5px;
                font-size: 18px;
                font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
                font-weight: normal;
                font-style: normal;
                line-height: 120%;
                color: #FFFFFF;
                text-decoration: none;
                width: auto;
                text-align: center;
            }
    
            .es-button-border {
                border-style: solid solid solid solid;
                border-color: transparent transparent transparent transparent;
                background: #66B3B7;
                border-width: 0px 0px 0px 0px;
                display: inline-block;
                border-radius: 5px;
                width: auto;
            }
    
            .es-p-default {
                padding-top: 20px;
                padding-right: 35px;
                padding-bottom: 0px;
                padding-left: 35px;
            }
    
            .es-p-all-default {
                padding: 0px;
            }
    
            @media only screen and (max-width:600px) {
    
                p,
                ul li,
                ol li,
                a {
                    line-height: 150%
                }
    
                h1 {
                    font-size: 32px;
                    text-align: center;
                    line-height: 120%
                }
    
                h2 {
                    font-size: 26px;
                    text-align: center;
                    line-height: 120%
                }
    
                h3 {
                    font-size: 20px;
                    text-align: center;
                    line-height: 120%
                }
    
                .es-header-body h1 a,
                .es-content-body h1 a,
                .es-footer-body h1 a {
                    font-size: 32px
                }
    
                .es-header-body h2 a,
                .es-content-body h2 a,
                .es-footer-body h2 a {
                    font-size: 26px
                }
    
                .es-header-body h3 a,
                .es-content-body h3 a,
                .es-footer-body h3 a {
                    font-size: 20px
                }
    
                .es-menu td a {
                    font-size: 16px
                }
    
                .es-header-body p,
                .es-header-body ul li,
                .es-header-body ol li,
                .es-header-body a {
                    font-size: 16px
                }
    
                .es-content-body p,
                .es-content-body ul li,
                .es-content-body ol li,
                .es-content-body a {
                    font-size: 16px
                }
    
                .es-footer-body p,
                .es-footer-body ul li,
                .es-footer-body ol li,
                .es-footer-body a {
                    font-size: 16px
                }
    
                .es-infoblock p,
                .es-infoblock ul li,
                .es-infoblock ol li,
                .es-infoblock a {
                    font-size: 12px
                }
    
                *[class="gmail-fix"] {
                    display: none
                }
    
                .es-m-txt-c,
                .es-m-txt-c h1,
                .es-m-txt-c h2,
                .es-m-txt-c h3 {
                    text-align: center
                }
    
                .es-m-txt-r,
                .es-m-txt-r h1,
                .es-m-txt-r h2,
                .es-m-txt-r h3 {
                    text-align: right
                }
    
                .es-m-txt-l,
                .es-m-txt-l h1,
                .es-m-txt-l h2,
                .es-m-txt-l h3 {
                    text-align: left
                }
    
                .es-m-txt-r amp-img {
                    float: right
                }
    
                .es-m-txt-c amp-img {
                    margin: 0 auto
                }
    
                .es-m-txt-l amp-img {
                    float: left
                }
    
                .es-button-border {
                    display: inline-block
                }
    
                a.es-button,
                button.es-button {
                    font-size: 16px;
                    display: inline-block;
                    border-width: 15px 30px 15px 30px
                }
    
                .es-btn-fw {
                    border-width: 10px 0px;
                    text-align: center
                }
    
                .es-adaptive table,
                .es-btn-fw,
                .es-btn-fw-brdr,
                .es-left,
                .es-right {
                    width: 100%
                }
    
                .es-content table,
                .es-header table,
                .es-footer table,
                .es-content,
                .es-footer,
                .es-header {
                    width: 100%;
                    max-width: 600px
                }
    
                .es-adapt-td {
                    display: block;
                    width: 100%
                }
    
                .adapt-img {
                    width: 100%;
                    height: auto
                }
    
                td.es-m-p0 {
                    padding: 0px
                }
    
                td.es-m-p0r {
                    padding-right: 0px
                }
    
                td.es-m-p0l {
                    padding-left: 0px
                }
    
                td.es-m-p0t {
                    padding-top: 0px
                }
    
                td.es-m-p0b {
                    padding-bottom: 0
                }
    
                td.es-m-p20b {
                    padding-bottom: 20px
                }
    
                .es-mobile-hidden,
                .es-hidden {
                    display: none
                }
    
                tr.es-desk-hidden,
                td.es-desk-hidden,
                table.es-desk-hidden {
                    width: auto;
                    overflow: visible;
                    float: none;
                    max-height: inherit;
                    line-height: inherit
                }
    
                tr.es-desk-hidden {
                    display: table-row
                }
    
                table.es-desk-hidden {
                    display: table
                }
    
                td.es-desk-menu-hidden {
                    display: table-cell
                }
    
                .es-menu td {
                    width: 1%
                }
    
                table.es-table-not-adapt,
                .esd-block-html table {
                    width: auto
                }
    
                table.es-social {
                    display: inline-block
                }
    
                table.es-social td {
                    display: inline-block
                }
            }
        </style>
    </head>
    
    <body>
        <div class="es-wrapper-color">
            <!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#eeeeee"></v:fill> </v:background><![endif]-->
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tr>
                                <td align="center">
                                    <table class="es-content-body" style="background-color: transparent" width="600"
                                        cellspacing="0" cellpadding="0" align="center">
                                        <tr>
                                            <td class="es-p15t es-p15b es-p10r es-p10l" align="left">
                                                <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="282" valign="top"><![endif]-->
                                                <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                    <tr>
                                                        <td width="282" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-infoblock es-m-txt-c" align="left">
                                                                       
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td><td width="20"></td><td width="278" valign="top"><![endif]-->
                                                <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                    <tr>
                                                        <td width="278" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td align="right" class="es-infoblock es-m-txt-c">
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tr></tr>
                            <tr>
                                <td align="center">
                                    <table class="es-header-body" style="background-color: #044767" width="600"
                                        cellspacing="0" cellpadding="0" bgcolor="#044767" align="center">
                                        <tr>
                                            <td class="es-p35t es-p35b es-p35r es-p35l" align="left">
                                                <!--[if mso]><table width="530" cellpadding="0" cellspacing="0"><tr><td width="340" valign="top"><![endif]-->
                                                <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                    <tr>
                                                        <td class="es-m-p0r es-m-p20b" width="340" valign="top"
                                                            align="center">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-m-txt-c" align="left">
                                                                        <h1 style="color: #ffffff;line-height: 100%">
                                                                            `+nome_agencia+`</h1>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td><td width="20"></td>
    <td width="170" valign="top"><![endif]-->
                                                <table cellspacing="0" cellpadding="0" align="right">
                                                    <tr class="es-hidden">
                                                        <td class="es-m-p20b" width="170" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p5b" align="center" style="font-size:0">
                                                                        <table width="100%" cellspacing="0" cellpadding="0"
                                                                            border="0" role="presentation">
                                                                            <tr>
                                                                                <td
                                                                                    style="border-bottom: 1px solid #044767;background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height: 1px;width: 100%;margin: 0px">
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table cellspacing="0" cellpadding="0" align="right"
                                                                            role="presentation">
                                                                            <tr>
                                                                                <td align="left">
                                                                                    <table width="100%" cellspacing="0"
                                                                                        cellpadding="0" role="presentation">
                                                                                        <tr>
                                                                                            <td align="right">
                                                                                                <p><br></p>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="right">
                                                                                                <p><br></p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <td class="es-p10l" valign="top"
                                                                                    align="left" style="font-size:0"><a
                                                                                        href="https://viewstripo.email"
                                                                                        target="_blank">
                                                                                        <amp-img
                                                                                            src="images/77981522050090360.png"
                                                                                            alt style="display: block"
                                                                                            width="27" height="23">
                                                                                        </amp-img>
                                                                                    </a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td align="center">
                                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0"
                                        bgcolor="#ffffff" align="center">
                                        <tr>
                                            <td class="es-p40t es-p35r es-p35l" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p25t es-p25b es-p35r es-p35l"
                                                                        align="center" style="font-size:0"><a
                                                                            target="_blank"
                                                                            href="https://viewstripo.email/">
                                                                            <amp-img src="images/67611522142640957.png" alt
                                                                                style="display: block" width="120"
                                                                                height="115"></amp-img>
                                                                        </a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="es-p10b" align="center">
                                                                        <h2>Obrigado pela Compra !</h2>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="es-p15t es-p20b" align="left">
                                                                        <p style="font-size: 16px;color: #777777"> `+nome_agencia+` agradece a preferência<br>
                                                                        Destino:`+destino +`&nbsp;<br>Dia da viagem:`+ dia_viagem +`<br> Ponto de encontro: `+ponto_encontro+` </p>
                                                                    </td>
                                                                </tr>
                                                                
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td align="center">
                                    <table class="es-content-body" width="600" cellspacing="0" cellpadding="0"
                                        bgcolor="#ffffff" align="center">
                                        <tr>
                                            <td class="es-p20t es-p35r es-p35l" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p10t es-p10b es-p10r es-p10l"
                                                                        bgcolor="#eeeeee" align="left">
                                                                        <table style="width: 500px" class="cke_show_border"
                                                                            cellspacing="1" cellpadding="1" border="0"
                                                                            align="left" role="presentation">
                                                                            <tr>
                                                                                <td width="80%">
                                                                                    <h4>Confirmação de ordem #</h4>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="es-p35r es-p35l" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p10t es-p10b es-p10r es-p10l"
                                                                        align="left">
                                                                        <table style="width: 500px" class="cke_show_border"
                                                                            cellspacing="1" cellpadding="1" border="0"
                                                                            align="left" role="presentation">
                                                                        
                                                                           `+infor_clientes+`
                                                                           
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="es-p40t es-p40b es-p35r es-p35l" align="left">
                                                <!--[if mso]><table width="530" cellpadding="0" cellspacing="0"><tr><td width="255" valign="top"><![endif]-->
                                                <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                    <tr>
                                                        <td class="es-m-p20b" width="255" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p15b" align="left">
                                                                        <h4>Hotel:</h4>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="es-p10b" align="left">
                                                                        <h1 style="font-size: 13px">`+nome_hotel+`
                                                                        </h1>
                                                                        <p style="font-size: 13px">`+apartamento+`
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td><td width="20"></td>
    <td width="255" valign="top"><![endif]-->
                                                <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                    <tr>
                                                        <td width="255" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p15b" align="left">
                                                                        <h4>Valor: R$`+valor_hotel+`</h4>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if mso]></td></tr></table><![endif]-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="es-p10t es-p35r es-p35l" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table
                                                                style="border-top: 3px solid #eeeeee;border-bottom: 3px solid #eeeeee"
                                                                width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p15t es-p15b es-p10r es-p10l"
                                                                        align="left">
                                                                        <table style="width: 500px" class="cke_show_border"
                                                                            cellspacing="1" cellpadding="1" border="0"
                                                                            align="left" role="presentation">
                                                                            <tr>
                                                                                <td width="80%">
                                                                                    <h4>TOTAL</h4>
                                                                                </td>
                                                                                <td width="20%">
                                                                                    <h4>R$`+total+`</h4>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table
                                                                style="border-top: 3px solid #eeeeee;border-bottom: 3px solid #eeeeee"
                                                                width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p15t es-p15b es-p10r es-p10l"
                                                                        align="left">
                                                                        <table style="width: 500px" class="cke_show_border"
                                                                            cellspacing="1" cellpadding="1" border="0"
                                                                            align="left" role="presentation">
                                                                            <tr>
                                                                                <td width="80%">
                                                                                    <h4>Entrada</h4>
                                                                                </td>
                                                                                <td width="20%">
                                                                                    <h4>R$`+entrada+`</h4>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="530" valign="top" align="center">
                                                            <table
                                                                style="border-top: 3px solid #eeeeee;border-bottom: 3px solid #eeeeee"
                                                                width="100%" cellspacing="0" cellpadding="0"
                                                                role="presentation">
                                                                <tr>
                                                                    <td class="es-p15t es-p15b es-p10r es-p10l"
                                                                        align="left">
                                                                        <table style="width: 500px" class="cke_show_border"
                                                                            cellspacing="1" cellpadding="1" border="0"
                                                                            align="left" role="presentation">
                                                                            <tr>
                                                                                <td width="80%">
                                                                                    <h4>Restante</h4>
                                                                                </td>
                                                                                <td width="20%">
                                                                                    <h4>R$`+restante+`</h4>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                            <tr>
                                <td align="center">
                                    <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0"
                                        align="center">
                                        <tr>
                                            <td class="es-p35t es-p40b es-p35r es-p35l" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                <tr>
                                                <td class="es-p35b" align="center">
                                                    <p style="font-size: 26px"><b>`+nome_agencia+`</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="es-m-txt-c es-p5b">
                                                    <p style="color: #777777">Telefone: `+contato+`<br>Email: `+email+`</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="es-m-txt-c es-p5b">
                                                    <p style="color: #777777">Endereço: `+endereco+`<br>CNPJ: `+cnpj+`</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="es-m-txt-c es-p5b">
                                                    <p style="color: #777777">Web: `+site+`</p>
                                                </td>
                                            </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    
    </html>`
    axios.post('../../api2/controller.php', {
        action: "send-email",
        values: [
            email_cliente,
            "RECIBO",
            corpo_email
            
        ]
    }).then(function (response) {
        console.log()
        if(response.data){
            Swal.fire(
            'Cadastrado !',
            'Venda feita com Sucesso e email enviado !',
            'success'
        );
      
        }else{
            Swal.fire(
            'ERRO :(',
            'Algo de inesperado aconteceu, se persistir, contatar suporte !',
            'error'
        );
      
        }
        setTimeout(function () {
            location.href = "fazerVenda.php";
        }, 2000);
    })

}

