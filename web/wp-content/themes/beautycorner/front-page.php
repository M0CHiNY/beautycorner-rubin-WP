<?php
/**
 * Template name: Home template
 */

get_header();

?>

<section class="slider-plugin">
    <?php echo do_shortcode('[rev_slider alias="bcr-home-slider"][/rev_slider]'); ?>
</section>
<section class="section home-about">
    <div class="container">
        <h2 class="home-about-title title">
            Beauty Corner Rubin
        </h2>
        <div class="home-about__sub-title">Professionelle Behandlungen</div>
        <div class="home-about__content">
            <p>Strahlende Augen, ein umwerfendes Lächeln, gepflegte Hände und Fingernägel.<br>
                Ein attraktives Auftreten kann Ihnen sowohl im Privaten<br>
                wie auch im Beruflichen Türen und Wege öffnen.<br>
                Überlassen Sie daher nichts dem Zufall, begeben Sie sich in professionelle Hände.<br>
                Kommen Sie vorbei, fühlen Sie sich wie Zuhause und lassen Sie sich verwöhnen.</p>
            <p>
                Ich freue mich auf Sie
            </p>
            <p>Cornelia Amann</p>
        </div>
    </div>
</section>
<section class="slider-plugin">
    <?php echo do_shortcode('[rev_slider alias="bcr-home-offer-slider"][/rev_slider]'); ?>
