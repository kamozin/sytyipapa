<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сытый папа|| Админка</title>

    <link href="/includes/admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="/includes/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/includes/admin/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/includes/admin/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/includes/admin/css/maps/jquery-jvectormap-2.0.3.css" />
    <link href="/includes/admin/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="/includes/admin/css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="/includes/admin/js/jquery.min.js"></script>
    <script src="/includes/admin/js/nprogress.js"></script>


    <link href="/includes/admin/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="/includes/admin/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/includes/admin/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/includes/admin/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/includes/admin/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- select2 -->
    <link href="/includes/admin/css/select/select2.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')
</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Сытый папа</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- sidebar menu -->
                @if(Auth::check())
                    @include('blocks.nav');
                    @else

                    @endif
                            <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                @if(Auth::check())
                                    {{Auth::user()->name}}
                                    {{Session::get('role')}}
                                    <span class=" fa fa-angle-down"></span>
                                @else


                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="/logout">Выход‹</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                &copy 2016 <a href="http://sytyipapa.ru/">Перейти на сайт</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="/includes/admin/js/bootstrap.min.js"></script>

<!--

 bootstrap progress js -->
<script src="/includes/admin/js/progressbar/bootstrap-progressbar.min.js"></script>

<!-- icheck -->
<script src="/includes/admin/js/icheck/icheck.min.js"></script>
<!-- tags -->
<script src="/includes/admin/js/tags/jquery.tagsinput.min.js"></script>
<!-- switchery -->
<script src="/includes/admin/js/switchery/switchery.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="/includes/admin/js/moment/moment.min.js"></script>
<script type="text/javascript" src="/includes/admin/js/datepicker/daterangepicker.js"></script>
<!-- richtext editor -->
<script src="/includes/admin/js/editor/bootstrap-wysiwyg.js"></script>
<script src="/includes/admin/js/editor/external/jquery.hotkeys.js"></script>
<script src="/includes/admin/js/editor/external/google-code-prettify/prettify.js"></script>
<!-- select2 -->
<script src="/includes/admin/js/select/select2.full.js"></script>
<!-- form validation -->
<script type="text/javascript" src="/includes/admin/js/parsley/parsley.min.js"></script>
<!-- textarea resize -->
<script src="/includes/admin/js/textarea/autosize.min.js"></script>
<script>
    autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="/includes/admin/js/autocomplete/countries.js"></script>
<script src="/includes/admin/js/autocomplete/jquery.autocomplete.js"></script>
<!-- pace -->
<script src="/includes/admin/js/pace/pace.min.js"></script>
<script type="text/javascript">
    $(function() {
        'use strict';
        var countriesArray = $.map(countries, function(value, key) {
            return {
                value: value,
                data: key
            };
        });
        // Initialize autocomplete with custom appendTo:
        $('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray,
            appendTo: '#autocomplete-container'
        });
    });
</script>
<script src="/includes/admin/js/custom.js"></script>

@yield('footer')

        <!-- select2 -->
<script>
    $(document).ready(function() {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function() {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /input tags -->
<!-- form validation -->
<script type="text/javascript">
    $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
            validateFront();
        });
        $('#demo-form .btn').on('click', function() {
            $('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === $('#demo-form').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
            validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
            $('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === $('#demo-form2').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {}
</script>
<!-- /form validation -->
<!-- editor -->
<script>
    $(document).ready(function() {
        $('.xcxc').click(function() {
            $('#descr').val($('#editor').html());
        });
    });

    $(function() {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function(idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function() {
                return false;
            })
                    .change(function() {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        $(this).change();
                    });

            $('[data-role=magic-overlay]').each(function() {
                var overlay = $(this),
                        target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        };

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();
        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });
        window.prettyPrint && prettyPrint();
    });
</script>
<!-- /editor -->
</body>

</html>
