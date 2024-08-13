<!DOCTYPE html>
<html lang="en">
    @include('admin.include.head')

    <body class="g-sidenav-show  bg-gray-100">
        @include('admin.include.aside')
        <main class="main-content border-radius-lg ">
            @include('admin.include.navbar')
            <div class="container-fluid py-4">
                
                <div class="row">
                    <div class="col-lg-7 position-relative z-index-2">
                        <div class="card card-plain mb-4">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <h2 class="font-weight-bolder mb-0">Sửa tin tức & sự kiện</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.include.admin-post-edit')
                </div>
            </div>
        </main>
    </body>
    @include('admin.include.css-script')
</html>