</section>
<section class="section home-services">
    <div class="container">
        <h2 class="home-services__title title">Angebot</h2>
        <div class="services__items">
            <div class="services__item">
                <img class="services__item-img"
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI0MHB0IiBoZWlnaHQ9IjQwcHQiIHZpZXdCb3g9IjAgMCA0MCA0MCI+DQo8ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3Ij4NCjxnIGlkPSJMYXllci0xIiBkYXRhLW5hbWU9IkViZW5lIDEiPg0KPGNsaXBQYXRoIGlkPSJjcDAiPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMCw0MCkiIGQ9Ik0gMCA0MCBMIDQwIDQwIEwgNDAgMCBMIDAgMCBaICIvPg0KPC9jbGlwUGF0aD4NCjxnIGNsaXAtcGF0aD0idXJsKCNjcDApIj4NCjxwYXRoIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLC0xLDIwLDM5LjYzOTYpIiBkPSJNIDAgMCBDIDEwLjg0NyAwIDE5LjY0IDguNzkzIDE5LjY0IDE5LjY0IEMgMTkuNjQgMzAuNDg3IDEwLjg0NyAzOS4yOCAwIDM5LjI4IEMgLTEwLjg0NyAzOS4yOCAtMTkuNjQgMzAuNDg3IC0xOS42NCAxOS42NCBDIC0xOS42NCA4Ljc5MyAtMTAuODQ3IDAgMCAwICIgZmlsbD0iI2YwZWNmMCIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMjAsMzkuNjM5NikiIHN0cm9rZS13aWR0aD0iLjcyIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2FhOGY4OCIgZD0iTSAwIDAgQyAxMC44NDcgMCAxOS42NCA4Ljc5MyAxOS42NCAxOS42NCBDIDE5LjY0IDMwLjQ4NyAxMC44NDcgMzkuMjggMCAzOS4yOCBDIC0xMC44NDcgMzkuMjggLTE5LjY0IDMwLjQ4NyAtMTkuNjQgMTkuNjQgQyAtMTkuNjQgOC43OTMgLTEwLjg0NyAwIDAgMCBaICIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMzMuMzU2NCwyNC40NjY4KSIgZD0iTSAwIDAgQyAtLjI0NyAuNDE5IC0uNDcgLjgzMSAtLjcyNyAxLjIyNiBDIC0xLjMzOCAyLjE2NyAtMi4xMDcgMyAtMy4xMDYgMy42NTIgQyAtNC4yNTUgNC40MDIgLTUuNTUzIDQuOCAtNi45OTYgNC44MjggQyAtNy44OTUgNC44NDUgLTguNzg2IDQuNzcyIC05LjY3NyA0LjY3OSBDIC0xMC40NzkgNC41OTQgLTExLjI4NyA0LjU1IC0xMi4wOSA0LjQ2OSBDIC0xMi44NzIgNC4zODkgLTEzLjY1NSA0LjMwMSAtMTQuNDMyIDQuMTg5IEMgLTE1Ljk2NyAzLjk2NiAtMTcuNDk3IDMuNzExIC0xOS4wMzMgMy40OTMgQyAtMjAuMTYzIDMuMzMzIC0yMS4yOTkgMy4yMDEgLTIyLjQzNSAzLjA3NSBDIC0yMy4wNTYgMy4wMDcgLTIzLjY4MyAyLjk3NyAtMjQuMzA4IDIuOTM0IEMgLTI0LjU0NCAyLjkxOCAtMjQuNjU1IDIuOTk0IC0yNC42NDUgMy4yMDIgQyAtMjQuNjM2IDMuMzc4IC0yNC41OTMgMy41NTkgLTI0LjUyMyAzLjcyNCBDIC0yNC4xMSA0LjY4NCAtMjMuNDIzIDUuNDYgLTIyLjQyMSA2LjAxNSBDIC0yMS44NzUgNi4zMTcgLTIxLjI2NyA2LjQ4NSAtMjAuNjM3IDYuNTg1IEMgLTE5LjI3MSA2LjgwMiAtMTcuOTA0IDcuMDEzIC0xNi41MzQgNy4yMSBDIC0xNS40ODUgNy4zNjEgLTE0LjQzMiA3LjQ5NiAtMTMuMzc5IDcuNjIzIEMgLTExLjg5OCA3LjgwMSAtMTAuNDEyIDcuOTIxIC04LjkxOCA3Ljc5MiBDIC03Ljc5NCA3LjY5NSAtNi43MjUgNy40MSAtNS43MTMgNi45NzQgQyAtNC40NTMgNi40MjkgLTMuMzU5IDUuNjkyIC0yLjQzOSA0Ljc3MSBDIC0xLjI2NyAzLjU5NiAtLjQ2NSAyLjI1NiAtLjExIC43MjUgQyAtLjA2NSAuNTI4IC0uMDM2IC4zMjkgLS4wMDEgLjEzIEMgLjAwNiAuMDk0IDAgLjA1NSAwIDAgIiBmaWxsPSIjYWE4Zjg5Ii8+DQo8L2c+DQo8L2c+DQo8L2c+DQo8L3N2Zz4NCg=="
                    alt="1">
                <div class="services__title">Nägel</div>
                <ul class="services__sublist">
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Kunstnägel:
                            Acryl und Gel</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                </ul>
            </div>
            <div class="services__item">
                <img class="services__item-img"
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI0MHB0IiBoZWlnaHQ9IjQwcHQiIHZpZXdCb3g9IjAgMCA0MCA0MCI+DQo8ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3Ij4NCjxnIGlkPSJMYXllci0xIiBkYXRhLW5hbWU9IkViZW5lIDEiPg0KPGNsaXBQYXRoIGlkPSJjcDAiPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMCw0MCkiIGQ9Ik0gMCA0MCBMIDQwIDQwIEwgNDAgMCBMIDAgMCBaICIvPg0KPC9jbGlwUGF0aD4NCjxnIGNsaXAtcGF0aD0idXJsKCNjcDApIj4NCjxwYXRoIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLC0xLDIwLDM5LjYzOTYpIiBkPSJNIDAgMCBDIDEwLjg0NyAwIDE5LjY0IDguNzkzIDE5LjY0IDE5LjY0IEMgMTkuNjQgMzAuNDg3IDEwLjg0NyAzOS4yOCAwIDM5LjI4IEMgLTEwLjg0NyAzOS4yOCAtMTkuNjQgMzAuNDg3IC0xOS42NCAxOS42NCBDIC0xOS42NCA4Ljc5MyAtMTAuODQ3IDAgMCAwICIgZmlsbD0iI2YwZWNmMCIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMjAsMzkuNjM5NikiIHN0cm9rZS13aWR0aD0iLjcyIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2FhOGY4OCIgZD0iTSAwIDAgQyAxMC44NDcgMCAxOS42NCA4Ljc5MyAxOS42NCAxOS42NCBDIDE5LjY0IDMwLjQ4NyAxMC44NDcgMzkuMjggMCAzOS4yOCBDIC0xMC44NDcgMzkuMjggLTE5LjY0IDMwLjQ4NyAtMTkuNjQgMTkuNjQgQyAtMTkuNjQgOC43OTMgLTEwLjg0NyAwIDAgMCBaICIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMzMuMzU2NCwyNC40NjY4KSIgZD0iTSAwIDAgQyAtLjI0NyAuNDE5IC0uNDcgLjgzMSAtLjcyNyAxLjIyNiBDIC0xLjMzOCAyLjE2NyAtMi4xMDcgMyAtMy4xMDYgMy42NTIgQyAtNC4yNTUgNC40MDIgLTUuNTUzIDQuOCAtNi45OTYgNC44MjggQyAtNy44OTUgNC44NDUgLTguNzg2IDQuNzcyIC05LjY3NyA0LjY3OSBDIC0xMC40NzkgNC41OTQgLTExLjI4NyA0LjU1IC0xMi4wOSA0LjQ2OSBDIC0xMi44NzIgNC4zODkgLTEzLjY1NSA0LjMwMSAtMTQuNDMyIDQuMTg5IEMgLTE1Ljk2NyAzLjk2NiAtMTcuNDk3IDMuNzExIC0xOS4wMzMgMy40OTMgQyAtMjAuMTYzIDMuMzMzIC0yMS4yOTkgMy4yMDEgLTIyLjQzNSAzLjA3NSBDIC0yMy4wNTYgMy4wMDcgLTIzLjY4MyAyLjk3NyAtMjQuMzA4IDIuOTM0IEMgLTI0LjU0NCAyLjkxOCAtMjQuNjU1IDIuOTk0IC0yNC42NDUgMy4yMDIgQyAtMjQuNjM2IDMuMzc4IC0yNC41OTMgMy41NTkgLTI0LjUyMyAzLjcyNCBDIC0yNC4xMSA0LjY4NCAtMjMuNDIzIDUuNDYgLTIyLjQyMSA2LjAxNSBDIC0yMS44NzUgNi4zMTcgLTIxLjI2NyA2LjQ4NSAtMjAuNjM3IDYuNTg1IEMgLTE5LjI3MSA2LjgwMiAtMTcuOTA0IDcuMDEzIC0xNi41MzQgNy4yMSBDIC0xNS40ODUgNy4zNjEgLTE0LjQzMiA3LjQ5NiAtMTMuMzc5IDcuNjIzIEMgLTExLjg5OCA3LjgwMSAtMTAuNDEyIDcuOTIxIC04LjkxOCA3Ljc5MiBDIC03Ljc5NCA3LjY5NSAtNi43MjUgNy40MSAtNS43MTMgNi45NzQgQyAtNC40NTMgNi40MjkgLTMuMzU5IDUuNjkyIC0yLjQzOSA0Ljc3MSBDIC0xLjI2NyAzLjU5NiAtLjQ2NSAyLjI1NiAtLjExIC43MjUgQyAtLjA2NSAuNTI4IC0uMDM2IC4zMjkgLS4wMDEgLjEzIEMgLjAwNiAuMDk0IDAgLjA1NSAwIDAgIiBmaWxsPSIjYWE4Zjg5Ii8+DQo8L2c+DQo8L2c+DQo8L2c+DQo8L3N2Zz4NCg=="
                    alt="1">
                <div class="services__title">Nägel</div>
                <ul class="services__sublist">
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                </ul>
            </div>
            <div class="services__item">
                <img class="services__item-img"
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI0MHB0IiBoZWlnaHQ9IjQwcHQiIHZpZXdCb3g9IjAgMCA0MCA0MCI+DQo8ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3Ij4NCjxnIGlkPSJMYXllci0xIiBkYXRhLW5hbWU9IkViZW5lIDEiPg0KPGNsaXBQYXRoIGlkPSJjcDAiPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMCw0MCkiIGQ9Ik0gMCA0MCBMIDQwIDQwIEwgNDAgMCBMIDAgMCBaICIvPg0KPC9jbGlwUGF0aD4NCjxnIGNsaXAtcGF0aD0idXJsKCNjcDApIj4NCjxwYXRoIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLC0xLDIwLDM5LjYzOTYpIiBkPSJNIDAgMCBDIDEwLjg0NyAwIDE5LjY0IDguNzkzIDE5LjY0IDE5LjY0IEMgMTkuNjQgMzAuNDg3IDEwLjg0NyAzOS4yOCAwIDM5LjI4IEMgLTEwLjg0NyAzOS4yOCAtMTkuNjQgMzAuNDg3IC0xOS42NCAxOS42NCBDIC0xOS42NCA4Ljc5MyAtMTAuODQ3IDAgMCAwICIgZmlsbD0iI2YwZWNmMCIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMjAsMzkuNjM5NikiIHN0cm9rZS13aWR0aD0iLjcyIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2FhOGY4OCIgZD0iTSAwIDAgQyAxMC44NDcgMCAxOS42NCA4Ljc5MyAxOS42NCAxOS42NCBDIDE5LjY0IDMwLjQ4NyAxMC44NDcgMzkuMjggMCAzOS4yOCBDIC0xMC44NDcgMzkuMjggLTE5LjY0IDMwLjQ4NyAtMTkuNjQgMTkuNjQgQyAtMTkuNjQgOC43OTMgLTEwLjg0NyAwIDAgMCBaICIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMzMuMzU2NCwyNC40NjY4KSIgZD0iTSAwIDAgQyAtLjI0NyAuNDE5IC0uNDcgLjgzMSAtLjcyNyAxLjIyNiBDIC0xLjMzOCAyLjE2NyAtMi4xMDcgMyAtMy4xMDYgMy42NTIgQyAtNC4yNTUgNC40MDIgLTUuNTUzIDQuOCAtNi45OTYgNC44MjggQyAtNy44OTUgNC44NDUgLTguNzg2IDQuNzcyIC05LjY3NyA0LjY3OSBDIC0xMC40NzkgNC41OTQgLTExLjI4NyA0LjU1IC0xMi4wOSA0LjQ2OSBDIC0xMi44NzIgNC4zODkgLTEzLjY1NSA0LjMwMSAtMTQuNDMyIDQuMTg5IEMgLTE1Ljk2NyAzLjk2NiAtMTcuNDk3IDMuNzExIC0xOS4wMzMgMy40OTMgQyAtMjAuMTYzIDMuMzMzIC0yMS4yOTkgMy4yMDEgLTIyLjQzNSAzLjA3NSBDIC0yMy4wNTYgMy4wMDcgLTIzLjY4MyAyLjk3NyAtMjQuMzA4IDIuOTM0IEMgLTI0LjU0NCAyLjkxOCAtMjQuNjU1IDIuOTk0IC0yNC42NDUgMy4yMDIgQyAtMjQuNjM2IDMuMzc4IC0yNC41OTMgMy41NTkgLTI0LjUyMyAzLjcyNCBDIC0yNC4xMSA0LjY4NCAtMjMuNDIzIDUuNDYgLTIyLjQyMSA2LjAxNSBDIC0yMS44NzUgNi4zMTcgLTIxLjI2NyA2LjQ4NSAtMjAuNjM3IDYuNTg1IEMgLTE5LjI3MSA2LjgwMiAtMTcuOTA0IDcuMDEzIC0xNi41MzQgNy4yMSBDIC0xNS40ODUgNy4zNjEgLTE0LjQzMiA3LjQ5NiAtMTMuMzc5IDcuNjIzIEMgLTExLjg5OCA3LjgwMSAtMTAuNDEyIDcuOTIxIC04LjkxOCA3Ljc5MiBDIC03Ljc5NCA3LjY5NSAtNi43MjUgNy40MSAtNS43MTMgNi45NzQgQyAtNC40NTMgNi40MjkgLTMuMzU5IDUuNjkyIC0yLjQzOSA0Ljc3MSBDIC0xLjI2NyAzLjU5NiAtLjQ2NSAyLjI1NiAtLjExIC43MjUgQyAtLjA2NSAuNTI4IC0uMDM2IC4zMjkgLS4wMDEgLjEzIEMgLjAwNiAuMDk0IDAgLjA1NSAwIDAgIiBmaWxsPSIjYWE4Zjg5Ii8+DQo8L2c+DQo8L2c+DQo8L2c+DQo8L3N2Zz4NCg=="
                    alt="1">
                <div class="services__title">Nägel</div>
                <ul class="services__sublist">
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                </ul>
            </div>
            <div class="services__item">
                <img class="services__item-img"
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI0MHB0IiBoZWlnaHQ9IjQwcHQiIHZpZXdCb3g9IjAgMCA0MCA0MCI+DQo8ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3Ij4NCjxnIGlkPSJMYXllci0xIiBkYXRhLW5hbWU9IkViZW5lIDEiPg0KPGNsaXBQYXRoIGlkPSJjcDAiPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMCw0MCkiIGQ9Ik0gMCA0MCBMIDQwIDQwIEwgNDAgMCBMIDAgMCBaICIvPg0KPC9jbGlwUGF0aD4NCjxnIGNsaXAtcGF0aD0idXJsKCNjcDApIj4NCjxwYXRoIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLC0xLDIwLDM5LjYzOTYpIiBkPSJNIDAgMCBDIDEwLjg0NyAwIDE5LjY0IDguNzkzIDE5LjY0IDE5LjY0IEMgMTkuNjQgMzAuNDg3IDEwLjg0NyAzOS4yOCAwIDM5LjI4IEMgLTEwLjg0NyAzOS4yOCAtMTkuNjQgMzAuNDg3IC0xOS42NCAxOS42NCBDIC0xOS42NCA4Ljc5MyAtMTAuODQ3IDAgMCAwICIgZmlsbD0iI2YwZWNmMCIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMjAsMzkuNjM5NikiIHN0cm9rZS13aWR0aD0iLjcyIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2FhOGY4OCIgZD0iTSAwIDAgQyAxMC44NDcgMCAxOS42NCA4Ljc5MyAxOS42NCAxOS42NCBDIDE5LjY0IDMwLjQ4NyAxMC44NDcgMzkuMjggMCAzOS4yOCBDIC0xMC44NDcgMzkuMjggLTE5LjY0IDMwLjQ4NyAtMTkuNjQgMTkuNjQgQyAtMTkuNjQgOC43OTMgLTEwLjg0NyAwIDAgMCBaICIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMzMuMzU2NCwyNC40NjY4KSIgZD0iTSAwIDAgQyAtLjI0NyAuNDE5IC0uNDcgLjgzMSAtLjcyNyAxLjIyNiBDIC0xLjMzOCAyLjE2NyAtMi4xMDcgMyAtMy4xMDYgMy42NTIgQyAtNC4yNTUgNC40MDIgLTUuNTUzIDQuOCAtNi45OTYgNC44MjggQyAtNy44OTUgNC44NDUgLTguNzg2IDQuNzcyIC05LjY3NyA0LjY3OSBDIC0xMC40NzkgNC41OTQgLTExLjI4NyA0LjU1IC0xMi4wOSA0LjQ2OSBDIC0xMi44NzIgNC4zODkgLTEzLjY1NSA0LjMwMSAtMTQuNDMyIDQuMTg5IEMgLTE1Ljk2NyAzLjk2NiAtMTcuNDk3IDMuNzExIC0xOS4wMzMgMy40OTMgQyAtMjAuMTYzIDMuMzMzIC0yMS4yOTkgMy4yMDEgLTIyLjQzNSAzLjA3NSBDIC0yMy4wNTYgMy4wMDcgLTIzLjY4MyAyLjk3NyAtMjQuMzA4IDIuOTM0IEMgLTI0LjU0NCAyLjkxOCAtMjQuNjU1IDIuOTk0IC0yNC42NDUgMy4yMDIgQyAtMjQuNjM2IDMuMzc4IC0yNC41OTMgMy41NTkgLTI0LjUyMyAzLjcyNCBDIC0yNC4xMSA0LjY4NCAtMjMuNDIzIDUuNDYgLTIyLjQyMSA2LjAxNSBDIC0yMS44NzUgNi4zMTcgLTIxLjI2NyA2LjQ4NSAtMjAuNjM3IDYuNTg1IEMgLTE5LjI3MSA2LjgwMiAtMTcuOTA0IDcuMDEzIC0xNi41MzQgNy4yMSBDIC0xNS40ODUgNy4zNjEgLTE0LjQzMiA3LjQ5NiAtMTMuMzc5IDcuNjIzIEMgLTExLjg5OCA3LjgwMSAtMTAuNDEyIDcuOTIxIC04LjkxOCA3Ljc5MiBDIC03Ljc5NCA3LjY5NSAtNi43MjUgNy40MSAtNS43MTMgNi45NzQgQyAtNC40NTMgNi40MjkgLTMuMzU5IDUuNjkyIC0yLjQzOSA0Ljc3MSBDIC0xLjI2NyAzLjU5NiAtLjQ2NSAyLjI1NiAtLjExIC43MjUgQyAtLjA2NSAuNTI4IC0uMDM2IC4zMjkgLS4wMDEgLjEzIEMgLjAwNiAuMDk0IDAgLjA1NSAwIDAgIiBmaWxsPSIjYWE4Zjg5Ii8+DQo8L2c+DQo8L2c+DQo8L2c+DQo8L3N2Zz4NCg=="
                    alt="1">
                <div class="services__title">Nägel</div>
                <ul class="services__sublist">
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                </ul>
            </div>
            <div class="services__item">
                <img class="services__item-img"
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI0MHB0IiBoZWlnaHQ9IjQwcHQiIHZpZXdCb3g9IjAgMCA0MCA0MCI+DQo8ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3Ij4NCjxnIGlkPSJMYXllci0xIiBkYXRhLW5hbWU9IkViZW5lIDEiPg0KPGNsaXBQYXRoIGlkPSJjcDAiPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMCw0MCkiIGQ9Ik0gMCA0MCBMIDQwIDQwIEwgNDAgMCBMIDAgMCBaICIvPg0KPC9jbGlwUGF0aD4NCjxnIGNsaXAtcGF0aD0idXJsKCNjcDApIj4NCjxwYXRoIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLC0xLDIwLDM5LjYzOTYpIiBkPSJNIDAgMCBDIDEwLjg0NyAwIDE5LjY0IDguNzkzIDE5LjY0IDE5LjY0IEMgMTkuNjQgMzAuNDg3IDEwLjg0NyAzOS4yOCAwIDM5LjI4IEMgLTEwLjg0NyAzOS4yOCAtMTkuNjQgMzAuNDg3IC0xOS42NCAxOS42NCBDIC0xOS42NCA4Ljc5MyAtMTAuODQ3IDAgMCAwICIgZmlsbD0iI2YwZWNmMCIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMjAsMzkuNjM5NikiIHN0cm9rZS13aWR0aD0iLjcyIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2FhOGY4OCIgZD0iTSAwIDAgQyAxMC44NDcgMCAxOS42NCA4Ljc5MyAxOS42NCAxOS42NCBDIDE5LjY0IDMwLjQ4NyAxMC44NDcgMzkuMjggMCAzOS4yOCBDIC0xMC44NDcgMzkuMjggLTE5LjY0IDMwLjQ4NyAtMTkuNjQgMTkuNjQgQyAtMTkuNjQgOC43OTMgLTEwLjg0NyAwIDAgMCBaICIvPg0KPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMSwwLDAsLTEsMzMuMzU2NCwyNC40NjY4KSIgZD0iTSAwIDAgQyAtLjI0NyAuNDE5IC0uNDcgLjgzMSAtLjcyNyAxLjIyNiBDIC0xLjMzOCAyLjE2NyAtMi4xMDcgMyAtMy4xMDYgMy42NTIgQyAtNC4yNTUgNC40MDIgLTUuNTUzIDQuOCAtNi45OTYgNC44MjggQyAtNy44OTUgNC44NDUgLTguNzg2IDQuNzcyIC05LjY3NyA0LjY3OSBDIC0xMC40NzkgNC41OTQgLTExLjI4NyA0LjU1IC0xMi4wOSA0LjQ2OSBDIC0xMi44NzIgNC4zODkgLTEzLjY1NSA0LjMwMSAtMTQuNDMyIDQuMTg5IEMgLTE1Ljk2NyAzLjk2NiAtMTcuNDk3IDMuNzExIC0xOS4wMzMgMy40OTMgQyAtMjAuMTYzIDMuMzMzIC0yMS4yOTkgMy4yMDEgLTIyLjQzNSAzLjA3NSBDIC0yMy4wNTYgMy4wMDcgLTIzLjY4MyAyLjk3NyAtMjQuMzA4IDIuOTM0IEMgLTI0LjU0NCAyLjkxOCAtMjQuNjU1IDIuOTk0IC0yNC42NDUgMy4yMDIgQyAtMjQuNjM2IDMuMzc4IC0yNC41OTMgMy41NTkgLTI0LjUyMyAzLjcyNCBDIC0yNC4xMSA0LjY4NCAtMjMuNDIzIDUuNDYgLTIyLjQyMSA2LjAxNSBDIC0yMS44NzUgNi4zMTcgLTIxLjI2NyA2LjQ4NSAtMjAuNjM3IDYuNTg1IEMgLTE5LjI3MSA2LjgwMiAtMTcuOTA0IDcuMDEzIC0xNi41MzQgNy4yMSBDIC0xNS40ODUgNy4zNjEgLTE0LjQzMiA3LjQ5NiAtMTMuMzc5IDcuNjIzIEMgLTExLjg5OCA3LjgwMSAtMTAuNDEyIDcuOTIxIC04LjkxOCA3Ljc5MiBDIC03Ljc5NCA3LjY5NSAtNi43MjUgNy40MSAtNS43MTMgNi45NzQgQyAtNC40NTMgNi40MjkgLTMuMzU5IDUuNjkyIC0yLjQzOSA0Ljc3MSBDIC0xLjI2NyAzLjU5NiAtLjQ2NSAyLjI1NiAtLjExIC43MjUgQyAtLjA2NSAuNTI4IC0uMDM2IC4zMjkgLS4wMDEgLjEzIEMgLjAwNiAuMDk0IDAgLjA1NSAwIDAgIiBmaWxsPSIjYWE4Zjg5Ii8+DQo8L2c+DQo8L2c+DQo8L2c+DQo8L3N2Zz4NCg=="
                    alt="1">
                <div class="services__title">Nägel</div>
                <ul class="services__sublist">
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                    <li>
                        <a href="#">Maniküre</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="slider-plugin">
    <?php echo do_shortcode('[rev_slider alias="bcr-home-gift-img"][/rev_slider]'); ?>
