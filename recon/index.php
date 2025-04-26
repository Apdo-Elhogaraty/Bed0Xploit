<?<?php require '/var/www/html/Bed0Xploit/Component/header.php' ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="./style.css">
<?php require '/var/www/html/Bed0Xploit/Component/sidebar.php' ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <button type="button" class="hamburger animated fadeInLeft is-open" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>
    <div class="container">
        <!-- ==================================== مقدمة ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">بِسْمِ اللَّـهِ الرَّحْمَـٰنِ الرَّحِيمِ</h3>
                <p>
                    إسمع بقى يا باشا، قبل ما تبدأ تخترق أي حاجة أو تمسك موقع وتقول "يلا نكسر الدنيا" لازم الأول تبص حواليك وتجمع معلومات... وده اللي بنسميه <span class="colored_red">Reconnaissance</span> أو باختصار <span class="colored_red">Recon</span>.<br><br>

                    الـ <span class="colored_red">Recon</span> هو أول وأهم خطوة في أي عملية <span class="colored_red">Penetration Testing</span>، ومن غيره بتبقى داخل كأنك بتخبط في الحيطة.<br><br>

                    في الجزء ده ، هنمشي واحدة واحدة ونتعلم إزاي نجمع كل المعلومات اللي نقدر عليها عن التارجت بتاعنا، سواء من غير ما نلمسه خالص، أو لما نقرر نبدأ نخش عليه بأدوات
                    <br><br>
                    هنتكلم عن إيه بقى؟
                <ol style="color:blue; font-weight: bold;">
                    <li>What is Reconnaissance</li>
                    <li>Manually Walking Through the Target</li>
                    <li>Google Dorking</li>
                    <li>Scope Discovery</li>
                    <li>Subdomain Enumeration</li>
                    <li>Service Enumeration</li>
                    <li>Directory Brute-Forcing</li>
                    <li>Spidering the Site</li>
                    <li>Third-Party Hosting</li>
                    <li>GitHub Recon</li>
                    <li>(وكم نقطة زيادة جامدين هنزودهم وإنت شغال)</li>
                </ol>

                كل نقطة من دول هتفتحلك باب جديد لفهم التارجت أكتر، وتجهزك تطلع منه بأحلى <span class="colored_red">vulnerability</span>. فجهز القهوة وركز، لأن اللي جاي جامد 🔥
                </p>
            </div>
        </div>
        <!-- ==================================== ? What is Reconnaissance ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? What is Reconnaissance</h3>
                <p>
                    لما تيجي تبدأ أي عملية <span class="colored_red">penetration testing</span>، أول خطوة بتكون دايمًا هي <span class="colored_red">Reconnaissance</span> أو "الاستكشاف".<br><br>

                    في المرحلة دي، إحنا بنحاول نعرف كل حاجة عن التارجت قبل ما نلمسه حتى. بنجمع معلومات ممكن تساعدنا بعدين في تحديد الثغرات أو النقط اللي ممكن نستغلها.<br><br>

                    ممكن تقسم الـ <span class="colored_red">recon</span> لحاجتين رئيسيتين:
                <ul>
                    <li><span class="colored_red_b">Passive Reconnaissance:</span> بنجمع معلومات من غير ما نسيب أي أثر أو تفاعل مباشر مع التارجت، زي البحث في الإنترنت، استخدام أدوات زي <span class="colored_red">whois</span> أو <span class="colored_red">nslookup</span> أو حتى <span class="colored_red">Google Dorking</span>.</li>
                    <li><span class="colored_red_b">Active Reconnaissance:</span> بنبدأ نتفاعل مع التارجت بقى، نعمل <span class="colored_red">ping</span>، <span class="colored_red">port scan</span>، <span class="colored_red">subdomain enumeration</span>، وحاجات تانية ممكن تسيب أثر.</li>
                </ul>
                <br>

                الفكرة هنا إنك تبني خريطة ذهنية عن التارجت، وتعرف كل تفصيلة ممكن تفيدك بعدين في مرحلة الاستغلال. <br><br>
                وافتكر دايمًا: كل ما الـ <span class="colored_red">recon</span> بتاعك كان أقوى، كل ما فرصك في النجاح انك تلاقي ثغرات كتير كانت أعلى
                </p>
            </div>
        </div>
        <!-- ==================================== ? Manually Walking Through the Target ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Manually Walking Through the Target</h3>
                <p>
                    في المرحلة دي، إحنا بنبص للتارجت كأننا يوزر عادي خالص، بندخل على كل صفحة، نضغط على كل زرار، ونشوف كل لينك بيودينا فين.<br><br>

                    <span class="colored_red_b">Manually Walking</span> يعني إنك تستكشف التطبيق بنفسك، مش باستخدام أدوات، ودي خطوة مهمة جدًا عشان تحس بالتارجت وتفهم تدفق الـ <span class="colored_red">web application</span>.<br><br>

                    الحتة دي ممكن تطلعلك حاجات مش واضحة لو كنت اعتمدت على أدوات بس، زي:
                <ul>
                    <li>صفحات مش في السايت ماب.</li>
                    <li>Features مستخبية أو متربطة بجافاسكريبت.</li>
                    <li>Parameters بتظهر في الـ URL أو الـ forms.</li>
                    <li>Pages بتتطلب login أو فيها فرق بين صلاحيات الـ roles.</li>
                </ul>
                <br>

                جرب تدخل كـ <span class="colored_red">guest</span>، وبعدها كـ <span class="colored_red">authenticated user</span>، وشوف هل في اختلاف في السلوك؟ في داتا بتتغير؟ في requests جديدة؟<br><br>

                <span class="colored_red_b">Manually Walking </span> هو أكتر جزء بيعلّمك عن التارجت من غير ما تحس، وبيساعدك تكتشف حاجات كتير لو ركزت فيها شوية.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Google Dorking ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Google Dorking</h3>
                <p>
                    <span class="colored_red">Google Dorking</span> هي طريقة ذكية بنستخدم بيها محرك بحث Google علشان نلاقي معلومات حساسة أو مفيدة عن التارجت من غير ما نتفاعل معاه مباشرة.<br><br>

                    جوجل بيأرشف حاجات كتير جدًا، وممكن نستخدم الـ <span class="colored_red">advanced search operators</span> علشان نفلتر ونوصل لمعلومات دقيقة جدًا، زي ملفات حساسة، لوحات تحكم، أو حتى أخطاء موجودة في مواقع معينة.<br><br>

                    أمثلة على بعض الـ dorks:
                <ul>
                    <li><span class="colored_red_b">site:example.com</span> — يعرض كل الصفحات المؤرشفة من موقع معين.</li>
                    <li><span class="colored_red_b">inurl:admin</span> — يدور على روابط فيها كلمة "admin".</li>
                    <li><span class="colored_red_b">filetype:pdf</span> — يدور على ملفات PDF.</li>
                    <li><span class="colored_red_b">intitle:"index of"</span> — يعرض صفحات فيها فهارس مفتوحة (Directory Listing).</li>
                </ul>
                <br>

                استخدم <span class="colored_red">Google</span> كأنه أداة Recon ، لأن في أوقات كتير هتلاقي معلومات مش متوقعة متاحة للعامة، وده ممكن يكون نقطة بداية قوية لأي اختبار اختراق.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Scope Discovery ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Scope Discovery</h3>
                <p>
                    قبل ما تبدأ أي عملية <span class="colored_red">penetration testing</span> أو <span class="colored_red">bug bounty</span>، لازم تكون عارف إنت مسموحلك تشتغل على إيه وإيه لأ. هنا بييجي دور <span class="colored_red_b">Scope Discovery</span>.<br><br>

                    الـ <span class="colored_red_b">scope</span> هو ببساطة حدود التارجت اللي ينفع تشتغل عليه. ممكن تكون:
                <ul>
                    <li>دومينات أساسية (زي <span class="colored_red">example.com</span>).</li>
                    <li>ساب دومينات (زي <span class="colored_red">admin.example.com</span>).</li>
                    <li>IP ranges أو ranges معينة من السيرفرات.</li>
                    <li>APIs معينة أو mobile apps مربوطة بالسيرفر.</li>
                </ul>
                <br>

                ساعات الشركات بتكون واضحة جدًا في تحديد الـ scope، وساعات تانية بيكون الموضوع غامض شوية. في الحالة دي، شغلتك تبدأ تستكشف بنفسك وتأكد إنك ما خرجتش برا الحدود المسموحة.<br><br>

                أدوات أو طرق ممكن تساعدك في اكتشاف الـ scope:
                <ul>
                    <li>قراءة مستندات الـ <span class="colored_red">bug bounty program</span> لو فيه.</li>
                    <li>استخدام خدمات زي <span class="colored_red">crt.sh</span> أو <span class="colored_red">SecurityTrails</span> للبحث عن دومينات مرتبطة.</li>
                    <li>تحليل شهادات SSL لاستخراج أسماء مضيفين إضافية.</li>
                    <li>جمع الـ IP ranges من خلال <span class="colored_red">whois</span> أو <span class="colored_red">ASN lookup</span>.</li>
                </ul>
                <br>

                وجود Scope واضح مش بس بيحميك من تجاوز الحدود القانونية، لكن كمان بيساعدك تركّز جهودك على الأماكن اللي فعلاً مهمة وممكن يكون فيها ثغرات حقيقية.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Subdomain Enumeration ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Subdomain Enumeration</h3>
                <p>
                    <span class="colored_red_b">Subdomain Enumeration</span> هو إنك تجمع كل Subdomains اللي تحت الـ domain الأساسي زي <span class="colored_red">admin.example.com</span> أو <span class="colored_red">dev.example.com</span>.<br><br>

                    كل Subdomain ممكن يكون شغال على خدمة مختلفة، أو فيه نسخة قديمة من التطبيق، أو بيستخدم إعدادات أمان ضعيفة، وده بيزود فرصك تلاقي ثغرات حقيقية.<br><br>

                    في طريقتين رئيسيتين لجمع الساب دومينات:
                <ul>
                    <li><span class="colored_red_b">Passive Enumeration:</span> بتستخدم فيها مصادر عامة زي:
                        <ul>
                            <li><span class="colored_red">crt.sh</span></li>
                            <li><span class="colored_red">SecurityTrails</span></li>
                            <li><span class="colored_red">Shodan</span></li>
                            <li><span class="colored_red">Wayback Machine</span></li>
                            <li><span class="colored_red">VirusTotal</span></li>
                        </ul>
                    </li><br>
                    <li><span class="colored_red_b">Active Enumeration:</span> بتستخدم أدوات بتبعت Requests زي:
                        <ul>
                            <li><span class="colored_red">Amass</span></li>
                            <li><span class="colored_red">Sublist3r</span></li>
                            <li><span class="colored_red">Assetfinder</span></li>
                            <li><span class="colored_red">dnsx</span> و<span class="colored_red">httpx</span> علشان تعرف إيه اللي شغال فعلاً</li>
                        </ul>
                    </li>
                </ul>
                <br>

                بعد ما تجمع الساب دومينات، الخطوة اللي بعد كده هي إنك تبدأ تختبرهم واحد واحد وتشوف فيهم إيه اللي ممكن يكون مفيد أو فيه ثغرات.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Service Enumeration ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Service Enumeration</h3>
                <p>
                    بعد ما تعرف الـ subdomains أو IPs اللي التارجت بيستخدمها، بييجي دور <span class="colored_red_b">Service Enumeration</span> علشان تكتشف كل خدمة شغالة على أي بورت.<br><br>

                    الهدف هنا هو تعرف كل بورت مفتوح بيشغّل إيه، زي:
                <ul>
                    <li><span class="colored_red">80 / 443</span> → HTTP/HTTPS</li>
                    <li><span class="colored_red">21</span> → FTP</li>
                    <li><span class="colored_red">22</span> → SSH</li>
                    <li><span class="colored_red">3306</span> → MySQL</li>
                    <li>وغيرهم...</li>
                </ul>
                <br>

                الخدمات دي بتكشفلك حاجات كتير:
                <ul>
                    <li>إصدار السيرفر (زي Apache أو Nginx) وده ممكن يكون فيه ثغرات.</li>
                    <li>إصدار الـ software اللي شغال على السيرفر.</li>
                    <li>معلومات عن السيستم نفسه لو السيرفر بيرجع banner فيه تفاصيل.</li>
                </ul>
                <br>

                أدوات مشهورة في المرحلة دي:
                <ul>
                    <li><span class="colored_red">nmap</span> – الأشهر على الإطلاق.</li>
                    <li><span class="colored_red">netcat</span> – لعمل اتصالات يدوية ومعرفة الاستجابات.</li>
                </ul>
                <br>
                كل معلومة هنا ممكن توصلك لثغرة، خصوصًا لو الخدمة قديمة أو فيها misconfiguration. فركز كويس وشوف كل بورت ممكن يخبي وراه إيه.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Directory Brute-Forcing ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Directory Brute-Forcing</h3>
                <p>
                    <span class="colored_red_b">Directory Brute-Forcing</span> هو إنك تجرب تلقائيًا آلاف الأسماء عشان توصل لملفات أو فولدرات مخفية على السيرفر.<br><br>

                    ليه ده مهم؟ عشان المطورين ساعات بينسوا يحذفوا ملفات زي:
                <ul>
                    <li>صفحات test أو dev</li>
                    <li>Backups زي <span class="colored_red">.zip</span> أو <span class="colored_red">.bak</span></li>
                    <li>Panels داخلية مش محمية</li>
                    <li>مجلدات بتحتوي على config أو logs</li>
                </ul>
                <br>

                أدوات بتساعدك في الـ brute-force:
                <ul>
                    <li><span class="colored_red">ffuf</span> – خفيف وسريع ومليان options حلوة.</li>
                    <li><span class="colored_red">dirsearch</span> – Python tool ممتازة وسهلة.</li>
                </ul>
                <br>

                مهم جدًا تختار wordlist مناسبة زي:
                <ul>
                    <li><span class="colored_red">SecLists</span> → فيها wordlists جاهزة لأي حاجة تتخيلها.</li>
                    <li><span class="colored_red">raft-small-directories.txt</span> → سريعة للتجربة الأولية.</li>
                </ul>
                <br>
                كل مرة بتلاقي فولدر مش ظاهر في الـ UI، بتفتح لك فرصة جديدة لاكتشاف ثغرات أو Misconfigurations.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Spidering the Site ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Spidering the Site</h3>
                <p>
                    <span class="colored_red_b">Spidering the Site</span> هو عبارة عن عملية مسح للموقع بالكامل عشان تجمع روابط وصفحات جديدة مش واضحة في البداية. زي العنكبوت اللي بيمشي في شبكة الويب.<br><br>

                    الهدف هنا هو إنك تتبع كل الرابطات والـ endpoints اللي على الموقع وتجيب تفاصيل جديدة، يمكن تكون صفحات مش مدرجة في الـ sitemap، أو حتى صفحات مخفية.<br><br>

                    الأدوات المشهورة:
                <ul>
                    <li><span class="colored_red">Burp Suite</span> – من أفضل الأدوات في الـ spidering، بتمشي على الموقع كله وبتسجل كل الصفحات والـ parameters.</li>
                    <li><span class="colored_red">Gobuster</span> – تقدر تستخدمة للـ brute-forcing، كمان يقدر يعمل spidering للـ directories و الـ subdomains.</li>
                </ul>
                <br>

                بتستخدم الـ spidering عشان تكتشف حاجات زي:
                <ul>
                    <li>Pages hidden via JavaScript or other methods.</li>
                    <li>Misconfigured files or forgotten resources.</li>
                    <li>Cross-site scripting (XSS) and other injection points.</li>
                </ul>
                <br>

                لما تكتشف روابط جديدة، تبدأ تختبرها عشان تشوف هل هي بتعرض بيانات حساسة أو فيها ثغرات.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Third-Party Hosting ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Third-Party Hosting</h3>
                <p>
                    <span class="colored_red_b">Third-Party Hosting</span> هو لما الموقع يعتمد على خدمات من شركات تانية زي <span class="colored_red">CDN</span> أو <span class="colored_red">Cloud Storage</span> أو <span class="colored_red">Cloud Computing</span> عشان يستضيف ملفات أو خدمات معينة.<br><br>

                    بعض الأمثلة على الخدمات دي:
                <ul>
                    <li><span class="colored_red">Cloudflare</span> – توفر CDN لحماية المواقع من الـ DDoS وتسرع تحميل الصفحات.</li>
                    <li><span class="colored_red">Amazon S3</span> – لتخزين الملفات والـ backups.</li>
                    <li><span class="colored_red">Google Drive</span> – لبعض المواقع التي تستخدمه لتخزين الملفات أو الميديا.</li>
                    <li><span class="colored_red">GitHub Pages</span> – لتخزين مواقع ثابتة.</li>
                </ul>
                <br>

                المشكلة الرئيسية مع الـ third-party hosting إنه ممكن يحصل اختراق في الخدمة دي يؤدي لكشف معلومات حساسة. أو حتى لو الخدمة متاحة للعامة بدون حماية، دي بتكون نقطة ضعف ضخمة.<br><br>

                زي مثلاً:
                <ul>
                    <li>ممكن يظهر URL للـ backup أو ملفات configuration الممنوعة للوصول.</li>
                    <li>قد تكون الـ CDN أو الـ Cloud service لا تعطي تشفير مناسب أو تضبط الـ permissions بطريقة صحيحة.</li>
                </ul>
                <br>

                أدوات بتساعدك في الكشف عن الـ third-party hosting:
                <ul>
                    <li><span class="colored_red">Shodan</span> – لفحص الـ services المرتبطة بأي تكنولوجيا مستخدمة أو متاحة عبر الإنترنت.</li>
                    <li><span class="colored_red">CloudFlare Scanner</span> – للتأكد من مدى تأمين المواقع التي تستخدم Cloudflare.</li>
                </ul>
                <br>

                مهم جدًا تأكد إن الخدمة المستضافة من طرف ثالث آمنة علشان ما تتحولش إلى نقطة ضعف في التارجت.
                </p>
            </div>
        </div>
        <!-- ==================================== ? GitHub Recon ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? GitHub Recon</h3>
                <p>
                    <span class="colored_red_b">GitHub Recon</span> هو عملية البحث عن معلومات حساسة أو مفيدة داخل GitHub مرتبطة بالتارجت بتاعك. ممكن تلاقي فيه كنوز زي:
                <ul>
                    <li>API Keys أو Secrets.</li>
                    <li>ملفات Configuration.</li>
                    <li>كود فيه ثغرات أو بيديك فكرة عن الـ technologies اللي بيستخدمها الموقع.</li>
                    <li>Issues فيها كلام عن مشاكل حصلت في السيستم أو تسريبات.</li>
                </ul>
                <br>

                طرق البحث:
                <ul>
                    <li>استخدم دوال بحث GitHub زي: <span class="colored_red">org:targetname</span> أو <span class="colored_red">user:targetemployee</span>.</li>
                    <li>استخدم Google Dorking مع GitHub زي: <span class="colored_red">site:github.com "companyname" password</span>.</li>
                    <li>تابع الـ commits القديمة، كتير بيكون فيها معلومات اتشالت بعدين لكن لسه باينة في الـ history.</li>
                </ul>
                <br>

                أدوات مساعدة:
                <ul>
                    <li><span class="colored_red">Gitrob</span> – أداة بتسكان GitHub repositories وتجيبلك الحاجات الحساسة.</li>
                    <li><span class="colored_red">Gitleaks</span> – أداة قوية جداً بتدور على secrets والتوكنز في الـ repos.</li>
                </ul>
                <br>

                GitHub Recon مش بس للمطورين الغلطانين اللي رفعوا أسرار بالغلط، لكن كمان بيساعدك تفهم المشروع من جواه وده ممكن يكون بداية ممتازة لأي هجوم موجه.
                </p>
            </div>
        </div>
        <!-- ==================================== ? Tools & Methodology Resources ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;"> حاجات هتساعدك</h3>
                <p>
                    وانت شغال في الـ <span class="colored_green_b">Recon</span>، في شوية مصادر ممكن تسهل عليك الدنيا وتفتحلك دماغك على طرق وأدوات جديدة.
                    <br><br>

                    <span class="colored_blue_b">Pentesting Tools & Resources:</span><br>
                    <a href="https://www.notion.so/Pentesting-Tools-Resources-1de993504a6180408a28cef3e22c4eb6?pvs=4" target="_blank">
                        https://www.notion.so/Pentesting-Tools-Resources
                    </a>
                    <br><br>

                    <span class="colored_blue_b">Recon Methodology:</span><br>
                    <a href="https://hossamshady.medium.com/best-recon-methodology-b0e78c9dfd57" target="_blank">
                        https://hossamshady.medium.com/best-recon-methodology
                    </a>
                    <br><br>

                    <span class="colored_blue_b">What to do after Recon :</span><br>
                    <a href="https://hossamshady.medium.com/what-to-do-after-recon-part-1-b4f63285864a" target="_blank">
                    https://hossamshady.medium.com/what-to-do-after-recon
                    </a>
                    <br><br>

                    المصادر دي متقسمة ومنظمة بشكل يخليك تراجع على خطواتك وتستكشف أدوات جديدة، فاحتفظ بيهم وارجعلهم وانت بتجهز لأي تارجت.
                </p>
            </div>
        </div>

        <!-- /#page-content-wrapper -->


        <?php require '/var/www/html/Component/footer.php' ?>
