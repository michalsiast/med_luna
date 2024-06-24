<section class="inner-header bg-holder custom_subheader_bg" style="background-image: url({{ renderImage($pageName->galleryCover(), 1800, 400, 'cover') }});">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-8 text-center position-relative">
                <h1 class="text-white">{!! $pageName->name !!}</h1>
                <ul class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home pe-2"></i>Strona główna</a></li>
                    <li class="breadcrumb-item active"><span>{!! $pageName->name !!}</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
