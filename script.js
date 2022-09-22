$(function AJAX(){
    console.log('entrou no js');
    var estado = document.getElementById('selectEstado');
    var opcaoEstado = estado.options[estado.selectedIndex].value;
    console.log(opcaoEstado);
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
                backgroundColor: [
                    'rgba(50, 0, 0)'
                ],
                borderColor: [
                    'rgba(0, 0, 0)'
                ],
                borderWidth: 5
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
            },
        },
    });
});