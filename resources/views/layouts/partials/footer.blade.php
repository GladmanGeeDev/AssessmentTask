
<!-- Create mail Modal -->
<div class="modal fade" id="mailcreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="page-subtitle text-dark">To:</div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="select name">
                </div>

                <div class="page-subtitle text-dark">CC:</div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="select name">
                </div>

                <div class="page-subtitle text-dark">Quick Reply</div>
                <textarea class="form-control" rows="5" id="editor2"></textarea>

                <div class="page-subtitle text-dark">Attachments</div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="card my-2 bg-white shadow-sm">
                            <div class="card-body p-2">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mb-0">Document.pdf<br> <small>30.00 mb</small></p>
                                    </div>
                                    <a href="javascript:void(0)" class="avatar avatar-30 bg-danger ml-2">
                                        <i class="material-icons md-18 text-white vm">delete</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="card my-2 bg-white shadow-sm">
                            <div class="card-body p-2">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mb-0">Document.pdf<br> <small>30.00 mb</small></p>
                                    </div>
                                    <a href="javascript:void(0)" class="avatar avatar-30 bg-danger ml-2">
                                        <i class="material-icons md-18 text-white vm">delete</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="card my-2 bg-white shadow-sm">
                            <div class="card-body p-2">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mb-0">Document.pdf<br> <small>30.00 mb</small></p>
                                    </div>
                                    <a href="javascript:void(0)" class="avatar avatar-30 bg-danger ml-2">
                                        <i class="material-icons md-18 text-white vm">delete</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="card my-2 bg-white shadow-sm">
                            <div class="card-body p-2">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mb-0">Document.pdf<br> <small>30.00 mb</small></p>
                                    </div>
                                    <a href="javascript:void(0)" class="avatar avatar-30 bg-danger ml-2">
                                        <i class="material-icons md-18 text-white vm">delete</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button class="btn btn-primary"> Send </button>
                <button class="btn btn-secondary ml-2" type="button" data-dismiss="modal"> Discard </button>
            </div>
        </div>
    </div>
</div>
<!-- Create mail ends -->



<!-- Theme style picker modal window and options -->
<div class="wrap-fixed-float wrap-fixed-bottom-right">
    <button class="btn btn-primary btn-rounded-circle shadow" data-target="#themepicker" data-toggle="modal"><i class="material-icons vm">style</i><span class="counter-small bg-danger"></span></button>
