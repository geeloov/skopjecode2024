<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>
<body>
    <div class="min-h-screen bg-gradient-to-r from-cyan-400 to-blue-500 flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white min-h-screen">
            <!-- Logo -->
            <div class="p-4 border-b border-white/20 ">
                <img src="{{ asset('images/logo.png') }}" alt="NextQuestion" class="h-[70px]">
            </div>
            
            <!-- Navigation -->
            <nav class="p-4 space-y-2">
                <a href="{{ url('/admin-main')}}" class="flex items-center space-x-3 px-4 py-2 rounded-lg  text-black hover:bg-blue-900/20">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                    </svg>
                    <span>Прашалник</span>
                </a>
                
                <a href="{{ url('/admin-faculties') }}" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-black hover:bg-blue-900/20">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                    <span>Факултети</span>
                </a>
                
                
                <a href="{{ url('/admin-statistics') }}" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-black bg-blue-900/20">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                    <span>Статистика</span>
                </a>
            </nav>
        </div>
    
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-4xl font-bold text-white mb-8">Статистика</h1>
    
            <!-- Statistics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Total Users Card -->
                <div id="usersChart" class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Вкупно корисници</h2>
                    <div class="flex items-end space-x-2">
                        <span class="text-4xl font-bold text-white">1,234</span>
                        <span class="text-white mb-1">+12% од минатиот месец</span>
                    </div>
                </div>
    
                <!-- Most Popular Faculty -->
                <div d="facultyChart" class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Најпопуларен факултет</h2>
                    <div class="text-white">
                        <p class="text-2xl font-bold mb-2">ФИНКИ</p>
                        <p class="text-sm opacity-80">28% од сите избори</p>
                    </div>
                </div>
    
                <!-- Career Distribution -->
                <div id="distributionChart" class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Распределба по области</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-white">
                            <span>Технички науки</span>
                            <span class="font-bold">45%</span>
                        </div>
                        <div class="flex justify-between items-center text-white">
                            <span>Природни науки</span>
                            <span class="font-bold">30%</span>
                        </div>
                        <div class="flex justify-between items-center text-white">
                            <span>Економски науки</span>
                            <span class="font-bold">25%</span>
                        </div>
                    </div>
                </div>
    
                <!-- Monthly Activity -->
                <div id="activityChart" class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Месечна активност</h2>
                    <div class="space-y-2">
                        <div class="text-white">
                            <p class="text-3xl font-bold">847</p>
                            <p class="text-sm opacity-80">Завршени прашалници овој месец</p>
                        </div>
                        <div class="text-white text-sm">
                            +23% од претходниот месец
                        </div>
                    </div>
                </div>
                <!-- In Total Users Card -->
                    {{-- <div id="usersChart" class="mt-4"></div>

                    <!-- In Most Popular Faculty Card -->
                    <div id="facultyChart" class="mt-4"></div>

                    <!-- In Career Distribution Card -->
                    <div id="distributionChart" class="mt-4"></div>

                    <!-- In Monthly Activity Card -->
                    <div id="activityChart" class="mt-4"></div> --}}               
            </div>
        </div>
    </div>
    
    <!-- Add ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Add Charts -->
<script>
    // Users Growth Chart
    const usersChart = new ApexCharts(document.querySelector(".bg-white\\/20:nth-child(1)"), {
        series: [{
            name: 'Корисници',
            data: [234, 445, 556, 778, 932, 1234]
        }],
        chart: {
            type: 'area',
            height: 150,
            toolbar: { show: false },
            sparkline: { enabled: true }
        },
        colors: ['#ffffff'],
        stroke: { 
            curve: 'smooth',
            width: 2
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.3,
                stops: [0, 100]
            }
        },
        tooltip: {
            theme: 'dark'
        }
    });
    usersChart.render();

    // Faculty Distribution Chart
    const facultyChart = new ApexCharts(document.querySelector(".bg-white\\/20:nth-child(2)"), {
        series: [28, 22, 18, 16, 16],
        chart: {
            type: 'donut',
            height: 200,
        },
        labels: ['ФИНКИ', 'ПМФ', 'ФЕИТ', 'Економски', 'Други'],
        colors: ['#ffffff', '#e6e6e6', '#cccccc', '#b3b3b3', '#999999'],
        legend: {
            show: true,
            position: 'bottom',
            labels: {
                colors: '#ffffff'
            }
        },
        dataLabels: {
            enabled: false
        }
    });
    facultyChart.render();

    // Career Distribution Chart
    const distributionChart = new ApexCharts(document.querySelector(".bg-white\\/20:nth-child(3)"), {
        series: [{
            name: 'Процент',
            data: [45, 30, 25]
        }],
        chart: {
            type: 'bar',
            height: 200,
            toolbar: { show: false }
        },
        colors: ['#ffffff'],
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Технички науки', 'Природни науки', 'Економски науки'],
            labels: {
                style: {
                    colors: '#ffffff'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#ffffff'
                }
            }
        }
    });
    distributionChart.render();

    // Monthly Activity Chart
    const activityChart = new ApexCharts(document.querySelector(".bg-white\\/20:nth-child(4)"), {
        series: [{
            name: 'Прашалници',
            data: [420, 532, 647, 720, 847]
        }],
        chart: {
            type: 'line',
            height: 150,
            toolbar: { show: false },
            sparkline: { enabled: true }
        },
        colors: ['#ffffff'],
        stroke: {
            curve: 'smooth',
            width: 3
        },
        tooltip: {
            theme: 'dark'
        }
    });
    activityChart.render();
</script>

    
</body>
</html>