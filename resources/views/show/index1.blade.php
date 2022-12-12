<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Test</h1>
    <h1>Hello</h1>
    <h1>My name</h1>



   

    <!-- chitta -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            
            <div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-html-1"
                data-section="section-hb-html-1">
                <div class="ast-header-html inner-link-style-">
                    <div class="ast-builder-html-element">
                        <p>
                            <!-- GTranslate: https://gtranslate.io/ -->
                            <select onchange="doGTranslate(this);" class="notranslate" id="gtranslate_selector"
                                aria-label="Website Language Selector">
                                <option value="">Select Language</option>
                                <option value="en|en">English</option>
                                <option value="en|pa">Punjabi</option>
                                <option value="en|hi">Hindi</option>
                                <option value="en|ur">Urdu</option>
                                <option value="en|bn">Bengali</option>
                            </select>
                            <style>
                            #goog-gt-tt {
                                display: none !important;
                            }

                            .goog-te-banner-frame {
                                display: none !important;
                            }

                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }

                            .goog-text-highlight {
                                background-color: transparent !important;
                                box-shadow: none !important;
                            }

                            body {
                                top: 0 !important;
                            }

                            #google_translate_element2 {
                                display: none !important;
                            }
                            </style>
                        <div id="google_translate_element2"></div>
                        <script>
                        function googleTranslateElementInit2() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                autoDisplay: false
                            }, 'google_translate_element2');
                        }
                        if (!window.gt_translate_script) {
                            window.gt_translate_script = document.createElement('script');
                            gt_translate_script.src =
                                'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2';
                            document.body.appendChild(gt_translate_script);
                        }
                        </script>
                        <script>
                        function GTranslateGetCurrentLang() {
                            var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
                            return keyValue ? keyValue[2].split('/')[2] : null;
                        }

                        function GTranslateFireEvent(element, event) {
                            try {
                                if (document.createEventObject) {
                                    var evt = document.createEventObject();
                                    element.fireEvent('on' + event, evt)
                                } else {
                                    var evt = document.createEvent('HTMLEvents');
                                    evt.initEvent(event, true, true);
                                    element.dispatchEvent(evt)
                                }
                            } catch (e) {}
                        }

                        function doGTranslate(lang_pair) {
                            if (lang_pair.value) lang_pair = lang_pair.value;
                            if (lang_pair == '') return;
                            var lang = lang_pair.split('|')[1];
                            if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
                            if (typeof ga == 'function') {
                                ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location
                                    .search);
                            }
                            var teCombo;
                            var sel = document.getElementsByTagName('select');
                            for (var i = 0; i < sel.length; i++)
                                if (sel[i].className.indexOf('goog-te-combo') != -1) {
                                    teCombo = sel[i];
                                    break;
                                } if (document.getElementById('google_translate_element2') == null || document
                                .getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length ==
                                0 || teCombo.innerHTML.length == 0) {
                                setTimeout(function() {
                                    doGTranslate(lang_pair)
                                }, 500)
                            } else {
                                teCombo.value = lang;
                                GTranslateFireEvent(teCombo, 'change');
                                GTranslateFireEvent(teCombo, 'change')
                            }
                        }
                        </script>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>

    </section>


</body>

</html>