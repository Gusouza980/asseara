@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
@endsection

@section('botoes')
@endsection

@section('conteudo')

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Novos cadastros nos últimos 15 dias</h4>
                
                <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Novas emissões nos últimos 15 dias</h4>

                <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>                              
            </div>
        </div><!--end card-->
    </div>
</div>  
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Status das Emissões dos últimos 30 dias</h4>
                
                <div id="pie_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection

@section('scripts')
    <!-- apexcharts -->
    <script src="{{asset('admin/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script>
        var responsaveis_cadastros = {!! json_encode($responsaveis_cadastros) !!};
        var dias_responsaveis = new Array();
        var quantidades_responsaveis = new Array();

        var ordens_cadastros = {!! json_encode($ordens_cadastros) !!};
        var dias_ordens = new Array();
        var quantidades_ordens = new Array();
        var max_quantidades_ordens = 0;

        var ordens_status = {!! json_encode($ordens_status) !!};
        var status_ordens = new Array();
        var quantidades_status = new Array();
        
        for(key in responsaveis_cadastros){
            dias_responsaveis.push(key);
            quantidades_responsaveis.push(responsaveis_cadastros[key]);
        }

        for(key in ordens_cadastros){
            dias_ordens.push(key);
            quantidades_ordens.push(ordens_cadastros[key]);
            if(ordens_cadastros[key] > max_quantidades_ordens){
                max_quantidades_ordens = ordens_cadastros[key];
            }
        }

        for(key in ordens_status){
            status_ordens.push(key);
            quantidades_status.push(ordens_status[key]);
        }

        options = {
            chart: {
                height: 350,
                type: "bar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        position: "top"
                    }
                }
            },
            dataLabels: {
                enabled: !0,
                formatter: function(e) {
                    return e
                },
                offsetY: -22,
                style: {
                    fontSize: "12px",
                    colors: ["#304758"]
                }
            },
            series: [{
                name: "Novos Cadastros",
                data: quantidades_responsaveis
            }],
            colors: ["#556ee6"],
            grid: {
                borderColor: "#f1f1f1"
            },
            xaxis: {
                categories: dias_responsaveis,
                position: "top",
                labels: {
                    offsetY: -18
                },
                axisBorder: {
                    show: 1
                },
                axisTicks: {
                    show: 1
                },
                crosshairs: {
                    fill: {
                        type: "gradient",
                        gradient: {
                            colorFrom: "#D8E3F0",
                            colorTo: "#BED1E6",
                            stops: [0, 100],
                            opacityFrom: .4,
                            opacityTo: .5
                        }
                    }
                },
                tooltip: {
                    enabled: !0,
                    offsetY: -35
                }
            },
            fill: {
                gradient: {
                    shade: "light",
                    type: "horizontal",
                    shadeIntensity: .25,
                    gradientToColors: void 0,
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [50, 0, 100, 100]
                }
            },
            yaxis: {
                axisBorder: {
                    show: 1
                },
                axisTicks: {
                    show: 1
                },
                labels: {
                    show: 1,
                    formatter: function(e) {
                        return e
                    }
                }
            },
            title: {
                text: "Novos cadastros nos últimos 15 dias",
                floating: !0,
                offsetY: 330,
                align: "center",
                style: {
                    color: "#444",
                    fontWeight: "500"
                }
            }
        };
        (chart = new ApexCharts(document.querySelector("#column_chart_datalabel"), options)).render();

        options = {
            chart: {
                height: 350,
                type: "line",
                zoom: {
                    enabled: !1
                },
                toolbar: {
                    show: !1
                }
            },
            colors: ["#34c38f"],
            dataLabels: {
                enabled: !1
            },
            stroke: {
                width: [3, 3],
                curve: "straight"
            },
            series: [{
                name: "Novas Ordens",
                data: quantidades_ordens
            }],
            title: {
                text: "",
                align: "left",
                style: {
                    fontWeight: "500"
                }
            },
            grid: {
                row: {
                    colors: ["transparent", "transparent"],
                    opacity: .2
                },
                borderColor: "#f1f1f1"
            },
            markers: {
                style: "inverted",
                size: 6
            },
            xaxis: {
                categories: dias_ordens,
                title: {
                    text: "Dias"
                }
            },
            yaxis: {
                title: {
                    text: "Quantidade"
                },
                min: 0,
                max: max_quantidades_ordens + 5
            },
            legend: {
                position: "top",
                horizontalAlign: "right",
                floating: !0,
                offsetY: -25,
                offsetX: -5
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        toolbar: {
                            show: !1
                        }
                    },
                    legend: {
                        show: !1
                    }
                }
            }]
        },
        chart = new ApexCharts(document.querySelector("#line_chart_datalabel"), options);
    chart.render();

        options = {
            chart: {
                height: 320,
                type: "pie"
            },
            series: quantidades_status,
            labels: status_ordens,
            colors: ["#34c38f", "#f46a6a", "#556ee6"],
            legend: {
                show: !0,
                position: "bottom",
                horizontalAlign: "center",
                verticalAlign: "middle",
                floating: !1,
                fontSize: "14px",
                offsetX: 0
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240
                    },
                    legend: {
                        show: !1
                    }
                }
            }]
        };
        (chart = new ApexCharts(document.querySelector("#pie_chart"), options)).render();
    </script>
    <!-- apexcharts init -->
    {{-- <script src="{{asset('admin/js/pages/apexcharts.init.js')}}"></script> --}}
@endsection