</div>
<!-- Modal -->
<div class="modal fade" id="themepicker" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg-dark overflow-hidden">
            <div class="modal-body">
                <div class="background h-320">
                    <img src="../assets/img/background-part.png" alt="">
                </div>
                <div class="text-center pb-5">
                    <h1 class="mt-3 mb-0 text-white">Personalize</h1>
                    <h4 class="mb-5 text-white font-weight-light">Make it more like yours</h4>
                </div>

                <div class="row top-60">
                    <div class="col-6 col-md-6 col-lg-3 mb-4">
                        <div class="card border-0 shadow bg-white h-100">
                            <div class="card-body text-center">
                                <i class="avatar avatar-60 md-36 material-icons text-template-primary my-3">format_shapes</i>
                                <h6 class="mb-3">Font Size</h6>
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush mb-0 text-left">
                                            <li class="list-group-item">
                                                XS
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="fontsize" class="custom-control-input" id="xsmallfs">
                                                    <label class="custom-control-label" for="xsmallfs"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                S
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="fontsize" class="custom-control-input" id="smallfs" checked>
                                                    <label class="custom-control-label" for="smallfs"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                M
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="fontsize" class="custom-control-input" id="mediumfs">
                                                    <label class="custom-control-label" for="mediumfs"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                L
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="fontsize" class="custom-control-input" id="largefs">
                                                    <label class="custom-control-label" for="largefs"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4">
                        <div class="card border-0 shadow bg-white h-100">
                            <div class="card-body text-center">
                                <i class="avatar avatar-60 md-36 material-icons bg-light-warning text-warning my-3">style</i>
                                <h6 class="mb-3">Sidebar</h6>
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush mb-0 text-left">
                                            <li class="list-group-item">
                                                Normal
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="sidebar" class="custom-control-input" id="sidebarfull" checked>
                                                    <label class="custom-control-label" for="sidebarfull"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Compact
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="sidebar" class="custom-control-input" id="sidebarCompact">
                                                    <label class="custom-control-label" for="sidebarCompact"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Iconic
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="radio" name="sidebar" class="custom-control-input" id="sidebarIconic">
                                                    <label class="custom-control-label" for="sidebarIconic"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Fill Color
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" class="custom-control-input" id="sidebarFill">
                                                    <label class="custom-control-label" for="sidebarFill"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4">
                        <div class="card border-0 shadow bg-white h-100">
                            <div class="card-body text-center">
                                <i class="avatar avatar-60 md-36 material-icons bg-light-danger text-danger my-3">menu</i>
                                <h6 class="mb-3">Header</h6>
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush mb-0 text-left">
                                            <li class="list-group-item">
                                                Fixed Top
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" class="custom-control-input" id="headerfixed">
                                                    <label class="custom-control-label" for="headerfixed"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Fixed Width
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" class="custom-control-input" id="headercontainer">
                                                    <label class="custom-control-label" for="headercontainer"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Fill Color
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" class="custom-control-input" id="headerfillcolor">
                                                    <label class="custom-control-label" for="headerfillcolor"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4">
                        <div class="card border-0 shadow bg-white h-100">
                            <div class="card-body text-center">
                                <i class="avatar avatar-60 md-36 material-icons bg-light-success text-success my-3">subtitles</i>
                                <h6 class="mb-3">Content</h6>
                                <div class="row">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush mb-0 text-left">
                                            <li class="list-group-item">
                                                Square
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" name="sidebar" class="custom-control-input" id="wrapperCorner">
                                                    <label class="custom-control-label" for="wrapperCorner"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Full Width
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" name="sidebar" class="custom-control-input" id="contentWidth">
                                                    <label class="custom-control-label" for="contentWidth"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Spacious
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" name="sidebar" class="custom-control-input" id="moderntouch">
                                                    <label class="custom-control-label" for="moderntouch"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Fullscreen
                                                <div class="custom-control custom-switch float-right">
                                                    <input type="checkbox" name="sidebar" class="custom-control-input" id="fullscreen">
                                                    <label class="custom-control-label" for="fullscreen"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer border-0 pt-0">
                <div class="row w-100 mx-0">
                    <div class="col-12 col-md-6 text-center">
                        <h6><i class="material-icons vm mr-1">brightness_2</i> Dark</h6>
                        <div class="avatar avatar-30 bg-dark style-picker" data-target='style-black-dark'></div>
                        <div class="avatar avatar-30 bg-darkblue style-picker" data-target='style-darkblue-dark'></div>
                        <div class="avatar avatar-30 bg-purple style-picker" data-target='style-purple-dark'></div>
                        <div class="avatar avatar-30 bg-blue style-picker" data-target='style-blue-dark'></div>
                        <div class="avatar avatar-30 bg-green style-picker" data-target='style-green-dark'></div>
                        <div class="avatar avatar-30 bg-pista style-picker" data-target='style-pista-dark'></div>
                        <div class="avatar avatar-30 bg-orange style-picker" data-target='style-orange-dark'></div>
                        <div class="avatar avatar-30 bg-tomato style-picker" data-target='style-tomato-dark'></div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <h6><i class="material-icons vm mr-1">brightness_7</i> Light</h6>
                        <div class="avatar avatar-30 bg-dark style-picker" data-target='style-black-light'></div>
                        <div class="avatar avatar-30 bg-darkblue style-picker" data-target='style-darkblue-light'></div>
                        <div class="avatar avatar-30 bg-purple style-picker" data-target='style-purple-light'></div>
                        <div class="avatar avatar-30 bg-blue style-picker" data-target='style-blue-light'></div>
                        <div class="avatar avatar-30 bg-green style-picker" data-target='style-green-light'></div>
                        <div class="avatar avatar-30 bg-pista style-picker" data-target='style-pista-light'></div>
                        <div class="avatar avatar-30 bg-orange style-picker" data-target='style-orange-light'></div>
                        <div class="avatar avatar-30 bg-tomato style-picker" data-target='style-tomato-light'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Theme style picker modal window and options ends -->