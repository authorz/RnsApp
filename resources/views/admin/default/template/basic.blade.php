<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Be Angular | Bootstrap Admin Web App with AngularJS</title>
    <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/admin/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/admin/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/admin/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/admin/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="/admin/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/admin/css/app.css" type="text/css" />
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/plugin/layer/layer.js"></script>
</head>
<body>


<div class="app app-header-fixed" id="app">


    <!-- navbar -->
    @include('admin.default.header')
            <!-- / navbar -->

    <!-- menu -->
    @include('admin.default.menu')
            <!-- / menu -->

    <!-- content -->
    <div class="app-content">

        @section('app-content')

        @show
    </div>
    <!-- /content -->

    <!-- aside right -->

    <!-- / aside right -->

    <!-- footer -->
    @include('admin.default.footer')
            <!-- / footer -->
</div>
<!-- jQuery -->

<script src="/admin/vendor/jquery/bootstrap.js"></script>
<script type="text/javascript">
    +function ($) {
        $(function(){
            // class
            $(document).on('click', '[data-toggle^="class"]', function(e){
                e && e.preventDefault();
                console.log('abc');
                var $this = $(e.target), $class , $target, $tmp, $classes, $targets;
                !$this.data('toggle') && ($this = $this.closest('[data-toggle^="class"]'));
                $class = $this.data()['toggle'];
                $target = $this.data('target') || $this.attr('href');
                $class && ($tmp = $class.split(':')[1]) && ($classes = $tmp.split(','));
                $target && ($targets = $target.split(','));
                $classes && $classes.length && $.each($targets, function( index, value ) {
                    if ( $classes[index].indexOf( '*' ) !== -1 ) {
                        var patt = new RegExp( '\\s' +
                                $classes[index].
                                replace( /\*/g, '[A-Za-z0-9-_]+' ).
                                split( ' ' ).
                                join( '\\s|\\s' ) +
                                '\\s', 'g' );
                        $($this).each( function ( i, it ) {
                            var cn = ' ' + it.className + ' ';
                            while ( patt.test( cn ) ) {
                                cn = cn.replace( patt, ' ' );
                            }
                            it.className = $.trim( cn );
                        });
                    }
                    ($targets[index] !='#') && $($targets[index]).toggleClass($classes[index]) || $this.toggleClass($classes[index]);
                });
                $this.toggleClass('active');
            });

            // collapse nav
            $(document).on('click', 'nav a', function (e) {
                var $this = $(e.target), $active;
                $this.is('a') || ($this = $this.closest('a'));

                $active = $this.parent().siblings( ".active" );
                $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);

                ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
                $this.parent().toggleClass('active');

                $this.next().is('ul') && e.preventDefault();

                setTimeout(function(){ $(document).trigger('updateNav'); }, 300);
            });
        });
    }(jQuery);
</script>
</body>
</html>