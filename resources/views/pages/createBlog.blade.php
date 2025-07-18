@extends('layouts.master')

@section('styles')
 
        <!-- QUILL CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- FILEPOND CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

        <!-- DATE & TIME PICKER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">Create Blog</h1>
                        <div class="ms-md-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row -->
                    <div class="row">
                        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">New Blog</div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <label for="blog-title" class="form-label">Blog Title</label>
                                            <input type="text" class="form-control" id="blog-title" placeholder="Blog Title">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="blog-category" class="form-label">Blog Category</label>
                                            <select class="form-control" data-trigger name="blog-category" id="blog-category">
                                                <option value="">Select Category</option>
                                                <option value="Choice 1">Nature</option>
                                                <option value="Choice 2">Sports</option>
                                                <option value="Choice 3">Food</option>
                                                <option value="Choice 3">Travel</option>
                                                <option value="Choice 3">Fashion</option>
                                                <option value="Choice 3">Beauty</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="blog-author" class="form-label">Blog Author</label>
                                            <input type="text" class="form-control" id="blog-author" placeholder="Enter Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="blog-author-email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="publish-date" class="form-label">Publish Date</label>
                                            <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="publish-time" class="form-label">Publish Time</label>
                                            <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="product-status-add" class="form-label">Published Status</label>
                                            <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                <option value="">Select</option>
                                                <option value="Published">Published</option>
                                                <option value="Scheduled">Hold</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="blog-tags" class="form-label">Blog Tags</label>
                                            <select class="form-control" name="blog-tags" id="blog-tags" multiple>
                                                <option value="Top Blog" selected>Top Blog</option>
                                                <option value="Blogger">Blogger</option>
                                                <option value="Adventure">Adventure</option>
                                                <option value="Landscape" selected>Landscape</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Blog Content</label>
                                            <div id="blog-content"></div>
                                        </div>
                                        <div class="col-xl-12 blog-images-container">
                                            <label for="blog-author-email" class="form-label">Blog Images</label>
                                            <input type="file" class="blog-images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label">Blog Type</label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="blog-type" id="blog-free1" checked>
                                                    <label class="form-check-label" for="blog-free1">
                                                        Free
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                                    <label class="form-check-label" for="blog-paid1">
                                                        Paid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-list text-end">
                                        <button type="button" class="btn btn-sm btn-light">Save As Draft</button>
                                        <button type="button" class="btn btn-sm btn-primary">Post Blog</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Recent Blogs
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Animals</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        There are many variations of passages of Lorem Ipsum available
                                                    </p>
                                                    <span class="text-muted fs-11">24,Nov 2022 - 18:27</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-56.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Travel</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        Latin words, combined with a handful of model sentence
                                                    </p>
                                                    <span class="text-muted fs-11">28,Nov 2022 - 10:45</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-54.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Interior</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        Contrary to popular belief, Lorem Ipsum is not simply random
                                                    </p>
                                                    <span class="text-muted fs-11">30,Nov 2022 - 08:32</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Nature</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                    </p>
                                                    <span class="text-muted fs-11">3,Dec 2022 - 12:56</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-74.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Health</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                    </p>
                                                    <span class="text-muted fs-11">16,Dec 2022 - 04:56</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-49.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Food</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                    </p>
                                                    <span class="text-muted fs-11">31,Dec 2022 - 18:06</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                                <div class="d-flex gap-2 flex-wrap align-items-center">
                                                <span class="avatar avatar-xl me-1">
                                                    <img src="{{asset('build/assets/images/media/media-76.jpg')}}" class="img-fluid" alt="...">
                                                </span>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Travel</a>
                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                    </p>
                                                    <span class="text-muted fs-11">15,Dec 2022 - 14:31</span>
                                                </div>
                                                <div>
                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm rtl-rotate"><i class="ri-arrow-right-s-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-center">
                                            <button type="button" class="btn btn-primary-light">Load more</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row -->

                </div>

@endsection

@section('scripts')

        <!-- DATE & TIME PICKER JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- QUILL EDITOR JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- FILEPOND JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- INTERNAL CREATE BLOG JS -->
        @vite('resources/assets/js/blog-create.js')


@endsection