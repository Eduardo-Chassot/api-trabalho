let verificador = 0;
$(function(){
    let chartStatus = Chart.getChart("myChart"); // <canvas> id
    if (chartStatus != undefined) {
         chartStatus.destroy();
    }
    let chartStatus2 = Chart.getChart("myChart"); // <canvas> id
    if (chartStatus2 != undefined) {
        chartStatus2.destroy();
    }
    var estado = document.getElementById('selectEstado');
        estado.addEventListener("change", function(event) {
            let chartStatus = Chart.getChart("myChart"); // <canvas> id
            if (chartStatus != undefined) {
                chartStatus.destroy();
            }
            let chartStatus2 = Chart.getChart("myChart"); // <canvas> id
            if (chartStatus2 != undefined) {
                chartStatus2.destroy();
            }
            console.log('entrou no js');
            var opcaoEstado = estado.options[estado.selectedIndex].value;
            var allLabels = [];
            var allValues = [];
            var conteudoJSON;
            $.ajax({
                type: 'GET',
                url: "criarArray.php",
                dataType: 'json',
                contentType: 'application/json',
                data : {estado : opcaoEstado},
                success: function(array)
                {
                    conteudoJSON = array;
                    for(var k in array) {
                        allLabels.push(k);
                        allValues.push(array[k]);
                    }
                },
                error:function(errorThrown){
                    alert('Erro ao carregar');
                    console.log(errorThrown);
                }
            });
            
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: allLabels,
                    datasets: [{
                        label: 'Suicidios por ano',
                        data: allValues,
                        borderColor: [
                            'rgba(0, 0, 0)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display:true,
                            position:'bottom'
                        }
                    },  
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            
        })
        const ctx2 = document.getElementById('ChartIDH').getContext('2d');
        const IDH = new Chart(ctx2, {
            type: 'line',
            data: {
                    labels: ['AC', 'AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PB', 'PE', 'PI', 'PR', 'RJ', 'RN', 'RO', 'RR', 'RS', 'SC', 'SP', 'SE', 'TO'],
                    datasets: [{
                        label: 'IDH',
                        data: [0.751, 0.677, 0.780, 0.780, 0.742, 0.723, 0.874, 0.802, 0.800, 0.683, 0.800, 0.802, 0.755, 0.718, 0.718, 0.703, 0.802, 0.832, 0.738, 0.756, 0.750, 0.832, 0.840, 0.833, 0.742, 0.756],
                        borderColor: [
                            'rgba(0, 0, 0)'
                        ],
                        borderWidth: 1
                    }]
                },
            options: {
                plugins: {
                    legend: {
                        display:true,
                        position:'bottom'
                    }
                },  
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
});