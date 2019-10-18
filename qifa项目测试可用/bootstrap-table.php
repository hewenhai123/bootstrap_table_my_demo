<div class="page-content">
    <script>
        // 配置


    </script>
    <?php
$this->title =Yii::t('stat', 'cart');
    $this->params['title_sub'] = '

    ';
    ?>
    <?php \backend\assets\BootTableAsset::register($this); ?>

    <div class="table-box">
        <div id="toolbar" style="display: none">
            <div class="form-inline" role="form">
                <div class="form-group">
                    <span>Offset: </span>
                    <input name="offset" class="form-control w70" type="number" value="0">
                </div>
                <div class="form-group">
                    <span>Limit: </span>
                    <input name="limit" class="form-control w70" type="number" value="5">
                </div>
                <div class="form-group">
                    <input name="search" class="form-control" type="text" placeholder="Search">
                </div>
                <button id="ok" type="submit" class="btn btn-primary">OK</button>
            </div>
        </div>
        <table id="my-table"  data-locale="zh-CN" data-sort-name="id" >


        </table>

    </div>
    <script type="text/javascript">
       var demoData= [
            {
                "id": 0,
                "name": "Item 0",
                "price": "$0000000",
                "amount": 3
            },
            {
                "id": 1,
                "name": "Item 1",
                "price": "$1111111",
                "amount": 4
            },
            {
                "id": 2,
                "name": "Item 2",
                "price": "$22222222",
                "amount": 8
            },
            {
                "id": 3,
                "name": "Item 3",
                "price": "$33333333",
                "amount": 2
            },
            {
                "id": 4,
                "name": "Item 4",
                "price": "$44444444444444",
                "amount": 90
            },
            {
                "id": 5,
                "name": "Item 5",
                "price": "$5",
                "amount": 2
            },
            {
                "id": 6,
                "name": "Item 6",
                "price": "$6",
                "amount": 3
            },
            {
                "id": 7,
                "name": "Item 7",
                "price": "$7",
                "amount": 7
            },
            {
                "id": 8,
                "name": "Item 8",
                "price": "$8",
                "amount": 39
            },
            {
                "id": 9,
                "name": "Item 9",
                "price": "$9",
                "amount": 78
            },
            {
                "id": 10,
                "name": "Item 10",
                "price": "$10",
                "amount": 30
            },
            {
                "id": 11,
                "name": "Item 11",
                "price": "$11",
                "amount": 32
            },
            {
                "id": 12,
                "name": "Item 12",
                "price": "$12",
                "amount": 12
            },
            {
                "id": 13,
                "name": "Item 13",
                "price": "$13",
                "amount": 76
            },
            {
                "id": 14,
                "name": "Item 14",
                "price": "$14",
                "amount": 10
            },
            {
                "id": 15,
                "name": "Item 15",
                "price": "$15",
                "amount": 9
            },
            {
                "id": 16,
                "name": "Item 16",
                "price": "$16",
                "amount": 8
            },
            {
                "id": 17,
                "name": "Item 17",
                "price": "$17",
                "amount": 1
            },
            {
                "id": 18,
                "name": "Item 18",
                "price": "$18",
                "amount": 99
            },
            {
                "id": 19,
                "name": "Item 19",
                "price": "$19",
                "amount": 100
            },
            {
                "id": 20,
                "name": "Item 20",
                "price": "$20",
                "amount": 109
            }
        ]

    </script>

    <script type="text/javascript">
        /*
        * 功能使用备注：
        *  排序： js 添加到 columns 中的指定字段 sortable : true
        *  固定表头：option 设置height 属性 表头自动固定
        *  启动分页：pagination: true,
        *  table增加类名(添加方式覆盖)：   classes:"table table-bordered table-hover my_table _mytable",
        *  thead增加类名： theadClasses："myok",
        *  本地化：local，
        *  加载的本地数据：data
        *
        * */


        var _table = $('#my-table');

        //初始化bootstrap table ，并且启动它
        function init() {

            _table.bootstrapTable({
                // url:'/data1.json',
                data:demoData,
                pagination: true,
                search: true,
                showSearchButton:true,//显示搜索按钮
                height:400,
                showRefresh:true,//显示刷新按钮 --ok
                showToggle:true,//换表/卡视图--ok
                showFullscreen:false,//为显示全屏按钮--ok
                smartDisplay:true,//智能显示分页或卡片视图。--not ok
                clickToSelect:false,
                checkboxHeader:true,//标题复选框
                // showButtonIcons:true,//显示按钮图标
                 showColumns:"true",//显示列勾选--ok
                showColumnsToggleAll:true,//显示列勾选 全部--ok
                pageSize:"9",//每一页显示条数--ok
                showPaginationSwitch:true,//控制显示分页开关--ok
                detailView:true,//显示详细加号--ok
                detailFormatter:function(index, row){//显示详细加号 控制内容
                    console.log(index,row)

                    var str="我可以添加任意内容，但是需要对数据预先处理";
                    str+="tr数据"+JSON.stringify(row);
                    str+=",tr 标识符"+index;
                    str+="<p style='color:red'>我加了一个HTML标签</p>";
                    return str;

                },
                buttonsClass:"primary",//控制按钮颜色--ok
                // icons: icons//设置icon
                // detailFilter:function(){}, 可以指定哪些tr 使用加号 显示详细 ---ok
                // toolbar:"toolbar",
                // queryParams:queryParams,

                columns: [
                    {checkbox:true},
                    {
                    field: 'id',
                    title: 'Item ID',
                    sortable:true,
                    // editable:true,
                    //     formatter : function (value, row, index) {//可以用来格式化出图片
                    //         return "<img style='width: 50px;height: 50px;' src='"+value+"' alt=''>"
                    //     }


                }, {
                    field: 'name',
                    title: 'Item Name',
                  editable:true,
                    sortable:true,
                        visible:true//隐藏指定列--ok

                },
                    {
                    field: 'price',
                    title: 'Item Price',
                    sortable:true,
                        editable : true,


                },
                    {
                        field: 'operate',
                        title: '操作',
                        width : '80%',
                        formatter: operateFormatter
                    }
                ],

                // data: [{
                //     id: 1,
                //     name: 'Item 1',
                //     price: '$1'
                // }, {
                //     id: 2,
                //     name: 'Item 2',
                //     price: '$2'
                // }]
            })

        }

        // var $table = _table;
        // var $ok = $('#ok')
        //
        // $(function() {
        //     $ok.click(function () {
        //         $table.bootstrapTable('refresh')
        //     })
        // })
        //
        // function queryParams() {
        //     var params = {}
        //     $('#toolbar').find('input[name]').each(function () {
        //         params[$(this).attr('name')] = $(this).val()
        //     })
        //     return params
        // }
        //
        // function responseHandler(res) {
        //     return res.rows
        // }


        function randomData() {
            var startId = ~~(Math.random() * 100)
            var rows = []

            for (var i = 0; i < 50; i++) {
                rows.push({
                    id: startId + i,
                    name: 'test' + (startId + i),
                    price: '$' + (startId + i)
                })
            }
            return rows
        }

        setInterval(function(){

            //这个方法可以用来更新正表数据---ok
            // _table.bootstrapTable('load', randomData());

            // 向表底追加数据--ok
            // _table.bootstrapTable('append', randomData());

            // 向表顶追加数据--有问题
            // _table.bootstrapTable('prepend', randomData());

             //删除单条数据
            // _table.bootstrapTable('remove', {field: 'id', values: ids});

            //删除所有数据
            // _table.bootstrapTable('remove', {field: 'id', values: ids});

            //插入数据
            // _table.bootstrapTable( 'insertRow', {index: 1, row: row});

            //更新单数据
            // _table.bootstrapTable( 'updateRow', {index: 1, row: row});

            //获取id数据
            // _table.bootstrapTable( 'getRowByUniqueId', 1);

            //更新单元格数据
            // _table.bootstrapTable('updateCell', {index: 1, field: 'name', value: 'Updated Name'}).


             //check全选---ok
            // _table.bootstrapTable('checkAll');

            //刷新表--问题
            // _table.bootstrapTable('refresh')



        },3000)


        function operateFormatter(value, row, index) {
            return [
                '<a class="using" href="javascript:void(0)" title="Remove">',
                '<i class="fa fa-check"></i>',
                '</a>&nbsp;&nbsp;&nbsp;&nbsp;',
                '<a class="upload" style="cursor: pointer" href="javascript:void(0)" title="Upload">',
                '<label style="cursor: pointer" for="'+row['adId']+'">',
                '<i class="fa fa-upload"></i>',
                '<input type="file" name="adUpload" style="display: none;" class="adUpload" id="'+row['adId']+'" >',
                '</label>',
                '</a>&nbsp;&nbsp;&nbsp;&nbsp;',
                '<a class="remove" href="javascript:void(0)" title="Using">',
                '<i class="fa fa-times"></i>',
                '</a>',
            ].join('');
        }
        console.log(window)
        window.operateEvents = {//暂时不起作用?
            'click .remove': function (e, value, row, index) {
                console.log("ASDfasd")
                $.ajax({
                    type : "POST",
                    url : "/wadmin/ad/deleteAd",
                    data : {
                        adId : row['adId']
                    },
                    dataType : 'JSON',
                    success : function (data) {
                        if (data.result != 0) {
                            toastr.info("info", data.message);
                            return ;
                        }
                        toastr.success("success", '删除成功');
                        $("#table").bootstrapTable('remove', {
                            field: 'adId',
                            values: [row['adId']]
                        });
                    }
                });

                return false;
            },
            'click .using': function (e, value, row, index) {
                $.ajax({
                    type : "POST",
                    url : "/wadmin/ad/usingAd",
                    data : {
                        adId : row['adId']
                    },
                    dataType : 'JSON',
                    success : function (data) {
                        if (data.result != 0) {
                            toastr.info("info", data.message);
                            return ;
                        }
                        toastr.success("success", '使用该广告');
                        $("#table").bootstrapTable('refresh');
                    }
                });

                return false;
            },
            'click .upload': function (e, value, row, index) {
                $('.adUpload').fileupload({
                    url : '/wadmin/ad/adUpload/adId/'+row['adId'],
                    dataType: 'json',
                    add: function (e, data) {
                        data.submit();
                    },
                    done: function (e, data) {
                        var response = data.result;
                        if (response.result != 0) {
                            toastr.error(response.message);
                            return false;
                        }
                        toastr.success("上传成功");
                        $("#table").bootstrapTable('refresh');
                    }
                });

                return false;
            }
        };
        $(function(){
            init();//启动表格插件
        });

    </script>


</div>