<?php require '/var/www/html/Bed0Xploit/Component/header.php' ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="./style.css">
<?php require '/var/www/html/Bed0Xploit/Component/Sidebar.php' ?>

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
                    بص يا صديقي وركز كده… في عالم الويب الحديث، فهمك لطريقة عمل الإنترنت هو أول وأهم خطوة لأي حد عايز يدخل مجال تطوير الويب أو اكتشاف الثغرات الأمنية. الجزء ده هو الأساس النظري اللي هيبني عليه كل حاجة بعد كده – هيساعدك تفهم المواقع بتشتغل إزاي، إزاي بتتأمن، وإزاي ممكن يتم استغلالها لو حصلت غلطة في التصميم أو التنفيذ.

                    في القسم ده، هنشرح المفاهيم الأساسية اللي لازم أي مبتدئ يكون فاهمها قبل ما يتعمق في ثغرات الويب أو حتى يبدأ يطوّر تطبيقات ويب حقيقية.

                    هنتكلم عن:
                <ol style="color:blue; font-weight:bold;">
                    <li>What is a Web Application </li>
                    <li>What is a Web Server & Web Hosting</li>
                    <li>The Client-Server Model</li>
                    <li>The Domain Name System</li>
                    <li>Internet Ports</li>
                    <li>HTTP Requests and Responses</li>
                    <li>Internet Security Controls</li>
                    <li>Session Management and HTTP Cookies</li>
                    <li>Token-Based Authentication</li>
                    <li>The Same-Origin Policy</li>
                    <li>ENVIRONMENTAL SETUP AND TRAFFIC I NTERCEPTION (مهم ولازم توصلة)</li>
                </ol>
                ركز معانا في كل جزئية، لأن دي الأساس اللي هينقلك من مبتدئ لشخص فاهم وعارف بيعمل إيه في أي مرحلة من مراحل التعامل مع الويب.
                </p>
            </div>
        </div>
        <!-- ==================================== ? What is a Web Application ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? What is a Web Application</h3>

                <p>
                    الـ <span class="colored_red_b">Web Application</span> هو نوع من البرامج (software) بيشتغل من خلال المتصفح، يعني بدل ما تنزل برنامج على جهازك، كل اللي بتحتاجه إنك تفتح اللينك في المتصفح وتبدأ تستخدمه. من أول <span class="colored_red">فيسبوك</span>، <span class="colored_red">جيميل</span>، <span class="colored_red">تويتر</span>، لحد منصات التعلم – دي كلها Web Applications.<br><br>

                    بيكون فيه جزء من الأبليكيشن بيشتغل عندك على الجهاز (اللي هو الـ <span class="colored_red">Frontend</span>)، وجزء تاني بيشتغل على السيرفر (الـ <span class="colored_red">Backend</span>). الاتنين بيتواصلوا مع بعض من خلال الإنترنت باستخدام بروتوكولات زي <span class="colored_red">HTTP/HTTPS</span>.<br><br>

                    الويب أبليكيشن ممكن يعمل كل حاجة من <span class="colored_blue">تسجيل الدخول</span>، <span class="colored_blue">إدارة بيانات</span>، <span class="colored_blue">رفع ملفات</span>، <span class="colored_blue">تواصل مع مستخدمين</span>... وكل وظيفة من دول ممكن تكون باب لثغرة أمنية لو متعملتش بشكل صحيح.
                </p>

                <p>
                    لما تيجي تبص على أي Web Application، تقدر تقسّمه لـ 3 أجزاء رئيسية: <span class="colored_red">Frontend</span>، <span class="colored_red">Backend</span>، و<span class="colored_red">Database</span>. كل جزء له دور مهم، وكل واحد فيهم مسؤول عن مرحلة معينة من تفاعل المستخدم مع الموقع.
                </p>
                <hr>

                <p>
                    <span class="colored_red_b">Frontend</span> – اللي المستخدم بيشوفه:<br>
                    الـ Frontend هو واجهة الموقع – يعني كل حاجة بتشوفها بعينك كمستخدم: الألوان، الأزرار، القوائم، الفورمات، الصور... إلخ. وده بيتبني بلغات زي: <code>HTML</code>, <code>CSS</code>, و<code>JavaScript</code>.<br><br>
                    الهدف الأساسي من الـ Frontend هو إنه يخلّي تجربة المستخدم سهلة، مفهومة، وسريعة. كمان ممكن يكون فيه Frameworks زي <code>React.js</code> بتساعد في بناء واجهات ديناميكية.
                </p>

                <p>
                    <span class="colored_red_b">Backend</span> – العقل المدبر:<br>
                    الـ Backend هو الجزء اللي ورا الكواليس، اللي المستخدم مش بيشوفه، لكنه مسؤول عن معالجة البيانات، التعامل مع قواعد البيانات، تنفيذ العمليات، والتحقق من الصلاحيات.<br><br>
                    اللغات المشهورة في الـ Backend: <code>PHP</code>, <code>Python</code>, <code>Node.js</code>, <code>Java</code>. وبيشتغل مع سيرفرات زي Apache أو Nginx.<br><br>
                    مثال بسيط: لما تعمل تسجيل دخول، الـ Backend هو اللي بياخد البيانات، يراجعها، ويتأكد إن الباسورد صح.
                </p>

                <p>
                    <span class="colored_red_b">Database</span> :<br>
                    الـ Database (قاعدة البيانات) هي المكان اللي بيتخزن فيه كل حاجة: بيانات المستخدمين، الباسوردات (المشفّرة طبعًا 😎)، المقالات، الصور، المنتجات... أي نوع بيانات بتحتاجه الويب أبليكيشن.<br><br>
                    الأنواع المشهورة: <code>MySQL</code>, <code>PostgreSQL</code>, <code>MongoDB</code>.<br><br>
                    الـ Backend بيتعامل مع الـ Database عن طريق أوامر اسمها "Queries" علشان يجيب أو يضيف أو يعدّل أو يمسح البيانات.
                </p>

                <p>
                    🔄 العلاقة ما بينهم:<br>
                    تخيل إن الـ <span class="colored_blue">Frontend</span> هو "الوجه"، الـ <span class="colored_blue">Backend</span> هو "المخ"، و الـ <span class="colored_blue">Database</span> هي "الذاكرة". المستخدم يتفاعل مع الواجهة، الواجهة تبعت الطلب للـ Backend، والـ Backend يرد بعد ما يتعامل مع الـ Database. كلهم مع بعض بيشتغلوا كفريق واحد علشان يحققوا اللي المستخدم عايزه.
                </p>

                <hr>
                <mark class="m">مصادر اضافية تذاكر منها : </mark><br><br>
                <span class="colored_green_b">فيديو : </span><a href="https://www.youtube.com/watch?v=vwvPFuh7ZDs&ab_channel=%D8%A3%D8%AD%D9%85%D8%AF%D9%85%D8%AD%D9%85%D9%88%D8%AF%7C%7CAhmedMahmoud">
                    الفرق بين Front end و Back end</a><br><br>
                <strong>معلش بقا هتتعب حبتين .. في حاجة نسيت اقلك عليها انك عشان تخترق الحاجة لازم تكون عارف الحاجة دى شغالة ازاى ا صلا ف عشان كدا لازم نبنى web application حتى لو بسيط وبعدين نكمل: </strong><br><br>
                <span class="colored_green_b">فيديو للباشمهندس اسامة الزيرو Html: </span><a href="https://www.youtube.com/watch?v=qfPUMV9J5yw&ab_channel=ElzeroWebSchool">
                    تعلم HTML في 2022 في فيديو واحد
                </a><br>
                <span class="colored_green_b">JavaScript في فيديو واحد مقسم لجزئين (ودى مهمة جدا) : </span>
                <a href="https://www.youtube.com/watch?v=gIGGhFlGgLI&ab_channel=ElzeroWebSchool">
                الجزء الأول 
                </a>
                <span>  -  </span>
                <a href="https://www.youtube.com/watch?v=FKrfis1W1tk&ab_channel=ElzeroWebSchool">
                    الجزء التانى
                </a>
                <span class="colored_blue_b">"لو حبيت تكتفى بالجزء الاول بس تمام اووى برضو .."</span><br>
                <span class="colored_green_b">بالنسـبة بقا لكورسات الphp ودى بتتعلمها عشان الBackend ا:</span>
                <a href="https://www.youtube.com/playlist?list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq">PHP Bootcamp 2022</a><br>
                <span class="colored_green_b">اما بالنسـبة لل Database ف عندك كورس SQL دا : </span>
                <a href="https://www.youtube.com/playlist?list=PLDRMxi70CdSAhaQZzkR1uyNsMOezEChMA">SQL | Crash Course (Arabic)</a><br><br>
                <span class="colored_red_b">حاجة بقا مهم اوى تعرفها مش عايزك تضيع وقت كبير فيهم ومش لازم تحسس نفسك انك مبرمج خد الاساسيات في حجات كتير مش مهم تعرفها والسؤال هنا "اعرف انـا كدا بقيت تمام ازاى ؟" <span class="colored_blue_b">تعرف انك تمام لما تعمل تطبيقين او تلاتة فرونت ايند وباك اند لوحدك ودة فيديو لاول مشروع : <a href="https://www.youtube.com/watch?v=8-HKJdQDrtw&pp=ygUg2KrYt9io2YrZgtin2KogYmFja2VuZCBwaHAgbXlzcWw%3D"> مشروع ادارة طلاب بسيط  - لوحة تحكم مع عرض بيانات بالكامل</a></span></span></span>
            </div>
        </div>
        <!-- ==================================== ? What is a Web Server & Web Hosting ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? What is a Web Server & Web Hosting</h3>
                <p>
                    أي <span class="colored_red">Web Application</span> محتاج مكان يعيش فيه على الإنترنت، وهنا بييجي دور <span class="colored_red">Web Server</span> و<span class="colored_red">Web Hosting</span>. <br><br>

                    <span class="colored_red_b">Web Server</span> هو جهاز (أو برنامج) مسؤول عن استقبال الطلبات من المستخدمين من خلال الإنترنت، والرد عليهم بالصفحات المطلوبة. السيرفر ممكن يكون فعلي (جهاز حقيقي) أو افتراضي (Cloud).<br><br>

                    أما <span class="colored_red_b">Web Hosting</span> فهو الخدمة اللي بتوفرلك السيرفر ده. يعني بدل ما تشتري جهاز وتشبكه بالإنترنت 24/7، تقدر تشتري مساحة على سيرفر موجود عند شركة استضافة، وهي اللي بتدير الهاردوير والشبكات وكل حاجة.<br><br>

                    من غير <span class="colored_red">استضافة</span>، الموقع مش هيقدر يكون متاح للعالم، ومن غير <span class="colored_red">سيرفر</span>، مفيش وسيلة للمستخدمين يوصلوا للـ <span class="colored_red">Web Application</span> بتاعك.
                </p>

            </div>
        </div>
        <!-- ==================================== ? What is a Web Client-Server Model ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? The Client-Server Model</h3>
                <p>
                    في عالم الإنترنت، أغلب التواصل بيتم عن طريق نموذج اسمه <span class="colored_red">Client-Server Model</span>. الفكرة ببساطة إن فيه طرفين: <span class="colored_red">العميل (Client)</span> و<span class="colored_red">الخادم (Server)</span>.<br><br>

                    <span class="colored_red_b">Client</span> هو المستخدم أو الجهاز اللي بيطلب معلومات أو خدمة – زي لما تفتح المتصفح وتدخل على موقع. المتصفح هنا هو الـ Client اللي بيبعت طلب.<br><br>

                    <span class="colored_red_b">Server</span> هو الجهاز اللي بيستقبل الطلب، يعالجه، ويرد عليك بالبيانات المطلوبة، سواء كانت صفحة HTML، صورة، أو حتى نتيجة تسجيل الدخول.<br><br>

                    التواصل بين الـ <span class="colored_red">Client</span> والـ <span class="colored_red">Server</span> بيتم عن طريق بروتوكولات زي <span class="colored_red">HTTP</span> و<span class="colored_red">HTTPS</span>، واللي بتحدد شكل الطلبات والاستجابات اللي بيتم تبادلها بينهم.
                </p>

            </div>
        </div>
        <!-- ==================================== ? The Domain Name System ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? The Domain Name System</h3>
                <p>
                    لما بتدخل عنوان موقع زي <span class="colored_red">www.example.com</span> في المتصفح، الجهاز بتاعك مش بيفهم الكلام ده على طول. الإنترنت بيشتغل بالأرقام اللي اسمها <span class="colored_red">IP Addresses</span>، وده دور <span class="colored_red">Domain Name System</span> أو <span class="colored_red">DNS</span>.<br><br>

                    <span class="colored_red_b">DNS</span> هو زي دليل تليفونات، بيترجم اسم الموقع اللي بتكتبه (زي google.com) إلى عنوان <span class="colored_red">IP</span> حقيقي علشان الجهاز يقدر يوصل للسيرفر اللي عليه الموقع.<br><br>

                    العملية دي بتحصل بسرعة جدًا، وفي الخلفية، كل مرة بتدخل فيها على موقع. بدون <span class="colored_red">DNS</span>، كنت هتحتاج تحفظ عنوان <span class="colored_red">IP</span> لكل موقع عايز تزوره، وده طبعًا مستحيل.<br><br>

                    يعني <span class="colored_red">DNS</span> هو جزء أساسي في طريقة شغل الإنترنت، وبيخلينا نستخدم أسماء سهلة بدل أرقام صعبة.
                </p>

            </div>
        </div>
        <!-- ==================================== ? Internet Ports ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? Internet Ports</h3>
                <p>
                    لما جهازك يتواصل مع سيرفر على الإنترنت، مش بس بيستخدم <span class="colored_red">IP Address</span>، لكن كمان بيحتاج يعرف هو عايز يتكلم مع أي خدمة بالضبط. وده بيتم عن طريق حاجة اسمها <span class="colored_red">Ports</span>.<br><br>
                    كل خدمة على السيرفر بتشتغل على <span class="colored_red">Port Number</span> مختلف. يعني مثلاً:<br>
                    - <span class="colored_red">Port 80</span> بيستخدم لـ <span class="colored_red">HTTP</span><br>
                    - <span class="colored_red">Port 443</span> بيستخدم لـ <span class="colored_red">HTTPS</span><br>
                    - <span class="colored_red">Port 22</span> بيستخدم لـ <span class="colored_red">SSH</span><br><br>

                    تخيّل الـ <span class="colored_red">IP Address</span> هو عنوان العمارة، و<span class="colored_red">Port</span> هو رقم الشقة. علشان توصل للخدمة الصح، لازم تحدد الاتنين.<br><br>

                    فهم الـ <span class="colored_red">Ports</span> مهم جدًا في الحماية، لأن بعض الثغرات بتيجي من خدمات مفتوحة على بورتات مش مؤمنة كويس، وده بيكون مدخل للهاكرز.
                </p>

            </div>
        </div>
        <!-- ==================================== ? What is HTTP Requests and Responses ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">? What is HTTP Requests and Responses</h3>
                <p>
                    لما بتفتح موقع في المتصفح، بيحصل وراك كده عملية اسمها <span class="colored_red">HTTP Request</span> و<span class="colored_red">HTTP Response</span>. الاتنين دول هما الطريقة اللي بيتواصل بيها <span class="colored_red">الـ Client</span> (المتصفح بتاعك) مع <span class="colored_red">الـ Server</span> (الموقع اللي بتزوره).<br><br>

                    <span class="colored_red_b">HTTP Request</span> هو الطلب اللي المتصفح بيبعته للسيرفر، وبيحتوي على بيانات زي نوع الطلب (<span class="colored_blue">GET</span>، <span class="colored_blue">POST</span>، ...)، العنوان اللي بتطلبه، ال Headers، ولو فيه داتا بتتبعت (زي لما تعمل Login).<br><br>

                    <span class="colored_red_b">HTTP Response</span> هو الرد اللي السيرفر بيبعته، وبيحتوي على <span class="colored_red">status code</span> (زي 200, 404, 500)، وال Headers، والمحتوى اللي هيتعرض في الصفحة (HTML, JSON, ...).<br><br>

                    فهم الطريقة دي مهم جدًا علشان تقدر تحلل التواصل بين المستخدم والموقع، وتكتشف أي خلل ممكن يؤدي لثغرات زي <span class="colored_red">XSS</span> أو <span class="colored_red">SQL Injection</span>.
                </p>

            </div>
        </div>
        <!-- ==================================== ? Internet Security Controls ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">Internet Security Controls</h3>

                <p>
                    علشان الإنترنت يكون مكان آمن للتعاملات اليومية، لازم يكون فيه مجموعة من <span class="colored_red">Security Controls</span> بتساعد على حماية البيانات والمستخدمين من الهجمات. الحاجات دي بتشتغل في كذا مستوى، وكل واحدة ليها دور مهم.<br><br>

                    من أشهر وسائل الحماية:<br>
                    - <span class="colored_red">Encryption</span>: زي <span class="colored_red">HTTPS</span> اللي بيشفر البيانات بين المتصفح والسيرفر علشان محدش يقدر يتجسس عليها.<br>
                    - <span class="colored_red">Authentication</span>: التحقق من هوية المستخدم زي الـ <span class="colored_red">Login</span> وكلمات السر.<br>
                    - <span class="colored_red">Authorization</span>: التأكد إن المستخدم اللي سجل دخوله عنده الصلاحية يشوف أو يعدل الحاجة دي.<br>
                    - <span class="colored_red">Firewalls</span>: أدوات بتفلتر وتحلل الترافيك وتمنع أي اتصال مش آمن أو مريب.<br>
                    - <span class="colored_red">Input Validation</span>: التأكد إن البيانات اللي المستخدم بيبعتها سليمة ومفيهاش كود خبيث.<br><br>

                    كل الحاجات دي بتشتغل مع بعض علشان تقلل فرص الاختراق وتخلي الإنترنت أكثر أمانًا للمستخدمين والمطورين.
                </p>

            </div>
        </div>
        <!-- ==================================== ? Session Management and HTTP Cookies ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">Session Management and HTTP Cookies</h3>

                <p>
                    لما المستخدم يعمل <span class="colored_red">Login</span> على موقع ويب، السيرفر محتاج يتابع الجلسة بتاعته علشان يعرف إنه الشخص ده هو اللي سجل دخوله، ومش يطلب منه الباسورد كل شوية. هنا بييجي دور حاجة اسمها <span class="colored_red">Session Management</span> أو إدارة الجلسات.<br><br>

                    السيرفر بعد ما يتأكد إن تسجيل الدخول صحيح، بيبدأ يعمل <span class="colored_red">Session</span> جديدة للمستخدم. الـ <span class="colored_red">Session</span> دي بتكون عبارة عن هوية مؤقتة (ID) بيخزنها السيرفر في قاعدة البيانات، وبيبعت للمستخدم <span class="colored_red">HTTP Cookie</span> بتحتوي على الـ <span class="colored_red">Session ID</span>.<br><br>

                    <span class="colored_red_b">HTTP Cookies</span> هي ملفات صغيرة بيخزنها المتصفح على جهاز المستخدم، وبتتبعت تلقائيًا مع كل طلب جديد بيبعته المستخدم لنفس السيرفر. وده بيسمح للسيرفر يعرف هوية المستخدم من غير ما يطلب تسجيل الدخول تاني.<br><br>

                    لو الـ <span class="colored_red">Session Management</span> متعملتش بشكل سليم، ممكن أي حد يسرق <span class="colored_red">Session ID</span> ويستغل الجلسة بتاعت المستخدم الحقيقي، وده اسمه <span class="colored_red">Session Hijacking</span>.<br><br>

                    إدارة الجلسات بشكل آمن هو خطوة أساسية في أي تطبيق ويب ناجح ومؤمن.
                </p>

            </div>
        </div>
        <!-- ==================================== ? Token-Based Authentication ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">

                <h3 class="mb-4" style="text-align: center;">Token-Based Authentication</h3>

                <p>
                    <span class="colored_red">Token-Based Authentication</span> هو نظام لتسجيل الدخول والتحقق من هوية المستخدمين، بيتم فيه استخدام <span class="colored_red">Token</span> (رمز أو شفرة مؤقتة) بدل ما نعتمد على <span class="colored_red">Session ID</span> زي ما شفنا في نظام الـ <span class="colored_red">Session Management</span> التقليدي.<br><br>

                    في النظام ده، لما المستخدم يعمل <span class="colored_red">Login</span> ويقدم بياناته بشكل صحيح (زي الإيميل والباسورد)، السيرفر بيبعتله <span class="colored_red">Token</span> — وغالبًا بيكون من نوع <span class="colored_red">JWT (JSON Web Token)</span> — وده بيتم تخزينه في المتصفح، سواء في <span class="colored_red">LocalStorage</span> أو <span class="colored_red">SessionStorage</span>.<br><br>

                    بعد كده، أي طلب المستخدم بيبعته للسيرفر (زي إنه يفتح بروفايله أو يجيب بيانات من قاعدة البيانات)، بيضيف الـ <span class="colored_red">Token</span> في <span class="colored_red">Authorization Header</span> داخل كل <span class="colored_red">HTTP Request</span>.<br><br>

                    السيرفر بيفك تشفير الـ <span class="colored_red">Token</span> ويتأكد من صحته (إذا كان صالح أو منتهي)، ولو كل حاجة تمام، بيرد عليه بالبيانات المطلوبة.<br><br>

                    النظام ده بيتميز بإنه <span class="colored_red">Stateless</span>، يعني السيرفر مش محتاج يخزن أي حاجة في الذاكرة بخصوص المستخدم، وده بيخلي النظام أسرع وأسهل في التوسع.<br><br>

                    لكن بردو، لازم ناخد بالنا من الحماية كويس:<br>
                    - لازم يتم تشفير الـ <span class="colored_red">Token</span> كويس.<br>
                    - ممنوع يتخزن في أماكن ممكن تتعرض لهجمات <span class="colored_red">XSS</span>.<br>
                    - يفضل تحديد وقت صلاحية للـ <span class="colored_red">Token</span>، علشان ميتمش استخدامه بعد فتره طويلة.<br><br>

                    النظام ده شائع في تطبيقات الـ <span class="colored_red">Single Page Applications (SPAs)</span> زي اللي مبنية بـ <span class="colored_red">React</span> أو <span class="colored_red">Angular</span>، وبيوفر تجربة سلسة للمستخدم وأداء أعلى.
                </p>


            </div>
        </div>
        <!-- ==================================== ? The Same-Origin Policy ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">The Same-Origin Policy</h3>

                <p>
                    <span class="colored_red">The Same-Origin Policy</span> أو سياسة نفس الأصل، هي قاعدة أمان مهمة جدًا في عالم الويب، هدفها الأساسي هو حماية بيانات المستخدم ومنع المواقع من إنها تتجسس أو تتفاعل مع بعض بدون إذن.<br><br>

                    الـ <span class="colored_red">Origin</span> بيتكون من 3 حاجات: <span class="colored_red">Protocol</span> (زي https أو http)، و<span class="colored_red">Domain</span> (اسم الموقع)، و<span class="colored_red">Port</span> (زي 80 أو 443). لو التلاتة دول مطابقين بين صفحتين، بنقول إن ليهم نفس الـ <span class="colored_red">Origin</span>.<br><br>

                    طبقًا لـ <span class="colored_red">Same-Origin Policy</span>، المتصفح بيمنع صفحة ويب من إنها توصل مباشرة لمحتوى من <span class="colored_red">Origin</span> تاني مختلف. يعني لو عندك صفحة على <code>example.com</code>، مش هتقدر تبعت <span class="colored_red">AJAX request</span> وتجيب بيانات من <code>anotherdomain.com</code>، إلا لو السيرفر التاني سمح بده عن طريق <span class="colored_red">CORS</span> (Cross-Origin Resource Sharing).<br><br>

                    ليه السياسة دي مهمة؟ لأنها بتحمي المستخدم من هجمات زي <span class="colored_red">Cross-Site Request Forgery (CSRF)</span> و<span class="colored_red">Cross-Site Scripting (XSS)</span>، اللي ممكن تستغل بيانات الجلسة أو الكوكيز بتاعة المستخدم.<br><br>

                    لكن أوقات بتحتاج تتجاوز السياسة دي بشكل آمن، وده بيتم من خلال إعدادات معينة على السيرفر، زي تفعيل <span class="colored_red">CORS headers</span>.<br><br>

                    الخلاصة؟ <span class="colored_red">Same-Origin Policy</span> هي خط الدفاع الأول في متصفحات الويب، وهي اللي بتحافظ على خصوصيتك وأمانك وأمان المستخدمين اللي بيتفاعلوا مع المواقع.
                </p>

            </div>
        </div>
        <!-- ==================================== ? What is ENVIRONMENTAL SETUP AND TRAFFIC INTERCEPTION ==================================== -->
        <div class="row block mb-4" style="" dir="rtl">
            <div style="width: 100%;">
                <h3 class="mb-4" style="text-align: center;">ENVIRONMENTAL SETUP AND TRAFFIC INTERCEPTION</h3>

                <p>
                    قبل ما تبدأ في تحليل أو اختبار أمان أي <span class="colored_red">Web Application</span>، لازم تكون مجهز البيئة بتاعتك بشكل سليم. وده بيشمل تثبيت الأدوات المناسبة، وضبط الإعدادات اللي تخليك تقدر تتعامل مع الـ <span class="colored_red">traffic</span> اللي بيتم ما بين المتصفح والسيرفر.<br><br>

                    أول حاجة، لازم يكون عندك <span class="colored_red">Proxy Tool</span> زي <span class="colored_red">Burp Suite</span> أو <span class="colored_red">OWASP ZAP</span>، ودي أدوات بتساعدك تعترض وتعدل على الـ <span class="colored_red">Request</span> و<span class="colored_red">Response</span> اللي بيعدوا بين المتصفح والسيرفر.<br><br>

                    <span class="colored_red">Request</span> هو الطلب اللي المتصفح بيبعته للسيرفر لما المستخدم يعمل أكشن زي فتح صفحة أو تسجيل الدخول، وبيحتوي على معلومات زي نوع الطلب (GET, POST)، الرابط، وال Headers ، وأحيانًا بيانات في ال Body.<br><br>

                    أما <span class="colored_red">Response</span> فهو الرد اللي السيرفر بيبعته للمتصفح بعد ما يعالج الطلب، وده بيحتوي على كود الحالة (Status Code)، Header وأحيانًا بيانات في Body زي HTML أو JSON أو غيره.<br><br>

                    فهمك للـ <span class="colored_red">Request</span> و<span class="colored_red">Response</span> كويس، هو أول خطوة لفهم إزاي الـ Web Application بيتعامل مع البيانات، وإزاي ممكن تكون في ثغرات تظهر من الطريقة دي.
                </p>

                <hr>
                <mark class="m">مصادر اضافية تذاكر منها : </mark><br><br>
                <span class="colored_green_b">شرح اداة BurpSuite ونقدر نقول ان دى هتبقا ايدك ورجلك لان شغلك كله عليها :  <a href="https://www.youtube.com/playlist?list=PL4S940IsHJYV5gFmhh8vNqTbeUFqDktSh">BurpSuite Arabic Tutorials
                </a></span>
            </div>
        </div>

    </div><!-- /#container -->

</div><!-- /#page-content-wrapper -->


<?php require '/var/www/html/Bed0Xploit/Component/footer.php' ?>

