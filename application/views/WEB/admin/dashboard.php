<style>.amcharts-chart-div a {display:none !important;}
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?= WEB_URL . 'dashboard' ?>">Home</a>
                    <!--                    <i class="fa fa-circle"></i>-->
                </li>
                <!--                <li>
                                    <span>Dashboard</span>
                                </li>-->
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <!--        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="javascript:;">
                    <div class="visual">
                        <i class="fa fa-question"></i>
                    </div>
                    <div class="details">
                        <div class="number"> +
                            <span data-counter="counterup" data-value="<?= !empty($totalquiz) ? $totalquiz : 0 ?>"></span></div>
                        <div class="desc"> Total Quiz </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="javascript:;">
                    <div class="visual">
                        <i class="fa fa-commenting"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?= !empty($month_sale) ? $month_sale : 0 ?>">0</span>
                        </div>
                        <div class="desc"> This month sale </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="javascript:;">
                    <div class="visual">
                        <i class="fa fa-commenting"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?= !empty($total_sale) ? $total_sale : 0 ?>">0</span>
                        </div>
                        <div class="desc"> Total Sales </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 yellow" href="javascript:;">
                    <div class="visual">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?= !empty($avg_rating) ? number_format($avg_rating,1) : 0 ?>">0</span>
                        </div>
                        <div class="desc"> Avg Rating </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 yellow" href="<?=WEB_URL.'addquiz'?>">
                    <div class="visual">
                        <i class="fa fa-question"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="#">#</span>
                        </div>
                        <div class="desc"> Add new Quiz </div>
                    </div>
                </a>
            </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="<?= WEB_URL . 'contents' ?>">
                                <div class="visual">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="#">#</span>
                                    </div>
                                    <div class="desc"> Contents </div>
                                </div>
                            </a>
                        </div>
        </div>-->
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
        <div class="row">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-green-haze"></i>
                        <span class="caption-subject bold uppercase font-green-haze"> Daily task of Month <?=date('F')?></span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1" class="chart" style="height: 400px;"> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--            <div class="col-md-6">
                 BEGIN CHART PORTLET
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-green-haze"></i>
                            <span class="caption-subject bold uppercase font-green-haze"> Task completed by Day</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="">
                            <table class="table table-hover table-condensed flip-content">
                                <thead class="flip-content">
                                    <tr>
                                        <th> No </th>
                                        <th> Equipment </th>
                                        <th> Equipment serial no </th>
                                        <th> Equipment model no </th>
                                        <th> No of task done </th>
                                        <th> Date </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            if (!empty($task_done)) {
                $i = 1;
                foreach ($task_done as $row) {
                    ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row['equip_name'] ?></td>
                                                <td> <?= $row['equip_serial_no'] ?> </td>
                                                <td> <?= $row['equip_model_no'] ?> </td>
                                                <td> <?= $row['t_done'] ?> </td>
                                                <td> <?= $row['dd'] ?> </td>
                                            </tr>
        <?php $i++;
                }
            } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 END CHART PORTLET
            </div>-->

        </div>


    </div>
    <!-- END CONTENT BODY -->
</div>
<script src="<?= WEB_URL ?>assets/global/plugins/amcharts/amcharts/amcharts.js"></script>
<script src="<?= WEB_URL ?>assets/global/plugins/amcharts/amcharts/serial.js"></script>
<script src="<?= WEB_URL ?>assets/global/plugins/amcharts/amcharts/themes/light.js"></script>
<script>
    var chart2 = AmCharts.makeChart("chart_1", {
        "type": "serial",
        "addClassNames": true,
        "theme": "light",
        "autoMargins": false,
        "marginLeft": 30,
        "marginRight": 8,
        "marginTop": 10,
        "marginBottom": 26,
        "balloon": {
            "adjustBorderColor": false,
            "horizontalPadding": 10,
            "verticalPadding": 8,
            "color": "#ffffff"
        },

        "dataProvider": <?= json_encode($task) ?>,
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left"
        }],
        "startDuration": 1,
        "graphs": [{
            "alphaField": "alpha",
            "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
            "fillAlphas": 1,
            "title": "Daily Task",
            "type": "column",
            "valueField": "download",
            "dashLengthField": "dashLengthColumn"
        }, {
            "id": "graph2",
            "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
            "bullet": "round",
            "lineThickness": 3,
            "bulletSize": 7,
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "useLineColorForBulletBorder": true,
            "bulletBorderThickness": 3,
            "fillAlphas": 0,
            "lineAlpha": 1,
            "title": "Task done",
            "valueField": "download",
            "dashLengthField": "dashLengthLine"
        }],
        "categoryField": "dt",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 0,
            "tickLength": 0
        },
        "export": {
            "enabled": false
        }
    });

</script>