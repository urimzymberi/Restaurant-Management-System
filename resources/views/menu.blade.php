@extends('layouts.layout')
@section('content')

    <div class="page-breadcrumb">
        <div class="container text-center">
            <h1>Menu</h1>
        </div>
    </div>
    <!--==============end page header============-->
    <div class="space-80"></div>



    <div class="container">
        <ul class="menu-filter-list list-inline margin-b-40 text-center">
            <li class="is-checked" data-filter="*">All</li>
            @foreach($categories as $category)
                <li data-filter=".category-{{ $category->id }}">{{ $category->name }}</li>
            @endforeach
        </ul>
        <div class="row menu-filter-items">
            @foreach($items as $item)
                <div class=" category-{{ $item->category_id }} col-md-4 margin-b-30 menu-item">
                    <a href="" class="menu-grid">
                        <img src="assets/images/{{ $item->image }}" alt="" class="img-fluid">
                        <div class="menu-grid-desc">
                            <span class="price float-right">{{ $item->price }}</span>
                            <h4>{{ $item->category->name }}</h4>
                            <p>{{ $item->name }}</p>
                        </div>
                    </a>
                </div><!--end col-->
            @endforeach

        </div>
    </div>

@endsection

@section('js')
    <!-- jQuery plugins-->
    <script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/template-custom.js" type="text/javascript"></script>
    <script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            if ($('.menu-filter-items').length) {
                var $galleryFilter = $('.menu-filter-items').isotope({
                    itemSelector: '.menu-item',
                    masonry: {
                        columnWidth: '.menu-item'
                    }
                });
                $('.menu-filter-list').on('click', 'li', function () {
                    var filterValue = $(this).attr('data-filter');
                    $('.menu-filter-list').find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                    $galleryFilter.isotope({filter: filterValue});
                });

                $galleryFilter.imagesLoaded().progress(function () {
                    $galleryFilter.isotope('layout');
                });
            }
        });
    </script>
@endsection
