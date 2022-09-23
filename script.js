let verificador = 0;
$(function(){
    var estado = document.getElementById('selectEstado');
        estado.addEventListener("change", function(event) {
            let chartStatus = Chart.getChart("myChart"); // <canvas> id
            if (chartStatus != undefined) {
                chartStatus.destroy();
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

            console.log()

            const data = {
                labels: allLabels,
                datasets: [{
                  label: 'My First Dataset',
                  data: allValues,
                  fill: false,
                  borderColor: 'rgb(75, 192, 192)',
                  tension: 0.1
                }]
              };
            
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'line',
                data : data,
            });
        
    })
});