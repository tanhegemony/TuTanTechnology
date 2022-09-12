<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../images/fontawesome-free-5.15.4-web/css/all.min.css" />
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/css/admin/dashboard.css"; ?>
    </style>
    <style>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/responsive/admin/dashboardResponsive.css"; ?>
    </style>
</head>

<body>
    <div class="container-fluid">
       <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/header.php"; ?>
        <div class="row">
            <?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/menu.php"; ?>
            <div class="col-9 content mt-2">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                            <div class="row">
                                <div class="col-4 content1">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Tổng tiền đã thanh toán</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/money-bag.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center"><?php echo number_format($totalPaid, 0, ',', '.'); ?>đ</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <p class="card-text text-center"><small class="text-muted">Cập nhật gần nhất : <?php echo date_format($updateDateOrder, "d/m/Y H:i:s"); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 content2">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Tin nhắn / Bình luận</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/message.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center"><?php echo count($rates); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <p class="card-text text-center"><small class="text-muted">Cập nhật gần nhất : <?php echo date_format($updateDateRate, "d/m/Y H:i:s"); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 content3">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Đơn hàng đang chờ xử lý</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/cart.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center"><?php echo count($order2s); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <p class="card-text text-center"><small class="text-muted">Cập nhật gần nhất : <?php echo date_format($updateDateOrderHandle, "d/m/Y H:i:s"); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 content4">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Thành viên mới tham gia</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/add-user.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center"><?php echo count($members); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <p class="card-text text-center"><small class="text-muted">Cập nhật gần nhất : <?php echo date_format($updateDateMember, "d/m/Y H:i:s"); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 content5">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;height: 10.8rem;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Trực tuyến</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/online.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center"><?php echo count($accounts); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 content6">
                                    <div class="card mb-3 nametitle" style="max-width: 540px;">
                                        <div class="col-md text-center mt-2">
                                            <h5 class="card-title">Đánh giá website</h5>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                <img src="../images/rating.png" class="img-fluid ml-3" width="80%" alt="">
                                            </div>
                                            <div class="col-md-7 mt-2 ct">
                                                <div class="card-body">
                                                    <p class="card-text text-center">51</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <p class="card-text text-center"><small class="text-muted">Chưa xử lý được</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7 chart">
                                    <div id="myChart" class="chart--container">
                                    </div>
                                    <script>
                                        let initState = null; // Used later to store the chart state before changing the data
                                        let store = { // Data store
                                            Donhang: [
                                                ['20/12/2021', 44.5],
                                                ['21/12/2021', 20],
                                                ['22/12/2021', 31.2],
                                                ['23/12/2021', 40.5],
                                                ['24/12/2021', 85.5]
                                            ],
                                            Nguoidung: [
                                                ['20/12/2021', 24.5],
                                                ['21/12/2021', 41.3],
                                                ['22/12/2021', 30.2],
                                                ['23/12/2021', 40.4],
                                                ['24/12/2021', 60]
                                            ],
                                            Tructuyen: [
                                                ['20/12/2021', 20.1],
                                                ['21/12/2021', 72.2],
                                                ['22/12/2021', 84.5],
                                                ['23/12/2021', 94],
                                                ['24/12/2021', 15]
                                            ],
                                            Danhgia: [
                                                ['20/12/2021', 24],
                                                ['21/12/2021', 23.5],
                                                ['22/12/2021', 22.1],
                                                ['23/12/2021', 35.5],
                                                ['24/12/2021', 24]
                                            ],
                                            TinnhanBinhluan: [
                                                ['20/12/2021', 45],
                                                ['21/12/2021', 35],
                                                ['22/12/2021', 25],
                                                ['23/12/2021', 15, ['24/12/2021', 55.9]]
                                            ]
                                        };
                                        // Màu cột con
                                        let bgColors = ['#ff6767', '#a0a0a0', '#b296f8', '#d5f277', '#78ee80'];
                                        let chartConfig = {
                                            type: 'bar',
                                            theme: 'classic',
                                            globals: {
                                                fontFamily: 'Helvetica'
                                            },
                                            backgroundColor: 'white',
                                            title: {
                                                text: 'Biểu đồ quan sát tình trạng website qua từng giai đoạn',
                                                backgroundColor: 'white',
                                                color: '#606060'
                                            },
                                            subtitle: {
                                                text: 'Click vào cột để xem chi tiết từng cột',
                                                color: '#606060'
                                            },
                                            plot: {
                                                // Viền khi rê chuột vào các cột
                                                hoverState: {
                                                    border: "2px solid silver"
                                                },
                                                tooltip: {
                                                    visible: false
                                                },
                                                // Hiển thị %
                                                valueBox: {
                                                    text: '%v%',
                                                    color: 'red',
                                                    textDecoration: 'underline'
                                                },
                                                animation: {
                                                    effect: 'ANIMATION_EXPAND_HORIZONTAL'
                                                },
                                                cursor: 'hand',
                                                dataBrowser: [],
                                                rules: [{
                                                        backgroundColor: '#ff6767',
                                                        rule: '%i==0'
                                                    },
                                                    {
                                                        backgroundColor: '#a0a0a0',
                                                        rule: '%i==1'
                                                    },
                                                    {
                                                        backgroundColor: '#b296f8',
                                                        rule: '%i==2'
                                                    },
                                                    {
                                                        backgroundColor: '#d5f277',
                                                        rule: '%i==3'
                                                    },
                                                    {
                                                        backgroundColor: '#78ee80',
                                                        rule: '%i==4'
                                                    }
                                                ]
                                            },
                                            scaleX: {
                                                values: ['Đơn hàng', 'Người dùng', 'Trực tuyến', 'Đánh giá', 'Tin nhắn / Bình luận'],
                                                guide: {
                                                    visible: false
                                                },
                                                // Hiển thị chữ dưới mỗi cột
                                                item: {
                                                    color: 'red'
                                                },
                                                lineColor: '#C0D0E0',
                                                lineWidth: '1px',
                                                tick: {
                                                    lineColor: '#C0D0E0',
                                                    lineWidth: '1px'
                                                }
                                            },
                                            scaleY: {
                                                guide: {
                                                    lineStyle: 'solid'
                                                },
                                                // Hiển thị số bên
                                                item: {
                                                    color: 'black'
                                                },
                                                lineColor: 'none',
                                                tick: {
                                                    lineColor: 'none'
                                                }
                                            },
                                            crosshairX: {
                                                lineColor: 'none',
                                                lineWidth: '0px',
                                                marker: {
                                                    visible: false
                                                },
                                                plotLabel: {
                                                    text: '%v% of total',
                                                    padding: '8px',
                                                    alpha: 0.9,
                                                    backgroundColor: 'white',
                                                    borderRadius: '4px',
                                                    borderWidth: '3px',
                                                    callout: true,
                                                    calloutPosition: 'bottom',
                                                    color: '#606060',
                                                    fontSize: '12px',
                                                    multiple: true,
                                                    offsetY: '-20px',
                                                    placement: 'node-top',
                                                    // Viền of total
                                                    rules: [{
                                                            borderColor: '#ff6767',
                                                            rule: '%i==0'
                                                        },
                                                        {
                                                            borderColor: '#a0a0a0',
                                                            rule: '%i==1'
                                                        },
                                                        {
                                                            borderColor: '#b296f8',
                                                            rule: '%i==2'
                                                        },
                                                        {
                                                            borderColor: '#d5f277',
                                                            rule: '%i==3'
                                                        },
                                                        {
                                                            borderColor: '#78ee80',
                                                            rule: '%i==4'
                                                        }
                                                    ],
                                                    shadow: false
                                                },
                                                scaleLabel: {
                                                    visible: false
                                                }
                                            },
                                            
                                            series: [{
                                                values: [44.34, 39.28, 57.16, 25.82, 35.18]
                                            }]
                                        };

                                        let updateChart = (p) => {
                                            initState = zingchart.exec(p.id, 'getdata'); // Click vào các cột để ts các cột con
                                            let newValues = null;
                                            let update = null;
                                            switch (p.nodeindex) {
                                                case 0:
                                                    newValues = store['Donhang'];
                                                    update = true;
                                                    break;
                                                case 1:
                                                    newValues = store['Nguoidung'];
                                                    update = true;
                                                    break;
                                                case 2:
                                                    newValues = store['Tructuyen'];
                                                    update = true;
                                                    break;
                                                case 3:
                                                    newValues = store['Danhgia'];
                                                    update = true;
                                                    break;
                                                case 4:
                                                    newValues = store['TinnhanBinhluan'];
                                                    update = true;
                                                    break;
                                                case 5:
                                                    update = false; // We don't want to allow drilldown for unknown
                                                    break;
                                            }

                                            if (update) {
                                                zingchart.unbind(p.id, 'node_click'); // Disable node_click for second level
                                                zingchart.exec(p.id, 'modify', {
                                                    update: false, // Making multiple changes, queue these changes
                                                    data: {
                                                        crosshairX: {
                                                            plotLabel: {
                                                                text: '%v% of total',
                                                                borderColor: bgColors[p.nodeindex],
                                                                rules: []
                                                            }
                                                        },
                                                        plot: {
                                                            backgroundColor: bgColors[p.nodeindex],
                                                            cursor: null,
                                                            rules: []
                                                        },
                                                        scaleX: {
                                                            values: []
                                                        }
                                                    }
                                                });
                                                zingchart.exec(p.id, 'setseriesvalues', { // Replaces all values at plotindex 0
                                                    update: false, // Queue these, too
                                                    plotindex: 0,
                                                    values: newValues
                                                });
                                                zingchart.exec(p.id, 'update'); // Push queued changes
                                                zingchart.bind(p.id, 'animation_end', () => { // When the animation ends...
                                                    zingchart.exec(p.id, 'addobject', { // ...add a back button
                                                        type: 'shape',
                                                        data: {
                                                            type: 'rectangle',
                                                            id: 'back_btn',
                                                            backgroundColor: '#f6f6f6',
                                                            borderColor: 'silver',
                                                            borderWidth: '1px',
                                                            cursor: 'hand',
                                                            hoverState: {
                                                                backgroundColor: '#ffffff',
                                                                borderColor: 'black',
                                                                fillAngle: -180
                                                            },
                                                            label: {
                                                                text: 'Trở lại',
                                                                color: '#606060'
                                                            },
                                                            width: '70px',
                                                            height: '20px',
                                                            x: '80%',
                                                            y: '16%'
                                                        }
                                                    });
                                                });
                                            }
                                        };

                                        zingchart.render({
                                            id: 'myChart',
                                            data: chartConfig,
                                            height: '100%',
                                            width: '100%',
                                        });

                                        zingchart.bind('myChart', 'node_click', updateChart);

                                        // Listen for back button click
                                        zingchart.bind('myChart', 'shape_click', (p) => {
                                            zingchart.unbind(p.id, 'animation_end');
                                            if (p.shapeid == 'back_btn') {
                                                // Set the data back to the state it was in when the node was clicked
                                                zingchart.exec(p.id, 'setdata', {
                                                    data: initState
                                                });
                                                zingchart.bind(p.id, 'node_click', updateChart);
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="col-5 userdangonline">
                                    <p>Các user đang trực tuyến</p>
                                    <table class="table table-light tableuser">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>UserName</th>
                                          <th>Role</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($accounts as $account): ?>
                                        <tr>
                                          <td><?php echo $account['email']; ?></td>
                                          <td><?php echo $account['roles']; ?></td>
                                          <td><i class="fas fa-circle"></i> Trực tuyến</td>
                                        </tr>
                                            <?php endforeach; ?>
                                      </tbody>
                                      <tfoot>
                                        <tr>
                                          <th colspan="3" class="text-center"><a href="#">Xem tất cả</a></th>
                                        </tr>
                                      </tfoot>
                                    </table>
                                  </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/ex_solutions/Tu&TanTechnology/View/fragement/admin/footer.php"; ?>