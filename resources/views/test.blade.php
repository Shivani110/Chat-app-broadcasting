<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="https://sourcecodester.com">
            Sourcecodester
            </a>
        </div>
    </nav>
    <div class="container py-3" id="page-container">
        <small>How to create an Image View with Controls ( <b>Next</b> and <b>Previous</b> )</small>
        <hr>
        <h3><b>Gallery</b></h3>
        <div class="col-12">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-4 gx-4 gy-4">
                <div class="col img-item">
                    <div class="card rounded-0">
                        <div class="img-container">
                            <img src="{{ asset('images/1.png') }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                        </div>
                    </div>
                </div>
                <div class="col img-item">
                    <div class="card rounded-0">
                        <div class="img-container">
                            <img src="{{ asset('images/2.png') }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                        </div>
                    </div>
                </div>
                <div class="col img-item">
                    <div class="card rounded-0">
                        <div class="img-container">
                            <img src="{{ asset('images/3.png') }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                        </div>
                    </div>
                </div>
                <div class="col img-item">
                    <div class="card rounded-0">
                        <div class="img-container">
                            <img src="{{ asset('images/4.png') }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                        </div>
                    </div>
                </div>
                <div class="col img-item">
                    <div class="card rounded-0">
                        <div class="img-container">
                            <img src="{{ asset('images/5.png') }}" alt="Image" class="img-top bg-dark bg-gradient img-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="imageViewerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="imageViewerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered rounded-0">
            <div class="modal-content rounded-0">
                <div class="modal-header py-1">
                    <h5 class="modal-title" id="imageViewerModalLabel">Viewer</h5>
                    <button type="button" style="font-size: .65em;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div id="img-viewer-container" class="d-flex">
                        <div class="h-100 d-flex align-items-center position-absolute control-prev-container">
                            <div class="control-prev"></div>
                        </div>
                        <img src="" alt="Viewer" id="img-viewer" class="bg-dark bg-gradient">
                        <div class="h-100 d-flex align-items-center position-absolute control-next-container">
                            <div class="control-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Confirmation Modal -->
</body>

</html>