</section>
<section class="section home-serteficates">
    <div class="container">
        <h2 class="home-serteficates__title title">
            Geschenkgutscheine
        </h2>
        <div class="home-serteficates__subtitle">Für Ihre Liebsten</div>
        <div class="home-serteficates_content">
            <p>Schönheit und Pflege ganz einfach mit einem Gutschein verschenken. Sich gezielt verwöhnen lassen oder
                etwas
                Neues ausprobieren. Ein kleines Geschenk mit Wow-Effekt!</p>
        </div>
        <div class="home-serteficates-maps">
            <div class="home-serteficates-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d674.8479900107769!2d9.37132!3d47.4238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b1f983ed97429%3A0xf892762662e1bfa8!2sBeauty%20Corner%20Rubin!5e0!3m2!1sde!2sch!4v1706003954309!5m2!1sde!2sch"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="home-serteficates-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d5419.619300531766!2d9.5140099!3d47.2203067!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x479b3a8583d72595%3A0xfd3d3e97bf8404b9!2sB%C3%BChl%2048%209487%20Gamprin%20Liechtenstein!3m2!1d47.220306699999995!2d9.5140099!5e0!3m2!1suk!2sua!4v1706003897738!5m2!1suk!2sua"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<section class="section home-schedule">
    <div class="container">
        <h2 class="home-schedule__title title">
            Standorte
        </h2>
        <div class="home-schedule-items">
            <div class="home-schedule-item">
                <div class="home-schedule-item__subtitle">
                    St. Gallen
                </div>
                <ul class="home-schedule__lists">
                    <li class="home-schedule__item">
                        <span>Montag</span>
                        <span>geschlossen</span>
                    </li>
                    <li class="home-schedule__item">
                        <span>Dienstag</span>
                        <span>9:00 – 18:00 Uhr</span>
                    </li>
                    <li class="home-schedule__item">
                        <span>Mittwoch</span>
                        <span>9:00 – 18:00 Uhr</span>
                    </li>
                    <li class="home-schedule__item">
                        <span>Freitag</span>
                        <span>9:00 – 18:00 Uhr</span>
                    </li>
                    <li class="home-schedule__item">
                        <span>Donnerstag</span>
                        <span>geschlossen</span>
                    </li>
                    <li class="home-schedule__item">
                        <span>jeden zweiten Samstag</span>
                        <span>8:00 – 15:00 Uhr</span>
                    </li>
                </ul>
                <div class="home-schedule__item-detaile">
                    Termine ausserhalb der Öffnungszeiten nach Vereinbarung.
                </div>
            </div>
            <div class="home-schedule-item">
                <div class="home-schedule-item__subtitle">
                    St. Gallen
                </div>
                <div class="home-schedule__item-detaile">
                    Termine: Montag, Donnerstag und jeden zweiten Samstag nach Vereinbarung
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider-plugin">
    <?php echo do_shortcode('[rev_slider alias="bcr-contact-us"][/rev_slider]'); ?>
</section>

<section class="section home-contacts">
    <div class="container">
        <div class="home-contacts__title title">
            Kontakt
        </div>
        <div class="home-contacts__box">
            <a href="mailto:info@beautycorner-rubin.ch">info@beautycorner-rubin.ch</a>
            <a href="tel:+41712444448">Festnetz: +41 71 244 44 48</a>
            <a href="tel:+41782104444">Mobile: +41 78 210 44 44</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>