// =============================PIE GRAPH
let xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
    let data = JSON.parse(this.responseText);
    let adult = data.map(item => item.adult);
    let kid = data.map(item => item.minor);

    let labels = ["Adults", "Kids"];
    let values = [adult, kid];

        let ctx =  document.querySelector("#myPieChart").getContext('2d');
        let myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        '#f00',
                        ' orange',
                        // Add more colors as needed
                    ],
                }]
            },

            options: {
                plugins: {
                    datalabels: {
                        color: 'white', // Label text color
                        anchor: 'end',  // Position of the labels (e.g., 'start', 'center', 'end')
                        align: 'end',   // Alignment of the labels (e.g., 'start', 'center', 'end')
                        font: {
                            size: 140,     // Label font size
                        },
                    },
                    
                },
            },
        });
};

xhttp.open("GET", "results/adult.php");
xhttp.send();



// =============================DONUT
let xhttp1 = new XMLHttpRequest();
    xhttp1.onload = function(){
        let data = JSON.parse(this.responseText);
        let male = data.map(item => item.Male);
        let female = data.map(item => item.Female);
        let other = data.map(item => item.Other);
        // Extract data for the chart
        let newlabels = ["Male", "Female", "LGBTQIA++"];
        let newvalues = [male, female,other];
        // let newlabels = newdata.map(item => item.sex);
        // let newvalues = newdata.map(item => item.count);

            let newctx =  document.querySelector("#myDonutChart").getContext('2d');
            let myDonutChart = new Chart(newctx, {
                type: 'doughnut',
                data: {
                    labels: newlabels,
                    datasets: [{
                        data: newvalues,
                        backgroundColor: [
                            'blue',
                            'pink',
                            '#2c2c2c',
                            // Add more colors as needed
                        ],
                    }]
                },

                options: {
                    legend: {
                        position: 'bottom', // Position of the legend (top, bottom, left, right)
                    },
                    title: {
                        display: true,
                        text: 'Donut Chart Example',
                    },
                    cutout: '55%', // Control the size of the central hole (e.g., 80% for a smaller hole)
                    
                },

        
            });
    }
xhttp1.open("GET", "results/gender.php");
xhttp1.send();

// =============================BAR
let xhttp2 = new XMLHttpRequest();
    xhttp2.onload = function(){
        let data = JSON.parse(this.responseText);
        
        // Extract data for the chart
        let datalabel1 = data.map(item => item.lname);
        let datavalue1 = data.map(item => item.count);

            let meterPhase = document.getElementById('myBars').getContext('2d');
            let myChart = new Chart(meterPhase, {
                type: 'bar',
                data: {
                    labels: datalabel1,
                    datasets: [{
                        label: 'Top last names',
                        data: datavalue1,
                        backgroundColor: [
                            'rgba(255,0,0,1)',
                            'rgba(255,0,0,0.7)',
                            'rgba(255,0,0,0.45)'
                            
                        ],
                    }]
                },
                options: {
                    responsive: true,
                }
            });
    }
xhttp2.open("GET", "results/lastnames.php");
xhttp2.send();