
          <?php

if ( ! wp_script_is( 'chart-js', 'enqueued' ) ) {
	wp_enqueue_script( 'chart-js', get_template_directory_uri() .'/node_modules/chart.js/dist/Chart.bundle.min.js' );
	
}

$labels_input = block_value( 'namescol' ); 
$data_input = block_value( 'valuescol' );
$labels = explode(",", $labels_input);
$data_row = explode("\n", $data_input);

foreach($data_row as $key => $datarowitem){
    $data_row[$key] = explode(":", $data_row[$key]);

        foreach($data_row[$key] as $key2 => $datarowitem2){
            if($key2==1){
            $data_row[$key][$key2] = explode(",", $data_row[$key][$key2]);
            }
           
        }
      
   
    
}

print_r('<pre>');
//print_r($data_row);
print_r('</pre>');
$unic=rand();


json_encode($labels); 
json_encode($data_row);


        ?>
      





        <!-- график-->

        <div class="container graph-1" names="<?=$labels = explode(",", $labels_input);?>">
            <h3><?php block_field( 'graph-name' ); ?></h3>
         
            <canvas id="myChart<?=$unic;?>" width="<?php block_field( 'widthgraph' ); ?>" height="<?php block_field( 'heightgraph' ); ?>"></canvas>

        </div>

      
        

    
    
        <!-- Скрипт для отрисовки графиков-->
        <script>
            var labels = <?php echo json_encode($labels) ?>;
            var data = <?php echo json_encode($data_row) ?>;
          

            document.addEventListener("DOMContentLoaded", () => {

                

                var ctx = document.getElementById('myChart<?=$unic;?>');
                var myChart<?=$unic;?> = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });


                //функция добавление значений в график
                function addData(chart, label, color, data) {
                    console.log(chart);
		            chart.data.datasets.push({
	                label: label,
                    borderWidth: 1,
                    borderColor: color,
                    fill:false,
                    data: data
                    });
                    myChart<?=$unic;?>.update();
                }      
                setTimeout(function() {
	                
                }, 1000);

                
                    //добавление значений в график
                data.forEach(function(item, i, arr) {                    
                    color=['rgb(76, 192, 194, 1)'];                                      
                    switch(i) {
                        case 0:  color=['rgb(76, 192, 194, 1)'];break;
                        case 1:  color=['rgb(255, 193, 7 , 1)'];break;
                        case 2:  color=['rgb(245, 71, 133,1)'];break;
                        case 3:  color=['rgb(255, 193, 7 , 1)'];break;
                        default:   color=['rgb(76, 192, 194, 1)'];
    
                    }
                    addData(myChart<?=$unic;?>, item[0], color, item[1]); 
                   
                });

            });
        </script>