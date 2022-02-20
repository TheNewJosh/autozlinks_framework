<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
        @include('admin.layouts.meta')
        <link href="{{ asset('css/toggle-switch.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body class="body-bg">
        @include('admin.layouts.header')
    <main class="main">
        <section class="display-none-max-600">
            @include('admin.layouts.sidebar')
            </section> 
            <section class="main-content">
                <div class="display-flex-column">
                    <span class="admin-page-heading">
                        AZCoin/View transaction - <?= $objadmin->getUserID($pdo, $dt)['us_username'] ?>
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row">
                        <a href="users-refund-form.php" class="btn force-bg-green">Refund</a>
<!--                        <a class="btn force-bg-red">Delete</a>-->
                    </div>
                    <div class="heading-search-azc display-flex-row-no-justify">
                        <span class="heading-search-icon-azc"><img src="../../assets/img/icons/search.svg" /></span>
                        <span><input type="text" placeholder="Type your search here" class="heading-search-input-azc" id="body-div-serach" /></span>
                    </div>
                    <div class="transact-cat-div">
                        <?php require_once "includes/transaction-category-menu.php"; ?>
                    </div>
                    <div class="transact-cat-table-div">
                        <div id="table-body"></div>
                        <div class="display-flex-row-justify-end" id="pagination-wrapper"></div>
                    </div>
                </div>
            </section>
        </main>
      
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
        
        <script>
            $(document).ready(function(){
                var user_id = new URL(window.location.href).searchParams.get("user_id");
                var data_tid = "2";
                
                 $.ajax({
                    url: "components/aaa-select-table.php", 
                    method:"POST",
                    data:{get_money_transact_all:"get_money_transact_all", user_id:user_id, data_tid:data_tid},
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
                    var user_id = new URL(window.location.href).searchParams.get("user_id");
                    var data_tid = "2";
                    $.ajax({
                        url: "components/aaa-select-table.php", 
                        method:"POST",
                        data:{search_money_transact_all:"search_money_transact_all", search_query:search_query,user_id:user_id, data_tid:data_tid},
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