@if ($search_data == 'year')
    <script>
        var options = {
        series: [{
        name: 'Total Blogs',
        data: @json($total_blogs)
        }],
        chart: {
        type: 'bar',
        height: 350
        },
        plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
        },
        dataLabels: {
        enabled: false
        },
        stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
        },
        xaxis: {
        categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov','Dec'],
        },
        fill: {
        opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                return val
                }
            }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@elseif ($search_data == 'month')
    <script>
        var options = {
            series: [{
            name: 'Total Blogs',
            data: @json($total_blogs)
            }],
            chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false,
            }
            },
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
            },
            dataLabels: {
            enabled: true
            },
            stroke: {
            show: true,
            width:1,
            colors: ['transparent']
            },
            xaxis: {
            categories: @json($all_days),
            },
            fill: {
            opacity: 1
            },
            tooltip: {
            y: {
                formatter: function (val) {
                return val
                }
            }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@else
    {{-- <script>
        var options = {
            series: [{
            name: 'Total Blogs',
            data: @json($total_blogs)
            }],
            chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false,
            }
            },
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
            },
            dataLabels: {
            enabled: true
            },
            stroke: {
            show: true,
            width:1,
            colors: ['transparent']
            },
            xaxis: {
            categories: ['Sat','Sun','Mon','Tue','Wed','Thu','Fri'],
            },
            fill: {
            opacity: 1
            },
            tooltip: {
            y: {
                formatter: function (val) {
                return val
                }
            }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script> --}}
@endif
