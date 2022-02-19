<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Content Car</title>
        <?php require_once "includes/meta.php"; ?>
        <?php
            $dt = "0";
            require_once "components/actions-aaa-select.php"; 
        ?>
    </head>
    <body class="body-bg">
        <?php require_once "includes/header.php"; ?>
        <main class="main">
            <section class="display-none-max-600">
                <?php require_once "includes/sidebar.php"; ?>
            </section> 
            <section class="main-content">
                <div class="display-flex-column">
                    <span class="admin-page-heading">
                        All Cars
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row-justify-end">
                          <a href="#" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="display-flex-row-justify-end alert hide" id="alert-save">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                    </div>
                    <div class="display-flex-row-justify-end alert hide" id="alert-delete">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Archive</b></span>
                    </div>
                    <div class="heading-search-azc display-flex-row-no-justify">
                        <span class="heading-search-icon-azc"><img src="../../assets/img/icons/search.svg" /></span>
                        <span><input type="text" placeholder="Type your search here" class="heading-search-input-azc" id="body-div-serach" /></span>
                    </div><br><br><br>
                    <div class="transact-cat-table-div">
                        <div id="table-body"></div>
                        <div class="display-flex-row-justify-end" id="pagination-wrapper"></div>
                    </div>
                </div>
                <div class="dashboard-footer-button-area">
                    <a href="#" class="btn dashboard-small-text">Save Order</a>
                </div>
            </section>
        </main>
        
<!--    Modal Body For Delete Parallax Slider Start    -->
<div class="modal-bg" id="modal-bg-delete">
    <div  class="modal">
        <span class="modal-close" id="modal-close-delete">X</span>
        <div class="text-center-div">
            <h1 class="text-center" id="modal-title-delete"></h1>
            <p class="blog-loop-card-para">Confirm to delete this?</p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-delete">Cancel</a>
            <a class="btn force-bg-red" id="modal-confirm-delete">Confirm</a>
        </div>
    </div>
</div>
<!--    Modal Body For Delete Parallax Slider End    -->
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                $('#alert-save').addClass("show");
                $('#alert-save').removeClass("hide");
                $('#alert-save').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-save').removeClass("show");
                 $('#alert-save').addClass("hide");
                },5000);
            }
            if(msg === "sucess-del"){
                $('#alert-delete').addClass("show");
                $('#alert-delete').removeClass("hide");
                $('#alert-delete').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-delete').removeClass("show");
                 $('#alert-delete').addClass("hide");
                },5000);
            }
        </script>
        <script>
            var modalBg = document.querySelector("#modal-bg-delete");
            var modalClose = document.querySelector("#modal-close-delete");
            var modalTitle = document.querySelector("#modal-title-delete");
            var modalConfirm = document.querySelector("#modal-confirm-delete");
            var modalCancel = document.querySelector("#modal-cancel-delete");

            $(document).ready(function(){
                
               $(document).on('click', '.click-modal-delete', function(){
                    modalTitle.textContent = $(this).attr("data-slider-title");
                    modalConfirm.setAttribute('href', $(this).attr("data-href"));
                    modalBg.classList.add("modal-bg-active");
                }); 
            });

            modalClose.addEventListener('click', function (){
                modalBg.classList.remove("modal-bg-active");
            });
            
            modalCancel.addEventListener('click', function (){
                modalBg.classList.remove("modal-bg-active");
            });

            window.onclick = function(e){
                if(e.target == modalBg){
                    modalBg.classList.remove("modal-bg-active");
                }
            }
            
        </script>
        <script>
            $(document).ready(function(){   
                 $.ajax({
                    url: "components/aaa-select-table.php", 
                    method:"POST",
                    data:{get_Content_all:"get_Content_all"},
                    dataType: "json",
                    success: function(data){
                        if(data.status == 1){
                            var state = {
                                'querySet': data.result,
                                'page': 1,
                                'rows': data.result2['pagination_count'],
                                'window': 5,
                            }
                            console.log(data.result)
                            buildTable(state)
                            
                        }else{
                            document.querySelector('#table-body').innerHTML = `
                                    <div class="no-data-ava">
                                        <i class="fas fa-exclamation-circle force-color-red"></i>
                                        <span>No Data Available</span>
                                    </div>
                                `;
                        }                    
                    },
                });
                
                $('#body-div-serach').change(function(){
                    var search_query =  $('#body-div-serach').val();
                    $.ajax({
                        url: "components/aaa-select-table.php", 
                        method:"POST",
                        data:{search_content_all:"search_content_all", search_query:search_query},
                        dataType: "json",
                        success: function(data){
                            if(data.status == 1){
                                var state = {
                                    'querySet': data.result,
                                    'page': 1,
                                    'rows': data.result2['pagination_count'],
                                    'window': 5,
                                }
                                document.querySelector('#table-body').innerHTML = "";
                                document.querySelector('#pagination-wrapper').innerHTML = "";
                                buildTable(state)

                            }else{
                                document.querySelector('#table-body').innerHTML = `
                                    <div class="no-data-ava">
                                        <i class="fas fa-exclamation-circle force-color-red"></i>
                                        <span>No Data Available</span>
                                    </div>
                                `;
                                document.querySelector('#pagination-wrapper').innerHTML = "";
                            }                    
                        },
                    });
                });
                
            })
        </script>
        <script>
            
            function pagination(querySet, page, rows) {

                var trimStart = (page - 1) * rows
                var trimEnd = trimStart + rows

                var trimmedData = querySet.slice(trimStart, trimEnd)

                var pages = Math.round(querySet.length / rows);

                return {
                    'querySet': trimmedData,
                    'pages': pages,
                }
            }
            
           function pageButtons(pages,state) {
                var wrapper = document.getElementById('pagination-wrapper')

                wrapper.innerHTML = ``
                console.log('Pages:', pages)

                var maxLeft = (state.page - Math.floor(state.window / 2))
                var maxRight = (state.page + Math.floor(state.window / 2))

                if (maxLeft < 1) {
                    maxLeft = 1
                    maxRight = state.window
                }

                if (maxRight > pages) {
                    maxLeft = pages - (state.window - 1)

                    if (maxLeft < 1){
                        maxLeft = 1
                    }
                    maxRight = pages
                }



                for (var page = maxLeft; page <= maxRight; page++) {
                    wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`
                }

                if (state.page != 1) {
                    wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-info">&#171; First</button>` + wrapper.innerHTML
                }

                if (state.page != pages) {
                    wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">Last &#187;</button>`
                }

                $('.page').on('click', function() {
                    $('#table-body').empty()

                    state.page = Number($(this).val())

                    buildTable(state)
                })

            }
            
            function buildTable(state) {
                var table = $('#table-body')

                var data = pagination(state.querySet, state.page, state.rows)
                var myList = data.querySet

                for (var i = 1 in myList) {
                    //Keep in mind we are using "Template Litterals to create rows"
                    var row = myList[i]
                    pageButtons(data.pages,state)
                    table.append(row)
                }
                                              
            }
        </script>
    </body>
</html>