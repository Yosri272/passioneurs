<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=AbeeZee&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap_5.0.2.rtl.min.css" rel="stylesheet">
    <title>Form Layout</title>
</head>

<body>
    <!-- Header -->
    <header class="bg-light py-2 border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <!-- Hamburger menu and login for small screens -->
                <div class="d-flex d-lg-none align-items-center">


                    <button class="btn btn-primary rounded-circle" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <img src="images/logo-ar.svg" alt="Logo" width="150">

                    <!-- Navigation (Hidden on mobile) -->
                    <nav class="d-none d-lg-flex align-items-center">
                        <ul class="list-inline mb-0 d-flex gap-3">
                            <li class="list-inline-item">
                                <a href="#" class="text-dark">البحث عن فريلانسر</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark">البحث عن مشاريع</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark">تمكين باشنرز <span class="badge bg-danger">جديد</span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-dark">باقات و منتجات</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Section: Profile and Icons for larger screens -->
                <div class="d-none d-lg-flex align-items-center">
                    <!-- Icons -->
                    <div class="d-flex align-items-center flex-row-reverse">
                        <a href="#" class="text-dark ms-3 position-relative">
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                            </span>
                            <i class="fas fa-envelope"></i>

                        </a>
                        <a href="#" class="text-dark ms-3">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="text-dark ms-3">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-dark">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                    <!-- Profile Image -->
                    <img src="images/profile.png" alt="Profile Image" class="rounded-circle ms-3" width="40"
                        height="40">
                </div>
                <!-- Hamburger menu and login for small screens -->
                <div class="d-flex d-lg-none align-items-center">
                    <a href="#" class="btn btn-primary btn-sm me-2">دخول</a>
                    <a href="#" class="text-dark me-2">
                        <i class="fas fa-globe"></i>
                    </a>

                </div>
            </div>
        </div>
    </header>
    <div class="row mt-4">
        <!-- Profile Section -->
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-start">
                    <!-- Profile Image -->
                    <img src="images/profile.png" alt="Amani Mohammed" class="rounded-circle mb-3" width="100"
                        height="100">
                    <!-- Reduced size -->

                    <!-- Profile Details -->
                    <div class="mx-3">
                        <!-- Title and Rating -->
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Amani Mohammed</h4>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-warning p-1">شغوف ومميز
                                    <img src="images/check-broken.png" alt="Check Icon" class="ms-1" width="16"
                                        height="16"> <!-- تقليل حجم الصورة والمسافات -->
                                </span>
                            </div>
                        </div>
                        <p class="card-text">Full Stack Developer</p>

                        <!-- Location and Verified Icon -->
                        <div class="d-flex align-items-center">
                            <span><i class="fas fa-map-marker-alt"></i> Egypt</span>
                            <span class="mx-2">
                                <img src="images/accre.png" alt="Accredited" class="icon-background" width="20"
                                    height="20">
                            </span>

                            <div class="d-flex align-items-center mt-2">
                                <span>16</span>
                                <span class="mx-1">المشاريغ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Steps -->
    <div class="row mb-4">
        <div class="col-lg-12 text-end">
            <div class="card">
                <div class="card-body">
                    <ul class="list-inline d-flex justify-content-end flex-row-reverse gap-3">
                        <li class="list-inline-item">
                            <span class="badge bg-light text-dark p-2 shadow-sm">
                                <i class="fas fa-star"></i>
                            </span> التقييمات
                        </li>
                        <li class="list-inline-item">
                            <span class="badge bg-light text-dark p-2 shadow-sm">
                                <i class="fas fa-box-open"></i>
                            </span> باقات ومنتجات
                        </li>
                        <li class="list-inline-item">
                            <span class="badge bg-light text-dark p-2 shadow-sm">
                                <i class="fas fa-images"></i>
                            </span> معرض الأعمال
                        </li>
                        <li class="list-inline-item">
                            <span class="badge bg-light text-dark p-2 shadow-sm">
                                <i class="fas fa-user"></i>
                            </span> الملف التعريفي
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Section -->
    <div class="card">
        <div class="card-body">
            <div class="row">

                <!-- Right Column (Form) -->
                <div class="col-md-8">

                    <div class="container">
                        <!-- Stepper -->
                        <div class="col-md-8 mx-auto">
                            <div class="stepper">
                                <!-- Step 1 -->
                                <div class="step">
                                    <div class="circle">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div>عنوان العمل</div>
                                </div>

                                <div class="line"></div>

                                <!-- Step 2 -->
                                <div class="step">
                                    <div class="circle active">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                    <div>تفاصيل العمل</div>
                                </div>

                                <div class="line disabled"></div>

                                <!-- Step 3 -->
                                <div class="step">
                                    <div class="circle">
                                        <i class="fas fa-circle-notch"></i>
                                    </div>
                                    <div>مراجعة العمل</div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">يجب عليك إضافة مجموعة صور أو صورة واحد على الأقل إلى
                                    مشروعك<span class="text-danger">*</span></label>
                                <div class="col-md-10 mx-auto">

                                    <div id="dropAreaMultiple" class="upload-box">
                                        <p>قم بسحب الصور وإفلاتها أو <span class="upload-text"
                                                id="browseFilesMultiple">تصفح </span>ملفات الصور</p>
                                        <input class="form-control" type="file" id="fileUploadMultiple" multiple
                                            style="display: none;" accept=".jpg, .jpeg, .png, .gif">
                                    </div>
                                    <ul class="info-text">
                                        <li>الصور (.jpg، .gif، .png، يصل حجمها إلى 10 ميغابايت، ولا يزيد حجمها عن 4000
                                            بكسل في أي بُعد)</li>
                                        <li> ابعاد الصورة يجب ان تكون 300*300</li>
                                        <li>الحد الأقصى لمجموع الصور: 20 صورة</li>
                                    </ul>
                                    <br>
                                    <div class="gallery" id="galleryMultiple" style="display: flex; gap: 10px;">
                                        <!-- Example of an image item -->

                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Form Section -->
                        <form>
                            <div class="col-md-10 mx-auto">

                                <!-- Form Group for Uploading Images -->
                                <div class="mb-3">
                                    <label class="form-label">يجب عليك إضافة صورة غلاف لمشروعك
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div id="dropAreaSingle" class="upload-box">
                                        <p>قم بسحب الصورة وإفلاتها أو <span class="upload-text"
                                                id="browseFileSingle">تصفح </span>ملف الصورة</p>
                                        <input class="form-control" type="file" id="fileUploadSingle"
                                            style="display: none;" accept=".jpg, .jpeg, .png, .gif">
                                    </div>

                                </div>
                                <div class="gallery" id="gallerySingle" style="display: flex; gap: 10px;">
                                    <!-- الصور المضافة ستظهر هنا -->
                                </div>
                                <div class="mb-3">
                                    <label for="workSkills" class="form-label">اختر مهارات العمل</label>
                                    <select class="form-select" id="workSkills">
                                        <option selected>اختر مهارة</option>
                                        <option value="1">تصميم جرافيك</option>
                                        <option value="2">برمجة مواقع</option>
                                        <option value="3">تطوير تطبيقات</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="workDescription" class="form-label">وصف العمل</label>
                                    <textarea class="form-control" id="workDescription" rows="4"></textarea>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-light me-3">الغاء</button>
                                    <button type="submit" class="btn btn-primary">التالي</button>
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
                <!-- Left Column (Instructions) -->
                <div class="col-md-4">
                    <div class="row">
                        <!-- الكارد يظهر فقط على الأجهزة اللوحية والكمبيوتر -->
                        <div class="col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="card-title">نموذج الصور</h5>
                                    <p class="card-text">يساعدك في تزويد احترافيتك للعميل. كل مكان المشروع مرئي بوضوح
                                        في حالتك العميل في التعامل معك.</p>

                                    <h5 class="card-title">غلاف العمل</h5>
                                    <p class="card-text">يساعدك في إبراز احترافيتك وجذب العملاء من خلال غلاف جذاب.</p>

                                    <h5 class="card-title">مهارات العمل</h5>
                                    <p class="card-text">توضح العمل المهارات المستخدمة في تنفيذ العمل، وتعزز مكانتك من
                                        العمل المنفذ.</p>

                                    <h5 class="card-title">وصف العمل</h5>
                                    <p class="card-text">اكتب وصف دقيق للعمل توضح فيه العمل المنجز لإبراز قدراتك
                                        ونجاحاتك في العمل.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-dark p-5">
        <div class="container">
            <div class="row">
                <!-- Center Section: Links -->
                <div class="col-md-6 mb-4">
                    <!-- Logo Section -->
                    <div class="mb-4">
                        <img src="images/logo-ar.svg" alt="Logo" width="150">
                    </div>

                    <!-- Links Section -->
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled text-start">
                                <li><a href="#" class="text-dark">تصميم الجرافيك والشعارات</a></li>
                                <li><a href="#" class="text-dark">إنشاء المتاجر والمواقع</a></li>
                                <li><a href="#" class="text-dark">التواصل الاجتماعي والتسويق</a></li>
                                <li><a href="#" class="text-dark">انفوجرافيك وموشن جرافيك</a></li>
                                <li><a href="#" class="text-dark">كتابة المحتوى والترجمة</a></li>
                                <li><a href="#" class="text-dark">التصوير والفيديو</a></li>
                                <li><a href="#" class="text-dark">تصميم داخلي وثلاثي الأبعاد</a></li>
                                <li><a href="#" class="text-dark">الهندسة والعمارة</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled text-start">
                                <li><a href="#" class="text-dark">مدونة الشغف</a></li>
                                <li><a href="#" class="text-dark">شروط الاستخدام</a></li>
                                <li><a href="#" class="text-dark">سياسة الخصوصية</a></li>
                                <li><a href="#" class="text-dark">سياسة استرجاع الأموال</a></li>
                                <li><a href="#" class="text-dark">عمولة المنصة</a></li>
                                <li><a href="#" class="text-dark">الدعم والمساعدة</a></li>
                                <li><a href="#" class="text-dark">الأسئلة الشائعة</a></li>
                                <li><a href="#" class="text-dark">اتصل بنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social Media Icons Section -->
                    <div class="d-flex align-items-center mt-4">
                        <a href="#" class="text-dark me-3 icon-wrapper"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark me-3 icon-wrapper"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark me-3 icon-wrapper"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-dark me-3 icon-wrapper"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark icon-wrapper"><i class="fab fa-whatsapp"></i></a>
                    </div>

                </div>
                <!-- Left Section: App Promotion -->
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5>تطبيق باشنورز</h5>
                            <p>أصبح التواصل الآن أسهل مع تطبيق باشنورز!</p>
                            <br><br><br>
                            <div class="d-flex align-items-center">
                                <!-- أزرار Google Play و App Store -->
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-google-play"></i>
                                    Google Play</a>
                                <a href="#" class="btn btn-primary"><i class="fab fa-apple"></i> App Store</a>
                            </div>
                        </div>
                        <!-- صورة الهاتف بجانب الأزرار، ستظهر فقط على الشاشات الكبيرة -->
                        <img src="images/mobile.png" alt="Phone Image" class="img-fluid ms-4 d-none d-md-block"
                            style="max-width: 120px;">
                    </div>

                    <!-- Partner Logos تحت الأزرار مباشرة -->
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <img src="images/hrsd-logo-ar.svg" alt="Ministry of Human Resources"
                                style="max-width: 120px;">
                            <img src="images/sdb-logo-ar.svg" alt="Social Development Bank" class="me-3"
                                style="max-width: 120px;">
                            <img src="images/google-logo.svg" alt="Google" class="me-3" style="max-width: 120px;">
                            <img src="images/microsoft-logo.svg" alt="Microsoft" class="me-3" style="max-width: 120px;">
                        </div>
                    </div>
                </div>


            </div>

            <!-- Footer Bottom -->
            <div class="text-center mt-4">
                <p>&copy; 2024 شركة الشغف و الثراء لخدمات الأعمال. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>
    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!-- jQuery مكتبة -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // JavaScript لجعل النقر على النص "تصفح ملفات الصور" يفتح نافذة اختيار الملفات
        document.querySelector('.upload-text').addEventListener('click', function () {
            document.querySelector('#fileUpload').click();
        });
    </script>
    <script>
        $(document).ready(function () {
            let singleImageFile;
            let multipleImageFiles = [];
            const maxImages = 20;

            // Single Image Upload with Drag and Drop
            $('#browseFileSingle').click(function () {
                $('#fileUploadSingle').click();
            });

            $('#fileUploadSingle').change(function (event) {
                singleImageFile = event.target.files[0];
                previewSingleImage(singleImageFile);
            });

            $('#dropAreaSingle').on('dragover', function (e) {
                e.preventDefault();
                $(this).addClass('dragover');
            });

            $('#dropAreaSingle').on('dragleave', function (e) {
                e.preventDefault();
                $(this).removeClass('dragover');
            });

            $('#dropAreaSingle').on('drop', function (e) {
                e.preventDefault();
                $(this).removeClass('dragover');
                singleImageFile = e.originalEvent.dataTransfer.files[0];
                previewSingleImage(singleImageFile);
            });

            function previewSingleImage(file) {
                let reader = new FileReader();

                // إنشاء هيكل HTML قبل تحميل الصورة
                $('#gallerySingle').html(`
        <div class="gallery-item" style="position: relative;">
            <button class="delete-btn" onclick="removeImage()">×</button>
            <img src="" alt="Image" id="singleImage">

            <div class="progress-container">
                <div class="progress-bar" id="singleProgress" style="width: 0%;"></div>
                <span class="progress-text" id="singleProgressText">0%</span> <!-- إضافة عنصر جديد للنسبة -->
            </div>
        </div>
    `);

                reader.onprogress = function (e) {
                    // حساب نسبة التحميل أثناء عملية القراءة
                    if (e.lengthComputable) {
                        let percentLoaded = Math.round((e.loaded / e.total) * 100);
                        $('#singleProgress').css('width', percentLoaded + '%');
                        $('#singleProgressText').text(percentLoaded + '%'); // تحديث النص بجانب شريط التحميل
                    }
                };

                reader.onload = function (e) {
                    // عند اكتمال تحميل الصورة، تحديث شريط التحميل إلى 100% وعرض الصورة
                    $('#singleImage').attr('src', e.target.result);
                    $('#singleProgress').css('width', '100%');
                    $('#singleProgressText').text('100%'); // تحديث النسبة إلى 100%
                };

                // بدء قراءة ملف الصورة
                reader.readAsDataURL(file);
            }
            // Multiple Image Upload with Drag and Drop
            $('#browseFilesMultiple').click(function () {
                $('#fileUploadMultiple').click();
            });

            $('#fileUploadMultiple').change(function (event) {
                let files = event.target.files;
                if (files.length + multipleImageFiles.length > maxImages) {
                    alert("يمكنك تحميل 20 صورة كحد أقصى.");
                    return;
                }

                handleMultipleFiles(files);
            });

            $('#dropAreaMultiple').on('dragover', function (e) {
                e.preventDefault();
                $(this).addClass('dragover');
            });

            $('#dropAreaMultiple').on('dragleave', function (e) {
                e.preventDefault();
                $(this).removeClass('dragover');
            });

            $('#dropAreaMultiple').on('drop', function (e) {
                e.preventDefault();
                $(this).removeClass('dragover');
                let files = e.originalEvent.dataTransfer.files;
                if (files.length + multipleImageFiles.length > maxImages) {
                    alert("يمكنك تحميل 20 صورة كحد أقصى.");
                    return;
                }

                handleMultipleFiles(files);
            });
            function handleMultipleFiles(files) {
                Array.from(files).forEach(function (file) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        let image = new Image();
                        image.src = e.target.result;
                        image.onload = function () {
                            if (image.width > 4000 || image.height > 4000) {
                                alert(`الصورة ${file.name} تتجاوز 4000 بكسل.`);
                            } else {
                                multipleImageFiles.push(file);
                                previewMultipleImages(multipleImageFiles);
                            }
                        };
                    };
                    reader.readAsDataURL(file);
                });
            }

            function previewMultipleImages(files) {
                // تفريغ محتويات المعرض الحالي
                $('#galleryMultiple').empty();

                // تحويل مجموعة الملفات إلى مصفوفة واستخدام forEach لتكرارها
                Array.from(files).forEach(function (file, index) {
                    let reader = new FileReader();

                    // إنشاء هيكل HTML قبل تحميل الصورة
                    $('#galleryMultiple').append(`
          <div class="gallery-item" data-index="${index}">
              <button class="delete-btn" onclick="removeImage(${index})">&times;</button>
              <img src="" alt="Image" id="img-${index}">
              <div class="progress-container">
                  <div class="progress-bar" id="progress-${index}" style="width: 0%;"></div>
                  <span class="progress-text" id="progress-text-${index}">0%</span>
              </div>
          </div>
      `);
                    reader.onprogress = function (e) {
                        // حساب نسبة التحميل أثناء عملية القراءة
                        if (e.lengthComputable) {
                            let percentLoaded = Math.round((e.loaded / e.total) * 100);
                            $(`#progress-${index}`).css('width', percentLoaded + '%');
                            $(`#progress-text-${index}`).text(percentLoaded + '%'); // تحديث النص بجانب الشريط
                        }
                    };

                    reader.onload = function (e) {
                        // عند اكتمال تحميل الصورة، تحديث شريط التحميل إلى 100% وعرض الصورة
                        $(`#img-${index}`).attr('src', e.target.result);
                        $(`#progress-${index}`).css('width', '100%');
                        $(`#progress-text-${index}`).text('100%'); // تحديث النص إلى 100%
                    };

                    // بدء قراءة ملف الصورة
                    reader.readAsDataURL(file);
                });
            }
            window.removeImage = function (index = null) {
                if (index !== null && Array.isArray(multipleImageFiles)) {
                    // If an index is provided, and we are handling multiple images
                    multipleImageFiles.splice(index, 1);
                    previewMultipleImages(multipleImageFiles);
                } else {
                    // If no index is provided, we are handling a single image
                    $('#gallerySingle').empty(); // Clear the single image preview
                }
            }


        });
    </script>
</body>

</html>
