
          <?php
//подключение скрипта
if ( ! wp_script_is( 'chart-js', 'enqueued' ) ) {
	wp_enqueue_script( 'chart-js', get_template_directory_uri() .'/node_modules/chart.js/dist/Chart.bundle.min.js' );
	
}

$labels_input = block_value( 'namescol' ); 
$data_input = block_value( 'valuescol' );
$labels = explode(",", $labels_input);
$data = explode(",", $data_input);
$unic=rand();
json_encode($labels); 
json_encode($data);
json_encode($unic);




        ?>
      





        <!-- график-->

        <div class="container graph-1" names="<?=$labels = explode(",", $labels_input);?>">
            <h3><?php block_field( 'graph-name' ); ?></h3>
         
            <canvas id="myChart<?=$unic;?>" width="<?php block_field( 'widthgraph' ); ?>" height="<?php block_field( 'heightgraph' ); ?>"></canvas>

        </div>
      
        

        
        
        <!-- Скрипт для отрисовки графиков-->
        <script>
            var labels<?=$unic;?> = <?php echo json_encode($labels) ?>;
            var data<?=$unic;?>= <?php echo json_encode($data) ?>;
         

            document.addEventListener("DOMContentLoaded", () => {
                var ctx<?=$unic;?> = document.getElementById('myChart<?=$unic;?>');
                var myChart<?=$unic;?> = new Chart(ctx<?=$unic;?>, {
                    type: 'bar',
                    data: {
                        labels: labels<?=$unic;?>,
                        datasets: [{
                            label: 'Значение поля: ',
                            data: data<?=$unic;?>,
                            backgroundColor: [
                                'rgba(76, 192, 194,  0.5)',
                                'rgba(255, 193, 7 ,  0.5)',
                                'rgba(245, 71, 133,  0.5)',
                                'rgba(76, 192, 194,  0.5)',
                                'rgba(255, 193, 7 ,  0.5)',
                                'rgba(245, 71, 133,  0.5)'
                            ],
                            borderColor: ['rgba(76, 192, 194,  1)',
                                'rgba(255, 193, 7 ,  1)',
                                'rgba(245, 71, 133,  1)',
                                'rgba(76, 192, 194,  1)',
                                'rgba(255, 193, 7 ,  1)',
                                'rgba(245, 71, 133,  1)'],
                            borderWidth: 1
                        }]
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
            });
        </script>